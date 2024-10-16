<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <ul class="navbar">
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
            </ul>
            <div class="navbar-burger">
                <span></span>
            </div>
        </nav>
        <div class="burger-open">
        <img class ="burger-open__logo position" src="<?php echo get_theme_file_uri() . '../assets/images/menu-burger/Logo.png'; ?>">
        <img class ="burger-open__orchid-flower rotate position" src="<?php echo get_theme_file_uri() . '../assets/images/menu-burger/Orchid.png'; ?>">
        <img class ="burger-open__petal-flower rotate position" src="<?php echo get_theme_file_uri() . '../assets/images/menu-burger/Flower.png'; ?>">
        <img class ="burger-open__sun-flower rotate position" src="<?php echo get_theme_file_uri() . '../assets/images/menu-burger/Sunflower.png'; ?>">
        <img class ="burger-open__pink-flower rotate position" src="<?php echo get_theme_file_uri() . '../assets/images/menu-burger/Random-flower.png'; ?>">
        <img class ="burger-open__hibiscus-flower rotate position" src="<?php echo get_theme_file_uri() . '../assets/images/menu-burger/Hibiscus-footer.png'; ?>">
        <img class ="burger-open__blue-cat float position" src="<?php echo get_theme_file_uri() . '../assets/images/menu-burger/cat-blue.png'; ?>">
        <img class ="burger-open__orange-cat float position" src="<?php echo get_theme_file_uri() . '../assets/images/menu-burger/cat-orange.png'; ?>">
        <img class ="burger-open__black-cat float position" src="<?php echo get_theme_file_uri() . '../assets/images/menu-burger/cat-blanck.png'; ?>">            <ul>
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
            </ul>
            <p>STUDIO KOUKAKI</p>
        </div>
	</header><!-- #masthead -->