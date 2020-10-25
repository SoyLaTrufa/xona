<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'que-hacemos');
  // Plugins::activar('animacion');
  Plugins::activar('owlCarousel');
  $casos = Caso::obtener('');

// Fin configuración de la página //

  include('header.php');

?>

<article id="fullpage">

  <section class="section s1">
  	<h4><a href="#casos"><span><i class="icon-right"></i></span>NUESTROS TRABAJOS</a></h4>

  	<div class="mod f1">
  		<div class="franja-cont">
        <h3 class="josh-js" data-josh-anim-name="fadeInUp">Marketing de <br> Experiencias</h3>
        <ul class="josh-js" data-josh-anim-name="fadeInUp">
          <li><i class="icon-ok"></i>Programas de Incentivo</li>
          <li><i class="icon-ok"></i>Programas de Relacionamiento</li>
          <li><i class="icon-ok"></i>Travel Design Experiences</li>
        </ul>  
      </div>
  		<a class="sombra"></a>
  	</div>

  	<div class="mod f2">
      <div class="franja-cont">
  	  	<h3 class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: .2s">Go Live <br><span>.</span></h3>
        <ul class="josh-js" data-josh-anim-name="fadeInUp">
          <li><i class="icon-ok"></i>Lanzamientos</li>
          <li><i class="icon-ok"></i>Eventos</li>
          <li><i class="icon-ok"></i>Convenciones</li>
          <li><i class="icon-ok"></i>Acciones de marca</li>
          <li><i class="icon-ok"></i>Activaciones</li>
        </ul>
      </div>
  		<a class="sombra"></a>
  	</div>

  	<div class="mod f3">
      <div class="franja-cont">
  		  <h3 class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: .4s">Value Content <br> Lab</h3>
        <ul>
          <li><i class="icon-ok"></i>Story Brand Building</li>
          <li><i class="icon-ok"></i>Digital Creative Hub</li>
          <li><i class="icon-ok"></i>Brand Content</li>
          <li><i class="icon-ok"></i>Creatividad</li>
          <li><i class="icon-ok"></i>Trade Marketing / Retail Experience</li>
        </ul>
      </div>
  		<a class="sombra"></a>
  	</div>

  	<div class="mod franja f4">
      <div class="franja-cont">
  		  <h3 class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: .6s">Comunicación <br><span>.</span></h3>
        <ul>
          <li><i class="icon-ok"></i>Estrategias de Reputación y Brand PR</li>
          <li><i class="icon-ok"></i>Media Relations</li>
          <li><i class="icon-ok"></i>Comunicaciones Integradas</li>
        </ul>
      </div>
  		<a class="sombra"></a>
  	</div>

  </section>

  <section class="s1mobile" id="qs1mobile">
    <div class="mod f3">
      <div class="franja-cont">
        <h3 class="josh-js" data-josh-anim-name="fadeInUp">Value Content Lab</h3>
        <ul class="josh-js" data-josh-anim-name="fadeInUp">
          <li><i class="icon-ok"></i>Story Brand Building</li>
          <li><i class="icon-ok"></i>Digital Creative Hub</li>
          <li><i class="icon-ok"></i>Brand Content</li>
          <li><i class="icon-ok"></i>Creatividad</li>
          <li><i class="icon-ok"></i>Trade Marketing / Retail Experience</li>
        </ul>
      </div>
      <a class="sombra"></a>
    </div>

    <div class="mod franja f4">
      <div class="franja-cont">
        <h3 class="josh-js" data-josh-anim-name="fadeInUp">Comunicación</h3>
        <ul class="josh-js" data-josh-anim-name="fadeInUp">
          <li><i class="icon-ok"></i>Estrategias de Reputación y Brand PR</li>
          <li><i class="icon-ok"></i>Media Relations</li>
          <li><i class="icon-ok"></i>Comunicaciones Integradas</li>
        </ul>
      </div>
      <a class="sombra"></a>
    </div>
  </section>

  <?php 
    $cas = array(
      (object) array(
        'img' => 'images/temp/caso1.jpg',
        'titulo' => 'LOREM IPSUM',
        'bajada' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis libero id posuere tempor'
      ),
      (object) array(
        'img' => 'images/temp/caso2.jpg',
        'titulo' => 'LOREM IPSUM 2',
        'bajada' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis libero id posuere tempor'
      ),
      (object) array(
        'img' => 'images/temp/caso3.jpg',
        'titulo' => 'LOREM IPSUM 3',
        'bajada' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis libero id posuere tempor'
      ),
      (object) array(
        'img' => 'images/temp/caso4.jpg',
        'titulo' => 'LOREM IPSUM 4',
        'bajada' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis libero id posuere tempor'
      ), (object) array(
        'img' => 'images/temp/caso5.jpg',
        'titulo' => 'LOREM IPSUM 5',
        'bajada' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis libero id posuere tempor'
      ),
      (object) array(
        'img' => 'images/temp/caso6.jpg',
        'titulo' => 'LOREM IPSUM 6',
        'bajada' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis libero id posuere tempor'
      ),
      (object) array(
        'img' => 'images/temp/caso7.jpg',
        'titulo' => 'LOREM IPSUM 7',
        'bajada' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis libero id posuere tempor'
      ),
      (object) array(
        'img' => 'images/temp/caso8.jpg',
        'titulo' => 'LOREM IPSUM 8',
        'bajada' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis libero id posuere tempor'
      ),
    );

    $mitad = round(count($casos)/2);
   ?>   
  <section class="section s2" id="casos">
    <i class="icon-right" id="nextItem"></i>
    <div class="slider-casosTop">
      <ul class="owl-carousel">
      <?php 
        foreach ($casos as $key => $caso) {
          echo '<li><a href="'.$caso->url.'" class="item" style="background-image: url('.$caso->foto->src.')">';
          echo '<div class="caso-hover"><h4>'.$caso->titulo.'</h4><p>'.$caso->bajada.'</p>';
          echo '<i class="icon-right"></i></div></a></li>';
          if ($key+1 == $mitad) {
            echo "</ul>";
            echo "</div>";
            echo '<div class="slider-casosDown"><ul class="owl-carousel">';
            continue;
            echo '<li><a href="#" class="item" style="background-image: url('.$caso->img.')">';
            echo '<div class="caso-hover"><h4>'.$caso->titulo.'</h4><p>'.$caso->bajada.'</p>';
            echo '<i class="icon-right"></i>';
            echo '</div></a></li></ul></div>';
          }
        }
       ?>
  </section>
  
  <section class="section s3">
  	<div class="cont-1300">
  		<img class="loguito" src="images/icons/x-a.png" alt="Xona">
  		<div class="slider-clientes">
  		  <h2 class="josh-js" data-josh-anim-name="zoomIn">Nuestros clientes</h2>
  			<ul class="owl-carousel">
  		<?php 
  			include('clientes.php');
  			foreach ($clientes as $key => $logo) { ?>
  				<li>
  					<div class="item">
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

  <section class="section s4">
  	<div class="cont-1300">
  		<img class="loguito" src="images/icons/x-a.png" alt="Xona">
  		<div class="bloque josh-js" data-josh-anim-name="zoomIn">
  			<div class="mod josh-js" data-josh-anim-name="fadeIn" style="animation-delay: .5s">
  				<h2 class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1s">Buscamos ser recordados <span>por cómo los hicimos sentir</span> </h2>
  				<p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1.3s">A los clientes, en el proceso. A sus audiencias, en los resultados.</p>
  				<a href="<?=url('contacto')?>" class="josh-js" data-josh-anim-name="fadeIn" style="animation-delay: 1.5s"><span><i class="icon-right"></i></span>CONTACTANOS</a>
  			</div>
  		</div> 
  	</div>
  </section>

</article>


<?php include('footer.php'); ?>