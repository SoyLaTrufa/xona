	
	</main>
	
	<footer class="pie">
		<div class="container">
    		<div class="row">
    			<div class="col-xs-12 col-sm-6">
    				
				</div>
			</div>
	    </div>

		<div class="copyright">
			<div class="container">
	    		<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="legales">
							<small>© El super client <?=date('Y')?></small>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 synapsis">
						<a class="synapsis" href="http://synapsis.com.ar/" target="_blank">Synapsis CI - Diseño Web</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha384-rY/jv8mMhqDabXSo+UCggqKtdmBfd3qC2/KvyTDNQ6PcUJXaxK1tMepoQda4g5vB" crossorigin="anonymous"></script>

	<?php
		Plugins::cargar();
		$main_js = $minified->merge(BASE_PATH.'js/main.min.js', 'js', array(BASE_PATH.'js/main.js'));
		echo '<script src="'.str_replace(BASE_PATH, '', $main_js).'?v='.filemtime($main_js) .'"></script>'. PHP_EOL;
   ?>
</body>
</html>