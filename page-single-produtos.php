<?php
/**
 * Template Name: Single Produtos
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Classic Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="content-1000">
				<div class="produto-img"></div> 
				<div class="caixa-produto-descricao">

					<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>

				</div>
			</div>

			<div class="posts-rel">
				<h1>Produtos Relacionados</h1>
				<ul>
					<li><img src="#"><h2>Outro Produto</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut quam consequat, sodales massa sit amet, accumsan augue. Proin id lorem felis. Mauris tortor velit, tempus at nisl et, congue euismod enim.</p></li>
					<li><img src="#"><h2>Outro Produto</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut quam consequat, sodales massa sit amet, accumsan augue. Proin id lorem felis. Mauris tortor velit, tempus at nisl et, congue euismod enim.</p></li>
					<li><img src="#"><h2>Outro Produto</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut quam consequat, sodales massa sit amet, accumsan augue. Proin id lorem felis. Mauris tortor velit, tempus at nisl et, congue euismod enim.</p></li>
					<li><img src="#"><h2>Outro Produto</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut quam consequat, sodales massa sit amet, accumsan augue. Proin id lorem felis. Mauris tortor velit, tempus at nisl et, congue euismod enim.</p></li>
				</ul>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
