<?php 
/**
 * Template Name: Home
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Classic Theme
 */

get_header(); ?>

 <div class="wrapper">
 	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="slider-home">
					<?php
					echo do_shortcode("[pjc_slideshow slide_type='Slide-Home']");
					?>
				</div>
				<?php// while ( have_posts() ) : the_post(); ?>

					<?php// get_template_part( 'content', 'page' ); ?>


				<?php// endwhile; // end of the loop. ?>
				
				<div class="area-categorias">
					<ul>
						<li class="categorias"><img src="http://127.0.0.1/WordPress-Dev/wp-content/uploads/2014/04/categoria-1.jpg" class="img-cat"></img></li>
						<li class="categorias"><img src="http://127.0.0.1/WordPress-Dev/wp-content/uploads/2014/04/categoria-1.jpg" class="img-cat"></img></li>
						<li class="categorias"><img src="http://127.0.0.1/WordPress-Dev/wp-content/uploads/2014/04/categoria-1.jpg" class="img-cat"></img></li>
						<li class="categorias"><img src="http://127.0.0.1/WordPress-Dev/wp-content/uploads/2014/04/categoria-1.jpg" class="img-cat"></img></li>
					</ul>	
				</div>


			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->
</div> <!-- .wrapper -->

<div class="faixa-inferior">
	<div class="content-inferior">
		<!-- Marcas -->
		<div class="marcas-content">
			<?php
			$marcas = "";
			$marcas = get_page_by_title( 'Marcas' );
			$thumbnail_marcas = wp_get_attachment_image_src( get_post_thumbnail_id($marcas->ID), '', false, '' );
			?>
			
			<div class="titulo-inferior"><h2><?php echo $marcas->post_title; ?></h2></div>
			<div class="thumb-inferior">
				<?php   
					$args_marcas = array(
					'post_type' => 'attachment',
					'numberposts' => -1,
					'post_status' => null,
					'post_parent' => $marcas->ID,
					'orderby' => 'menu_order',
					'order' => 'ASC'
					);

					$attachments_marcas = get_posts( $args_marcas );
					if ( $attachments_marcas ) {
						foreach ( $attachments_marcas as $attachment_cliente ) {
						$image_attributes_cliente = wp_get_attachment_image_src( $attachment_cliente->ID );
						echo '<div class="imagens-cliente">';
						echo '<img src="'.$image_attributes_cliente[0].'">';
						echo '</div>';
				  		}
					}
					?>

					<?php wp_reset_postdata(); // reset the query ?>   
					
			</div><!-- .thumb-inferior-->
				
		</div><!-- .marca-content-->
		
			<!-- Clientes -->
		<div class="clientes-content">
			<?php
			$clientes = "";
			$clientes = get_page_by_title( 'Clientes' );
			$thumbnail_clientes = wp_get_attachment_image_src( get_post_thumbnail_id($clientes->ID), '', false, '' );
			?>
			
			<div class="titulo-inferior"><h2><?php echo $clientes->post_title; ?></h2></div>
			<div class="thumb-inferior">
									<?php   
					$args_clientes = array(
					'post_type' => 'attachment',
					'numberposts' => -1,
					'post_status' => null,
					'post_parent' => $clientes->ID,
					'orderby' => 'menu_order',
					'order' => 'ASC'
					);

					$attachments_clientes = get_posts( $args_clientes );
					if ( $attachments_clientes ) {
						foreach ( $attachments_clientes as $attachment_cliente ) {
						$image_attributes_cliente = wp_get_attachment_image_src( $attachment_cliente->ID );
						echo '<div class="imagens-cliente">';
						echo '<img src="'.$image_attributes_cliente[0].'">';
						echo '</div>';
				  		}
					}
					?>

					<?php wp_reset_postdata(); // reset the query ?>   
			</div><!-- .thumb-inferior-->
				
		</div><!-- .clientes-content-->
	</div><!-- .content-inferior-->	
</div><!-- .faixa-inferior-->	
	
<?php get_footer(); ?>
