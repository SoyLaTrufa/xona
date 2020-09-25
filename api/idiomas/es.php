<?php

/**
* Archivo de idioma
*
* Las traducciones se agregan de a una con el formato 'clave' => 'valor'.
* Las claves no se pueden repetir asi que conviene ponerles un prefijo.
* Además no puede haber arrays dentro de este array.
* 
* @example
*  // HOME
* 'home-titulo' => 'Título de la home',
* 'home-bajada' => 'Lorem ipsum	dolor sit amet...',
* 
* // CONTACTO
* 'contacto-titulo' => 'Contáctenos',
* ...
*
* Estas traducciones se pueden acceder desde el sitio usando la función __(), el 
* alias del helper "Traduccion".
*
* @example
* echo __('msj-incompleto'); // Todos los campos con asterisco (*) son requeridos.
* 
* @example 
* Traducción:
* 'nav' => array(
*   'home' => 'Home'.
*   'contacto' => 'Contacto'.
* );
*
* Obtener traducción:
* __('nav contacto');
*
*
*/

return array(

	'home_test' => array(
		'Agencia Marítima y Chartering',
		'Nos desempeñamos como agentes marítimos en todos los puertos de la Argentina, asistiendo operativamente a buques de cabotaje y ultramar.'
	),
								
	'msj-incompleto'       => 'Todos los campos con asterisco (*) son requeridos.',
	'msj-error'            => 'El email ingresado es inválido. Por favor, vuelva a ingresarlo.',
	'msj-mail_invalido'    => 'El captcha no fue completado correctamente. Vuelva a intentarlo',
	'msj-captcha_invalido' => 'Todos los campos con asterisco (*) son requeridos.',
	'msj-ok'               => 'Su mensaje ha sido enviado, muchas gracias por comunicarse con nosotros.<br /> breve nos pondremos en contacto con Ud.',
);

