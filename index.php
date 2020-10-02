<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'home');
  Plugins::activar('animacion');

// Fin configuración de la página //

  include('header.php');

?>

<section class="s1">
	<div class="cont-1300">
	    <h1 class="wow fadeInLeft">Management Integral de Marketing de Experiencias</h1>
	    <p class="wow fadeInDown" data-wow-delay=".5s">Convertimos la visión de nuestros clientes en algo extraordinario, generando una conexión que encante y emocione a sus audiencias.</p>
	    <img src="images/icons/mouse.png" class="mouse">
	 </div>
</section>

<section class="s2">
	<div class="cont-1300">
		<img src="images/icons/x.png" alt="Xona">
		<div class="bloque-cont wow zoomIn">
			<div class="bloque wow rollIn" data-wow-delay=".5s">
				<h5 class="wow fadeInLeft" data-wow-delay="1s">QUE HACEMOS</h5>
				<h2 class="wow fadeInUp" data-wow-delay="1s">Xomo lo <br> que hacemos</h2>
				<p class="wow slideInUp" data-wow-delay="1.3s">Convertimos la visión de nuestros clientes en algo extraordinario, generando una conexión que encante y emocione a sus audiencias</p>
				<p class="wow slideInUp" data-wow-delay="1.3s">Trabajamos junto con nuestros clientes desarrollando experiencias que reflejen sus valores, los posicionen en el mercado y generen vínculos de confianza con sus públicos.</p>
				<a href="#" class="wow fadeIn" data-wow-delay="1.5s"><span><i class="icon-right"></i></span>¿QUÉ HACEMOS?</a>
			</div>
		</div> 
	</div>
</section>

<section class="s3">
	<div class="cont-1300">
		<h2>VIDEO REEL DE SERVICIOS</h2>
	</div>
</section>

<section class="s4">
	<div class="cont-1300">
		<img src="images/icons/x-a.png" alt="Xona">
		<div class="bloque wow rotateIn">
			<div class="mod">
				<p class="wow slideInUp" data-wow-delay=".5s">Creemos que todas las ideas tienen un potencial infinito para ser extraordinarias.</p>
			   <a href="#"><span><i class="icon-right"></i></span>XOMOS</a>
			</div>
		</div>

	</div>
</section>

<section class="s5">
	<div class="cont-1300">
		<img src="images/icons/x.png" alt="Xona">
		<div class="bloque-cont wow zoomIn">
			<div class="bloque wow rollIn" data-wow-delay=".5s">
				<h2 class="wow fadeInUp" data-wow-delay="1s">Sabemos que lo que nos diferencia <span>es la forma de relacionarnos con nuestros clientes</span></h2>
				<p class="wow slideInUp" data-wow-delay="1.3s">Nos involucramos en entender sus necesidades y estamos dispuestos a ir un paso más allá para brindar un mejor servicio.</p>
				<a href="#" class="wow fadeIn" data-wow-delay="1.5s"><span><i class="icon-right"></i></span>CONTACTANOS</a>
			</div>
		</div> 
	</div>
</section>


<?php include('footer.php'); ?>