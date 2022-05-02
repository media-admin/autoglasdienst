//
// button-back-to-top.js
//

$(document).ready(function(){

	// Der Button wird mit JavaScript erzeugt und vor dem Ende des body eingebunden.
	var back_to_top_button = ['<a href="#top" class="back-to-top"><img src="https://www.autoglasdienst.at/wp-content/themes/autoglasdienst/assets/img/Button-Top.svg"</a>'].join("");
	$("body").append(back_to_top_button)

	// Der Button wird ausgeblendet
	jQuery(".back-to-top").hide();

	// Funktion für das Scroll-Verhalten
	jQuery(function () {
		jQuery(window).scroll(function () {
			if ($(this).scrollTop() > 100) { // Wenn 100 Pixel gescrolled wurde
				jQuery('.back-to-top').fadeIn();
			} else {
				jQuery('.back-to-top').fadeOut();
			}
		});

		jQuery('.back-to-top').click(function () { // Klick auf den Button
			jQuery('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});