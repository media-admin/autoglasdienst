<?php


	function cta_anfragen_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/cta_anfragen_shortcode');
		return ob_get_clean();
	}

	add_shortcode( 'cta_anfragen', 'cta_anfragen_shortcode' );



	function cta_partners_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/cta_partners_shortcode');
		return ob_get_clean();
	}

	add_shortcode( 'cta_partners', 'cta_partners_shortcode' );



	function opening_hours_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/opening_hours_shortcode');
		return ob_get_clean();
	}

	add_shortcode( 'opening_hours', 'opening_hours_shortcode' );



	function services_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/services_shortcode');
		return ob_get_clean();
	}

	add_shortcode( 'services', 'services_shortcode' );



	function work_and_partners_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/work_and_partners_shortcode');
		return ob_get_clean();
	}

	add_shortcode( 'work_and_partners', 'work_and_partners_shortcode' );



	function contact_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/contact_shortcode');
		return ob_get_clean();
	}

	add_shortcode( 'contact', 'contact_shortcode' );



	function show_tags() {
		$post_tags = get_the_tags();
		$separator = ' | ';
		if (!empty($post_tags)) {
			foreach ($post_tags as $tag) {
				$output .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>' . $separator;
			}
			return trim($output, $separator);
		}
	}



	function show_all_posts_shortcode() {
		ob_start();
		get_template_part( 'shortcodes/show_all_posts_shortcode');
		return ob_get_clean();
	}

	add_shortcode( 'show_all_posts', 'show_all_posts_shortcode' );

?>