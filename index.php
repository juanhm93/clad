

<?php get_header(); ?>

<!-- PRINCIPAL CONTAINER -->
<div class="container-fluid dis"> 
<div class="row">
  <div id="principal" class="col-sm-8 pt-2 pl-4 ">
    <!-- CAROUSEL SLIDE  -->
     <div class="sliderp">
          <?php include(TEMPLATEPATH.'/slideshow.php'); ?> 
     </div>
     
    <!-- END CARROSEL SLIDE-->

  <div class="row">

    <?php 
    query_posts('category_name=ini-post-photos');
    if(have_posts() ) : while (have_posts() ): the_post(); ?>
    <div class="col-sm-4 pt-2 featured-property-half d-flex zoom">

      <!--  img-responsive picture   -->
      
      <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('post-thumbnails', array( 'class' => 'img-responsive picture' ));
        } ?></a>

      <div class="card-body p-1">   
          <a class="card-text"  href="<?php the_permalink(); ?>"><?php the_excerpt();  ?>    </a> 
        </div>  
      </div>
    <?php endwhile; endif; ?>
  </div>



  </div>
  <div class="col-sm-4 pl-3">
    <div class="col-md-12">
    <div class="well">  
        <div class="row align-items-center paneld mb-2">
         <?php
          $j = 1;
          query_posts('category_name=ini-text-first');
       if(have_posts() ) : while (have_posts() ): the_post(); ?>
          <div class="col <?php if($j == 1){ echo 'content-l';}else{echo 'content-r';} ?> zoom"><a class="card-text" href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a></div>
           <?php $j++; endwhile; endif; ?>
        </div>

         <div class="row align-items-center paneld mb-2">
         <?php
          $j = 1;
          query_posts('category_name=ini-text-two');
       if(have_posts() ) : while (have_posts() ): the_post(); ?>
          <div class="col <?php if($j == 1){ echo 'content-l';}else{echo 'content-r';} ?> zoom"><a class="card-text" href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a></div>
           <?php $j++; endwhile; endif; ?>
        </div>
      
    </div>

  </div>

    <div class="well col-md-12 p-2" width="100%" height="170">
    <?php  get_sidebar(); ?>
    </div>
  </div>
</div>
<hr>
</div>
<!-- END PRINCIPAL CONTAINER -->
<?php get_footer();  ?>