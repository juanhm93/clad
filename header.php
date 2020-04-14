<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head();  ?>
  <?php wp_enqueue_script("jquery"); ?>
</head>
<body <?php body_class(); ?>>
  <!-- NAVBAR -->
  <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-light pt-1 pb-1">
      <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">
      <img alt="<?php bloginfo("name"); ?>" src="<?php echo (get_template_directory_uri().'/images/logo_clad.svg' ); ?>" width="290px" height="50%" class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <hr class="line line-nav-l d-none d-xl-block">  
      
      
       <?php 


       wp_nav_menu( array(
          'theme_location'  => 'menu-principal',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'navbarTogglerDemo01',
          'menu_class'      => 'navbar-nav ml-1 text-center',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
      ) );


       ?>

    
     

      <hr class="line line-nav-r d-none d-xl-block"> 
    </nav> 
  </header>
  <!-- END NAVBAR -->