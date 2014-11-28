<?php get_header(); ?>

	<!-- Loop normal -->
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		// this is the inside of the loop
		<?php endwhile; ?>
	<?php endif; ?>
	
	<!-- Loop Multiple -->
	<?php
	// The Query
	$the_query = new WP_Query( $args );
	// The Loop
	while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	
	        
	        <!--Contenido del post -->  
	<?php endwhile;
	// Reset Post Data
	wp_reset_postdata();
	?>
		
		<!-- Maquetado para artículos -->
		<article id="post-<?php the_ID(); ?>" <?php post_class($custom-class); ?>>
		</article>
		
		<!--Uso de thumbnails default -->
		<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('large', array('class' => 'img-responsive'));
		} else { ?>
		<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
		<?php } ?>
		
		<!--Enlaces a post siguiente y anterior -->
		<?php next_post_link(' %link ') ?>
		<?php previous_post_link('%link') ?>
		
		<!--Navegación -->
		<?php posts_nav_link(); ?>
		
	
	
	
	<!--Carga de plantilla de comentarios -->
	<?php comments_template(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
