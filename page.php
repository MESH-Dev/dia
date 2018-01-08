<?php get_header(); ?>

<main id="content">
	<div class="container content-area">
		<div class="row">
			<div class="left-column columns-6">
				<?php the_post_thumbnail( 'medium_large' ); ?>
			</div>
			<div class="columns-6">
				<div class="the-content">
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

			<!-- <div class="columns-3"> -->

				<!-- Change this to repeater of custom fields -->

				<!-- <//?php get_sidebar(); ?> -->
			<!-- </div> -->

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
