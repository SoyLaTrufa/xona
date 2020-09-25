<?php include('head.php'); ?>

<body class="<?= 's_'.SECCION ?>">

<header class="cabecera" id="home">
    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-4 col-md-3">
          <button class="hamburger hamburger--efecto visible-xs">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
          <a href="" class="cabecera__logo anim-suave text-left">
            <h1>Logo</h1>
            <!-- <img src="images/logo.png" alt="<?= Config::obtener('empresa')->nombre ?>">  -->
          </a>        
        </div>

        <div class="col-xs-12 col-sm-8 col-md-9">
          <nav class="nav-principal">
            <ul>
              <li><a href="<?=url('home')?>" class=" <?= SECCION == 'home' ? 'activo' : '' ?> ">Home</a></li>
              <li><a href="<?=url('tabs')?>" class=" <?= SECCION == 'tabs' ? 'activo' : '' ?> ">Tabs</a></li>
              <li><a href="<?=url('acordeon')?>" class=" <?= SECCION == 'acordeon' ? 'activo' : '' ?> ">Acordeón</a></li>
              <li><a href="<?=url('slider')?>" class=" <?= SECCION == 'slider' ? 'activo' : '' ?> ">Slider</a></li>
              <li><a href="<?=url('contacto')?>" class=" <?= SECCION == 'contacto' ? 'activo' : '' ?> ">Contacto</a></li>
              <li><a href="<?= Url::actual((IDIOMA == 'es') ? 'en' : 'es')?>" ><?=(IDIOMA == 'es') ? 'ENG' : 'ESP'?></a></li>
            </ul>
          </nav>
        </div>


      </div>
    </div>
</header>

<main>