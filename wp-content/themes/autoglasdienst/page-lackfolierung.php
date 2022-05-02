<?php
/**
* Template Name: Seite Lackfolierung
*/

get_header(); ?>
	  
	<main>
			  
		<article class="artcile__contact-infos">
		  
			<h2 class="article__title"><strong>Folie ist</strong> der neue Lack</h2>
			<hr class="h2__divider">
			
			<div class="">
				
				<p>
					<strong>Lackfolierung und Klebebeschriftung</strong><br><br>
					Wir folieren ihren Lack mit Spezialfolie nach dem Motto
				</p>
				
				<div class="shout-out__body">
					<p class="shout-out__text">
						<span class="shout-out__text-strong">Folieren</span> statt <span class="shout-out__text-strong">Lackieren</span>.
					</p>	
				</div>
				
				<p>
					Dadurch erhalten Sie eine neue und schöne Optik, die jederzeit leicht und rückstandsfrei wieder ablösbar ist.
				</p>
				
				<p>
					Weiters bieten wir auch einfache Klebebeschriftungen nach Ihrem persönlichen Kundenwunsch an.
				</p>
					
			</div>
			
			<?php echo do_shortcode("[cta_anfragen]"); ?>
			
			<div class="columns">
				
				<div class="column is-three-fifths">
					<h3 class="shout-out">Die Dauer der Folierung variiert  je nach Fahrzeug und Fläche.</h3>
					<p>Bei Bedarf steht für Sie in diesem Zeitraum ein Reparatur-Ersatzwagen zur Verfügung.</p>
					<p class="shout-out__text-strong">Wir haben für Sie die Antworten auf häufige Fragen übersichtlich zusammengestellt:</p>
				</div>
				
				<div class="hero faq-hero column is-two-fifths">
					<div class="hero-body">
						<div class="container">
							<a class="button faq-hero__button" href="/faq-lackfolierung">
								FAQs
							</a>
						</div>
					</div>
					<p class="faq-hero__hinweis">Lackfolierung</p>
				</div>
				
			</div>
		  
		</article>
		
		<?php echo do_shortcode("[services]"); ?>
				
		<?php echo do_shortcode("[work_and_partners]"); ?>
		
		<?php echo do_shortcode("[opening_hours]"); ?>
		
	</main>
		
<?php get_footer(); ?>