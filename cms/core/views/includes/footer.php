<?php

	$footer_url = "https://www.biribiri.com.ar/";
	$footer_url_txt = "www.biribiri.com.ar";

?>
	<div id="footer">
		<div id="credits">
			<a href="<?php echo $footer_url ?>" target="_blank"><?php echo $footer_url_txt ?></a>
		</div>
	</div>
	</div>
</div>

<!-- Hace que los textarea crezcan con el texto-->
<script type="text/javascript" src="<?php echo base_url() ?>core/js/jquery.autosize.js"></script>
<script>
	$('textarea').autosize();
</script>

<!--Restrinjo los campos de los forms-->
<script>
	$('.js-constrain').change(function(){

		//Solo números
		if( $(this).hasClass('numeric') ){
			$(this).val( $(this).val().replace(/\D/g,'') );
		}

	});

	$('.toggle-menu').click(function(){
		$('#topmenu').toggleClass('activo');
		$('.wrap-logueado').toggleClass('activo');
	});
</script>

</body>
</html>
