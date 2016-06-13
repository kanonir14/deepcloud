<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package deepcloud
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

		<section class="content">
			<!-- nav -->
			<nav class="nav-category">
				<ul>
					<li><a href="/" title="Главная страница">Stream</a></li>
					<li><a class="nav-active" href="/tracks/" title="Главная страница">Tracks</a></li>
				</ul>
			</nav>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="track">
				<a class="track-title" href="<?php the_permalink();?>"><?php the_title(); ?></a>
				<div class="date">
						<?php echo get_the_time('j F, Y', $post->ID); ?>
					</div>
				<div class="track-content">
					<?php the_content(); ?>
				</div>
				<p class="tags"><?php the_tags(); ?></p>
			</div>

			<?php endwhile; ?><?php endif; ?>
			<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
