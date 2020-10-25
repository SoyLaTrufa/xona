<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'home');
  // Plugins::activar('animacion');

// Fin configuración de la página //

  include('header.php');

?>

<article id="fullpage">
	
<section class="section s1">
	<div class="video-cont">
		<video class="video-home" data-autoplay controls loop muted><source src="videos/home-top.mp4" type="video/mp4"></video>
		<div class="cont-1300">
		    <h1 class="josh-js" data-josh-anim-name="fadeInUp" data-josh-duration="1200ms">Management Integral de Marketing de Experiencias</h1>
		    <p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: .6s">Convertimos la visión de nuestros clientes en algo extraordinario, generando una conexión que encante y emocione a sus audiencias.</p>
		    <img src="images/icons/mouse.png" class="mouse">
		 </div>
	</div>
</section>

<section class="section s2">
	<div class="cont-1300">
		<img class="loguito" src="images/icons/x.png" alt="Xona">
		<div class="bloque josh-js" data-josh-anim-name="zoomIn">
			<div class="mod josh-js" data-josh-anim-name="fadeIn" data-josh-duration="1000ms">
				<h5 class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: .5s">QUE HACEMOS</h5>
				<h2 class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1s">Xomos lo <br> que hacemos</h2>
				<p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.3s">Convertimos la visión de nuestros clientes en algo extraordinario, generando una conexión que encante y emocione a sus audiencias</p>
				<p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.3s">Trabajamos junto con nuestros clientes desarrollando experiencias que reflejen sus valores, los posicionen en el mercado y generen vínculos de confianza con sus públicos.</p>
				<a href="<?=url('que-hacemos')?>" class="josh-js" data-josh-anim-name="fadeIn" style="animation-delay: 1.6s"><span><i class="icon-right"></i></span>¿QUÉ HACEMOS?</a>
			</div>
		</div> 
	</div>
</section>

<section class="section s3">
	<div class="video-cont">
       <!-- <iframe src="https://www.youtube.com/embed/cTxWCrSyPFg?autoplay=1 &rel=0&mute=1&controls=0&loop=1&showinfo=0&modestbranding=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
       <video id="v1" class="video-home" loop controls><source src="videos/reel-2020.mp4" type="video/mp4"></video>
       	<img class="portada-video" src="images/home/portada-video.jpg">
       <a class="vplay" onclick="playVidUno()"><i class="icon-play"></i></a>
    </div>
</section>

<section class="section s4">
	<div class="cont-1300">
		<img class="loguito" src="images/icons/x-a.png" alt="Xona">
		<div class="bloque josh-js" data-josh-anim-name="fadeIn">
			<div class="mod">
				<p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: .6s">Creemos que todas las ideas tienen un potencial infinito para ser extraordinarias.</p>
			   <a href="<?=url('xomos')?>" class="josh-js" data-josh-anim-name="zoomIn" style="animation-delay: 1s"><span><i class="icon-right"></i></span>XOMOS</a>
			</div>
		</div>

	</div>
</section>

<section class="section s5">
	<div class="cont-1300">
		<img class="loguito" src="images/icons/x-a.png" alt="Xona">
		<div class="bloque-cont josh-js" data-josh-anim-name="zoomIn">
			<div class="bloque josh-js" data-josh-anim-name="fadeIn" style="animation-delay: .5s">
				<h2 class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1s">Sabemos que lo que nos diferencia <span>es la forma de relacionarnos con nuestros clientes</span></h2>
				<p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.3s">Nos involucramos en entender sus necesidades y estamos dispuestos a ir un paso más allá para brindar un mejor servicio.</p>
				<a href="<?=url('contacto')?>" class="josh-js" data-josh-anim-name="fadeIn" style="animation-delay:1.5s"><span><i class="icon-right"></i></span>CONTACTANOS</a>
			</div>
		</div> 
	</div>
</section>

</article>


<?php include('footer.php'); ?>