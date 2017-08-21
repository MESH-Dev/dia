<?php /*
* Template Name: Landing Page
*/
get_header(); ?>
<main id="main" class="site-main" role="main">
   <div class="cards-container">
      <?php if( get_field('cta_display') ): ?>
      <div class="text-panel white">
         <div class="container">
            <div class="row">
               <div class="columns-8">
                  <h2><?php the_field('cta_title'); ?></h2>
               </div>
               <div class="columns-4">
                  <p class="survey desc"><?php the_field('cta_desc'); ?></p>
                  <a href="<?php the_field('cta_link'); ?>" class="button">
                     <span class="button-text">Submit a Story</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   <?php endif; ?>
      <?php if( have_rows('content_block') ):
         $ctr = 1;
         ?>
      <!-- <div class="events row"> -->
      <?php while( have_rows('content_block') ): the_row(); ?>
         <?php
         $thumbnails = get_sub_field('content_block_image');
         if ($thumbnails){
            $thumb_url = $thumbnails['sizes']["large"];
         } else{
            $base_url = get_template_directory_uri();
            // $thumb_url = bloginfo('template_url') . '/img/621903024.jpg';
            $thumb_url = $base_url . '/img/621903024.jpg';
         }
         // var_dump($thumbnails);
         if($ctr%3 == 1){
            echo '<div class="cards row">';
         }
         ?>
         <div class="columns-4 cards">
            <a style="background-image:url('<?php echo $thumb_url ?>')" href="<?php the_sub_field('content_block_link'); ?>" class="event-card">
               <div class="event-info">
                  <h4><?php the_sub_field('content_block_title'); ?></h4>
                  <p class="byline"><?php the_sub_field('content_block_byline'); ?></p>
                  <p><?php the_sub_field('content_block_excerpt'); ?></p>
                  <!-- <p>Read More »</p> -->
               </div>
            </a>
         </div>
      <?php
      if($ctr%3 == 0) { echo '</div>';}
      $ctr++;
      endwhile;
      $ctr = $ctr-1;
      if($ctr%3 != 0) { echo '</div>';}
      ?>
      <?php endif; ?>
      <!-- </div> -->
   </div>
</main>
<?php get_footer(); ?>
