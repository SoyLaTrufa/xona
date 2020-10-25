<?php include('head.php');?>


<header>
  <?php 
    if (isset($nombre) AND $nombre!="" ) { ?>
      <div class="logo">
        <img src="<?= base_url() ?>core/css/img/xona.png" alt="Laboratorio Web" width="16">
        <label class="switch">      
            <input type="checkbox" checked>
            <span class="slider round toggle-menu"></span>      
        </label>
      </div>      
    <?php }
   ?>

		<h2>Bienvenido<?php if( isset($nombre) AND $nombre!="" ){echo ', '.$nombre.'';} ?></h2>
	<?php if( isset($nombre) AND $nombre!="" ){
		echo '<a class="salir" href="'.base_url().'login/logout" title="Cerrar sesión"><span>Salir</span><i class="fa fa-sign-out" aria-hidden="true"></i></a>';
	}

	?>

</header>

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 7px;
  bottom: 2px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #0c092f;
}

input:focus + .slider {
  box-shadow: 0 0 1px #0c092f;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>