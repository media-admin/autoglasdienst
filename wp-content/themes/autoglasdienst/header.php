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
		
		<meta property="og:image" content="<?php the_post_thumbnail();?>" />
		
		
		<!-- Import FontAwesome-->
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/vendor/fontawesome-free-5.14.0-web/css/all.min.css">
		
		
		<!-- Import Bulma Framework-->
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/vendor/bulma-0.9.0/css/bulma.min.css">
				
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/vendor/bulma-carousel-4.0.4/bulma-carousel.min.css">	
		
		
		
		
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/vendor/dywc_1.1/dywc.css" >	
		
		
		<!-- Import Theme Styles-->	
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/style.css">
		
		
		<!-- Import JQery 1.4.3 -->
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/vendor/jquery-1.4.3/jquery.min.js"></script>
			
		<!-- Import Bulma Extensions-->
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/vendor/bulma-carousel-4.0.4/bulma-carousel.min.js"></script>
		
		<!-- Import Theme Scripts-->		
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/carousel-slider.js"></script>

		<!-- Button Back-to-Top -->
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/button-back-to-top.js"></script>
		
		
		
		
		<!-- Import Cookie Notice Scripts-->		
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/vendor/dywc_1.1/dywc.js"></script>
		
		
		
		
		
		
		
		<script>
			
			  document.addEventListener("DOMContentLoaded", function() {
			
			  dywc.init({
			
			   cookie_version: 1, // Version der Cookiedefinition, damit bei Konfigurationsänderung erneutes Opt-In erforderlich wird
			   cookie_name: 'dywc', // Name des Cookies, der zur Speicherung der Entscheidung verwendet wird
			   cookie_expire: 31536e3, // Laufzeit des Cookies in Sekunden (31536e3 = 1Jahr)
			   cookie_path: '/', // Pfad auf dem der Cookie gespeichert wird
			   mode: 1, // 1 oder 2, bestimmt den Buttonstil 
			   bglayer: true, // Verdunklung des Hintegrundes aktiv (true) oder inaktiv (false)
			   position: 'mt', // mt, mm, mb, lt, lm, lb, rt, rm, rb
			
			   id_bglayer: 'dywc_bglayer',
			   id_cookielayer: 'dywc',
			   id_cookieinfo: 'dywc_info',
			
			   url_legalnotice: '/datenschutzerklaerung', // or null
			   url_imprint: '/impressum', // or null
			
			   text_title: 'Datenschutzeinstellungen',
			   text_dialog: 'Wir nutzen Cookies auf unserer Website. Einige von ihnen sind essenziell, während andere uns helfen, diese Website und Ihre Erfahrung zu verbessern.',
			
			   cookie_groups: [
				{
				 label: 'Notwendig',
				 fixed: true,
				 info: 'Zum Betrieb der Seite notwendige Cookies:',
				 cookies: [
				  {
				   label: 'PHP Session Cookie',
				   publisher: 'Eigentümer dieser Website',
				   aim: 'Absicherung Kontaktformular / SPAM Schutz',
				   name: 'PHPSESSID',
				   duraction: 'Session'
				  }, {
				   label: 'Cookiespeicherung Entscheidungscookie',
				   publisher: 'Eigentümer dieser Website',
				   aim: 'Speichert die Einstellungen der Besucher bezüglich der Speicherung von Cookies.',
				   name: 'dywc',
				   duration: '1 Jahr'
				  }
				 ]
				}, {
					label: 'Erleichterte Bedienung',
					fixed: false,
					info: 'Cookies zur Erleichterung der Bedienung für den Benutzer:',
					cookies: [
							{
								label: 'Google Maps',
								publisher: 'Google LLC',
								aim: 'Cookie von Google für die Nutzung von Google Maps.',
								name: 'NID',
								duration: '6 Monate'
						   }
						],
						
							accept: function() {
								
								dywc.log("Load Statistic Tracking"); 
				 
								/* Document Ready Script */
								document.ready = function( callback ) {
								  
									if( document.readyState != 'loading' ) {
										callback();
									}
									else {
										document.addEventListener( 'DOMContentLoaded', callback );
									}
								  
								};
		  
								/* Automatically resize the iFrame */
								var iFrame2C = {};
								iFrame2C.rescale = function( iframe, format ) {
								  
									let formatWidth = parseInt( format.split(':')[0] );
									let formatHeight = parseInt( format.split(':')[1] );
									let formatRatio = formatHeight / formatWidth;
									var iframeBounds = iframe.getBoundingClientRect();
								  
									let currentWidth = iframeBounds.width;
									let newHeight = formatRatio * currentWidth;
								  
									iframe.style.height = Math.round( newHeight ) + "px";
								};
		  
								/* Resize iFrame */
								function iframeResize() {
								  
									var iframes = document.querySelectorAll( 'iframe[data-scaling="true"]' );
									if( !!iframes.length ) {
										for( var i=0; i < iframes.length; i++ ) {
											let iframe = iframes[ i ];
											let videoFormat = '16:9';
											let is_data_format_existing = typeof iframe.getAttribute( 'data-format' ) !== "undefined";
											if( is_data_format_existing ) {
												let is_data_format_valid = iframe.getAttribute( 'data-format' ).includes( ':' );
												if( is_data_format_valid ) {
													videoFormat = iframe.getAttribute( 'data-format' );
												}
											}
											iFrame2C.rescale( iframe, videoFormat );
										}
									}
								}
		  
								/* Event Listener on Resize for iFrame-Resizing */
								document.ready( function() {
									window.addEventListener( "resize", function() {
										iframeResize();
									});
									iframeResize();
								});
		  
								/* Source-URLs */
								/*
								 data_type will be the value of the attribute "data-type" on element "video_trigger"
								 data_souce will be the value of the attribute "data-source" on element "video_trigger", which will be replaced on "{SOURCE}"
								*/
								function get_source_url( data_type ) {
								  
									switch( data_type ) {
										
										case "google-maps":
											return "https://www.google.com/maps/embed?pb={SOURCE}";
										default: break;
									}
								}
		  
								/* 2-Click Solution */
								document.ready( function() {
								  
									var video_wrapper = document.querySelectorAll( '.video_wrapper' );
								  
									if( !!video_wrapper.length ) {
										for( var i=0; i < video_wrapper.length; i++ ) {
											let _wrapper = video_wrapper[ i ];
											
											var video_triggers = _wrapper.querySelectorAll( '.video_trigger' );
											if( !!video_triggers.length ) {
												
												for( var l=0; l < video_triggers.length; l++ ) {
													
													var video_trigger = video_triggers[ l ];
													var accept_buttons = video_trigger.querySelectorAll( 'input[type="button"]' );
								  
													if( !!accept_buttons.length ) {
														for( var j=0; j < accept_buttons.length; j++ ) {
								  
															var accept_button = accept_buttons[ j ];
															accept_button.addEventListener( "click", function() {
								  
																var _trigger = this.parentElement;
																var data_type = _trigger.getAttribute( "data-type" );
																var source = "";
																_trigger.style.display = "none";
								  
																source = get_source_url( data_type );
								  
																var data_source = _trigger.getAttribute( 'data-source' );
																source = source.replace( "{SOURCE}", data_source );
								  
																var video_layers = _trigger.parentElement.querySelectorAll( ".video_layer" );
																if( !!video_layers.length ) {
																	for( var k=0; k < video_layers.length; k++ ) {
								  
																		var video_layer = video_layers[ k ];
																		video_layer.style.display = "block";
																		video_layer.querySelector( "iframe" ).setAttribute( "src", source );
								  
																	}
																}
								  
																_wrapper.style.backgroundImage = "";
																_wrapper.style.height = "auto";
								  
																var timeout = 100; // ms
																setTimeout( function() {
																	iframeResize();
																}, timeout );
															});
														}
													}
												}
											}
										};
									}
								});   
							},
						   
						reject: function() {
							
							dywc.log("Reject Statistic Tracking");
							
						}
						 
				}, {
							
				 label: 'Statistiken',
				 fixed: false,
				 info: 'Cookies die zur Auswertung des Benutzerverhaltens notwendig sind:',
				 cookies: [
				  {
				   label: 'Google Analytics',
				   publisher: 'Google LLC',
				   aim: 'Cookie von Google für Website-Analysen. Erzeugt statistische Daten darüber, wie der Besucher die Website nutzt.',
				   name: '_ga,_gid',
				   duration: '2 Jahre'
				  }
				 ],
				 accept: function() {
			
					dywc.log("Load Statistic Tracking");
			
					var el = document.createElement('script');
					el.src = 'https://www.googletagmanager.com/gtag/js?id=G-K1MSE6Z6X6';
					el.async = 1;
					document.getElementsByTagName('head')[0].appendChild(el);
					
					window.dataLayer = window.dataLayer || [];
					
					function gtag(){dataLayer.push(arguments);}
					gtag('js', new Date());
					
					gtag('config', 'UA-189126009-1', { 'anonymize_ip': true });						
					gtag('config', 'G-K1MSE6Z6X6', { 'anonymize_ip': true });
					
				},
				 
				 reject: function() {
					 
					dywc.log("Reject Statistic Tracking");
					
					var el = document.createElement('script');
					el.src = 'https://www.googletagmanager.com/gtag/js?id=G-K1MSE6Z6X6';
					el.async = 1;
					document.getElementsByTagName('head')[0].appendChild(el);
					
					window['ga-disable-G-K1MSE6Z6X6'] = true;
					window.dataLayer = window.dataLayer || [];
					
					function gtag(){dataLayer.push(arguments);}
					gtag('js', new Date());
					
					gtag('config', 'UA-189126009-1', { 'anonymize_ip': true });						
					gtag('config', 'G-K1MSE6Z6X6', { 'anonymize_ip': true });
					
				 }
				}
			   ]
			
			  });
			
			});
			  
		</script>
		
		
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
					$(document).ready(function() {
						
						// Check for click events on the navbar burger icon
						$(".navbar-burger").click(function() {
						
							// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
							$(".navbar-burger").toggleClass("is-active");
							$(".navbar-menu").toggleClass("is-active");
						
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
	  
	  