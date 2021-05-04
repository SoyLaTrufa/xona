<?php

include_once('core/Formulario.php');

$form_contacto = new Formulario(
	array(
		'destinatarios' => array(
			'hola@xona.com.ar'
		),
		'asunto' 	=> 'Contacto - '.Config::obtener('empresa')->nombre,
		'remitente' => array(
			'nombre' => 'Web '.Config::obtener('empresa')->nombre,
			// Completar con el dominio del cliente ej: web@kodent.com.ar
			'email' => 'web@xona.com.ar' // Email ficticio 
		),
		'responder_a' => array(
			'nombre' => 'nombre',
			'email' => 'email'
		),
		'opciones' => array(
			'debug' => false,
			'guardar_contacto' => false,
			'guardar_form' => false
		)
	)
);

// Esto genera el mail que va a llegar al cliente. Levanta los datos del form que está en la web.
$form_contacto->agregarCampos(
	array(

		array(
			'name' 		=> 'nombre',
			'label' 	=> 'Nombre',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'empresa',
			'label' 	=> 'Empresa',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'email',
			'label' 	=> 'Email',
			'tipo' 		=> 'email',
			'validar' 	=> array('formato', 'requerido'),
		),

		array(
			'name' 		=> 'tel',
			'label' 	=> 'Teléfono',
			'tipo' 		=> 'tel',
			'validar' 	=> array('requerido'),
		),		

		array(
			'name' 		=> 'consulta',
			'label' 	=> 'Consulta',
			'tipo' 		=> 'textarea',
			'validar' 	=> array('requerido'),
		),

	)
);


// enviar_contacto tiene que corresponder con el name del botón de submit
if( isset($_POST['enviar_contacto']) ){
				$form_contacto->enviar();
	// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
 //      // Build POST request:
 //      $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
 //      $recaptcha_secret = '6Lf1q9kZAAAAAJocgcyoLbbMU4DclPv9jL6F2wzP';
 //      $recaptcha_response = $_POST['recaptcha_response'];

 //      // Make and decode POST request:
	// 		$handle = curl_init($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
	// 		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

	// 		$recaptcha = curl_exec($handle);
	// 		curl_close($handle);

	// 		$recaptcha = json_decode($recaptcha);

 //      // Take action based on the score returned:
 //      if ($recaptcha->success AND $recaptcha->score >= 0.5) {
 //      }
 //  }
}