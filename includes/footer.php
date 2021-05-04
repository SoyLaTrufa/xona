

	<!-- <script  src="https://code.jquery.com/jquery-3.5.1.min.js"  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="  crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha512-DUC8yqWf7ez3JD1jszxCWSVB0DMP78eOyBpMa5aJki1bIRARykviOuImIczkxlj1KhVSyS16w2FSQetkD4UU2w==" crossorigin="anonymous"></script>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/josh.js"></script>

	<!-- <script src="https://rawgit.com/alvarotrigo/fullPage.js/dev/src/fullpage.js"></script> -->
	<script src="js/fullpage.js"></script>
	<!-- <script src="js/jquery.owl-carousel/owl.carousel.min.js"></script> -->

	<?php
		Plugins::cargar();
		$main_js = $minified->merge(BASE_PATH.'js/main.min.js', 'js', array(BASE_PATH.'js/main.js'));
		echo '<script src="'.str_replace(BASE_PATH, '', $main_js).'?v='.filemtime($main_js) .'"></script>'. PHP_EOL;
   ?>
   <script>

   		function myFunction(x) {
		  if (x.matches) { // If media query matches
		    $('#xs5mobile').addClass('section');
		    $('#cs2mobile').addClass('section');
		    $('#qs1mobile').addClass('section');
		    $('.caso-ficha').removeAttr('id');
		  } else {
		    $('#xs5mobile').removeClass('section');
		    $('#cs2mobile').removeClass('section');
		    $('#qs1mobile').removeClass('section');
		    $('.caso-ficha').attr('id', 'fullpage');
		  }
		}
		var x = window.matchMedia("(max-width: 700px)")
		myFunction(x);

		var slider = $('.owl-carousel');
		$('#nextItem').click(function () {
		    slider.trigger('next.owl.carousel');
		});

	</script>

   <script>
   	const josh = new Josh();

   	new fullpage('#fullpage', {
   	  scrollBar: true,
   	  slidesNavigation: false,
	  licenseKey: 'h&^B^&K@e1',
	  // sectionsColor: ['yellow', 'orange', '#C0C0C0', '#ADD8E6'],
	});
   </script>

   <script>
   	var vid = document.getElementById("v1");
	var vid2 = document.getElementById("v2"); 
	var vxomos = document.getElementById("vxomos"); 

		function playVidUno() { 
		  vid.play(); 
		} 

		function playVidos() { 
		  vid2.play(); 
		} 

		function playXomos() { 
		  vxomos.play(); 
		} 

		function pauseVid() { 
		  vid.pause(); 
		  vid2.pause();
		  vxomos.pause();
		}

		$('.vplay').click(function (){
			$(this).hide();
			$('.portada-video').hide();
		});

		$('#v1').click(function (){
			$('.vplay').hide();
			$('.portada-video').hide();
		});

		$('.playxomos').click(function (){
			$(this).hide();
			$('.portada-xomos').hide();
		});

		$('#vxomos').click(function (){
			$('.playxomos').hide();
			$('.portada-xomos').hide();
		});


		// $(document).ready(function() {
		//   $('.mov-video').on('click', function(ev) {
		//     $("#video-frame")[0].src += "&autoplay=1";
		//     ev.preventDefault();
		 
		//   });
		// });

		$('.play-video1').click(function(){
			$('#video-s1')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
		});
		$('.play-video2').click(function(){
			$('#video-s2')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
		});
		$('.play-video3').click(function(){
			$('#video-s3')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
		});
		$('.play-video4').click(function(){
			$('#video-s4')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
		});
		$('.play-video5').click(function(){
			$('#video-s5')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
		});

		$('#modal-1').click(function(){
			$('#video-s1')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
		});

		$('#modal-2').click(function(){
			$('#video-s2')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
		});

		$('#modal-3').click(function(){
			$('#video-s3')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
		});

		$('#modal-4').click(function(){
			$('#video-s4')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
		});

		$('#modal-5').click(function(){
			$('#video-s5')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
		});

   </script>

	<!-- <script src="js/scrollit.js"></script> -->
	
  <!--  <script>

	document.body.addEventListener('wheel', doMagic)

	function doMagic(e) {
	  var tags = ['HEADER', 'SECTION', 'FOOTER']
	  
	  if (tags.includes(e.target.nodeName)) {

	    var next = e.target.nextElementSibling,
	        prev = e.target.previousElementSibling
	  } else { 

	    var next = e.target.closest(tags).nextElementSibling,
	        prev = e.target.closest(tags).previousElementSibling
	  }
	  
	  if (e.deltaY < 0) {

	    e.preventDefault

	    if (tags.includes(prev.nodeName)) {

	      scrollIt(
	        prev, 
	        800, 
	        'easeInOutQuad' 
	      )

	      e.target.closest(tags).classList.remove('show')
	      prev.classList.add('show')
	    }
	  } else if (e.deltaY > 0) { 

	    e.preventDefault
	    if (tags.includes(next.nodeName)) {
	      scrollIt(
	        next,
	        800,
	        'easeInOutQuad'
	      )
	      e.target.closest(tags).classList.remove('show')
	      next.classList.add('show')
	    }
	  } else {
	    return false
	  }
	}
   </script> -->

</body>
</html>