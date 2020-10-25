<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'casos-de-exito');

// Fin configuración de la página //

  include('header.php');

?>

<article class="caso-ficha">

<section class="section s1">
	<div class="box">
		<div class="caja">
			<h5 class="josh-js" data-josh-anim-name="fadeInDown">AVON</h5>
			<h1 class="josh-js" data-josh-anim-name="lightSpeedInLeft" style="animation-delay: .5s">MUJERES QUE CAMBIAN LA HISTORIA</h1>
			<p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1s">Alzamos la voz de mujeres emblemáticas de la historia argentina, como core de la estrategia de lanzamiento de una nueva fragancia de AVON en el Día de la Mujer.</p>
		</div>
	</div>
</section>

<section class="section casos">
	<div class="box">
		<div class="mod mod-bg" style="background-image: url('images/temp/4.jpg')"></div>
		<div class="mod"></div>
		<div class="mod mod-txt">
			<p>A través de una alianza con el Gobierno de la Ciudad creamos una audioguía para conocer a las mujeres que dan nombre a las calles de Puerto Madero, con podcasts accesibles desde un código QR.</p>
		</div>
		<div class="mod mod-bg mod-large" style="background-image: url('images/temp/5.jpg')"></div>
		<div class="mod"></div>
		<!-- <div class="mod"></div> -->
	</div>
</section>

<section class="section casos">
	<div class="box">
		<div class="mod"></div>
		<div class="mod mod-txt">
			<p>Desarrollamos una intervención urbana sobre el Puente de la Mujer y diseñamos un evento interactivo con una dinámica teatral y una acción con influencers.</p>
		</div>
		<div class="mod mod-bg" style="background-image: url('images/temp/1.jpg')"></div>
		<div class="mod mod-bg" style="background-image: url('images/temp/2.jpg')"></div>
		<div class="mod mod-bg" style="background-image: url('images/temp/3.jpg')"></div>
		<div class="mod"></div>
	</div>
</section>

<section class="section casos">
	<div class="box">
		<div class="mod mod-bg mod-large" style="background-image: url('images/temp/6.jpg')"></div>
		<div class="mod mod-bg" style="background-image: url('images/temp/7.jpg')"></div>
		<div class="mod mod-full">
			<div class="cont-975">
				<div class="volver">
					<a href="<?=url('que-hacemos')?>"><i class="icon-right"></i>Volver al listado</a>
				</div>
				<a href="#" class="proximo">
					<img src="images/temp/next.jpg" alt="">
					<div class="txt">
						<h5>PRÓXIMO CASO</h5>
						<h3>Lancome-Biotherm</h3>
						<i class="icon-right"></i>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

</article>

<?php include('footer.php'); ?>