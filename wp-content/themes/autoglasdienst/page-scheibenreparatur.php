<?php
/**
* Template Name: Seite Scheibenreparatur
*/

get_header(); ?>

	<main>

		<article class="artcile__contact-infos">

			<h2 class="article__title"><strong>In nur 60</strong> Minuten erledigt</h2>
			<hr class="h2__divider">

			<div class="">

				<p>
					Mit einer speziellen Reparaturmethode beseitigen wir Steinschlagschäden auf Ihrer Windschutzscheibe. Durch diese Maßnahme wird sichergestellt, dass Ihre Verbundglas-Windschutzscheibe nicht springen kann und somit auch nicht ausgetauscht werden muss.
				</p>

				<div class="columns">

					<section class="column is-three-fifths">
						<div class="shout-out__body">
							<p class="shout-out__text">
								Nach der Reparatur ist der Schaden kaum mehr sichtbar – <span class="shout-out__text-strong">die  Scheibe bleibt funktionsfähig</span> und bietet wieder <span class="shout-out__text-strong">volle Sicherheit</span>.
							</p>
						</div>
					</section>

					<section class="column is-two-fifths">
						<p class="shout-out__hinweis">
							<span class="is-underlined">HINWEIS:</span> Bitte melden Sie sich möglichst schnell nach Entstehen des Steinschlagschadens, da eingedrungener Schmutz und Feuchtigkeit das Endergebnis der Reparatur optisch beeinflussen.
						</p>
					</section>

				</div>

			</div>

			<?php echo do_shortcode("[cta_anfragen]"); ?>

			<div class="columns">

				<div class="column is-three-fifths">
					<h3 class="shout-out">Die Dauer der Reparatur beläuft sich in etwa auf eine Stunde.</h3>
					<p>Bei Bedarf steht für Sie in diesem Zeitraum ein Reparatur-Ersatzwagen zur Verfügung.</p>
					<a class="shout-out__booking-link" href="https://www.calengoo.com/booking/autoglasdienst_martin_rottensteiner/" target="_blank">Termin online buchen</a>
					<p class="shout-out__text-strong">Wir haben für Sie die Antworten auf häufige Fragen übersichtlich zusammengestellt:</p>
				</div>

				<div class="hero faq-hero column is-two-fifths">
					<div class="hero-body">
						<div class="container">
							<a class="button faq-hero__button" href="/faq-scheibenreparatur">
								FAQs
							</a>
						</div>
					</div>
					<p class="faq-hero__hinweis">Scheibenreparatur</p>
				</div>

			</div>

		</article>

		<?php echo do_shortcode("[services]"); ?>

		<?php echo do_shortcode("[work_and_partners]"); ?>

		<?php echo do_shortcode("[opening_hours]"); ?>

	</main>

<?php get_footer(); ?>