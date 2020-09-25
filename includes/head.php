<?php

$metas = Metas::obtener(SECCION);
$empresa = Config::obtener('empresa');

?>
<!DOCTYPE html>
<html lang="<?= IDIOMA ?>">
  <head>
    <meta charset="utf-8">

    <title><?= $metas->titulo?></title>
    <meta name="description"            content="<?= $metas->descripcion;?>"/>

    <!-- Twitter Card data -->
    <meta name="twitter:card"           content="summary_large_image"/>
    <?php if(isset($empresa->redes['tw']) AND $empresa->redes['tw']){ ?>
    <meta name="twitter:site"           content="@<?= $empresa->redes['tw'] ?>"/>
    <?php } ?>
    <meta name="twitter:title"          content="<?= $metas->titulo ?>" />
    <meta name="twitter:description"    content="<?= $metas->descripcion;?>" />
    <meta name="twitter:image"          content="<?= $metas->img ?>" />

    <!-- Open Graph data -->
    <meta property="og:title"           content="<?= $metas->titulo ?>" />
    <meta property="og:description"     content="<?= $metas->descripcion;?>"/>
    <meta property="og:image"           content="<?= $metas->img; ?>" />
    <meta property="og:site_name"       content="<?= $empresa->nombre ?>"/>
    <meta property="og:url"             content="<?= Url::actual(); ?>"/>

    <meta name="robots"   content="all">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <base href="<?= BASE_URL ?>">

    <link rel="canonical" href="<?= Url::actual() ?>" />
    <?php if( Idioma::deteccionHabilitada() ){
      foreach(Idioma::idiomasDisponibles() AS $idioma){
          echo '<link rel="alternate" hreflang="'.$idioma.'" href="'.Url::actual($idioma).'" />'."\r\n";
      }
    } ?>

    <!-- Favicons: http://realfavicongenerator.net/ -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=BASE_URL?>images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?=BASE_URL?>images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?=BASE_URL?>images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?=BASE_URL?>images/favicons/manifest.json">
    <link rel="mask-icon" href="<?=BASE_URL?>images/favicons/safari-pinned-tab.svg" color="#da802d">
    <link rel="shortcut icon" href="<?=BASE_URL?>images/favicons/favicon.ico">
    <meta name="msapplication-config" content="<?=BASE_URL?>images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <?php
   
    // Uno y minifico todos los CSS comunes a todas las páginas
    $main_css = $minified->merge(BASE_PATH.'css/main.min.css', 'css', array(
          BASE_PATH.'css/bootstrap/bootstrap.min.css',
          BASE_PATH.'sass/main.css',
      ));
    echo ' <link rel="stylesheet" href="'.str_replace(BASE_PATH, '', $main_css).'?v='.filemtime($main_css).'" />'."\r\n";
    ?>
    
    <!-- Carga las tipografías -->
    <script async src="js/fonts.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>