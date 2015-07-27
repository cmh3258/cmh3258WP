<?php
/**
 * The template for displaying all single posts.
 *
 * @package cmh3258
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php if ( has_post_thumbnail() ) : ?>

		<div class="featured-media">
		
			<?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'hemingway'); ?></span> <?php } ?>
		
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
			
				<?php the_post_thumbnail('post-image'); ?>
				
				<?php if ( !empty(get_post(get_post_thumbnail_id())->post_excerpt) ) : ?>
								
					<div class="media-caption-container">
					
						<p class="media-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
						
					</div>
					
				<?php endif; ?>
				
			</a>
					
		</div> <!-- /featured-media -->
			
	<?php endif; ?>

	<!-- <h1>hi</h1> -->

	<div class="ourContent">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>


			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

			<?php posts_navigation(); ?>
			<div class="previousPostBox">
				<?php previous_post(); ?>    
			</div>
			<div class="nextPostBox">
				<?php next_post(); ?>
			</div>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

	</div>

<div class="">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

