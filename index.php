<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'home');

// Fin configuración de la página //

  include('header.php');

?>

<article>
	<div class="container">
		<p>URL home: <?= '<a href="'. url('home'). '">'. url('home'). '</a>' ?></p>
		<p>URL noticia: <?= '<a href="'. url('noticia', array('id'=>8, 'nombre'=>'prueba')). '">'. url('noticia', array('id'=>8, 'nombre'=>'prueba')) . '</a>' ?></p>
		<p>URL noticias 2017: <?= '<a href="'. url('noticias-anio', array('anio' => 2017)). '">'. url('noticias-anio', array('anio' => 2017)) . '</a>' ?></p>

		<h3>Ejemplo de traduccion</h3>
		<!-- En caso de tener que traducir el sitio -->
		<h4><?= __('home_test 0'); ?></h4>
		<p><?= __('home_test 1'); ?></p>
	</div>
</article>

<?php include('footer.php'); ?>