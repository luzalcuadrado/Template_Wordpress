<?php get_header(); ?>

<!-- Ejemplo de un loop normal -->	
	<?php if (have_posts()) : // Inicio del loop ?>
	
		<?php while (have_posts()) : the_post(); //Loop de TODOS los posts que hay en el sitio ?>
	
			<article id="post-<?php the_ID(); ?>" <?php post_class($custom-class); ?>>
				<header>
					<h1><?php the_title(); ?></h1>
					<time datetime="<?php the_time('c'); ?>" pubdate="pubdate"><?php the_time('F jS, Y'); ?></time>
					<p>by <?php the_author() ?></p>
				</header>
				
				<div class="entry">
					
		
					<!--Uso de thumbnails default -->
					<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('large', array('class' => 'img-responsive'));
					} else { ?>
					<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
					<?php } ?>
					<?php the_content(); ?>
				</div>
							
				<footer id="post-meta-data">
					<ul class="no-bullet">
						<li class="add-comment"><?php comments_popup_link('Comentarios', '1 Comentaio', '% Comentarios'); ?></li>
						<li>Categoría: <?php the_category(', ') ?></li>
						<li><?php edit_post_link('[Editar]', '<small>', '</small>'); ?></li>
						<li><?php the_tags('Eriquetas: ', ', ', '<br />'); ?></li>
					</ul>
				</footer>
			
			</article>

				
		<?php endwhile; //Final del loop ?>

		<!--INICIO: navegacióm-->
		<?php if ( $wp_query->max_num_pages > 1 ) : // si hay más de 1 página se activa la navegación ?>
			<nav id="page-nav">
		        <ul class="clearfix">
			        <li class="next-link"><?php next_posts_link('Página siguiente') ?></li>
			        <li class="prev-link"><?php previous_posts_link('Página Anterior') ?></li>
		        </ul>
	        </nav>
		<?php endif; ?>
		<!--FIN: Navegación-->
		
<?php else : ?>

	<h2>No se encontraron posts</h2>

<?php endif; //FIN: Loop ?>

<!-- FIN: Ejemplo de loop normal -->

<?php get_sidebar(); //Carga el archivo sidebar.php ?>

<?php get_footer(); ?>
