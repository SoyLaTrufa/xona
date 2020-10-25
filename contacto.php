<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'contacto');
  // Plugins::activar('animacion');

// Fin configuración de la página //

  include('header.php');

?>

<article id="fullpage">
	<section class="section s1" id="c15mobile">
		<div class="cont-1300">
			<div class="top">
				<div class="titulo">
					<h5 class="josh-js" data-josh-anim-name="fadeInUp">CONTACTO</h5>
					<p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: .3s">Los desafíos se presentan cuando estamos preparados para abordarlos. <br><span>No es imposible, <br> seamos extraordinarios.</span></p>
				</div>
				<?php include('api/forms/contacto.php'); ?>
				<div class="form-cont josh-js" data-josh-anim-name="fadeInUp">
			    	<?php echo $form_contacto->mensaje_estado ?>
			   		<?php if ($form_contacto->estado != 'ok') { ?>
			        <form method="post" action="<?=url('contacto')?>#enviado">

			        	<div class="form-group">
			                <label for="nombre" class="sr-only">Nombre</label>
			                <input type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido" value="<?= isset($_POST['nombre']) ? $_POST['nombre'] : ''?>"> 
			             </div>          
			                 
			        	<div class="form-group">
			                <label for="empresa" class="sr-only">Empresa</label>
			                <input type="text" name="empresa" id="empresa" placeholder="Empresa" value="<?= isset($_POST['empresa']) ? $_POST['empresa'] : ''?>"> 
			            </div> 

			            <div class="form-group">
			                <label for="email" class="sr-only">Email</label>
			                <input type="email" name="email" id="email" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''?>">                        
			            </div> 

			            <div class="form-group">
			                <label for="tel" class="sr-only">Telefono</label>
			                <input type="tel" name="tel" id="tel" placeholder="Teléfono" value="<?= isset($_POST['tel']) ? $_POST['tel'] : ''?>">                        
			            </div>

			            <input type="hidden"  name="recaptcha_response" id="recaptchaContacto">
			              			
						<div class="form-group">
			           		 <textarea name="consulta" placeholder="¿Qué podemos hacer juntos?" ><?= isset($_POST['consulta']) ? $_POST['consulta'] : '' ?></textarea>			
			           		 <button type="submit" name="enviar_contacto" value="Enviar"><span><i class="icon-right"></i></span>ENVIAR</button>
						</div>

			        </form> 
			        <?php } ?>
				</div>
			</div>
			<div class="bottom">
				<div class="tel">
				<?php
					foreach ($empresa->tel as $key => $n) {
						echo '<ul><li class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: .5s"><span>'.$key.' </span>';
						echo '<a href="tel:'.$n['link'].'">'.$n['num'].'</a></li></ul>';
					}
				 ?>				
				</div>
				<div class="redes josh-js" data-josh-anim-name="fadeIn" style="animation-delay: .5s">
		          <div>
		          	  <a href="mailto:<?=$empresa->email?>" class="email"><?=$empresa->email?></a>
			          <a class="red josh-js" href="<?=$empresa->redes['in']?>"><i class="icon-linkedin"></i></a>
			          <a class="red josh-js" href="<?=$empresa->redes['ig']?>"><i class="icon-instagram"></i></a>
			          <a class="red josh-js" href="<?=$empresa->redes['fb']?>"><i class="icon-facebook"></i></a>
		          </div>
		        </div>
			</div>
		</div>
	</section>

	<section class="s2" id="cs2mobile">
		<div class="cont-1300">
			<img class="loguito" src="images/icons/x-a.png" alt="Xona">
			<div class="bottom">
				<div class="tel">
				<?php
					foreach ($empresa->tel as $key => $n) {
						echo '<ul><li class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: .2s"><span>'.$key.' </span>';
						echo '<a href="tel:'.$n['link'].'">'.$n['num'].'</a></li></ul>';
					}
				 ?>				
				</div>
				<div class="redes josh-js" data-josh-anim-name="fadeIn" style="animation-delay: .5s">
		          <div>
		          	<a href="mailto:<?=$empresa->email?>"><?=$empresa->email?></a>
		          <a class="red" href="<?=$empresa->redes['in']?>"><i class="icon-linkedin"></i></a>
		          <a class="red" href="<?=$empresa->redes['ig']?>"><i class="icon-instagram"></i></a>
		          <a class="red" href="<?=$empresa->redes['fb']?>"><i class="icon-facebook"></i></a>
		          </div>
		        </div>
			</div>
		</div>
	</section>
</article>



<?php include('footer.php'); ?>