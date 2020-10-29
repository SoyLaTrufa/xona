<?php

class Casos_model extends MY_Model {

	var $fields = array(
		'activa',
		'fecha',
		'uri',
		'titulo',
		'epigrafe',
		'bajada',
		'foto_id',
		'foto_bg',

		// scroll 1
		's1_c1_video',
		's1_c1_foto',
		's1_c2_foto',
		's1_c3_texto',
		's1_c4_foto_large',
		's1_c5_video',

		// scroll 2
		's2_c1_foto',
		's2_c2_text',
		's2_c3_foto',
		's2_c3_video',
		's2_c4_video',
		's2_c5_foto',
		's2_c6_foto',

		// scroll 3
		's3_c1_texto',
		's3_c2_foto',
		's3_c3_foto',
		's3_c4_foto',
		's3_c5_video',
		's3_c6_foto',

		// scroll 4
		's4_c1_foto',
		's4_c2_foto_large',
		's4_c3_foto',
		's4_c4_video',
		's4_c5_texto',

		// scroll 5
		's5_c1_video',
		's5_c2_foto',
		's5_c3_foto',
		's5_c4_foto',
		's5_c5_texto',
		's5_c6_foto',
		's5_c6_video',

		// scroll 6
		's6_c1_foto_large',
		's6_c2_foto',

		// Fin
		'meta_titulo',
		'meta_descripcion',
		'orden'
	);

	var $table = 'casos';

	function __construct(){
    parent::__construct();
  }

  public function save_item($o,$isUpdate,$validar = true){

	// El título es obligatorio)
	if(isset($o->activa) ? $o->activa : false){
  	if(! (isset($o->titulo) ? $o->titulo : false)){
			throw new Exception('El título es obligatorio.');
			return false;
		}
	}

	// Creo automáticamente la URI
	if(isset($o->titulo)){
		include_once(APPPATH.'helpers/cadenaUrl.php');
		$o->uri = cadenaUrl(mb_strtolower($o->titulo,'utf-8'));
	}

	return parent::save_item($o, $isUpdate);

	}
}