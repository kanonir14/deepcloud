<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package deepcloud
 */

get_header(); ?>

	<div id="primary" class="content-area content">
		<main id="main" class="site-main error404" role="main">

			<section class="error-404 not-found">
				<noindex><p class="error-text">Ошибка! Неверно указан адрес! </p></noidndex>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
