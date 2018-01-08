<?php /*
* Template Name: Homepage
*/
get_header('home'); ?>
<main id="main" class="site-main" role="main">
   <div id="intro-panel" class="text-panel white">
      <div class="container">
         <div class="row">
            <div class="columns-6">
               <h2><?php the_field('intro_section_title'); ?></h2>
            </div>
            <div class="columns-6">
              <?php the_field('intro_section_content'); ?>
            </div>
         </div>
      </div>
   </div>
   <div class="text-panel blue">
      <div class="container">
         <div class="row">
            <h2 class="centered-heading"><?php the_field('industry_section_title'); ?></h2>
            <?php if( have_rows('industry_section_content') ): ?>
               <?php while( have_rows('industry_section_content') ): the_row(); ?>
                  <div class="columns-6">
                     <p><?php the_sub_field('industry_section_column_1'); ?></p>
                  </div>
                  <div class="columns-6">
                     <p><?php the_sub_field('industry_section_column_2'); ?></p>
                  </div>
               <?php endwhile; ?>
         <?php endif; ?>
         </div>
      </div>
   </div>
   <div class="text-panel white">
      <div class="container">
         <div class="row">
            <div class="columns-8">
               <h2><?php the_field('survey_section_title'); ?></h2>
            </div>
            <div class="columns-4">
               <p class="survey desc"><?php the_field('survey_section_content'); ?> »</p>
                  <!-- <i class="fa fa-angle-double-right" aria-hidden="true"></i> -->
               </p>
               <a href="<?php the_field('survey_section_link'); ?>" class="button">
                  <span class="button-text">Join Now</span>
               </a>
            </div>
         </div>
      </div>
   </div>
   <!-- <div class="text-panel white flex-centered"> -->
      <!-- <div class="row">
         <div class="columns-8">
            <h3>Callout for the survey right here.</h3>
         </div>
         <div class="columns-4">
            <p>Be a part of a state network working hard to put West Virginia back on the map »</p>
            <div class="button">
               <span class="button-text">Join</span>
            </div>
         </div>
      </div> -->
      <!-- <h4 class="centered-heading">These people are working with us.</h4>
      <div class="flex-slider">
         <i class="fa fa-caret-left" aria-hidden="true"></i>
         <div class="indiv-logo">

         </div>
         <div class="indiv-logo">

         </div>
         <div class="indiv-logo">

         </div>
         <div class="indiv-logo drop">

         </div>
         <div class="indiv-logo drop">

         </div>
         <div class="indiv-logo drop">

         </div>
         <i class="fa fa-caret-right" aria-hidden="true"></i>
      </div>
      <div class="button">
         <span class="button-text">Learn More</span>
      </div> -->
   <!-- </div> -->
</main>
<?php get_footer(); ?>
