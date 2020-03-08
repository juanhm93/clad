<?php

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function add_css_js() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  
  wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.3', true);
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.4', true);
 


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_css_js');



//menu
function register_my_menus() {
  register_nav_menus(
    array(
      'menu-principal' => __( 'Menu Principal Superior' ),
      'menu-lateral-d' => __( 'Menu lateral derecho' ),
      'menu-footer' => __( 'Menu Inferior footer' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );


// clase para <a>

add_filter('nav_menu_link_attributes','clase_menu_ancla', 10, 3 );

	function clase_menu_ancla($atts, $item, $args){
		$class = 'nav-link barco';
		$att['class'] = $class;
		return $atts;
	}



function clad_setup(){


        // agregando imagenes
      if(function_exists('add_theme_support')){
        add_theme_support('post-thumbnails');
        add_image_size('slider_principal',460,215, true);
        add_image_size('logo',200,50, true);
        add_image_size('redes-f',25,25, true);
        add_image_size('idioma-f',40,25, true); 
      }

    add_theme_support('title-tag');
}
add_action('after_setup_theme','clad_setup');


// sidebar
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'right-sidebar',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s" p-4 >',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}


function get_list_categories(){
  return get_list_subcategories(0);
}

function get_list_subcategories($parent){
  $result ="";

  $args = array(
    'taxonomy' => "category",
    'parent' => $parent,
    'hide_empty' => 0
  );

  $categories = get_categories($args);

  foreach ($categories as $category) 
      $result .= '<option value="'.$category->cat_ID.'">'.$category->cat_name.'||| <option>';
    return $result;
}

