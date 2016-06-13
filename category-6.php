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
			
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="news">
		<div class="news-img">
			<?php echo the_post_thumbnail($page->ID, array(217, 217, 'alt' => ''.get_the_title().''), 'thumbnail'); ?>
			<a class="fa fa-play-circle-o play" href="<?php the_permalink();?>"></a>
		</div>
		<div class="news-info">
			<a class="news-title" href="#"><?php echo get_post_meta($post->ID, "Artist", true); ?></a>
			<a class="news-descr" href="#"><?php the_title(); ?></a>
		</div>
		<div class="news-bottom">
			<i class="fa fa-play"></i>
			<span class="play-count"><?php if ( function_exists ( 'echo_tptn_post_count' ) ) echo_tptn_post_count(); ?></span>
			<span class="comment-count">
				 <?php disqus_count(''); ?> 
			</span>
			<a class="fa fa-comments" title="Комментарии" href="<?php the_permalink();?>"></a>
		</div>	
	</div>
	<?php endwhile; ?><?php endif; ?>
	<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
	<div class="page-descr">
		<p>«Deep tech» в последнее время набирает большую популярность – многие клубы давно отказываются от не более современных «грайма» и «дабстепа», 
			ведь <b>deep tech</b> весьма универсален, что является его большим плюсом. Современная техника позволяет разрабатывать музыку вплоть до мельчайших 
			деталей и даже с применением разного рода психоделических эффектов – этим и прекрасен данный жанр, которому у нас посвящена отдельная категория. </p>
			<p>Здесь представлен большой выбор треков и сетов от самых крупных лейблов Европы, таких как «<a href="/tag/deep-house-london/">Deep house London</a>» и « <a href="/tag/soundspace/">Soundspace</a>», 
			которые вы с легкостью можете слушать онлайн. А если же вы любите поддаваться музыкальному порыву на прогулках/в дороге – в данной категории 
			можно скачать все треки жанра.</p>
		<p>Мы постоянно отслеживаем новинки Deep Tech mix, которые используются на лучших вечеринках мегаполисов мира. Большой выбор сетов по несколько 
			часов представлен в данной категории и выложен в открытом доступе для того, чтобы вы могли в любой момент <b>слушать онлайн deep tech mix</b> от лучших 
			ди-джеев современности и получать истинное удовольствие!</p>
		

	</div>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
