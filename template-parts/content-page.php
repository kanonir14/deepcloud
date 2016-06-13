<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package deepcloud
 */

?>

<article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="full-news">
		<?php the_title( '<h3 class="entry-title title-page">', '</h3>' ); ?>
	</div>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'deepcloud' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
