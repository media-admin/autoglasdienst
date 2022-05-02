<?php
/**
 * Theme Funktionen und allgemeine Definitionen für die Website "autoglasdienst.at"
 */

/* Allgemeine Theme Funktionen */

function autoglasdienst_features() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'gallery' ) );
}

add_action('initafter_setup_theme', 'autoglasdienst_features');


/* Beitragsbild aktivieren  */

if ( ! function_exists( 'theme_slug_setup' ) ) :
	function theme_slug_setup() {
		add_theme_support( 'post-thumbnails' );
	}
endif;

add_action( 'after_setup_theme', 'theme_slug_setup' );


/* Custom Background  */
add_theme_support( 'custom-background' );


/* Activate the Excerpt on Pages */

function kb_page_excerpts() {
  add_post_type_support( 'page', 'excerpt' );
}

add_action( 'init', 'kb_page_excerpts' );


/* Styles and Scripts */

function autoglasdienst_register_styles() {

	// Import FontAwesome
	wp_register_style( 'fontawesome', get_template_directory_uri() . '/vendor/fontawesome-free-5.14.0-web/css/all.min.css' );
	wp_enqueue_style( 'fontawesome' );

	// Import Bulma Framework
	wp_register_style( 'bulma-framework', get_template_directory_uri() . '>/vendor/bulma-0.9.0/css/bulma.min.css' );
	wp_enqueue_style( 'bulma-framework' );

	// Import Bulma Carousel
	wp_register_style( 'bulma-carousel', get_template_directory_uri() . '/vendor/bulma-carousel-4.0.4/bulma-carousel.min.css' );
	wp_enqueue_style( 'bulma-carousel' );

	// Import Cookie Script Stylesheets
	wp_register_style( 'cookie-style', get_template_directory_uri() . '/vendor/dywc_1.1/dywc.css' );
	wp_enqueue_style( 'cookie-style' );

	//  Import Theme Styles
	wp_register_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'style' );

}

add_action( 'wp_enqueue_scripts', 'autoglasdienst_register_styles' );


function autoglasdienst_register_scripts() {

	// Import JQery 1.4.3
	wp_register_script( 'jquery-1-4-3', get_template_directory_uri() . '/vendor/jquery-1.4.3/jquery.min.js', '', null, true );
	wp_enqueue_script( 'jquery-1-4-3' );

	// Import Bulma Extensions
	wp_register_script( 'bulma-extensions', get_template_directory_uri() . '/vendor/bulma-carousel-4.0.4/bulma-carousel.min.js', '', null, true );
	wp_enqueue_script( 'bulma-extensions' );

	// Import Theme Scripts
	wp_register_script( 'theme-scripts', get_template_directory_uri() . '/assets/js/carousel-slider.js', '', null, true );
	wp_enqueue_script( 'theme-scripts' );

	// Button Back-to-Top
	wp_register_script( 'button-back-to-top', get_template_directory_uri() . '/assets/js/button-back-to-top.js', '', null, true );
	wp_enqueue_script( 'button-back-to-top' );


	// Import Cookie Notice Scripts
	wp_register_script( 'dywc', get_template_directory_uri() . '/assets/scripts/dywc.js', '', null, true );
	wp_enqueue_script( 'dywc' );

	wp_register_script( 'cookie-notice', get_template_directory_uri() . '/assets/scripts/cookie-notice.js', '', null, true );
	wp_enqueue_script( 'cookie-notice' );


}

add_action( 'wp_enqueue_scripts', 'autoglasdienst_register_scripts' );





/* Menü Support */

function autoglasdienst_register_menu() {
	register_nav_menu( 'nav-menu-main', 'Hauptnavigation', 'autoglasdienst' );
	register_nav_menu( 'footer-menu', 'Footermenü', 'autoglasdienst' );
}

add_action( 'init', 'autoglasdienst_register_menu' );



/* Navigation Walker für Hauptnavigation */

require_once('classes/bulma-navwalker.php');




/* Navigation Walker für Footermenü */

class Footer_Walker extends Walker_Nav_Menu {

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

	$classes = empty($item->classes) ? array () : (array) $item->classes;

	$class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );

		!empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';

		$output .= "<li>";
		$attributes  = 'class="footer-menu__link"';

		!empty( $item->attr_title ) and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
		!empty( $item->target ) and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
		!empty( $item->xfn ) and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
		!empty( $item->url ) and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
		$title = apply_filters( 'the_title', $item->title, $item->ID );
		$item_output = $args->before
			. "<a  $attributes>"
			. $args->link_before
			. $title
			. '</a></li>'
			. $args->link_after
			. $args->after;
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}




/* Include der Custom Shortcode Bibliothek des aktuellen Themes */

include('classes/custom-shortcodes.php');






/* Support des Dateityps SVG */

function autoglasdienst_add_upload_ext($checked, $file, $filename, $mimes){

	if(!$checked['type']){
		$wp_filetype = wp_check_filetype( $filename, $mimes );
		$ext = $wp_filetype['ext'];
		$type = $wp_filetype['type'];
		$proper_filename = $filename;

		if($type && 0 === strpos($type, 'image/') && $ext !== 'svg'){
			$ext = $type = false;
		}
		$checked = compact('ext','type','proper_filename');
	}
	return $checked;
}
add_filter('wp_check_filetype_and_ext', 'autoglasdienst_add_upload_ext', 10, 4);





/* Fügt das Slug-Adds the Slug to the body tag's class  */

function add_slug_body_class( $classes ) {
	 global $post;
  if ( isset( $post ) ) {
	 $classes[] = $post->post_name;
  }
  return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );



/* Ersetzt die IP bei Kommentaren (IP-Anonymisierung lt. DSGVO) */

function autoglasdienst_replace_comment_ip() {
   return "127.0.0.1";
}

add_filter( 'pre_comment_user_ip', 'autoglasdienst_replace_comment_ip', 50);










/* Anzeige der Vorschaubilder in der Galerie */

function autoglasdienst_get_backend_preview_thumb($post_ID) {
	$post_thumbnail_id = get_post_thumbnail_id($post_ID);
	if ($post_thumbnail_id) {
		$post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
		return $post_thumbnail_img[0];
	}
}

function autoglasdienst_preview_thumb_column_head($defaults) {
	$defaults['featured_image'] = 'Image';
	return $defaults;
}
add_filter('manage_posts_columns', 'autoglasdienst_preview_thumb_column_head');


function autoglasdienst_preview_thumb_column($column_name, $post_ID) {
	if ($column_name == 'featured_image') {
		$post_featured_image = autoglasdienst_get_backend_preview_thumb($post_ID);
			if ($post_featured_image) {
				echo '<img src="' . $post_featured_image . '" />';
			}
	}
}
add_action('manage_posts_custom_column', 'autoglasdienst_preview_thumb_column', 10, 2);






/* Erzeugung einer Breadcrumb-Navigation */

function nav_breadcrumb() {

	// $delimiter = '&raquo;';
	$delimiter = '';
	$before = '<li class="is-active">';
	$after = '</li>';

	if ( !is_home() && !is_front_page() || is_paged() ) {

		global $post;
		$homeLink = get_bloginfo('url');

		echo '<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">';
		echo '<ul>';
		echo '<li>';
			echo '<a href="' . $homeLink . '">';
				echo ' <span class="icon is-small">';
					echo '<i class="fas fa-home" aria-hidden="true"></i>';
				echo '</span>';
			echo '</a>';
		echo ' </li>';
		echo $delimiter;

		if ( is_category()) {

			global $wp_query;
			$cat_obj = $wp_query->get_queried_object();
			$thisCat = $cat_obj->term_id;
			$thisCat = get_category($thisCat);
			$parentCat = get_category($thisCat->parent);

			if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
			echo $before . single_cat_title('', false) . $after;

		} elseif ( is_day() ) {

			echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
			echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_time('d') . $after;

		} elseif ( is_month() ) {

			echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_time('F') . $after;

		} elseif ( is_year() ) {

			echo $before . get_the_time('Y') . $after;

		} elseif ( is_single() && !is_attachment() ) {

			if ( get_post_type() != 'post' ) {
			$post_type = get_post_type_object(get_post_type());
			$slug = $post_type->rewrite;

			echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;

			} else {

				$cat = get_the_category(); $cat = $cat[0];
				echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
				echo $before . get_the_title() . $after;

			}

		 } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {

		 $post_type = get_post_type_object(get_post_type());
		 echo $before . $post_type->labels->singular_name . $after;

		} elseif ( is_attachment() ) {

			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];

			echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;

		} elseif ( is_page() && !$post->post_parent ) {

			echo $before . get_the_title() . $after;

		} elseif ( is_page() && $post->post_parent ) {

			$parent_id = $post->post_parent;
			$breadcrumbs = array();

			while ($parent_id) {

				$page = get_page($parent_id);
				$breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li> ';
				$parent_id = $page->post_parent;
			}

			$breadcrumbs = array_reverse($breadcrumbs);

			foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;

		} elseif ( is_search() ) {
			echo $before . 'Ergebnisse für Ihre Suche nach "' . get_search_query() . '"' . $after;

		} elseif ( is_tag() ) {
			echo $before . 'Beiträge mit dem Schlagwort "' . single_tag_title('', false) . '"' . $after;

		} elseif ( is_404() ) {
			echo $before . 'Fehler 404' . $after;
		}

		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo ': ' . __('Seite') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}

		echo '</nav>';

	}
}












/* --- CUSTOM LOGIN BEREICH --- */

/* Eigenes Styling des Login-Bereichs */

function autoglasdienst_custom_login_stylesheet() {
	wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/templates/login/css/style-login.css' );
	wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/templates/login/css/style-login.js' );
}

add_action( 'login_enqueue_scripts', 'autoglasdienst_custom_login_stylesheet' );


/* Funktion "Remember-me" standardmäßig aktivieren */

function autoglasdienst_login_checked_remember_me() {
add_filter( 'login_footer', 'rememberme_checked' );
}

add_action( 'init', 'autoglasdienst_login_checked_remember_me' );


function rememberme_checked() {
echo "<script>document.getElementById('rememberme').checked = true;</script>";
}


/* Standardmäßige Fehlermeldung beim Anmelden überschreiben */

function autoglasdienst_login_error_override()
{
	return 'Die Zugangsdaten sind leider nicht korrekt.';
}

add_filter('login_errors', 'autoglasdienst_login_error_override');



/* Umleitung der standardmäßigen Login-Seite auf die Custom Login Page */

function autoglasdienst_redirect_login_page() {
  $login_page  = home_url( '/login/' );
  $page_viewed = basename($_SERVER['REQUEST_URI']);

  if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
	wp_redirect($login_page);
	exit;
  }
}

add_action('init','autoglasdienst_redirect_login_page');







/* Weiterleitung nach erfolgreichem Login */

function autoglasdienst_login_redirect( $redirect_to, $request, $user ) {
	//is there a user to check?
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		//check for admins
		if ( in_array( 'administrator', $user->roles ) ) {
			$redirect_to = admin_url();
			return $redirect_to;
		} else {
			return home_url();
		}
	} else {
		return $redirect_to;
	}
}

add_filter( 'login_redirect', 'autoglasdienst_login_redirect', 10, 3 );





/* Abfangen der Login-Fehlversuche */

function autoglasdienst_login_failed() {
  $login_page  = home_url( '/login/' );
  wp_redirect( $login_page . '?login=failed' );
  exit;
}

add_action( 'wp_login_failed', 'autoglasdienst_login_failed' );


function autoglasdienst_verify_username_password( $user, $username, $password ) {
  $login_page  = home_url( '/login/' );
	if( $username == "" || $password == "" ) {
		wp_redirect( $login_page . "?login=empty" );
		exit;
	}
}

add_filter( 'authenticate', 'autoglasdienst_verify_username_password', 1, 3);



/* Abfangen der Umleitung auf die Login-Seite nach dem Ausloggen */

function autoglasdienst_logout_page() {
  $login_page  = home_url( '/login/' );
  wp_redirect( $login_page . "?login=false" );
  exit;
}

add_action('wp_logout','autoglasdienst_logout_page');