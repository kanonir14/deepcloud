<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package deepcloud
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="content">
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
				<a class="fa fa-comments" title="Комментарии" href="<?php the_permalink();?>"></a>
				<span class="comment-count">
				 <?php disqus_count(''); ?> 
			</span>
			</div>	
		</div>
		
	</section>

</article><!-- #post-## -->

