<?php 
/*
	Template Name: carousel
*/
?>


<?php get_header(); ?>

<div class="carousel-inner" role="listbox">
          
   <?php query_posts("posts_per_page=1&post_type=carousel"); ?>
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
             
      <div class="item active">
         <?php the_post_thumbnail('full', array( 'class' => "img-responsive")); ?>
      </div>

   <?php endwhile; ?>
   <?php else : ?>
   <?php endif; wp_reset_query();?>

            
   <?php query_posts("posts_per_page=2&post_type=carousel&offset=1"); ?>
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

      <div class="item">
         <?php the_post_thumbnail('full', array( 'class' => "img-responsive")); ?>
      </div>

   <?php endwhile; ?>
   <?php else : ?>
   <?php endif; wp_reset_query();?>
