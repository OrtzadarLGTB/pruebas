<?php $_SERVER["DOCUMENT_ROOT"] ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link href="/css/estilos.css" rel="stylesheet">
<link rel="Shortcut icon" href="/favicon.ico?" type="image/x-icon"/>
<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet"> 
<!--Scripts varios -->
<script src="/includes/jquery.min.js"></script>
<script>  
	function mostrarMenu(){
		if (jQuery('nav').hasClass('menuAbierto'))
			        jQuery('nav').removeClass('menuAbierto');
			    else
			        jQuery('nav').addClass('menuAbierto');
	}
</script>
<!--fin Scripts-->