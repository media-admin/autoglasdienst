<?php 

/**
* Template Name: Seite FAQ Überblick
*/

get_header(); ?>

<main>
		  
	<article class="article__services">
		
		<h2 class="article__title"><strong>Die Themen</strong> im Überblick</h2>
		<hr class="h2__divider">
		
		<div class="container">
		  			
			<div class="services column">
			
				<div class="faq-card">
					
					<a href="/faq-scheibenreparatur">
					
						<img class="faq__img is-background" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_scheibenreparatur.jpg" alt="">
						
						<div class="faq-card__box">	
							<h3 class="faq__title">FAQ - Scheiben<strong class="faq__title--strong">reparatur</strong></h3>
						</div>
					
					</a>
					
				</div>
				
				<div class="faq-card">
					
					<a href="/faq-scheibentausch">
					
						<img class="faq__img is-background" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_scheibentausch.jpg" alt="">
						
						<div class="faq-card__box">	
							<h3 class="faq__title">FAQ - Scheiben<strong class="faq__title--strong">tausch</strong></h3>
						</div>
					
					</a>
					
				</div>
				
				<div class="faq-card">
					
					<a href="/faq-scheibentoenung">
						
						<img class="faq__img is-background" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_scheibentoenung.jpg" alt="">
					
						<div class="faq-card__box">	
							<h3 class="faq__title">FAQ - Scheiben<strong class="faq__title--strong">tönung</strong></h3>
						</div>
					
					</a>
					
				</div>
				
				<div class="faq-card">
					
					<a href="/faq-scheinwerferaufbereitung">
					
						<img class="faq__img is-background" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_scheinwerferaufbereitung.jpg" alt="">
						
						<div class="faq-card__box">	
							<h3 class="faq__title">FAQ - Scheinwerfer<strong class="faq__title--strong">aufbereitung</strong></h3>
						</div>
					
					</a>
					
				</div>
				
				<div class="faq-card">
					
					<a href="/faq-kamerakalibrierung">
						
						<img class="faq__img is-background"  src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_kamerakalibrierung.jpg" alt="">
						
						<div class="faq-card__box">	
							<h3 class="faq__title">FAQ - Kamera<strong class="faq__title--strong">kalibrierung</strong></h3>
						</div>
					
					</a>
					
				</div>
				
				<div class="faq-card">
					
					<a href="/faq-lackfolierung">
					
						<img class="faq__img is-background"  src="<?php bloginfo( 'template_directory' ); ?>/assets/img/hero_lackfolierung.jpg" alt="">
						
						<div class="faq-card__box">	
							<h3 class="faq__title">FAQ - Lack<strong class="faq__title--strong">folierung</strong></h3>
						</div>
					
					</a>
					
				</div>
				
			</div>
		
		</div>
		  
	</article>
		
	<?php echo do_shortcode("[cta_anfragen]"); ?>
		
	<?php echo do_shortcode("[services]"); ?>

	<?php echo do_shortcode("[work_and_partners]"); ?>
		
	<?php echo do_shortcode("[opening_hours]"); ?>
		
</main>
	
<?php get_footer(); ?>