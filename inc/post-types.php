<?php

/***
 **Registering Post Type: Boletim Informativo
 ***/

$labels = array(
    'name'               => 'Boletim Informativo',
    'singular_name'      => 'Boletim Informativo',
    'add_new'            => 'Adicionar Novo',
    'add_new_item'       => 'Adicionar Novo Boletim Informativo',
    'edit_item'          => 'Editar Boletim Informativo',
    'new_item'           => 'Novo Boletim Informativo',
    'all_items'          => 'Todos Boletim Informativo',
    'view_item'          => 'Visualizar Boletim Informativo',
    'search_items'       => 'Buscar Boletim Informativo',
    'not_found'          => 'Nenhum Boletim Informativo Encontrado',
    'not_found_in_trash' => 'Nenhum Boletim Informativo Encontrado na Lixeira',
    'parent_item_colon'  => '',
    'menu_name'          => 'Boletins Informativos'
    );

    $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'boletim-informativo' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'supports'           => array('title','editor','author','thumbnail','excerpt')
    //'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'boletins-informativos', $args );
    
    $labels = array(
    'name'               => 'Testemunho',
    'singular_name'      => 'Testemunho',
    'add_new'            => 'Adicionar Novo',
    'add_new_item'       => 'Adicionar Novo Testemunho',
    'edit_item'          => 'Editar Testemunho',
    'new_item'           => 'Novo Testemunho',
    'all_items'          => 'Todos Testemunho',
    'view_item'          => 'Visualizar Testemunho',
    'search_items'       => 'Buscar Testemunho',
    'not_found'          => 'Nenhum Testemunho Encontrado',
    'not_found_in_trash' => 'Nenhum Testemunho Encontrado na Lixeira',
    'parent_item_colon'  => '',
    'menu_name'          => 'Testemunhos'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'testemunho' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 6,
    'supports'           => array('title','editor','author','thumbnail','excerpt')
  );
  

  register_post_type( 'testemunhos', $args );