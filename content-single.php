<?php
/**
 * @package cmh3258
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<!--
		<div class="entry-meta">
			<?php cmh3258_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'cmh3258' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php cmh3258_posted_on(); ?>
		<?php cmh3258_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
