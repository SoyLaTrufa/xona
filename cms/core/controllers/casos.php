<?php

Class Casos extends MY_Controller {

    function __construct(){

        parent::__construct();


	     /////////////////////
	    /// Configuración ///
	   /////////////////////

		$controller_config["script"] = "casos";


	     //////////////////////////////
	    /// Opciones de las vistas ///
	   //////////////////////////////

        // Nombre del listado
		$controller_config["name"] = "casos";
		 $controller_config["label_add"] = "Agregar nuevo caso";

		// Drag & drop
        $controller_config["ordenar"] = true;

		// Ordeno el listado
	  //   if(! isset($_GET['order'])){
	  //   	$_GET['order'] = array(
			// 	'fecha' => 'DESC',
			// );
	  //   }

        // Acciones
        $controller_config['actions_list'] = array(
        	'editar'	=>	base_url().$controller_config['script'].'/edit/{id}/{uriParameters}',
        	'delete'	=>	'javascript:areYouSurePrompt(\''.base_url().$controller_config['script'].'/delete/{id}/{uriParameters}\');'
        );


	 	 ///////////////////////////////////
	    /// Configuración de los campos ///
	   ///////////////////////////////////

		// Opciones de filtrado
		$controller_config['campos_form'] = array(

			array(
				'key'	=>'activa',
				'label'	=>'Activa',
				'type'	=>'form_checkbox',
				'filter'=>null,
				'list'	=>true,
				'class'	=>'form-quarter block',
				'properties'=> array(
					'name'    => 'activa',
					'value'   => 1,
					'checked' => 'checked',
				)
			),

			array(
				'key'	=>'fecha',
				'label'	=>'Fecha',
				'type'	=>'date',
				'filter'=>false,
				'list'	=>true,
				'class'	=>'form-quarter block',
				'properties'=> array(
					'id'   => 'fecha',
					'name' => 'fecha',
				)
			),

			array(
				'titulo' => 'Imágenes principales',
				'key'    =>'foto_id',
				'label'  =>'Imagen en listado',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>true,
				'class'  =>'form-half',
				'comentario'  =>'Medidas: 478px x 538px (ancho x alto)',
				'properties'=> array(
					'id'       => 'foto_id',
					'name'     => 'foto_id',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'478','height'=>'538', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'    =>'foto_bg',
				'label'  =>'Background',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-half',
				'comentario'  =>'Medidas: 1440px x 900px (ancho x alto)',
				'properties'=> array(
					'id'       => 'foto_bg',
					'name'     => 'foto_bg',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'1440','height'=>'900', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'titulo'  => 'Datos del Caso',
				'key'     =>'titulo',
				'label'   =>'Título',
				'type'    =>'form_input',
				'filter'  =>true,
				'list'    =>true,
				'class'   =>'form-third',
				'properties'=> array(
					'name'      => 'titulo',
					'maxlength' => 100,
				)
			),

			array(
				'key'     =>'epigrafe',
				'label'   =>'Epigrafe',
				'type'    =>'form_input',
				'filter'  =>false,
				'list'    =>false,
				'class'   =>'form-quarter',
				'properties'=> array(
					'name'      => 'epigrafe',
					'maxlength' => 100,
				)
			),

			array(
				'key'     =>'bajada',
				'label'   =>'Bajada',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-half block',
				'properties'=> array(
					'name'      => 'bajada',
					'maxlength' => 360,
					'rows' => 4,
				)
			),


			// SCROLL 1
			// array(
			// 	'titulo' => 'Scroll 1',
			// 	'key'    =>'s1_c1_foto',
			// 	'label'  =>'Cuadro 1',
			// 	'type'   =>'jcropimage',
			// 	'filter' =>null,
			// 	'list'   =>false,
			// 	'class'  =>'form-third',
			// 	'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
			// 	'properties'=> array(
			// 		'id'       => 's1_c1_foto',
			// 		'name'     => 's1_c1_foto',
			// 		'quantity' =>1,
			// 		'sizes'    =>array(
			// 			array('width'=>'640','height'=>'540', 'method'=>'crop'),
			// 		),
			// 	'siempre_jpg' => true,
			// 	'margenes'    => false,
			// 	'controller'  => $controller_config["script"]
			// 	)
			// ),

			array(
				'titulo' => 'Scroll 1',
				'key'    =>'s1_c1_video',
				'label'  =>'Animación mp4',
				'type'   =>'form_upload',
				'filter' =>null,
				'class'  =>'form-third',
				'comentario'  =>'Medida recomendada: 640px x 540px (ancho x alto), 2Mb',
				'properties'=> array(
					'name'          => 's1_c1_video',
					'allowed_types' => 'mp4',
					'thumbnail' => false,
				)
			),

			array(
				'key'    =>'s1_c2_foto',
				'label'  =>'Cuadro 2',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's1_c2_foto',
					'name'     => 's1_c2_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'     =>'s1_c3_texto',
				'label'   =>'Cuadro 3 texto',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third',
				'properties'=> array(
					'name'      => 's1_c3_texto',
					'maxlength' => 210,
					'rows' => 3,
				)
			),

			array(
				'key'    =>'s1_c4_foto_large',
				'label'  =>'Cuadro 4 (Imagen larga)',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-half',
				'comentario'  =>'Medidas: 1280px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's1_c4_foto_large',
					'name'     => 's1_c4_foto_large',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'1280','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'     =>'s1_c5_video',
				'label'   =>'Cuadro 5 video',
				'comentario'    =>'Insertar solo el codigo de Youtube. Ej: NdBSZ8ph6wg',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third',
				'properties'=> array(
					'name'      => 's1_c5_video',
					'maxlength' => 100,
				)
			),

			// SCROLL 2
			array(
				'titulo' => 'Scroll 2',
				'key'    =>'s2_c1_foto',
				'label'  =>'Cuadro 1',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's2_c1_foto',
					'name'     => 's2_c1_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'     =>'s2_c2_text',
				'label'   =>'Cuadro 2 texto',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third',
				'properties'=> array(
					'name'      => 's2_c2_text',
					'maxlength' => 210,
					'rows' => 3,
				)
			),

			array(
				'key'    =>'s2_c3_video',
				'label'  =>'Animacion mp4',
				'type'   =>'form_upload',
				'filter' =>null,
				'class'  =>'form-third',
				'comentario'  =>'Medida recomendada: 640px x 540px (ancho x alto), 2Mb',
				'properties'=> array(
					'name'          => 's2_c3_video',
					'allowed_types' => 'mp4',
					'thumbnail' => false,
				)
			),

			// array(
			// 	'key'    =>'s2_c3_foto',
			// 	'label'  =>'Cuadro 3',
			// 	'type'   =>'jcropimage',
			// 	'filter' =>null,
			// 	'list'   =>false,
			// 	'class'  =>'form-third',
			// 	'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
			// 	'properties'=> array(
			// 		'id'       => 's2_c3_foto',
			// 		'name'     => 's2_c3_foto',
			// 		'quantity' =>1,
			// 		'sizes'    =>array(
			// 			array('width'=>'640','height'=>'540', 'method'=>'crop'),
			// 		),
			// 	'siempre_jpg' => true,
			// 	'margenes'    => false,
			// 	'controller'  => $controller_config["script"]
			// 	)
			// ),

			array(
				'key'     =>'s2_c4_video',
				'label'   =>'Cuadro 4 video',
				'comentario'    =>'Insertar solo el codigo de Youtube. Ej: NdBSZ8ph6wg',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third',
				'properties'=> array(
					'name'      => 's2_c4_video',
					'maxlength' => 100,
				)
			),

			array(
				'key'    =>'s2_c5_foto',
				'label'  =>'Cuadro 5',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's2_c5_foto',
					'name'     => 's2_c5_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'    =>'s2_c6_foto',
				'label'  =>'Cuadro 6',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's2_c6_foto',
					'name'     => 's2_c6_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			// SCROLL 3
			array(
				'titulo' => 'Scroll 3',
				'key'     =>'s3_c1_texto',
				'label'   =>'Cuadro 1, texto',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third',
				'properties'=> array(
					'name'      => 's3_c1_texto',
					'maxlength' => 210,
					'rows' => 3,
				)
			),

			array(
				'key'    =>'s3_c2_foto',
				'label'  =>'Cuadro 2',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's3_c2_foto',
					'name'     => 's3_c2_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'    =>'s3_c3_foto',
				'label'  =>'Cuadro 3',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's3_c3_foto',
					'name'     => 's3_c3_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'    =>'s3_c4_foto',
				'label'  =>'Cuadro 4',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's3_c4_foto',
					'name'     => 's3_c4_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'     =>'s3_c5_video',
				'label'   =>'Cuadro 5, video',
				'comentario'    =>'Insertar solo el codigo de Youtube. Ej: NdBSZ8ph6wg',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third',
				'properties'=> array(
					'name'      => 's3_c5_video',
					'maxlength' => 100,
				)
			),

			array(
				'key'    =>'s3_c6_foto',
				'label'  =>'Cuadro 6',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's3_c6_foto',
					'name'     => 's3_c6_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			// SCROLL 4
			array(
				'titulo' => 'Scroll 4',
				'key'    =>'s4_c1_foto',
				'label'  =>'Cuadro 1',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's4_c1_foto',
					'name'     => 's4_c1_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'    =>'s4_c2_foto_large',
				'label'  =>'Cuadro 2, (Imagen larga)',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-half',
				'comentario'  =>'Medidas: 1280px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's4_c2_foto_large',
					'name'     => 's4_c2_foto_large',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'1280','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'    =>'s4_c3_foto',
				'label'  =>'Cuadro 3',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's4_c3_foto',
					'name'     => 's4_c3_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'     =>'s4_c4_video',
				'label'   =>'Cuadro 4, video',
				'comentario'    =>'Insertar solo el codigo de Youtube. Ej: NdBSZ8ph6wg',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third',
				'properties'=> array(
					'name'      => 's4_c4_video',
					'maxlength' => 100,
				)
			),

			array(
				'key'     =>'s4_c5_texto',
				'label'   =>'Cuadro 5, texto',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third',
				'properties'=> array(
					'name'      => 's4_c5_texto',
					'maxlength' => 210,
					'rows' => 3,
				)
			),

			// SCROLL 5
			array(
				'titulo' => 'Scroll 5',
				'key'     =>'s5_c1_video',
				'label'   =>'Cuadro 1, video',
				'comentario'    =>'Insertar solo el codigo de Youtube. Ej: NdBSZ8ph6wg',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third',
				'properties'=> array(
					'name'      => 's5_c1_video',
					'maxlength' => 100,
				)
			),

			array(
				'key'    =>'s5_c2_foto',
				'label'  =>'Cuadro 2',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's5_c2_foto',
					'name'     => 's5_c2_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'    =>'s5_c3_foto',
				'label'  =>'Cuadro 3',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's5_c3_foto',
					'name'     => 's5_c3_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'    =>'s5_c4_foto',
				'label'  =>'Cuadro 4',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's5_c4_foto',
					'name'     => 's5_c4_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'     =>'s5_c5_texto',
				'label'   =>'Cuadro 5, texto',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third',
				'properties'=> array(
					'name'      => 's5_c5_texto',
					'maxlength' => 210,
					'rows' => 3,
				)
			),

			// array(
			// 	'key'    =>'s5_c6_foto',
			// 	'label'  =>'Cuadro 6',
			// 	'type'   =>'jcropimage',
			// 	'filter' =>null,
			// 	'list'   =>false,
			// 	'class'  =>'form-third',
			// 	'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
			// 	'properties'=> array(
			// 		'id'       => 's5_c6_foto',
			// 		'name'     => 's5_c6_foto',
			// 		'quantity' =>1,
			// 		'sizes'    =>array(
			// 			array('width'=>'640','height'=>'540', 'method'=>'crop'),
			// 		),
			// 	'siempre_jpg' => true,
			// 	'margenes'    => false,
			// 	'controller'  => $controller_config["script"]
			// 	)
			// ),

			array(
				'key'    =>'s5_c6_video',
				'label'  =>'Animacion mp4',
				'type'   =>'form_upload',
				'filter' =>null,
				'class'  =>'form-third',
				'comentario'  =>'Medida recomendada: 640px x 540px (ancho x alto), 2Mb',
				'properties'=> array(
					'name'          => 's5_c6_video',
					'allowed_types' => 'mp4',
					'thumbnail' => false,
				)
			),

			// Scroll 6
			array(
				'titulo' => 'Scroll 6',
				'key'    =>'s6_c1_foto_large',
				'label'  =>'Cuadro 1, (Imagen larga)',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-half',
				'comentario'  =>'Medidas: 1280px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's6_c1_foto_large',
					'name'     => 's6_c1_foto_large',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'1280','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),

			array(
				'key'    =>'s6_c2_foto',
				'label'  =>'Cuadro 2',
				'type'   =>'jcropimage',
				'filter' =>null,
				'list'   =>false,
				'class'  =>'form-third',
				'comentario'  =>'Medidas: 640px x 540px (ancho x alto)',
				'properties'=> array(
					'id'       => 's6_c2_foto',
					'name'     => 's6_c2_foto',
					'quantity' =>1,
					'sizes'    =>array(
						array('width'=>'640','height'=>'540', 'method'=>'crop'),
					),
				'siempre_jpg' => true,
				'margenes'    => false,
				'controller'  => $controller_config["script"]
				)
			),


			// SEO
			array(
				'titulo'   =>'SEO',
				'key'     =>'meta_titulo',
				'label'   =>'Título',
				'type'    =>'form_input',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third block',
				'comentario'   =>'Por defecto se usa el título de la novedad.',
				'properties'=> array(
					'name'      => 'meta_titulo',
					'maxlength' => 70,
				)
			),

			array(
				'key'     =>'meta_descripcion',
				'label'   =>'Descripción',
				'type'    =>'form_textarea',
				'filter'  =>null,
				'list'    =>false,
				'class'   =>'form-third block',
				'comentario'   =>'Por defecto se usa la bajada de la novedad.',
				'properties'=> array(
					'name'      => 'meta_descripcion',
					'maxlength' => 155,
					'rows' => 3,
				)
			),
		);

        $this->cargar_config( $controller_config );
    }
}