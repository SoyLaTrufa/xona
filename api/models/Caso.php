<?php

Class Caso extends Base{

	public $id;
	public $uri;
	public $titulo;
	public $epigrafe;
	public $bajada;

	public function url(){
		return $this->url = url('caso-ficha', $this);
	}

	public function foto(){
		return $this->foto = Foto::obtener(array('id' => $this->foto_id), array(
		 	'medidas' => array(
				array(
		 			'ancho' 		=> 478,
		 			'alto'  		=> 538,
		 			'src_default'  	=> '478x538.jpg',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	public function fotoBg(){
		return $this->foto = Foto::obtener(array('id' => $this->foto_bg), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 1440,
		 			'alto'  		=> 900,
		 			'src_default'  	=> '1440x900.jpg',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	// SCROLL 1
	public function videoS1C1() {
		return $this->video = Archivo::obtener('id', $this->s1_c1_video);
	}

	public function fotoS1C1(){
		return $this->foto = Foto::obtener(array('id' => $this->s1_c1_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	public function fotoS1C2(){
		return $this->foto = Foto::obtener(array('id' => $this->s1_c2_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	public function fotoS1C4(){
		return $this->foto = Foto::obtener(array('id' => $this->s1_c4_foto_large), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 1280,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '1280x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	// SCROLL 2
	public function fotoS2C1(){
		return $this->foto = Foto::obtener(array('id' => $this->s2_c1_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}
	public function fotoS2C3(){
		return $this->foto = Foto::obtener(array('id' => $this->s2_c3_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}
	public function videoS2C3() {
		return $this->video = Archivo::obtener('id', $this->s2_c3_video);
	}
	public function fotoS2C5(){
		return $this->foto = Foto::obtener(array('id' => $this->s2_c5_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}
	public function fotoS2C6(){
		return $this->foto = Foto::obtener(array('id' => $this->s2_c6_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	// Scroll 3
	public function fotoS3C2(){
		return $this->foto = Foto::obtener(array('id' => $this->s3_c2_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	public function fotoS3C3(){
		return $this->foto = Foto::obtener(array('id' => $this->s3_c3_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}
	public function fotoS3C4(){
		return $this->foto = Foto::obtener(array('id' => $this->s3_c4_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}
	public function fotoS3C6(){
		return $this->foto = Foto::obtener(array('id' => $this->s3_c6_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	// Scroll 4
	public function fotoS4c1(){
		return $this->foto = Foto::obtener(array('id' => $this->s4_c1_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	public function fotoS4c2(){
		return $this->foto = Foto::obtener(array('id' => $this->s4_c2_foto_large), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 1280,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '1280x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	public function fotoS4c3(){
		return $this->foto = Foto::obtener(array('id' => $this->s4_c3_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	// Scroll 5
	public function fotoS5c2(){
		return $this->foto = Foto::obtener(array('id' => $this->s5_c2_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	public function fotoS5c3(){
		return $this->foto = Foto::obtener(array('id' => $this->s5_c3_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}
	public function fotoS5c4(){
		return $this->foto = Foto::obtener(array('id' => $this->s5_c4_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	public function fotoS5c6(){
		return $this->foto = Foto::obtener(array('id' => $this->s5_c6_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	public function videoS5C6() {
		return $this->video = Archivo::obtener('id', $this->s5_c6_video);
	}

	// Scroll 6
	public function fotoS6c1(){
		return $this->foto = Foto::obtener(array('id' => $this->s6_c1_foto_large), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 1280,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '1280x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	public function fotoS6c2(){
		return $this->foto = Foto::obtener(array('id' => $this->s6_c2_foto), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 540,
		 			'src_default'  	=> '640x540.png',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'casos',
				'id'     => $this->id
		 	)
		));
	}

	/** 
	* Constructor
	* @param array Recibe todos los datos con los que se va a construir el objeto
	*/
	function __construct($datos){

		$this->id = $datos->id;

		$this->titulo =  $datos->titulo;
		$this->epigrafe =  $datos->epigrafe;
		$this->bajada =  $datos->bajada;
		$this->uri =  $datos->uri;

		$this->foto_id = $datos->foto_id;
		$this->foto_bg = $datos->foto_bg;

		// scroll 1
		$this->s1_c1_video = $datos->s1_c1_video;
		$this->s1_c1_foto = $datos->s1_c1_foto;
		$this->s1_c2_foto = $datos->s1_c2_foto;
		$this->s1_c3_texto = $datos->s1_c3_texto;
		$this->s1_c4_foto_large = $datos->s1_c4_foto_large;
		$this->s1_c5_video = $datos->s1_c5_video;

		// scroll 2
		$this->s2_c1_foto = $datos->s2_c1_foto;
		$this->s2_c2_text = $datos->s2_c2_text;
		$this->s2_c3_foto = $datos->s2_c3_foto;
		$this->s2_c3_video = $datos->s2_c3_video;
		$this->s2_c4_video = $datos->s2_c4_video;
		$this->s2_c5_foto = $datos->s2_c5_foto;
		$this->s2_c6_foto = $datos->s2_c6_foto;

		// scroll 3
		$this->s3_c1_texto = $datos->s3_c1_texto;
		$this->s3_c2_foto = $datos->s3_c2_foto;
		$this->s3_c3_foto = $datos->s3_c3_foto;
		$this->s3_c4_foto = $datos->s3_c4_foto;
		$this->s3_c5_video = $datos->s3_c5_video;
		$this->s3_c6_foto = $datos->s3_c6_foto;

		// scroll 4
		$this->s4_c1_foto = $datos->s4_c1_foto;
		$this->s4_c2_foto_large = $datos->s4_c2_foto_large;
		$this->s4_c3_foto = $datos->s4_c3_foto;
		$this->s4_c4_video = $datos->s4_c4_video;
		$this->s4_c5_texto = $datos->s4_c5_texto;

		// Scroll 5
		$this->s5_c1_video = $datos->s5_c1_video;
		$this->s5_c2_foto = $datos->s5_c2_foto;
		$this->s5_c3_foto = $datos->s5_c3_foto;
		$this->s5_c4_foto = $datos->s5_c4_foto;
		$this->s5_c5_texto = $datos->s5_c5_texto;
		$this->s5_c6_foto = $datos->s5_c6_foto;
		$this->s5_c6_video = $datos->s5_c6_video;

		// Scroll 6
		$this->s6_c1_foto_large = $datos->s6_c1_foto_large;
		$this->s6_c2_foto = $datos->s6_c2_foto;

		

		if(! $this->bajada){
			$this->bajada = recortarCadena(strip_tags($this->cuerpo), 360);
		}

		$this->meta_titulo = $this->meta_titulo ? $this->meta_titulo : $this->titulo;
		$this->meta_descripcion = $this->meta_descripcion ? $this->meta_descripcion : $this->bajada;
	}


	/* 
	* SQL por defecto
	* Defino los valores por defecto para todas las cláusulas
	*/
	protected static function sql_defecto($tabla, $clausula, $sentencias){
		$sql = parent::sql_defecto($tabla, $clausula, $sentencias);
		switch($clausula){
			case 'order' :
				$sql = 'ORDER BY '.(!empty($sentencias) ? implode(',', $sentencias).',' : '').' '.$tabla.'.fecha DESC, '.$tabla.'.id DESC';
				break;
		}

		return $sql;
	}


	/**
	* Obtener elementos filtrados desde la BD
	* @param filtros Puede ser: todos, id o un array con cualquiera de esos filtros
	*/
	static function obtener( $filtros = array('todas' => ''), $dato = null, $modelo = '', $tabla = ''){
		
		$filtros = !is_array($filtros) ? array($filtros => $dato) : $filtros;
		if(! array_key_exists('vp', $filtros)){
			$filtros = array_merge($filtros, array('activa' => 1));
		}

		return parent::obtener($filtros, $dato, 'Caso', 'casos');
	}

	
}