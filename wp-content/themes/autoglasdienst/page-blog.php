<?php 
/**
* Template Name: Seite Blog Übersicht
*/
get_header(); ?>

<main>
	
	<section class="section__archive">
		
		<div class="container">
			
			<div class="columns is-3">
				
				<?php echo do_shortcode("[all_posts]"); ?>				
				
			</div>
		
		</div>
		
	</section>
		
	
	<hr class="hr--red">
	
	<?php echo do_shortcode("[contact]"); ?>
	
	<hr class="hr--red">
	
	<?php echo do_shortcode("[services]"); ?>
			
	<?php echo do_shortcode("[work_and_partners]"); ?>
	
	<?php echo do_shortcode("[opening_hours]"); ?>
	

</main>

<?php get_footer(); ?>