<!DOCTYPE html>
<html lang='de'>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php if (is_front_page() ) : ?>
			<title>Startseite | <?php bloginfo( 'name' ); ?></title>
			<meta property="og:title" content="Startseite | <?php bloginfo( 'name' ); ?>"/>
		<?php else : ?>
			<title><?php wp_title($sep = ''); ?> | <?php bloginfo( 'name' ); ?></title>
			<meta property="og:title" content="<?php wp_title($sep = ''); ?> | <?php bloginfo( 'name' ); ?>"/>
		<?php endif; ?>

		<!-- Favicon und Tiles Varianten-->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/apple-touch-icon-152x152.png" />

		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/favicon-128.png" sizes="128x128" />

		<meta name="application-name" content="Autoglasdienst Martin Rottensteiner" />
		<meta name="msapplication-TileColor" content="#ffffff" />

		<meta name="msapplication-TileImage" content="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/mstile-310x150.png"/>
		<meta name="msapplication-square310x310logo" content="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon/mstile-310x310.png"/>

		<meta property="og:image" content="<?php the_post_thumbnail();?>

		<?php wp_enqueue_script( 'jquery' ); ?>

		<?php wp_head(); ?>

	</head>

	  <body <?php body_class(); ?> >

		<div class="container outer-container">

		<div class="top__bar">&nbsp;</div>

			<?php  if(!empty($post->post_content)) { ?>
				&nbsp;
			<?php } else { ?>

			<?php

		   	$args = array(
			   'post_status' => 'publish',
			   'posts_per_page' => 1,
			   'post_type' => 'hinweis',
			   'orderby'   => 'date',
			   'order' => 'DESC',
			   );

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<article class="message">

			    	<div class="message-header">
						<h2 class=""><?php the_title(); ?></h2>
					</div>

				<div class="message-body">
					<p class="">
						<?php the_content(); ?>
					</p>
				</div>

			    </article>

			<?php
			endwhile;
			wp_reset_postdata();
			?>

			<?php };?>



		<header>
			<a href="<?php echo get_home_url(); ?>"><img class="brand-logo" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/Logo.svg" alt="Logo - Autoglasdienst Martin Rottensteiner" /></a>
		</header>

		<div class="anfahrt">
			<span class="anfahrt__text">Gasslweg 1, 2620 Diepolz > </span><a class="anfahrt__link" href="https://goo.gl/maps/NG3TfPqLcDWkNje38" target="_blank">Anfahrt<span class="anfahrt__link-extension"> planen</span></a></li>
		</div>


		<nav class="navbar" role="navigation" aria-label="main navigation">

			<div class="navbar-brand">

				<a role="button" class="navbar-burger burger column column--menu" aria-label="menu" aria-expanded="false" data-target="navbar-main">
					Menü <img class="navbar-burger__icon" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/Menu-Icon.svg" alt="Menu-Icon">
				</a>

				<a role="button" class="column column--info" href="/kontakt" aria-label="menu" aria-expanded="false">
					<i class="fas fa-info" aria-hidden="true"></i>
				</a>

				<a role="button" class="column column--mail" href="mailto:office@autoglasdienst.at" aria-label="menu" aria-expanded="false">
					<i class="fas fa-envelope" aria-hidden="true"></i>
				</a>

				<a role="button" class="column column--phone" href="tel:004369911647073" aria-label="menu" aria-expanded="false">
					<i class="fas fa-phone" aria-hidden="true"></i>
				</a>

				<script>
					jQuery(document).ready(function() {

						// Check for click events on the navbar burger icon
						jQuery(".navbar-burger").click(function() {

							// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
							jQuery(".navbar-burger").toggleClass("is-active");
							jQuery(".navbar-menu").toggleClass("is-active");

						});

					});
				</script>

			</div>


			<div id="navbar-main" class="navbar-menu">

				<?php
				/* Navigation Walker für Hauptnavigation */

				$defaults = array(

					'theme-location' => 'nav-menu-main', //change it according to your register_nav_menus() function
					 'depth'		=>	3,
					 'menu'			=>	'Hauptnavigation',
					 'container'		=>	'',
					 'menu_class'		=>	'',
					 'items_wrap'		=>	'%3$s',
					 'walker'		=>	new Bulma_NavWalker(),
					 'fallback_cb'		=>	'Bulma_NavWalker::fallback'

				);

				wp_nav_menu( $defaults );

				?>

			</div>

			<div class="navbar-end"></div>

		</nav>

		<?php if (is_front_page() ) : ?>

		<section class="hero hero-slider has-carousel">

			<div id="carousel-slider" class="hero-carousel" data-effect="fade" data-duration="1800" data-autoplay="true" data-autoplaySpeed="8000" data-pauseOnHover="true" data-infinite="false" data-loop="true" data-navigation="true">

				<div class='carousel-item has-background is-active'>
					<img class="is-background" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/slider/Slider-01.jpg" alt=""/>
					<!-- <div class="title">Merry Christmas</div> -->
				</div>

				<div class='carousel-item has-background'>
					<img class="is-background" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/slider/Slider-02.jpg" alt=""/>
					<!-- <div class="title">Original Gift: Offer a song with <a href="https://lasongbox.com" target="_blank">La Song Box</a></div> -->
				</div>

				<div class='carousel-item has-background'>
					<img class="is-background" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/slider/Slider-03.jpg" alt=""/>
				</div>

				<div class='carousel-item has-background'>
					<img class="is-background" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/slider/Slider-04.jpg" alt=""/>
				</div>

				<div class='carousel-item has-background'>
					<img class="is-background" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/slider/Slider-05.jpg" alt=""/>
				</div>

				<div class='carousel-item has-background'>
					<img class="is-background" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/slider/Slider-06.jpg" alt=""/>
				</div>

				<div class='carousel-item has-background'>
					<img class="is-background" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/slider/Slider-07.jpg" alt=""/>
				</div>

				<div class='carousel-item has-background'>
					<img class="is-background" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/slider/Slider-08.jpg" alt=""/>
				</div>

			</div>

			<div class="hero-head"></div>
			<div class="hero-body"></div>
			<div class="hero-foot"></div>

		</section>




		<?php elseif ( is_tax( $taxonomy = 'faq-kategorien', $term ='faq-scheibenreparatur' ) ) : ?>

		<section class="hero">

			<div id="" class="hero" data-navigation="false" data-navigationKeys="false" data-autoplay="false" data-slidesToScroll="0">

				<div class='has-background'>
					<img class="is-background hero" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_scheibenreparatur.jpg" >
					<div class="h1__container">
						<div class="h1--light">FAQ - Scheiben</div>
						<div class="h1--strong">Reparatur</div>
					</div>
				</div>

		</section>


		<?php elseif ( is_tax( $taxonomy = 'faq-kategorien', $term ='faq-scheibentausch' ) ) : ?>

		<section class="hero">

			<div id="" class="hero" data-navigation="false" data-navigationKeys="false" data-autoplay="false" data-slidesToScroll="0">

				<div class='has-background'>
					<img class="is-background hero" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_scheibentausch.jpg" >
					<div class="h1__container">
						<div class="h1--light">FAQ - Scheiben</div>
						<div class="h1--strong">Tausch</div>
					</div>
				</div>

		</section>


		<?php elseif ( is_tax( $taxonomy = 'faq-kategorien', $term ='faq-scheibentoenung' ) ) : ?>

		<section class="hero">

			<div id="" class="hero" data-navigation="false" data-navigationKeys="false" data-autoplay="false" data-slidesToScroll="0">

				<div class='has-background'>
					<img class="is-background hero" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_scheibentoenung.jpg" >
					<div class="h1__container">
						<div class="h1--light">FAQ - Scheiben</div>
						<div class="h1--strong">Tönung</div>
					</div>
				</div>

		</section>


		<?php elseif ( is_tax( $taxonomy = 'faq-kategorien', $term ='faq-kamerakalibrierung' ) ) : ?>

		<section class="hero">

			<div id="" class="hero" data-navigation="false" data-navigationKeys="false" data-autoplay="false" data-slidesToScroll="0">

				<div class='has-background'>
					<img class="is-background hero" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_kamerakalibrierung.jpg" >
					<div class="h1__container">
						<div class="h1--light">FAQ - Kamera</div>
						<div class="h1--strong">Kalibrierung</div>
					</div>
				</div>

		</section>


		<?php elseif ( is_tax( $taxonomy = 'faq-kategorien', $term ='faq-lackfolierung' ) ) : ?>

		<section class="hero">

			<div id="" class="hero" data-navigation="false" data-navigationKeys="false" data-autoplay="false" data-slidesToScroll="0">

				<div class='has-background'>
					<img class="is-background hero" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_lackfolierung.jpg" >
					<div class="h1__container">
						<div class="h1--light">FAQ - Lack</div>
						<div class="h1--strong">Folierung</div>
					</div>
				</div>

		</section>


		<?php elseif ( is_tax( $taxonomy = 'faq-kategorien', $term ='faq-scheinwerferaufbereitung' ) ) : ?>

		<section class="hero">

			<div id="" class="hero" data-navigation="false" data-navigationKeys="false" data-autoplay="false" data-slidesToScroll="0">

				<div class='has-background'>
					<img class="is-background hero" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_scheinwerferaufbereitung.jpg" >
					<div class="h1__container">
						<div class="h1--light">FAQ - Scheinwerfer</div>
						<div class="h1--strong">Aufbereitung</div>
					</div>
				</div>

		</section>


		<?php elseif ( is_tag( ) ) : ?>

		<section class="hero">

			<div id="" class="hero" data-navigation="false" data-navigationKeys="false" data-autoplay="false" data-slidesToScroll="0">

				<div class='has-background'>
					<img class="is-background hero" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_blog.jpg" >
					<div class="h1__container">
						<div class="h1--light">Schlagwort</div>
						<div class="h1--strong">Übersicht</div>
					</div>
				</div>

		</section>


		<?php else : ?>

		<section class="hero">

				<div id="" class="hero" data-navigation="false" data-navigationKeys="false" data-autoplay="false" data-slidesToScroll="0">

					<div class='has-background'>
						<img class="is-background hero" src=" <?php the_post_thumbnail(); ?>
						<div class="h1__container">
							<div class="h1--light"><?php the_field( 'h1_light'); ?></div>
							<div class="h1--strong"><?php the_field( 'h1_strong'); ?></div>
						</div>
					</div>

		</section>

		<?php endif; ?>

		<?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>

