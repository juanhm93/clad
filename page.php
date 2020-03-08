<?php get_header(); ?>


<!-- PRINCIPAL CONTAINER -->
<div class="container-fluid dis">
	<div class="row">
		<div id="pages" class="col-sm-9	 pt-3 pl-3">
		<?php	if(have_posts() ) : while (have_posts() ): the_post(); ?>
				<h5 class="card-text"><?php the_title() ?></h5>
				<hr>
				
				<?php if ( has_post_thumbnail() ) {
		            the_post_thumbnail('post-thumbnails', array( 'class' => 'pages-images' ));
		        } ?>
				<div class="text-justify">
					<?php the_content(); ?>
				</div>		
		<?php endwhile; endif; ?>	
		<div class="row">

		    <?php 
		    if (is_page('noticias')) {
		    $catengoria = query_posts('category_name');
		    
		    $varible = get_list_subcategories('ini-post-photos');

		    var_dump($varible) 
		    ?> <h1 style="width: 800px;"><?php echo $varible;?> </h1><br> <?php
		    if(have_posts() ) : while (have_posts() ): the_post();
		    ?>
		    <div id="lateralDerechoSingle" class="col-xl-5 col-lg-5 col-md-5 col-12 featured-property-half d-flex zoom m-2 pl-0 ">

		      <!--  img-responsive picture   -->
		      <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
		            the_post_thumbnail('post-thumbnails', array( 'class' => 'img-responsive picture' ));
		        } ?></a>

		      <div class="card-body-lateral p-1">   
		          <a class="card-text"  href="<?php the_permalink(); ?>"><?php the_excerpt();  ?>    </a> 
		        </div>  
		      </div>
		    <?php endwhile; endif;

		    query_posts('category_name=ini-post-photos');
		    $varible = get_query_var('category_name'); 
		    ?> <h1 style="width: 800px;"><?php echo $varible;?> </h1><br> <?php
		    if(have_posts() ) : while (have_posts() ): the_post();
		    ?>
		    <div id="lateralDerechoSingle" class="col-xl-5 col-lg-5 col-md-5 col-12 featured-property-half d-flex zoom m-2 pl-0 ">

		      <!--  img-responsive picture   -->
		      <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
		            the_post_thumbnail('post-thumbnails', array( 'class' => 'img-responsive picture' ));
		        } ?></a>

		      <div class="card-body-lateral p-1">   
		          <a class="card-text"  href="<?php the_permalink(); ?>"><?php the_excerpt();  ?>    </a> 
		        </div>  
		      </div>
		    <?php endwhile; endif; ?>
		    
		    <?php } ?>
		    
		  </div>

		</div>
	
		<div id="sidebar" class="col-sm-3">
			<div class="nav-vertical">
				<?php  get_sidebar(); ?>
				
			</div>
		</div>	
	</div>
	
</div>


<?php get_footer();  ?>