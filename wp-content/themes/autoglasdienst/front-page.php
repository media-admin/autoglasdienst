<?php
/**
* Template Name: Seite Homepage
*/

get_header(); ?>
	  
	<main>
			  
			<article class="article__advantages">
			  
				<h2 class="article__title"><strong>Wir sorgen</strong> für Durchblick</h2>
				<hr class="h2__divider">
				
				<div class="columns">
					
					<div class="column is-three-fifths">
					
						<p>Seit über 20 Jahren sind wir die Anlaufstelle wenn es um die Reparatur von Schäden bei der Verglasung und der Karosserie von KFZs geht.</p>
						
						<p>Dadurch genießen Sie viele Vorteile:</p>
						
						<ul class="advantages">
							<li class="list-item advantage__item">Hochqualitative Dienstleistungen</li>
							<li class="list-item advantage__item">Persönliche Beratung</li>
							<li class="list-item advantage__item">Termintreue und Pünktlichkeit</li>
							<li class="list-item advantage__item">Know-How auf neuestem Stand der Technik</li>
						</ul>
					
					</div>
				
					<div class="column is-one-third">
					
						<div class="container--grey">
							<img class="karosserie-fachbetrieb" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/Emblem_Karosserie-Fachbetrieb.svg" alt="Emblem - Karosserie-Fachbetrieb"/>
						</div>
						
						<h2 class="has-text-centered">Wir sind Ihr Fachbetrieb</h2>
					
					</div>
				
				</div>
				
				<hr class="hr--red">
			  
			</article>
			
			<?php echo do_shortcode("[services]"); ?>
			
			<article>
				  
				<h2 class="is-condensed">Wir Tun. <br/>Wir machen. <br/>Wir liefern.</h2>
				
				<p>Durch unsere langjährige Erfahrung und ständige Weiterentwicklung sind wir im Stande Ihnen zu bieten, wofür wir stehen:</p>
				
				<ul class="advantages">
					<li class="list-item advantage__item">professionelle und hochwertige Dienstleistung</li>
					<li class="list-item advantage__item">faire Preisgestaltung</li>
					<li class="list-item advantage__item">persönliche Beratung</li>
				</ul>
				
				<p>Genau darauf legen wir Wert und genau diese Attribute werden bei uns groß geschrieben!</p>
				  
			</article>
			
			<?php echo do_shortcode("[cta_anfragen]"); ?>
			
			<article>
			  
				<h2 class="article__title"><strong>Ablauf</strong> und Kosten</h2>
				<hr class="h2__divider">
				
				<p>Wir nehmen uns für Ihr Anliegen jene Zeit, die es für eine vollständige und umfassende Lösung braucht.</p>
					
				<p>Um ein professionelles Angebot bzgl. Umfang, Dauer und Kosten abgeben zu können, ist es notwendig die entsprechende Ausgangslage zu kennen.</p>
				
				<div class="steps__columns columns">
					
					<div class="step__column column is-half">
				
						<p class="header-step">Schritt 1</p>
						
						<h2>Anfrage</h2>
						
						<p>Um Ihre Anfrage bearbeiten zu können, schildern Sie uns bitte Ihr Anliegen und  halten Sie ihre Fahrzeugdaten (Zulassungsschein) bereit. Sie können uns Ihre Daten auch per E-Mail oder WhatsApp-Textnachricht übermitteln.</p>
						
						<h3 class="note__header">Hinweis:</h3>
						<p class="note__text">Anrufe via WhatsApp können leider nicht entgegengenommen werden. Wir bitten um Ihr Verständnis.</p>
				
					</div>
					
					<div class="step__column column is-half">
					
						  <p class="header-step">Schritt 2</p>
						  
						<h2>Angebot</h2>
						  
						<p>Sobald wir Ihre Anfrage bearbeitet haben, kontaktieren wir Sie zumeist telefonisch mit einem Angebot oder wir klären vorab noch wichtige Rahmenbedingungen zur Reparatur.</p>
						
						<p>In seltenen Fällen ist es notwendig, den Schaden persönlich zu begutachten um ein konkretes Angebot erstellen zu können.</p>
						
						<p>Im Schadensfall wickeln wir auch die notwendigen Arbeiten mit der Versicherung ab und entlasten Sie so.</p>
				
					</div>
					
					<div class="step__column column is-half">
				  
						<p class="header-step">Schritt 3</p>
						  
						<h2>Terminvereinbarung</h2>
						  
						<p>Wenn unser Angebot Ihren Erwartungen entspricht, wird ein Reparaturtermin vereinbart.</p>
						
					</div>
					
					<div class="step__column column is-half">				
				  
						<p class="header-step">Schritt 4</p>
						  
						<h2>Umsetzung</h2>
						  
						<p>Nun werden bei Bedarf Teile bzw. Materialen bestellt und die notwenigen Arbeiten wie vereinbart durchgeführt.</p>
						
						<p>Selbstverständlich haben wir dabei stets vereinbarte Deadlines und zugesagte  Fertigungstermine zuverlässig im Blick.</p>  
						
					</div>
					
					<div class="step__column column is-half">
				   
						<p class="header-step">Schritt 5</p>
						  
						<h2>Abholung und Verrechnung</h2>
						  
						<p>Wir informieren Sie sobald Ihr Fahrzeug tatsächlich abholbereit ist und bereiten die Unterlagen sowie die Rechnung vor.</p>
						
						<p>Als Zahlungsweisen stehen Ihnen Barzahlung, Bankomatzahlung, Überweisung (nur nach vorheriger Vereinbarung) zur Auswahl.</p>
						  
						<h3 class="note__header">Hinweis:</h3>
						<p class="note__text">Selbstverständlich kümmern wir uns bei Versicherungsschäden  direkt um die Abwicklung der Verrechnung.</p>			
						
					</div>
					
					<div class="step__column column is-half">	  
			
						<h3 class="shout-out">
							Wir haben für Sie die Antworten auf häufige Fragen übersichtlich zusammengestellt:
						</h3>
					
						<section class="hero faq-hero ">
							<div class="hero-body">
								<div class="container">
									<a class="button faq-hero__button" href="/faqs">
										FAQs
									</a>
								</div>
							</div>
						</section>
			
					</div>
			
			</article>
			
			<?php echo do_shortcode("[work_and_partners]"); ?>
					
			<?php echo do_shortcode("[opening_hours]"); ?>
		
		</main>
				
		<?php get_footer(); ?>