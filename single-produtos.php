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
					<?php $relacionados = new WP_Query( array( 'post_type' => 'produtos', 'posts_per_page' => 4 ) ); ?>
					<?php while ( $relacionados->have_posts() ) : $relacionados->the_post(); ?>
					<?php if ( has_post_thumbnail() ) {
						$thumb_relacionados = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						} else {
						$thumb_relacionados = get_template_directory_uri() . "/images/default-classic-500.png";
					} ?>
					<li><img src="<?php echo $thumb_relacionados; ?>">
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
					</li>

					<?php endwhile; wp_reset_query(); ?>
				</ul>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>