<?php

/* --- CUSTOM POST TYPES --- */


function autoglasdienst_post_types() {
	add_post_type_support( 'team', 'thumbnail' );    
	add_post_type_support( 'team', 'excerpt' );
	
	add_filter( 'autoglasdienst_gallery_metabox_post_types', function( $types ) {
		$types[] = 'gallery';
		return $types;
	} );
	

	
	/* Custom Post Type "FAQ" */
	
	register_post_type( 'faq', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'taxonomies' => array( 'faq-kategorien' ),
		'labels' => array(
			'name' =>  'FAQs',
			'add_new' => 'Neue FAQ erstellen',
			'edit_item' => 'FAQ bearbeiten',
			'singular_name' => 'FAQ',
			'all_items' => 'Alle FAQs',
			'supports' => array('title', 'editor', 'author', 'custom-fields', ),
		),
		'has_archive' => false,
		'exclude_from_search' => false,
		'rewrite' => array('slug' => 'faq', 'with_front' => true, 'pages' => true, 'feeds' => true,),
		'menu_position' => 8,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-lightbulb'
	));
	
	
	
	/* Custom Post Type "HINWEISE" */
	
	register_post_type( 'hinweis', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'labels' => array(
			'name' =>  'Hinweise',
			'add_new' => 'Neuen Hinweis erstellen',
			'edit_item' => 'Hinweis bearbeiten',
			'singular_name' => 'Hinweis',
			'all_items' => 'Alle Hinweise',
			'supports' => array('title', 'editor', 'author', 'custom-fields', ),
		),
		'has_archive' => false,
		'exclude_from_search' => false,
		'rewrite' => array('slug' => 'hinweise'),
		'menu_position' => 9,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-bell'
	));
	
}



	function autoglasdienst_taxonomies() {
		
		/* Custom Taxonomie "FAQ-KATEGORIE" */
		
	  $labels = array(
		'name' => _x( 'FAQ-Kategorien', 'taxonomy general name' ),
		'singular_name' => _x( 'FAQ-Kategorie', 'taxonomy singular name' ),
		'search_items' =>  __( 'FAQ-Kategorien durchsuchen' ),
		'popular_items' => __( 'Meist benutzte FAQ-Kategorien' ),
		'all_items' => __( 'Alle FAQ-Kategorien' ),
		'parent_item' => __( 'Übergeordnete FAQ-Kategorie' ),
		'parent_item_colon' => __( 'Übergeordnete FAQ-Kategorien:' ),
		'edit_item' => __( 'FAQ-Kategorie bearbeiten' ),
		'update_item' => __( 'FAQ-Kategorie aktualisieren' ),
		'add_new_item' => __( 'Neue FAQ-Kategorien hinzufügen' ),
		'new_item_name' => __( 'Name der neuen FAQ-Kategorien' ),
	  );
	  
	  
	  register_taxonomy('faq-kategorien', array('faqs'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'faqs' ),
		
	  ));
	  
	}

add_action('init', 'autoglasdienst_post_types');

add_action( 'init', 'autoglasdienst_taxonomies', 0 );



?>