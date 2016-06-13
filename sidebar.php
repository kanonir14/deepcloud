<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deepcloud
 */

if ( ! is_active_sidebar( 'sidebar-top' ) ) {
	return;
}
?>

<!-- sidebar -->
<aside class="sidebar">
	<?php dynamic_sidebar( 'sidebar-top' ); ?>
	
	<!-- tags -->
	<?php dynamic_sidebar( 'sidebar-bottom' ); ?>
</aside>