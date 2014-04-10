<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!--
		Supersized - Fullscreen Slideshow jQuery Plugin
		Version : 3.2.4
		Site	: www.buildinternet.com/project/supersized
		
		Author	: Sam Dunn
		Company : One Mighty Roar (www.onemightyroar.com)
		License : MIT License / GPL License
	-->
<!-- GOOGLE ANALITICS -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6323223-11']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- GOOGLE ANALITICS -->
<head>
<title>Especial fotográfico :: El Cajas, biosfera del mundo</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="description" content="La ceremonia de posesión de Rafael Correa para el mandato de los próximos cuatro años (2013 -2017).">
<meta name="keywords" content="Especial,fotográfico, Ecuador, Quito, posesión, presidente, RafaelCorrea">
<link rel="stylesheet" href="css/panel-slide.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/supersized.shutter.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="js/slide.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
<script type="text/javascript" src="js/supersized.shutter.min.js"></script>
<!-- ADDTHIS -->
<script src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=elcomerciocom" type="text/javascript"></script>
<!-- ADDTHIS FIN -->
<script type="text/javascript">
			
			jQuery(function($){
				var slides = [];
				
				$.ajax({
				        type: "POST",
				        url: "leer.php", 
				        success: function (data) {
				            var obj = $.parseJSON(data);
				            $('h2').text(obj.titulo);
							$('p.grey').text(obj.subtitulo);
							
							$.each(obj.tituloFoto, function(index, val) {
								 numero = index + 1;
				            	 slides.push(
				            	 	{ 
				            	 		image : 'fotos/foto' + numero + '.jpg', 
				            	 		title : obj.tituloFoto[index],
				            	 		thumb : 'fotos/thumb/foto' + numero + '.jpg',
				            	 		url : ''
				            	 	}
				            	 	);//SLIDES
				            });	//each
		 					$.supersized({
								// Functionality
								slideshow               :   1,			// Slideshow on/off
								autoplay				:	1,			// Slideshow starts playing automatically
								start_slide             :   0,			// Start slide (0 is random)
								stop_loop				:	0,			// Pauses slideshow on last slide
								random					: 	0,			// Randomize slide order (Ignores start slide)
								slide_interval          :   8000,		// Length between transitions
								transition              :   6, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
								transition_speed		:	1000,		// Speed of transition
								new_window				:	1,			// Image links open in new window/tab
								pause_hover             :   0,			// Pause slideshow on hover
								keyboard_nav            :   1,			// Keyboard navigation on/off
								performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
								image_protect			:	1,			// Disables image dragging and right click with Javascript

								// Size & Position						   
								min_width		        :   1600,			// Min width allowed (in pixels)
								min_height		        :   1200,			// Min height allowed (in pixels)
								vertical_center         :   1,			// Vertically center background
								horizontal_center       :   1,			// Horizontally center background
								fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
								fit_portrait         	:   1,			// Portrait images will not exceed browser height
								fit_landscape			:   1,			// Landscape images will not exceed browser width

								// Components							
								slide_links				:	'false',	// Individual links for each slide (Options: false, 'number', 'name', 'blank')
								thumb_links				:	1,			// Individual thumb links for each slide
								thumbnail_navigation    :   0,			// Thumbnail navigation
								slides 					:  	slides,
								// Theme Options			   
								progress_bar			:	1,			// Timer for each slide							
								mouse_scrub				:	0
							});//supersized
				        },//succes

				        error: function(data) {
				        	//console.log(data);
				        }	

				    });//ajax

		           

				
				
		    });
		    
		</script>
</head>
<style type="text/css">
ul#demo-block {
	margin:0 15px 15px 15px;
}
ul#demo-block li {
	margin:0 0 10px 0;
	padding:10px;
	display:inline;
	float:left;
	clear:both;
	color:#aaa;
	background:url(img/bg-black.png);
	font:11px;
}
ul#demo-block li a {
	color:#eee;
	font-weight:bold;
}
</style>
<body>

<!--BARRA DESCRIPCION-->
<!-- Panel -->
<div id="toppanel">
  <div id="panel">
    <div class="content clearfix">
      <div class="left">
        <h2></h2>
        <p class="grey"></p>

        <p class="creditos">© Derechos reservados. 2012 EDITORES ECUATORIANOS S.A. Queda prohibida la reproducción total o parcial, por cualquier medio, de todos los contenidos sin autorización expresa del EDITORES ECUATORIANOS S.A.</p>
      </div>
    </div>
  </div>
  <!-- The tab on top -->
  <div class="tab">
    <ul class="login">
      <li id="toggle"> <a id="open" class="open" href="#">
        <p class="descrip">MÁS INFORMACIÓN</p>
        <img class="icon_descrip" src="img/button-tray-down.png" width="54" height="42" /></a> <a id="close" style="display: none;" class="close" href="#">
        <p class="descrip">CERRAR</p>
        <img class="icon_descrip" src="img/button-tray-up.png" width="54" height="42" /></a> </li>
    </ul>
    <div class="logo"><img src="img/logo_EC.png" /></div>
  </div>
  <!-- / top -->
</div>
<!--panel -->
<!-- <div style="color:#C00;"><img src="img/button-tray-down.png" /></div> -->
<!--BARRA DESCRIPCION FIN-->
<!--Thumbnail Navigation-->
<div id="prevthumb"></div>
<div id="nextthumb"></div>
<!--Arrow Navigation-->
<a id="prevslide" class="load-item"></a> <a id="nextslide" class="load-item"></a>
<div id="thumb-tray" class="load-item">
  <div id="thumb-back"></div>
  <div id="thumb-forward"></div>
</div>
<!--Time Bar-->
<div id="progress-back" class="load-item">
  <div id="progress-bar"></div>
</div>
<!--Control Bar-->
<div id="controls-wrapper" class="load-item">
  <div id="controls"> <a id="play-button"><img id="pauseplay" src="img/pause.png"/></a>
    <!--Slide counter-->
    <div id="slidecounter"> <span class="slidenumber"></span> / <span class="totalslides"></span> </div>
    <!--Slide captions displayed here-->
    <div id="slidecaption"></div>
    <!--Thumb Tray button-->
    <a id="tray-button"><img id="tray-arrow" src="img/button-tray-up.png"/></a>
    <!--Navigation-->
    <!-- <ul id="slide-list">
    </ul> -->
    <!-- ADD THIS-->
    <div id="cont_addthis">
      <!-- <p class="float_left">COMPARTIR</p> -->
      <div class="compartir">
        <div class="float_left"><a href="#" class="addthis_button_facebook at300b" title="Send to Facebook"><img width="20" height="20" border="0" onmouseout="document.images['facebook'].src = 'img/iconos/facebook.png'" onmouseover="document.images['facebook'].src = 'img/iconos/facebook_over.png'" name="facebook" src="img/iconos/facebook.png"></a></div>
        <div class="float_left padding_left_6"><a href="#" class="addthis_button_twitter at300b" title="Tweet This"><img width="20" height="20" border="0" onmouseout="document.images['twitter'].src = 'img/iconos/twitter.png'" onmouseover="document.images['twitter'].src = 'img/iconos/twitter_over.png'" name="twitter" src="img/iconos/twitter.png"></a></div>
        <div class="float_left padding_left_6"><a href="#" class="addthis_button"><img width="20" height="20" border="0" onmouseout="document.images['mas'].src = 'img/iconos/mas.png'" onmouseover="document.images['mas'].src = 'img/iconos/mas_over.png'" name="mas" src="img/iconos/mas.png"></a></div>
        <div class="float_left padding_left_6"><a href="#" class="addthis_button_email at300b" title="Email"><img width="20" height="20" border="0" onmouseout="document.images['mail'].src = 'img/iconos/mail.png'" onmouseover="document.images['mail'].src = 'img/iconos/mail_over.png'" name="mail" src="img/iconos/mail.png"></a></div>
        <script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
        <script type="text/javascript">
	var addthis_config = {
     ui_language: "es"
	 }
     </script>
        <div class="clear"></div>
      </div>
    </div>
    <!-- ADD THIS FIN -->
  </div>
</div>
</body>
</html>
