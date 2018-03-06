<?php /*
* Template Name: Container Page
*/
get_header(); ?>
<main id="main" class="site-main" role="main">
   <div class="text-panel white">
      <div class="container">
         <div class="row">
            <div class="columns-12">
               <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                  <?php
                  if ( ! empty ( $post->post_parent ) )
                  {
                     $current_title = get_the_title();
                      echo "<h1>$current_title</h1>";
                  }
                  ?>

                  <?php the_content(); ?>

               <?php endwhile; ?>
            </div>
         </div>
      </div>
   </div>
</main>
<?php get_footer(); ?>
