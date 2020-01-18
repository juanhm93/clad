       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php query_posts('category_name=slider'); ?>
            <?php 
            $i = 1;
            if(have_posts() ) : while (have_posts() ): the_post(); ?>
            <div class="carousel-item <?php if($i == 1) echo 'active'  ?>">
             <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('large', array( 'class' => 'd-block w-100' ));
              } ?></a> 
            </div>
            <?php $i++; endwhile; endif; ?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>