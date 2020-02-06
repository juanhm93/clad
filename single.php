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
		</div>
	</div>
	
</div>


<?php get_footer();  ?>