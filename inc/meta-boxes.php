<?php
function ieb_register_meta_boxes( $meta_boxes ){
	$prefix = 'ieb_';

	$meta_boxes[] = array(
		'id' => 'boletins',
		'title' => __( 'Informações Adicionais', 'rwmb' ),
		'pages' => array( 'boletins'),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields'	=>	array(
							array(
								'name' => __( 'Arquivo do boletim', 'rwmb' ),
								'id' => "{$prefix}arquivo",
								'desc' => __( 'Faça o upload do arquivo, preferencialmente em PDF.', 'rwmb' ),
								'type' => 'file'
							),
						)
	);
	
	$meta_boxes[] = array(
		'id'	=>	'ministerios',
		'title'	=>	__('Informações Adicionais','rwmb'),
		'pages'	=>	array('ministerio'),
		'context'	=>	'normal',
		'autosave'	=>	true,
		'fields'	=>	array(
							array(
								'name'	=>	__('Líderes','rwmb'),
								'id'	=>	"{$prefix}lider",
								'desc'	=>	__('','rwmb'),
								'type'	=>	'text',
								'clone'	=>	true,
								'desc'	=>	'Clique no + para adicionar novos.'
							),
							array(
								'name'	=>	__('Membros','rwmb'),
								'id'	=>	"{$prefix}membros",
								'desc'	=>	__('','rwmb'),
								'type'	=>	'text',
								'clone'	=>	true,
								'desc'	=>	'Clique no + para adicionar novos.'
							),
		)
	);
	
	$meta_boxes[] = array(
		'id'	=>	'ministerios-galeria',
		'title'	=>	__('Galerias','rwmb'),
		'pages'	=>	array('ministerio'),
		'context'	=>	'normal',
		'autosave'	=>	true,
		'fields'	=>	array(
								array(
									'name' => __( 'Image Advanced Upload', 'rwmb' ),
									'id' => "{$prefix}galeria",
									'type' => 'plupload_image',
									'max_file_uploads' => 12
								),
							
		)
	);
	

	foreach ( $meta_boxes as $meta_box ){
		new RW_Meta_Box( $meta_box );
	}

}

add_action( 'admin_init', 'ieb_register_meta_boxes' );