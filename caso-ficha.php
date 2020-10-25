<?php

  require_once('api/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

  define('SECCION', 'caso-ficha');

	if(! isset($_GET['id'])){
		error_404();
	}else{

		if(! $caso = Caso::obtener(array_merge(
			array('id' => $_GET['id']),
			isset($_GET['vp']) ?  array('vp' => true) : array()
		))){
			header('location:'.url('pagina-no-disponible'));
			exit;
		}
	}

 	Url::cargarDatosUrlSeccionActual($caso);

	Metas::construir(SECCION, array(
		'titulo'      => $caso->titulo,
		'descripcion' => $caso->bajada,
		'img'         => $caso->foto ? $caso->foto->src : '',
	));

// Fin configuración de la página //

  include('header.php');

?>

<article class="caso-ficha">

<section class="section s1" style="background-image: url('<?=$caso->fotoBg->src?>')">
	<div class="box">
		<div class="caja">
			<h5 class="josh-js" data-josh-anim-name="fadeInUp"><?=$caso->epigrafe?></h5>
			<h1 class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: .5s"><?=$caso->titulo?></h1>
			<p class="josh-js" data-josh-anim-name="fadeInUp" style="animation-delay: 1s"><?=$caso->bajada?></p>
		</div>
	</div>
</section>


<!-- SCROLL 1 -->
<?php 
if ($caso->s1_c1_foto or $caso->s1_c2_foto or $caso->s1_c3_texto) { ?>
	<section class="section casos" style="background-image: url('<?=$caso->fotoBg->src?>')">
		<div class="box">
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS1C1->src?>')"></div>
			<!-- <div class="mod mod-bg">
				<video width="100%" class="video-home" controls loop><source src="<?= $caso->videoS1C1->src ?>" type="video/mp4"></video>
			</div> -->
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS1C2->src?>')"></div>
			<div class="mod mod-txt" style="background-color:<?=$caso->s1_c3_texto ? '#fff' : ''?> ">
				<p><?= $caso->s1_c3_texto?></p>
			</div>
			<div class="mod mod-bg mod-large" style="background-image: url('<?=$caso->fotoS1C4->src?>')"></div>
			<div class="mod mod-video play-video1" data-toggle="modal" data-target="#modal-1" style="background-image: url(<?= $caso->s1_c5_video ? 'https://img.youtube.com/vi/'.$caso->s1_c5_video.'/maxresdefault.jpg' : 'images/defecto/640x540.png' ?>)">
				<?= $caso->s1_c5_video ? '<i class="icon-play"></i>' : '' ?>
			</div>
		</div>
	</section>
<?php }
	if ($caso->s1_c5_video) { ?>
	<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <a class="cerrar" data-dismiss="modal">X</a>
	      <div class="modal-body">
	        <iframe id="video-s1" src="https://www.youtube.com/embed/<?=$caso->s1_c5_video?>?showinfo=0&fs=0&rel=0&modestbranding=1" frameborder="0" allow="autoplay; encrypted-media" controls allowfullscreen></iframe>
	      </div>
	    </div>
	  </div>
	</div>
<?php }
 ?>

<!-- SCROLL 2 -->
<?php 
	if ($caso->s2_c1_foto or $caso->s2_c2_text or $caso->s2_c3_foto) { ?>
	<section class="section casos" style="background-image: url('<?=$caso->fotoBg->src?>')">
		<div class="box">
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS2C1->src?>')"></div>
			<div class="mod mod-txt" style="background-color:<?=$caso->s2_c2_text ? '#fff' : ''?> ">
				<p><?=$caso->s2_c2_text?></p>
			</div>
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS2C3->src?>')"></div>
			<div class="mod mod-video play-video2" data-toggle="modal" data-target="#modal-2" style="background-image: url(<?= $caso->s2_c4_video ? 'https://img.youtube.com/vi/'.$caso->s2_c4_video.'/maxresdefault.jpg' : 'images/defecto/640x540.png' ?>)">
				<?= $caso->s2_c4_video ? '<i class="icon-play"></i>' : '' ?>
			</div>
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS2C5->src?>')"></div>
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS2C6->src?>')"></div>
		</div>
	</section>
<?php }
	if ($caso->s2_c4_video) { ?>
	<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <a class="cerrar" data-dismiss="modal">X</a>
	      <div class="modal-body">
	        <iframe id="video-s2" src="https://www.youtube.com/embed/<?=$caso->s2_c4_video?>?showinfo=0&fs=0&rel=0&modestbranding=1" frameborder="0" allow="autoplay; encrypted-media" controls allowfullscreen></iframe>
	      </div>
	    </div>
	  </div>
	</div>
<?php }
 ?>

 <!-- SCROLL 3 -->
<?php 
	if ($caso->s3_c1_texto or $caso->s3_c2_foto or $caso->s3_c3_foto) { ?>
	<section class="section casos" style="background-image: url('<?=$caso->fotoBg->src?>')">
		<div class="box">
			<div class="mod mod-txt" style="background-color:<?=$caso->s3_c1_texto ? '#fff' : ''?> ">
				<p><?=$caso->s3_c1_texto?></p>
			</div>
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS3C2->src?>')"></div>
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS3C3->src?>')"></div>
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS3C4->src?>')"></div>
			<div class="mod mod-video play-video3" data-toggle="modal" data-target="#modal-3" style="background-image: url(<?= $caso->s3_c5_video ? 'https://img.youtube.com/vi/'.$caso->s3_c5_video.'/maxresdefault.jpg' : 'images/defecto/640x540.png' ?>)">
				<?= $caso->s3_c5_video ? '<i class="icon-play"></i>' : '' ?>
			</div>
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS3C6->src?>')"></div>
		</div>
	</section>
<?php }
 if ($caso->s3_c5_video) { ?>
	<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <a class="cerrar" data-dismiss="modal">X</a>
	      <div class="modal-body">
	        <iframe id="video-s3" src="https://www.youtube.com/embed/<?=$caso->s3_c5_video?>?showinfo=0&fs=0&rel=0&modestbranding=1" frameborder="0" allow="autoplay; encrypted-media" controls allowfullscreen></iframe>
	      </div>
	    </div>
	  </div>
	</div>
<?php }
 ?>

 <!-- SCROLL 4 -->
<?php 
	if ($caso->s4_c1_foto or $caso->s4_c2_foto_large or $caso->s4_c3_foto) { ?>
	<section class="section casos" style="background-image: url('<?=$caso->fotoBg->src?>')">
		<div class="box">
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS4c1->src?>')"></div>
			<div class="mod mod-large" style="background-image: url('<?=$caso->fotoS4c2->src?>')"></div>
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS4c3->src?>')"></div>
			<div class="mod mod-video play-video4" data-toggle="modal" data-target="#modal-4" style="background-image: url(<?= $caso->s4_c4_video ? 'https://img.youtube.com/vi/'.$caso->s4_c4_video.'/maxresdefault.jpg' : 'images/defecto/640x540.png' ?>)">
				<?= $caso->s4_c4_video ? '<i class="icon-play"></i>' : '' ?>
			</div>
			<div class="mod mod-txt" style="background-color:<?=$caso->s4_c5_texto ? '#fff' : ''?> ">
				<p><?=$caso->s4_c5_texto?></p>
			</div>
		</div>
	</section>
<?php }
 if ($caso->s4_c4_video) { ?>
	<div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <a class="cerrar" data-dismiss="modal">X</a>
	      <div class="modal-body">
	        <iframe id="video-s4" src="https://www.youtube.com/embed/<?=$caso->s4_c4_video?>?showinfo=0&fs=0&rel=0&modestbranding=1" frameborder="0" allow="autoplay; encrypted-media" controls allowfullscreen></iframe>
	      </div>
	    </div>
	  </div>
	</div>
<?php }
 ?>

 <!-- SCROLL 5 -->
<?php 
	if ($caso->s5_c1_video or $caso->s5_c2_foto or $caso->s5_c3_foto) { ?>
	<section class="section casos" style="background-image: url('<?=$caso->fotoBg->src?>')">
		<div class="box">
			<div class="mod mod-video play-video5" data-toggle="modal" data-target="#modal-5" style="background-image: url(<?= $caso->s5_c1_video ? 'https://img.youtube.com/vi/'.$caso->s5_c1_video.'/maxresdefault.jpg' : 'images/defecto/640x540.png' ?>)">
				<?= $caso->s5_c1_video ? '<i class="icon-play"></i>' : '' ?>
			</div>
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS5c2->src?>')"></div>
			<div class="mod mod-large" style="background-image: url('<?=$caso->fotoS5c3->src?>')"></div>
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS5c4->src?>')"></div>
			<div class="mod mod-txt" style="background-color:<?=$caso->s5_c5_texto ? '#fff' : ''?> ">
				<p><?=$caso->s5_c5_texto?></p>
			<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS5c6->src?>')"></div>
			</div>
		</div>
	</section>
<?php }
 if ($caso->s5_c1_video) { ?>
	<div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <a class="cerrar" data-dismiss="modal">X</a>
	      <div class="modal-body">
	        <iframe id="video-s5" src="https://www.youtube.com/embed/<?=$caso->s5_c1_video?>?showinfo=0&fs=0&rel=0&modestbranding=1" frameborder="0" allow="autoplay; encrypted-media" controls allowfullscreen></iframe>
	      </div>
	    </div>
	  </div>
	</div>
<?php }
 ?>
<section class="section casos" style="background-image: url('<?=$caso->fotoBg->src?>')">
	<div class="box">
		<div class="mod mod-bg mod-large" style="background-image: url('<?=$caso->fotoS6c1->src?>')"></div>
		<div class="mod mod-bg" style="background-image: url('<?=$caso->fotoS6c2->src?>')"></div>
		<div class="mod mod-full">
			<div class="cont-975">
				<div class="volver">
					<a href="<?=url('que-hacemos')?>"><i class="icon-right"></i>Volver al listado</a>
				</div>
			<?php 
				foreach (Caso::obtener(array('excluir' => $_GET['id'])) as $key => $caso) { 
					if ($key === 1) {break;} ?>
					<a href="<?=$caso->url?>" class="proximo">
						<img src="<?=$caso->foto->src?>" alt="<?=$caso->titulo?>" width="154">
						<div class="txt">
							<h3><?=$caso->titulo?></h3>
							<h5>PRÓXIMO CASO</h5>
							<i class="icon-right"></i>
						</div>
					</a>
				<?php }
			 ?>
			</div>
		</div>
	</div>
</section>

</article>

<?php include('footer.php'); ?>