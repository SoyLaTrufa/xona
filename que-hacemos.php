<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'que-hacemos');
  Plugins::activar('animacion');
  Plugins::activar('owlCarousel');
// Fin configuración de la página //

  include('header.php');

?>

<section>
	<div class="horizontal-scroll">
  <div class="horizontal-scroll__block horizontal-scroll__block--purple">
    <div class="background" style="background-image: url(https://source.unsplash.com/category/nature/1024x758)"></div>
    <span class="letter">A</span>
  </div>
  <div class="horizontal-scroll__block horizontal-scroll__block--yellow">
    <div class="background" style="background-image: url(https://source.unsplash.com/category/technology/1024x758)"></div>
    <span class="letter">E</span>
  </div>
  <div class="horizontal-scroll__block horizontal-scroll__block--orange">
    <div class="background" style="background-image: url(https://source.unsplash.com/category/buildings/1024x758)"></div>
    <span class="letter">I</span>
  </div>
  <div class="horizontal-scroll__block horizontal-scroll__block--blue">
    <div class="background" style="background-image: url(https://source.unsplash.com/category/food/1024x758)"></div>
    <span class="letter">O</span>
  </div>
  <div class="horizontal-scroll__block horizontal-scroll__block--green">
    <div class="background" style="background-image: url(https://source.unsplash.com/category/people/1024x758)"></div>
    <span class="letter">U</span>
  </div>
  <div class="horizontal-scroll__block horizontal-scroll__block--pink">
    <div class="background" style="background-image: url(https://source.unsplash.com/category/objects/1024x758)"></div>
    <span class="letter">!</span>
  </div>
</div>
</section>

<style type="text/css">
	/*::-webkit-scrollbar {
  width: 1px;
  height: 1px;
}

::-webkit-scrollbar-button {
  width: 1px;
  height: 1px;
}*/

*,
*::after,
*::before {
  box-sizing: border-box;
}

html {
  font-size: 16px;
}

body {
  overflow: hidden;
  font-size: 1em;
}

.horizontal-scroll {
  width: 100vh;
  height: 100vw;
  overflow-y: auto;
  overflow-x: hidden;
  background: #2E2E2E;
  padding: 30px;
  -webkit-transform-origin: right top;
          transform-origin: right top;
  -webkit-transform: rotate(-90deg) translate3d(0, -100vh, 0);
          transform: rotate(-90deg) translate3d(0, -100vh, 0);
}
.horizontal-scroll > * {
  -webkit-transform-origin: left top;
          transform-origin: left top;
  -webkit-transform: rotate(90deg) translate3d(0, calc(-100vh + 60px), 0);
          transform: rotate(90deg) translate3d(0, calc(-100vh + 60px), 0);
}
.horizontal-scroll__block {
  width: calc(100vh - 60px);
  height: calc(100vh - 60px);
  background: #FDFFFC;
  position: relative;
}
.horizontal-scroll__block:not(:first-child) {
  margin-top: 30px;
}
.horizontal-scroll__block .background {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: no-repeat center center / cover;
  opacity: .8;
  background-blend-mode: luminosity;
}
.horizontal-scroll__block .letter {
  display: inline-block;
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate3d(-50%, -50%, 0);
          transform: translate3d(-50%, -50%, 0);
  font-weight: normal;
  font-size: 12em;
  font-family: 'Playfair Display', serif;
  color: white;
}
.horizontal-scroll__block--purple .background {
  background-color: #52489C;
}
.horizontal-scroll__block--yellow .background {
  background-color: #ECC30B;
}
.horizontal-scroll__block--orange .background {
  background-color: #F37748;
}
.horizontal-scroll__block--blue .background {
  background-color: #4D9DE0;
}
.horizontal-scroll__block--green .background {
  background-color: #00BD9D;
}
.horizontal-scroll__block--pink .background {
  background-color: #FB9F89;
}

</style>

<section class="s1">
	<h4><i class="icon-circle-thin"></i>NUESTROS TRABAJOS</h4>
	<div class="mod">
		<h3>Markting de Experiencias</h3>
		<a class="sombra"></a>
	</div>
	<div class="mod">
		<h3>Go Live</h3>
		<a class="sombra"></a>
	</div>
	<div class="mod">
		<h3>Value Content Lab</h3>
		<a class="sombra"></a>
	</div>
	<div class="mod">
		<h3>Comunicación</h3>
		<a class="sombra"></a>
	</div><div class="mod">
		<h3>Comunicación</h3>
		<a class="sombra"></a>
	</div><div class="mod">
		<h3>Comunicación</h3>
		<a class="sombra"></a>
	</div>
</section>

<section class="s3">
	<div class="cont-1300">
		<img class="loguito" src="images/icons/x-a.png" alt="Xona">
		<h2>Nuestros clientes</h2>
		<div class="slider-clientes">
			<ul class="owl-carousel">
		<?php 
			include('clientes.php');;
			foreach ($clientes as $key => $logo) { ?>
				<li>
					<div class="slide">
						<?php 
							foreach ($logo as $key => $l) {
								echo '<img src="'.$l.'">';
							}
						 ?>
					</div>
				</li>
			<?php }
		 ?>
			</ul>
		</div>
	</div>
</section>

<section class="s4">
	<div class="cont-1300">
		<img class="loguito" src="images/icons/x-a.png" alt="Xona">
		<div class="bloque wow zoomIn">
			<div class="mod wow rollIn" data-wow-delay=".5s">
				<h2 class="wow fadeInUp" data-wow-delay="1s">Buscamos ser recordados <span>por cómo los hicimos sentir</span> </h2>
				<p class="wow slideInUp" data-wow-delay="1.3s">A los clientes, en el proceso. A sus audiencias, en los resultados.</p>
				<a href="#" class="wow fadeIn" data-wow-delay="1.5s"><i class="icon-circle-thin"></i>CONTACTANOS</a>
			</div>
		</div> 
	</div>
</section>

<?php include('footer.php'); ?>