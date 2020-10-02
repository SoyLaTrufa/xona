<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'xomos');
  Plugins::activar('animacion');
// Fin configuración de la página //

  include('header.php');

?>

<section class="s1">
	<div class="cont-1300">
		<h2>VIDEO REEL DE SERVICIOS</h2>
	</div>
</section>

<section class="s2">
	<div class="cont-1300">
		<img class="loguito" src="images/icons/x-a.png" alt="Xona">
		<div class="bloque wow zoomIn">
			<div class="mod wow rollIn" data-wow-delay=".5s">
				<h5 class="wow fadeInLeft" data-wow-delay="1s">ADN XONAMOS</h5>
				<h2 class="wow fadeInUp" data-wow-delay="1s">Somos curiosos<br> <span>por naturaleza</span></h2>
				<p class="wow slideInUp" data-wow-delay="1.3s">Vamos en busca de nuevos desafíos, sosteniendo siempre la alegría de encontrarnos y conectarnos con personas que sienten lo mismo que nosotros.</p>
				<p class="wow slideInUp" data-wow-delay="1.3s">No importa el lugar en el que estemos, nos une la misma pasión por el servicio y por llevar cada proyecto a nuevos niveles.</p>
				<i class="icon-down wow fadeIn"></i>
			</div>
		</div> 
	</div>
</section>

<section class="s3">
	<div class="cont-1300">
		<img src="images/icons/x-a.png" alt="Xona">
		<div class="bloque-cont wow zoomIn">
			<div class="bloque wow rollIn" data-wow-delay=".5s">
				<h5 class="wow fadeInRight" data-wow-delay="1s">CULTURA</h5>
				<h2 class="wow fadeInUp" data-wow-delay="1s">Hoy el conocimiento humano se duplica cada seis meses <span>¿Cómo transitamos los cambios entonces?</span></h2>
				<div class="iconos">
					<div class="icon wow slideInUp" data-wow-delay="1.3s">
						<img src="images/icons/confiando.png" alt="confiando">
						<p>Confiando en cada uno de nosotros.</p>
					</div>
					<div class="icon wow slideInUp" data-wow-delay="1.3s">
						<img src="images/icons/agregando.png" alt="agregando">
						<p>Agregando belleza a lo que hacemos.</p>
					</div>
					<div class="icon wow slideInUp" data-wow-delay="1.3s">
						<img src="images/icons/manteniendo.png" alt="manteniendo">
						<p>Manteniendo la mentalidad curiosa del aprendiz.</p>
					</div>
					<div class="icon wow slideInUp" data-wow-delay="1.3s">
						<img src="images/icons/poniendo.png" alt="poniendo">
						<p>Poniendo pasión y alegría en cada intención.</p>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>

<section class="s4">
	<div class="cont-1300">
		<img class="loguito" src="images/icons/x-a.png" alt="Xona">
		<div class="bloque wow zoomIn">
			<div class="mod wow rollIn" data-wow-delay=".5s">
				<h5 class="wow fadeInRight" data-wow-delay="1s">NUESTRA HISTORIA</h5>
				<h2 class="wow fadeInUp" data-wow-delay="1s">En estos 20 años lo más <br> constante <span>fue el cambio</span></h2>
				<p class="wow slideInUp" data-wow-delay="1.3s">Nos adaptamos y transformamos, entendiendo que éramos parte de algo mucho más grande que nosotros mismos.</p>
				<p class="wow slideInUp" data-wow-delay="1.3s">Desde el inicio nos definieron nuestros valores y creencias. Empezamos con un sueño y nunca lo abandonamos.</p>
				<!-- <i class="icon-down"></i> -->
			</div>
			<img class="gif" src="images/xomos/s4.jpg" alt="">
		</div> 
	</div>
</section>

<?php include('footer.php'); ?>