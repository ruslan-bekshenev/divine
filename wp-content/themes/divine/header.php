<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package divine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="header">
		<h5 class="header__sub-title">
			Команда
		</h5>	
		<h1 class="header__title">
			DIVINE
		</h1>	
		<h4 class="header__caption">
			Разработка крутых сайтов, интерактивного веб-дизайна, комплексное продвижение, рекламная и техническая поддержка сайтов.
		</h4>
	</header>