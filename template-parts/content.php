<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package deepcloud
 */

?>

<article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--  -->
		<div class="full-news">
			<?php
			if ( is_single() ) {
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				#<?php echo the_category('j F, Y', $post->ID); ?>
			</div><!-- .entry-category -->
			<div class="date">
				<?php echo get_the_time('j F, Y', $post->ID); ?>
			</div>
			<?php
			endif; ?>
			<p class="full-news-descr"><?php echo get_post_meta($post->ID, "Artist", true); ?></p>
			<div class="full-descr">
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'deepcloud' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'deepcloud' ),
						'after'  => '</div>',
					) );
				?>
			</div>
			
			
		<p class="tags"><?php the_tags(); ?></p>
		<div class="social-full">
				<script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
				<script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
				<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter" 
				data-image="<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0];?>" data-size="s" data-counter=""></div>
			</div>
		</div>
		<!--  -->
		<!-- adsense -->
		<div class="news-block">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Новость -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-8356631661918492"
			     data-ad-slot="7015778548"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>

</article><!-- #post-## -->
