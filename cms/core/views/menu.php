
	<div id="topmenu">
		<ul>
			<?php
			foreach( $menu AS $solapa ){

				$activo = false;
				if($current_script == $solapa->controlador){
					if($solapa->categoria!=''){
						if(isset($_GET['categ']) AND $_GET['categ'] == $solapa->categoria){
							$activo = true;
						}
					}else{
						$activo = true;
					}
				}

				echo '<li class="'.($activo ? 'current' : '').' '.
					($this->session->userdata('perfil')=='superadmin' ? $solapa->tipo : '').
					( ($this->session->userdata('perfil')!='superadmin' AND $solapa->tipo=='oculta') ? 'hidden': '').'">';
				echo '<a href="'.
						base_url().
						$solapa->controlador.
						($solapa->listar!='todos' ? '/edit/'.$solapa->listar : '').
						($solapa->categoria!='' ? ($solapa->listar=='todos' ? '/index' : '').'?categ='.$solapa->categoria : '').'">';
				if ($solapa->controlador == 'admins') {
					echo '<i class="fa fa-user" aria-hidden="true"></i>'.$solapa->nombre;
				} 
				elseif ($solapa->controlador == 'menu') {
					echo '<i class="fa fa-bars" aria-hidden="true"></i>'.$solapa->nombre;
				}elseif ($solapa->controlador == 'temas') {
					echo '<i class="fa fa-paint-brush" aria-hidden="true"></i>'.$solapa->nombre;
				}else{
					echo '<i class="fa fa-cogs" aria-hidden="true"></i>'.$solapa->nombre;					
				}
				echo '</a></li>';
			}
			?>
		</ul>
	
<style>
	#topmenu .hidden{
		display: none;
	}
</style>
</div>
