<?php
/**
* Template Name: Seite Über uns
*/

get_header(); ?>
	  
	<main>
			  
		<article class="artcile__contact-infos">
		  
			<h2 class="article__title"><strong>Fokus</strong> und Fortschritt</h2>
			<hr class="h2__divider">
			
			<div class="">
				
				<p>
					Personen, die bereits bei uns waren, wissen genau: Die Gespräche rund um Lösungen und Services finden stets persönlich und auf Augenhöhe statt. Denn Kommunikation ist neben der entsprechenden Qualität ein wichtiger Faktor, damit am Ende des Tages jeder  zufrieden und sicher an sein Ziel kommt. 

				</p>
				
				<h2 class="is-condensed">Die Vision / Mission</h2>
										
				<p>
					Unser Credo ist es, aufgrund unserer langjährigen Erfahrung und ständigen Weiterentwicklung im Bereich der immer komplexer werdenden Autoverglasung, eine professionelle und hochwertige Dienstleistung anzubieten. 
				</p>
				
				<section class="shout-out-hero">
					<div class="shout-out-hero__body">
						<p class="shout-out-hero__text">
							Eine faire Preisgestaltung mit persönlicher Beratung wird bei uns groß geschrieben!
						</p>	
					</div>
				</section>
				
			</div>
			
			<h2 class="is-condensed">Wie alles begann</h2>
									
			<p>
				Im Jahr 2001 gründete Martin Rottensteiner die Marke Autoglasdienst Rottensteiner, vorerst noch zusätzlich zu seinem Hauptberuf als ausgebildeter Karrosseur. 
			</p>
			
			<p>	
				Was anfangs noch bewusst als Nebenjob begann - vor allem um die Marktsituation schrittweise kennenzulernen  wurde dann im Jahr 2006 zur kompletten Selbstständigkeit ausgebaut. Zudem fand in diesem Jahr der Standortwechsel, auf die jetzt aktuelle Firmenadresse statt. 
			</p>
			
			<p>
				2013 wurde zusätzlich zum schon bestehenden Gewerbe Autoverglasung eine Gewerbeberechtigung für Karrosseriebautechnik eingetragen. 
			</p>
			
			<p>
				In den letzten 20 Jahren konnten wir uns durch Eigenschaften, wie unter anderem Genauigkeit, Verlässlichkeit und Ehrlichkeit einen beachtlichen Kundenstamm aufbauen, auf den wir sehr stolz sind und den wir sehr schätzen. Zur Zeit besteht das Team "Autoglasdienst" aus drei Personen.
			</p>
			
			<h2 class="is-condensed">Zur Person</h2>
			
			<div class="columns">
				
				<div class="column">
					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/AGD_Rottensteiner-904_web.jpg">
				</div>
								
				<div class="column">
					<h3 class="section-title">Martin Rottensteiner, Jahrgang 1972</h3>
					<ul class="milestones-list">
						<li class="milestones-list__item"><strong>2013 </strong>Gewerbeerweiterung Karosseriebautechnik</li>
						<li class="milestones-list__item"><strong>2001 </strong>Gewerbegründung Autoverglasung</li>
						<li class="milestones-list__item"><strong>1997-1998 </strong>Ausbildung zum Karosserietechniker</li>
						<li class="milestones-list__item"><strong>Mai 1992 </strong>Lehrabschlussprüfung Karosseur und KFZ-Mechaniker</li>
						<li class="milestones-list__item"><strong>1987-1992 </strong>Karosseur und KFZ-Mechanikerlehre</li>
					</ul>
				</div>
				
			</div>
			
			<h3 class="section-title">Weiterbildungen</h3>
			<div class="columns">
				
				<div class="column">
					
					<ul class="course-list">
						<li class="course-list__item">Scheibenspezialkurs „Austrenn-und Klebetechniken“</li>
						<li class="course-list__item">Periodische Weiterbildungen §57A Begutachtung</li>
						<li class="course-list__item">Scheibenfolienverlegekurse SunTek</li>
						<li class="course-list__item">3M Lackfolien-Weiterbildungskurs „3M Vehicle Graphics Advanced Training“</li>
						<li class="course-list__item">Lackfolierkurs „Folieren statt Lackieren“</li>
						<li class="course-list__item">Autoglasersatz-Seminar</li>
						<li class="course-list__item">Seminar „Autoglas wird zum High-Tech-Fahrzeugteil“</li>
						<li class="course-list__item">Scheibenfolienverlegekurse Foliatec</li>
					</ul>
				</div>
				
			</div>
			
			<hr class="hr--red">
						
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
				
			<hr class="hr--red">
		  
		</article>
		
		<?php echo do_shortcode("[services]"); ?>
				
		<?php echo do_shortcode("[work_and_partners]"); ?>
		
	</main>
		
<?php get_footer(); ?>