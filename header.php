<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 <link href="http://deepcloud.ru/wp-content/themes/deepcloud/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta itemprop="image" content="<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0];?>"/>
<meta name="google-site-verification" content="ZwVwzRAn1x1vwLC_ojF2dQbDDkS6LSYkCfG-5bJ5T2U" />
<meta name='yandex-verification' content='6d01e0d2e1a77676' />
<meta name="msvalidate.01" content="9B1219E9B1733D1C0E605C7AF4C0A2A4" />
<meta name='wmail-verification' content='b1c29e34ff8530dd0b87ab06b896e4f5' />
<meta property="og:image" content="http://deepcloud.ru/wp-content/uploads/2016/03/ml.png" />
<?php wp_head(); ?>
</head>

<body>
	<div id="wptime-plugin-preloader"></div>
<div id="page">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'deepcloud' ); ?></a>
<!-- My -->
	<div class="wrapper">
	<div class="header-section">
		<div class="header-section__logo">
			<a class="logo" href="/" title="Музыка в стиле Deep">DeepCloud</a>				
		</div>
		<nav class="header-section__nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
		<div class="header-section__search">
			<i class="fa fa-search"></i>
			<?php dynamic_sidebar( 'search' ); ?>
			
		</div>
	</div>
	<!-- header -->
	<header class="header">
		<div class="header-title">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1><?php bloginfo( 'name' ); ?></h1>
			<?php else : ?>
				<h1><?php bloginfo( 'name' ); ?></h1>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				
			<?php
			endif; ?>
			<h2>Мы собираем все лучшие аудиозаписи в стиле Deep. <br/> Ежедневное наполнение лучшими треками Deeep House, NuDisco , Deep Tech и Deep Techno</h2>
		</div>
	</header>
	<section id="container" class="container">