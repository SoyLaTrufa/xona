<?php

/*
* ---------------------------------------------------------------------------
* EMPRESA
* ---------------------------------------------------------------------------
*
* Acá ponemos todos los datos de contacto de la empresa así los podemos
* reutilizar en todo el sitio. Podés guardar cualquier dato no solo los que
* están definidos ahora.

Config::obtener('empresa')->fijo_enlace
* 
*/

return array(
	
	'nombre' 	=> 'Xona',

	'redes' 	=> array(
			'in' => 'https://www.linkedin.com/company/xona/',
			'ig' => 'https://www.instagram.com/xonaarg/',
			'fb' => 'https://www.facebook.com/xonaar',
		),

	'email' 	=> 'hola@xona.com.ar',

	'tel' => array(

		'Buenos Aires' => array(
			'num' => '+54 (11) 4733-0700',
			'link' => '541147330700'
			),

		'San Carlos de Bariloche' => array(
			'num' => '+54 (294) 444-1712 | 444-2547',
			'link' => '54294444-1712'
			),

		'Santiago de Chile' => array(
			'num' => '+56 (2) 2981-1174',
			'link' => '56229811174'
			),

		'Roma' => array(
			'num' => '+39 (06) 615-2371',
			'link' => '39066152371'
			),

		),


);