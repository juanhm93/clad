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
		
		</div>
	
		<div id="sidebar" class="col-sm-3">
			<div class="nav-vertical">
				<?php  get_sidebar(); ?>
				
			</div>
		</div>	
	</div>
	
</div>


<?php get_footer();  ?>