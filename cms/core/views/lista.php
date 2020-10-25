<?php

$buscador = include('includes/lista/buscador.php');

$listado_cabecera = $this->load->view(
    'includes/lista/cabecera',
    array(
        'campos_form' => $campos_form,
        'ordenar'     => $ordenar,
        'acciones_en_lote' => $acciones_en_lote,
        'controller'  => $controller
    ), true);

         
         
$listado_cuerpo = '';
foreach($items as $item){
    $campos = $this->load->view('includes/lista/campos', array('campos_form' => $campos_form, 'item' => $item), true);
    $acciones   = include('includes/lista/acciones.php');
    $listado_cuerpo .=
    '<tr class="item" data-id="'.$item->id.'">'.
        ($ordenar ? '<td class="js-orden grip"><i class="fa fa-list-ul" aria-hidden="true"></i></td>' : '').
        ($acciones_en_lote ? '<td><input class="js-AEL-item" type="checkbox" name="items_eliminar['.$item->id.']" value="'.$item->id.'"/></td>' : '').
        $campos.
        '<td class="bottons">'.$acciones.'</td>'.
    '</tr>';
}

$boton_csv = include('includes/lista/boton_csv.php');
$boton_xml = include('includes/lista/boton_xml.php');

?>

 <div id="wrapper" class="wrap-logueado">
    <div id="content">

        <div class="<?php echo ($buscador!='') ? 'border-bottom' : ''?>">
            <?php echo $buscador?>
        </div>

        <div class="mensaje-feedback" style="display: none;"><?php echo isset($message) ? $message : ''; ?></div>

        <div class="top-table">
            <?= $name ? '<h1>Listado de '.$name.'</h1>' : '<br><br>' ?>
            <div class="lista_acciones-gral">
                <?php echo ($add_button) ? '<input type="button" class="boton" value="'.$add_button_label.'" onclick="document.location.href = \''.base_url().$controller.'/add/'.$uriParameters.'\'">' : ''; ?>
                <?php echo $boton_csv; ?>
                <?php echo $boton_xml; ?>
            </div>
        </div>

        <div class="clear"></div>

        <?php if($acciones_en_lote){?>
        <div class="acciones-en-lote">
            <select class="js-AEL-accion">
                <option value="">Acciones en lote</option>
                <option value="eliminar">Eliminar</option>
            </select>
            <button class="js-AEL-aplicar boton boton--sm" type="submit">Aplicar</button>
        </div>
        <?php } ?>

        <table class="list <?=$ordenar ? 'lista-ordenable' : ''?> js-AEL-contenedor">
            <thead>
               <?php echo $listado_cabecera; ?>
            </thead>
            <tbody>
                <?php echo ($listado_cuerpo!='') ? $listado_cuerpo : '<td colspan="'.(count($campos_form) + 1).'">No hay datos para mostrar.</td>'; ?>
            </tbody>
        </table>

        <div id="lol"></div>
        <script>
                $('td[data-key="color"]').each(function(index) {
                  var cellText = $(this).html(); 
                  console.log(cellText); 

                  var sc = $('#lol').html(cellText);
                  $('header').css('background', '#'+cellText);
                });

                               

        </script>

        <input type="hidden" name="sort_order" id="sort_order" value="<?php echo implode('-',$orden); ?>"/>
        <input type="hidden" name="orden_inicio" id="orden_inicio" value="<?php echo intval($orden_inicio); ?>"/>

        <?php if($ordenar){?>
        <p>Agarrá y arrastrá las filas para ordenarlas.</p>
        <?php }?>

        <div class="pager">
            <?php echo $paginator ?>
        </div>


    </div>
</div>

<?php

/// Scripts JS ///
// Ordenar listado con  drag and drop
if($ordenar){
    echo '<script src="'.base_url().'core/js/vistas/lista/ordenar.js"></script>';
}

// Editar checkboxs con AJAX
echo '<script src="'.base_url().'core/js/vistas/lista/checkbox_ajax.js"></script>';
?>