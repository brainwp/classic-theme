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
					$current_term = $wp_query->queried_object;
					var_dump($current_term);
					echo $current_term->slug;
					$args_r = array(
						'post_type' => 'produtos',
						'posts_per_page' => 3,
						'tipos' => $current_term->slug,
					);
					$relacionados = new WP_Query( $args_r ); ?>
					<?php while ( $relacionados->have_posts() ) : $relacionados->the_post(); ?>
					<?php if ( has_post_thumbnail() ) {
						$thumb_relacionados = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
						} else {
						$thumb_relacionados = get_template_directory_uri() . "/images/default-classic-500.png";
					} ?>
					<li><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_relacionados; ?>"></a>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</li>

					<?php endwhile; wp_reset_query(); ?>
				</ul>
			</div><!-- .content-1100 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>