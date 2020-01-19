<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
       <?php query_posts('category_name=slider'); ?>
       <?php 
            $j = 0;
            if(have_posts() ) : while (have_posts() ): the_post(); ?>
          <li data-target="#carouselExampleCaptions" data-slide-to="<?php $j ?>" <?php if($j == 0) echo 'class=active'?>></li>
          <?php $j++; endwhile; endif; ?> 
       </ol>
          <div class="carousel-inner">
            <?php query_posts('category_name=slider'); ?>
            <?php 
            $i = 1;
            if(have_posts() ) : while (have_posts() ): the_post(); ?>
            <div class="carousel-item <?php if($i == 1) echo 'active'  ?>">
             <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('large', array( 'class' => 'd-block w-100' ));
              } ?></a>
              <div class="carousel-caption d-none d-md-block">
                <h4><?php the_title() ?></h4>
                <p><?php the_excerpt();  ?></p>      
              </div> 
            </div>
            <?php $i++; endwhile; endif; ?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>