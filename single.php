<?php get_header(); ?>

<!-- PRINCIPAL CONTAINER -->
<div class="container-fluid dis">
	<div class="row">
		<div id="pages" class="col-sm-8 p-3">

		<?php	if(have_posts() ) : while (have_posts() ): the_post(); ?>
				<h5 class="card-text"><?php the_title() ?></h5>
				<hr>
				<!--  img-responsive picture   -->
				
				<div class="text-justify">
					<?php the_content(); ?>
				</div>		
		<?php endwhile; endif; ?>	
		</div>
		<div id="sidebar" class="col-sm-4">
			<div class="nav-vertical">			  
				<?php get_sidebar(); ?>
			</div>
			<div class="row">
					<!--pruebas para las singles pages -->
					    <?php
					    
					    if (is_single('destacado')) {
						// Cuando se muestre la página con slug 'hola-mundo'
							query_posts('category_name=ini-post-photos');
						    if(have_posts() ) : while (have_posts() ): the_post(); ?>
						    <div id="lateralDerechoSingle" class="col-xl-11 col-lg-11 col-md-11 col-12 d-flex zoom mb-2">

						      <!--  img-responsive picture   -->
						      
						      <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
						            the_post_thumbnail('post-thumbnails', array( 'class' => 'img-responsive picture' ));
						        } ?></a>

						      <div class="card-body card-body-lateral p-1">   
						          <a class="card-text"  href="<?php the_permalink(); ?>"><?php the_excerpt();  ?>    </a> 
						        </div>  
						      </div>
						    <?php endwhile; endif; } ?>
						
			</div>    

							 
					    			<!--pruebas para las singles pages -->
			
		</div>
	</div>
	
</div>


<?php get_footer();  ?>