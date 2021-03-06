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
		<p>Nu-Disco - это одно из современных направлений в музыкальной области, тесно связанное с возродившейся тенденцией популярности диско 70-х годов. 
			Чтобы отделить данное направление в музыке от стандартного «диско» используется приставка «Nu». <b>Слушать онлайн Nu-Disco</b> можно на нашем сайте, 
			также имеется возможность скачать песню или альбом понравившегося исполнителя.</p>
		<p>Стиль музыки Nu-Disco стал отдельным термином в 2002 году, после того, как популярное издание The Independent написало о нем статью, 
			где назвало данное направление смесью современного фанка и музыки диско 70-х годов. За очень короткие сроки Nu-Disco обзавелось крупными звездами, 
			такими как: Madeon, Aeroplane и группа российских музыкантов Tesla Boy. В интернете очень бурно начали развиваться блоги с тематикой "Nu-Disco" 
			и движение стало узнаваемым среди молодежи. Благодаря данной культуре в музыкальную индустрию вернулась яркость, фривольность и необычайный лоск.</p>
		
	</div>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
