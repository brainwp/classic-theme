<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Classic Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="content-1000">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php _e( 'Produtos', 'classic-theme' ); ?> / <?php single_term_title(); ?> 
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

		<div class="content-1100">

					<?php
					$add_class_taxonomy = new add_class_taxonomy();
					$args = array(
						'orderby'            => 'name',
						'order'              => 'ASC',
						'style'              => 'list',
						'hide_empty'         => 0,
						'hierarchical'       => 1,
						'title_li'           => '',
						'show_option_none'   => '',
						'number'             => null,
						'current_category'   => 0,
						'taxonomy'           => 'tipos',
						'walker' => $add_class_taxonomy,
					); ?>

				<div class="nav-categorias">
					<ul>
						<?php wp_list_categories( $args ); ?> 
					</ul>	
				</div>
				<div class="produtos-archive">
					<ul>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php if ( has_post_thumbnail() ) {
								$thumb_relacionados = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
								} else {
								$thumb_relacionados = get_template_directory_uri() . "/images/default-classic-500.png";
							} ?>
							<li>
								<div class="image"><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_relacionados; ?>"></a></div>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</li>

							<?php endwhile; ?>

							<?php classic_theme_paging_nav(); ?>

						<?php else : ?>

							<?php get_template_part( 'content', 'none' ); ?>

						<?php endif; ?>
					</ul>
				</div><!-- .produtos-archive -->
			</div><!-- .content-1100-->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
