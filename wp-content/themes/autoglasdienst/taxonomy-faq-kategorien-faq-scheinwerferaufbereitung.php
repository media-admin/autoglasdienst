<?php
/**
* Template Name: Seite FAQ Scheinwerferaufbereitung
*/

get_header(); ?>
	  
	<main>
			  
		<?php
			   
		   	$args = array(  
				'post_status' => 'publish',
				'posts_per_page' => -1, 
				'post_type' => 'faq',
				'orderby'   => 'id',
				'order' => 'ASC',
				'faq-kategorien' => 'faq-scheinwerferaufbereitung'			
			);
			
			$loop = new WP_Query( $args ); 
					
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<article class="faq-article">
				  
					<h2 class="faq__title"><?php the_title(); ?></h2>
					<hr class="faq__title-divider">
					
					<p class="faq__content">
						<?php the_content(); ?>
					</p>
					
					<hr class="hr--darkgrey">
				  
		  		</article>
				
			<?php	
				endwhile;
				wp_reset_postdata(); 	
			?>
			
			<?php echo do_shortcode("[services]"); ?>
					
			<?php echo do_shortcode("[cta_partners]"); ?>
			
			<?php echo do_shortcode("[opening_hours]"); ?>
		
	</main>
		
<?php get_footer(); ?>