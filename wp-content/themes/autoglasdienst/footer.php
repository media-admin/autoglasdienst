<footer>

	<div class="has-text-centered">

		<nav class="footer__menu">

			<ul>

				<?php

					wp_nav_menu(array(
						'menu' => 'footer-menu',
						'items_wrap'=> '%3$s',
						'walker' => new Footer_Walker(),
						'container'=>'<ul>',
						'menu_class' => '',
						'theme_location'=>'Footermenü',
						'fallback_cb'=>false
					));

				?>

			</ul>

		</nav>
	</div>

	<div class="footer__social-media">
		<ul>
			<li><a class="footer-sm-link__facebook" href="https://www.facebook.com/autoglasdienst" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
			<li><a class="footer-sm-link__instagram" href="https://www.instagram.com/autoglasdienst_rottensteiner/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
		</ul>

	</div>

	<div class="footer__logo">
		<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/Logo-white.svg" alt="Logo weiß - Autoglasdienst Martin Rottensteiner">
	</div>

</footer>

<div class="bottom__bar">&nbsp;</div>

</div>

<?php wp_footer();?>

</body>

</html>