<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'xomos');
  // Plugins::activar('animacion');
// Fin configuración de la página //

  include('header.php');

?>

<article id="fullpage">
	
<section class="section s1">
	<div class="video-cont">
       <video class="video-home" data-autoplay controls loop muted><source src="videos/reel-cultura.mp4" type="video/mp4"></video>
    </div>
</section>

<section class="section s2">
	<div class="cont-1300">
		<img class="loguito" src="images/icons/x-a.png" alt="Xona">
		<div class="bloque josh-js" data-josh-anim-name="zoomIn">
			<div class="mod josh-js" data-josh-anim-name="fadeIn" style="animation-delay: .5s">
				<h5 class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1s">ADN XONAMOS</h5>
				<h2 class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.2s">Somos curiosos<br> <span>por naturaleza</span></h2>
				<p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.6s">Vamos en busca de nuevos desafíos, sosteniendo siempre la alegría de encontrarnos y conectarnos con personas que sienten lo mismo que nosotros.</p>
				<p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.8s">No importa el lugar en el que estemos, nos une la misma pasión por el servicio y por llevar cada proyecto a nuevos niveles.</p>
				<i class="icon-down josh-js fadeIn"></i>
			</div>
		</div> 
	</div>
</section>

<section class="section s3">
	<div class="cont-1300">
		<img class="loguito" src="images/icons/x-a.png" alt="Xona">
		<div class="bloque-cont josh-js " data-josh-anim-name="zoomIn">
			<div class="bloque josh-js " data-josh-anim-name="fadeIn" style="animation-delay: .5s">
				<h5 class="josh-js " data-josh-anim-name="fadeInUp" style="animation-delay: 1s">CULTURA</h5>
				<h2 class="josh-js " data-josh-anim-name="fadeInUp" style="animation-delay: 1s">Hoy el conocimiento humano se duplica cada seis meses <span>¿Cómo transitamos los cambios entonces?</span></h2>
				<div class="iconos">
					<div class="icon josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.3s">
						<img src="images/icons/confiando.png" alt="confiando">
						<p>Confiando en cada uno de nosotros.</p>
					</div>
					<div class="icon josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.3s">
						<img src="images/icons/agregando.png" alt="agregando">
						<p>Agregando belleza a lo que hacemos.</p>
					</div>
					<div class="icon josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.5s">
						<img src="images/icons/manteniendo.png" alt="manteniendo">
						<p>Manteniendo la mentalidad curiosa del aprendiz.</p>
					</div>
					<div class="icon josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.5s">
						<img src="images/icons/poniendo.png" alt="poniendo">
						<p>Poniendo pasión y alegría en cada intención.</p>
					</div>
				</div>
				<h6 class="josh-js" data-josh-anim-name="fadeIn" style="animation-delay: 1.8s">Si tenemos claro el destino, el destino es el camino.</h6>
			</div>
		</div> 
	</div>
</section>

<section class="section s4" id="xs4mobile">
	<div class="cont-1300">
		<img class="loguito" src="images/icons/x-a.png" alt="Xona">
		<div class="bloque josh-js" data-josh-anim-name="fadzoomIneInUp">
			<div class="mod josh-js" data-josh-anim-name="fadeIn" style="animation-delay: .5s">
				<h5 class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1s">NUESTRA HISTORIA</h5>
				<h2 class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1s">En estos 20 años lo más <br> constante <span>fue el cambio</span></h2>
				<p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.3s">Nos adaptamos y transformamos, entendiendo que éramos parte de algo mucho más grande que nosotros mismos.</p>
				<p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.3s">Desde el inicio nos definieron nuestros valores y creencias. Empezamos con un sueño y nunca lo abandonamos.</p>
				<a href="<?=url('que-hacemos')?>" class="josh-js" data-josh-anim-name="fadeIn" style="animation-delay: 1.6s"><span><i class="icon-right"></i></span>LO QUÉ HACEMOS</a>
			</div>
			<div class="video-cont">
				<video class="video" data-autoplay loop autoplay muted><source src="videos/logos.mp4" type="video/mp4"></video>
			</div>
		</div> 
	</div>
</section>


<section class="s5" id="xs5mobile">
	<div class="cont-1300">
		<div class="video-mobile">
			<video class="video" data-autoplay autoplay loop muted><source src="videos/logos.mp4" type="video/mp4"></video>
		</div>
	</div>
</section>

</article>

<?php include('footer.php'); ?>