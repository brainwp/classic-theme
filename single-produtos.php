<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="content-1000">
				<div class="produto-img">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
						} else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/default-classic-500.png" alt="<?php the_title(); ?>" />
					<?php } ?>
				</div><!-- .produto-img -->
				<div class="caixa-produto-descricao">

					<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>

				</div>
			</div>

			<div class="posts-rel">
				<h1>Produtos Relacionados</h1>
				<ul>
					<?php
						$count = '';
						$orig_post = $post;
						global $post;
						$queried_term = get_query_var( 'tipos' );
						$terms = get_terms( 'tipos', 'slug='. $queried_term );
						
						if ($terms) {
						$terms_ids = array();
						foreach ($terms as $individual_term) {
							$terms_ids[] = $individual_term->term_id;
							$x = $individual_term->term_id . ",";
						}


						$x = rtrim( $x, ',' );
						$args = array(
							'post__not_in' => array( $post->ID ),
							'posts_per_page'=>4, // Number of related posts to display.
							'ignore_sticky_posts'=>1,
							'post_type' => 'produtos',
							'tax_query' => array(
												array(
													'taxonomy' => 'tipos',
													'terms' => $x,
												)
											),
							'orderby' => 'rand'
						);
						
						$my_query = new wp_query( $args );

						while( $my_query->have_posts() ) {
						$my_query->the_post();
						?>
						<?php if ( $count == 3 ) {
							$class = 'class="last-relacionado"';
						} else {
							$class = '';
						}
						; ?>
					<?php if ( has_post_thumbnail() ) {
						$thumb_relacionados = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
						} else {
						$thumb_relacionados = get_template_directory_uri() . "/images/default-classic-500.png";
					} ?>
					<li <?php echo $class; ?>><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_relacionados; ?>"></a>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</li>
						
						<? 
						$count++;
							}
						}
						$post = $orig_post;
						wp_reset_query();



?>
				</ul>
			</div><!-- .content-1100 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>