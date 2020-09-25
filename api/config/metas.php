<?php

/* 
* --------------------------------------------------------------------------
* METAS
* --------------------------------------------------------------------------
*
* En "defecto" se definen los valores por defecto para cada metaetiqueta. 
* 
* En "secciones" se definen los valores pora cada meta por sección. Estos
* pueden sobreescribirse desde la configuración de cada página.
*
* En "plantilla" se define la base para todas la metas en donde {valor} se 
* reemplaza por el valor que se le asigna a las metas en "secciones".
*
*/

$empresa = Config::obtener('empresa');

return array(

	'defecto' => array(
		'es' => array(
			'titulo' => '',
			'descripcion' => '',
			'img' => BASE_URL.'images/favicons/android-chrome-256x256.png',
		)
	),

	'plantilla' => array(
		'titulo' => '{valor} | '. $empresa->nombre,
		'descripcion' => '{valor}',
		'img' => '{valor}',
	),

	'secciones' => array(
		'home' => array(
			'es' => array(
				'titulo' => 'Home',
				'descripcion' => '',
				'img' => '',
			),
		),
		'tabs' => array(
			'es' => array(
				'titulo' => 'Tabs',
				'descripcion' => '',
				'img' => '',
			),
		),
		'acordeon' => array(
			'es' => array(
				'titulo' => 'Acordeón',
				'descripcion' => '',
				'img' => '',
			),
		),
		'slider' => array(
			'es' => array(
				'titulo' => 'Slider',
				'descripcion' => '',
				'img' => '',
			),
		),
		'modal' => array(
			'es' => array(
				'titulo' => 'Modal',
				'descripcion' => '',
				'img' => '',
			),
		),
		'contacto' => array(
			'es' => array(
				'titulo' => 'Contacto',
				'descripcion' => '',
				'img' => '',
			),
		),
		// Array de ejemplo para agregar si se agrega un página nueva
		// 'nombre-de-la-sección' => array(
		// 	'es' => array(
		// 		'titulo' => '',
		// 		'descripcion' => '',
		// 		'img' => '',
		// 	),
		// ),
	)

);