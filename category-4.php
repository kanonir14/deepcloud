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
		<p><b>Deep House</b> - это один из стилей электронной музыки, который зародился в конце 80-х годов. Жанр Deep House занял на то 
			время интересное положение между такими направлениями в музыке как «госпел» и Чикагский Хаус. Данное направление музыки с первой же минуты, 
			погружает Вас в атмосферу умиротворённости и спокойствия. <b>Лучшие треки в стиле Deep House</b> сделаны для того, чтобы человек мог расслабиться, 
			отдохнуть от повседневных проблем. Несомненно, что Deep House, это музыка, позволяющая Вам расслабиться во многом благодаря тому, что данный стиль построен на старых, приятных аккордах.
		 В стиле Deep House содержатся многие элементы других направлений (фанк, соул, Detroit techno), что конечно же привлекает дополнительную аудиторию.</p>
		<p>Здесь Вы всегда сможете <b>слушать Deep House онлайн</b>, а ежедневные обновления не дадут Вам утонуть в однообразности «заезженных» песен. 
			На сайте можно услышать миксы  и треки таких лейблов, как: <a href="/tag/spinnin-records/">Spinnin' Records</a>, <a href="/tag/defected-records/">Defected Records</a>, <a href="/tag/deep-house-amsterdam/">Deep House Amsterdam</a>, <a href="/tag/spectrum-mixes/">Spectrum Mixes</a> и Armada Deep. 
			Треки от диджеев: <a href="/tag/xypo/">XYPO</a>, <a href="/tag/xandl/">XANDL</a>, <a href="/tag/archie-b/">Archie B</a> и многих других. Также у нас имеются разные направления музыки Deep, например, такие как <b>vocal Deep house</b> и 
			<b>Deep House mix</b>. Приятным бонусом для наших посетителей будет то, что все треки и сеты в стиле Deep House можно скачать абсолютно бесплатно.</p>
		

	</div>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
