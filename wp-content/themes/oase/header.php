<!-- todo font da se sredi -->
<!-- todo header za mobilnu verziju -->

<!DOCTYPE html>

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

                <div class="text-center">
                    <?php echo do_shortcode('[slick-slider design="design-1" arrows="true" autoplay="true" autoplay_interval="3000" show_content="false"]'); ?>
                </div>

			</div><!-- .header-inner -->


		</header><!-- #site-header -->


