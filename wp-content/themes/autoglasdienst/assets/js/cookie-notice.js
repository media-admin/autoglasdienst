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