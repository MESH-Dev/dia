<?php get_header(); ?>

<div id="content">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="post">
			<!-- <h1><//?php the_title(); ?></h1> -->
			<div class="container content-area">
				<div class="row">
					<div class="left-column columns-4">
						<?php the_post_thumbnail( 'medium_large' ); ?>
					</div>
					<div class="columns-8">
						<!-- <p class="postinfo">By <//?php the_author(); ?> | Categories: <//?php the_category(', '); ?> | <//?php comments_popup_link(); ?></p> -->

						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>

		<!-- <//?php comments_template( '', true ); ?> -->

	<?php endwhile; ?>

</div><!-- End of Content -->



<!-- <//?php get_sidebar(); ?> -->
<?php get_footer(); ?>
