<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">

			<div class="header-inner section-inner">

                <?php echo do_shortcode('[slick-slider design="design-1" arrows="true" autoplay="true" autoplay_interval="3000" speed="300"]'); ?>

                <div class="text-center mt-4">
                    <h1>Seniorenwohnanlage "Oase des Lebens"</h1>
                    <span class="mt-20">Waldemardamm 22 in 14641 Nauen</span>
                </div>

			</div><!-- .header-inner -->


		</header><!-- #site-header -->


