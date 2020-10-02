<?php include('head.php'); ?>

<body class="<?= 's_'.SECCION ?>">

<header>

  <div class="cabecera">

    <div class="cont-1300">
      <a href="<?=url('')?>" class=logo><img src="images/logo.png" alt="<?=$empresa->nombre?>" width="118" height="26"></a>
    </div>

    <div class="hamburger">
      <div class="top-bun"></div>
      <div class="meat"></div>
      <div class="bottom-bun"></div>
    </div>

    <span class="triangulo"></span>  
    
  </div>

  <nav>
    <img src="images/logo-nav.png" alt="<?=$empresa->nombre?>">
    <ul>
      <li><a href="<?=url('home')?>" class=" <?= SECCION == 'home' ? 'activo' : '' ?> ">Inicio</a></li>
      <li><a href="<?=url('xomos')?>" class=" <?= SECCION == 'xomos' ? 'activo' : '' ?> ">Xomos</a></li>
      <li><a href="<?=url('que-hacemos')?>" class=" <?= SECCION == 'que-hacemos' ? 'activo' : '' ?> ">Qué hacemos</a></li>
      <li><a href="<?=url('contacto')?>" class=" <?= SECCION == 'contacto' ? 'activo' : '' ?> ">Contacto</a></li>
      <div class="contactanos">
        <a href="mailto:<?=$empresa->email?>"><?=$empresa->email?></a>
        <div class="redes">
          <a href="<?=$empresa->redes['in']?>"><i class="icon-linkedin"></i></a>
          <a href="<?=$empresa->redes['ig']?>"><i class="icon-instagram"></i></a>
          <a href="<?=$empresa->redes['fb']?>"><i class="icon-facebook"></i></a>
        </div>
      </div>
    </ul>
  </nav>

  

</header>

