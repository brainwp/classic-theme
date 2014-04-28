<?php

/**
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_produtos' );

/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_produtos() {

    /**
     * Labels customizados para o tipo de post
     */
    $labels = array(
	    'name' => _x('Produtos', 'post type general name'),
	    'singular_name' => _x('Produto', 'post type singular name'),
	    'add_new' => _x('Novo Produto', 'projeto'),
	    'add_new_item' => __('Novo Produto'),
	    'edit_item' => __('Editar Produto'),
	    'new_item' => __('Novo Produto'),
	    'all_items' => __('Todos Produtos'),
	    'view_item' => __('Ver Produto'),
	    'search_items' => __('Procurar Produto'),
	    'not_found' =>  __('Nenhum Produto Encontrado'),
	    'not_found_in_trash' => __('Nenhum Produto Encontrado no Lixo'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Produtos'
    );
    
    /**
     * Registamos o tipo de post produtos através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'projetos', array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'has_archive' => 'produtos',
	    'query_var' => true,
		'rewrite' => array(
		 'slug' => 'produtos',
		 'with_front' => false,
	    ),
	    'capability_type' => 'post',
	    
	    'hierarchical' => true,
	    'menu_position' => null,
	    'supports' => array('title','editor','thumbnail')
	    )
    );

	flush_rewrite_rules();

}