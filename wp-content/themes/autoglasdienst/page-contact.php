<?php
/**
* Template Name: Seite Kontakt
*/

get_header(); ?>
	  
	<main>
			  
		<article class="artcile__contact-infos">
		  
			<h2 class="article__title"><strong>Infos</strong> und Möglichkeiten</h2>
			<hr class="h2__divider">
			
			<div class="">
				
				<p>Durch unsere langjährige Erfahrung und ständige Weiterentwicklung sind wir im Stande Ihnen zu bieten, wofür wir stehen:</p>
										
				<ul class="advantages">
					<li class="list-item advantage__item">professionelle und hochwertige Dienstleistung</li>
					<li class="list-item advantage__item">persönliche Beratung</li>
					<li class="list-item advantage__item">faire Preisgestaltung</li>
				</ul>
					
				<p>Genau darauf legen wir Wert und genau diese Attribute werden bei uns groß geschrieben!</p>
				
				<section class="shout-out-hero">
					<div class="shout-out-hero__body">
						<p class="shout-out-hero__text">
							Damit das möglich ist, nehmen wir uns für jeden Kunden die Zeit, die für ein optimales Ergebnis notwendig ist.
						</p>	
					</div>
				</section>
				
			</div>
			
			<p>Nutzen Sie eine unserer Kontakt-Möglichkeiten um eine Anfrage durchzuführen:</p>
			
			<section class="contact-infos columns">

				  <div class="contact-infos__phone column">
					  
					  <h3 class="contact-infos__heading">Telefon</h3>
					  
					  <p class="contact-infos__content"><a href="tel:004369911647073">+43 699 11 64 70 73</a></p>
					  
				  </div>
				  
				  
				  <div class="contact-infos__whatsapp column">
						
						<h3 class="contact-infos__heading">SMS <span class="no-uppercase">oder</span>  WhatsApp-Textnachricht</h3>
						
						<p class="contact-infos__content"><a href="tel:004369911647073">+43 699 11 64 70 73</a></p>
						
					</div>
				  
				  <div class="contact-infos__mail column">
											
					  <h3 class="contact-infos__heading">E-Mail</h3>
					  
					  <p class="contact-infos__content"><a href="mailto:office@autoglasdienst.at">office@autoglasdienst.at</a></p>
						  
				  </div>
			
			</section>
			
			<div>
				  
				  <p class="opening-hours__info">Da wir innerhalb dieser Geschäftszeiten auch mit Montagearbeiten außer Haus beschäftigt sein könnten, bitten wir um vorherige Terminvereinbarung!</p>
				  
			  </div>
			
			<section class="anfahrt__container container columns">
				
				<div class="column is-three-fifths">
		  
					<h2 class="">Anfahrt und Route</h2>
				
					<div class="contact-infos__maps container">
						
						<div class="video_wrapper" style="background-image: url( '' );">
							  <div class="video_trigger" data-source="!1m18!1m12!1m3!1d2685.273625623746!2d16.08224131627367!3d47.698524979190985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476dd1017d22918f%3A0xbfc31e1cfd5dc170!2sAutoglasdienst%20Rottensteiner!5e0!3m2!1sde!2sat!4v1605814993435!5m2!1sde!2sat" data-type="google-maps">
								<p class="text--center">Bitte klicken Sie, um die interaktive Google Map anzuzeigen. Dadurch stimmen Sie sowohl dem zugehörigen Datenaustausch mit Google als auch 
									 <a href="/datenschutz" target="_blank" rel="noopener noreferrer">den Datenschutzbestimmungen</a> zu.</p>
								<input type="button" class="button--load-more" value="Google Maps laden">
							  </div>
							  <div class="video_layer"><iframe src="" border="0" data-scaling="true" data-format="16:9"></iframe></div>
						</div>		  
						  
						<p class="map-description">Gasslweg 1, 2620 Diepolz</p>
						  
					</div>
					
				</div>
							
				<div class="opening-hours__container column column is-two-fifths">
					
					<h2 class="">Öffnungszeiten</h2>  
					
					<div class="opening-hours__range">
							
						<div class="contact-infos__days">
							Montag - Donnerstag
						</div>
							
						<div class="contact-infos__hours">
							<strong>07:00</strong> bis <strong>12:00 Uhr</strong><br/>
							<strong>13:00</strong> bis <strong>17:00 Uhr</strong>
						</div>
						
					</div>
					
					<hr class="hr--darkgrey">
																
					<div class="opening-hours__range">
							
						<div class="contact-infos__days">
							Freitag
						</div>
							
						<div class="contact-infos__hours">
							<strong>07:00</strong> bis <strong>13:00 Uhr</strong>
						</div>
							
					</div>	
										
				</div>
				
			</section>
				
			<hr class="hr--red">
		  
		</article>
		
		<?php echo do_shortcode("[services]"); ?>
				
		<?php echo do_shortcode("[work_and_partners]"); ?>
		
	</main>
		
<?php get_footer(); ?>