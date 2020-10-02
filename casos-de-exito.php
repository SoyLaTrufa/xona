<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'casos-de-exito');
  Plugins::activar('animacion');

// Fin configuración de la página //

  include('header.php');

?>

<section class="s1">
	<div class="caja">
		<h5>AVON</h5>
		<h1>MUJERES QUE CAMBIAN LA HISTORIA</h1>
		<p>Alzamos la voz de mujeres emblemáticas de la historia argentina, como core de la estrategia de lanzamiento de una nueva fragancia de AVON en el Día de la Mujer.</p>
	</div>
</section>

<section class="casos">
	<div class="mod mod-bg" style="background-image: url('images/temp/4.jpg')"></div>
	<div class="mod"></div>
	<div class="mod mod-txt">
		<p>A través de una alianza con el Gobierno de la Ciudad creamos una audioguía para conocer a las mujeres que dan nombre a las calles de Puerto Madero, con podcasts accesibles desde un código QR.</p>
	</div>
	<div class="mod mod-bg mod-large" style="background-image: url('images/temp/5.jpg')"></div>
	<div class="mod"></div>
	<!-- <div class="mod"></div> -->
</section>

<section class="casos">
	<div class="mod"></div>
	<div class="mod mod-txt">
		<p>Desarrollamos una intervención urbana sobre el Puente de la Mujer y diseñamos un evento interactivo con una dinámica teatral y una acción con influencers.</p>
	</div>
	<div class="mod mod-bg" style="background-image: url('images/temp/1.jpg')"></div>
	<div class="mod mod-bg" style="background-image: url('images/temp/2.jpg')"></div>
	<div class="mod mod-bg" style="background-image: url('images/temp/3.jpg')"></div>
	<div class="mod"></div>
</section>



<?php include('footer.php'); ?>