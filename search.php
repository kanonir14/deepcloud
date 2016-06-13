<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package deepcloud
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main search-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h4 class="page-title"><?php printf( esc_html__( 'Найдено по запросу: %s', 'deepcloud' ), '<span>' . get_search_query() . '</span>' ); ?></h4>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			 wp_corenavi();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
