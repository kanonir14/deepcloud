<?php get_header(); ?>


<section class="content">
	<!-- nav -->
	<nav class="nav-category main-cat">
		<ul>
			<li><a class="nav-active" href="/" title="Главная страница">Stream</a></li>
			<li><a href="/tracks/" title="Главная страница">Tracks</a></li>
		</ul>
	</nav>
	

	<?php query_posts($query_string.'&cat=-93'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="news">
		<div class="news-img">
			<?php echo the_post_thumbnail($page->ID, array(217, 217, 'alt' => ''.get_the_title().''), 'thumbnail'); ?>
			<a class="fa fa-play-circle-o play" href="<?php the_permalink();?>"></a>
		</div>
		<div class="news-info">
			<a class="news-title" href="#"><?php echo get_post_meta($post->ID, "Artist", true); ?></a>
			<h3 class="news-descr"><?php the_title(); ?></h3>
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
		<p>Добро пожаловать на сайт, посвящённый <b>Deep House</b>. Этот стиль называют музыкой для души, а не для тела. 
			Под него сложно энергично танцевать или устраивать бешеные вечеринки. Он идеален в качестве ненавязчивого фона во время работы или отдыха. 
			Такой эффект достигается минималистичным звучанием, в котором причудливо перемешаны элементы соула, джаза и фанка. </p>
		<p>Трек «Can you fell it?», положивший в 1986 году начало этому стилю, получил своё название неслучайно. 
			Его звучание настолько визуально гармонировало с видом снежинок, медленно падающих на землю, что вариант «Ты чувствуешь это?» был принят сразу. 
			Отличительными чертами этой музыки являются: медленный и чёткий ритм, минимальное использование вокала, добавление соло клавишных инструментов.</p>
		<p>По этим признакам в жанр сегодня попадает множество разнообразных произведений, так что любой найдёт подходящее по вкусу. 
			Также на нашем сайте можно слушать онлайн треки, принадлежащие к жанрам <b><a href="/nu-disco/">Nu-Disco</a></b>, <b><a href="/deep-tech/">Deep Tech</a></b>, <b><a href="/deep-techno/">Deep Techno</a></b>, <b><a href="/deep-house/">Vocal Deep House</a></b>.
			А если вы собираете коллекцию любимых музыкальных произведений на компьютере, то можете скачать бесплатно любую композицию. 
			У нас вы найдёте как произведения, давно ставшие классикой, так и свежие творения. 
			Тем, чьё знакомство с миром этой глубокой и атмосферной музыки началось недавно, предлагаем сборники лучших композиций. Слушайте и наслаждайтесь музыкой в стиле deep.</p>

	</div>
</section>



<?php get_sidebar(); ?>
<?php get_footer(); ?>

