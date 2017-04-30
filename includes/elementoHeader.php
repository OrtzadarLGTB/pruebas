<?php $_SERVER["DOCUMENT_ROOT"] ?>
<header>
	<!--//AVISO DE COOKIES por Abrirllave.com
	<div id="banner-cookie-notice"></div>
	<script>
	var accionusuario = 0;
	window.onclick = click;
	function click()
	{
	if (accionusuario != 1){
		accionusuario = 1;
		cerraraviso();
	}
	}
	function getcookie(c_name){
	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	if (c_start == -1){
		c_start = c_value.indexOf(c_name + "=");
	}
	if (c_start == -1){
		c_value = null;
	} else{
		c_start = c_value.indexOf("=", c_start) + 1;
		var c_end = c_value.indexOf(";", c_start);
		if (c_end == -1){
			c_end = c_value.length;
		} c_value = unescape(c_value.substring(c_start,c_end));
	} return c_value;
	}
	function checkcookie(){
	var aceptacookies=getcookie("aceptacookies");
	if(aceptacookies!="true"){
	var aviso = '<p>Este sitio web utiliza cookies para funcionar mejor. Al continuar navegando está aceptando su utilización. <a href="../politica-de-privacidad.php#uso_cookies">Más información</a>. <a href="javascript:cerraraviso();">Cerrar aviso [X]</a></p>';
	//document.getElementById('banner-cookie-notice').innerHTML = aviso;
	alert(aviso);
	}
	}
	function cerraraviso(){
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + 365);
	var c_value=escape("true") + ";expires="+exdate.toUTCString() + ";path=/";
	document.cookie="aceptacookies" + "=" + c_value;
	document.getElementById('banner-cookie-notice').style.display = 'none';
	}
	checkcookie();
	</script>
	//FIN AVISO DE COOKIES-->
	<hgroup>
		<a href = ".."><img src="/imagenes/logo.gif" title="Acceso a la página de inicio de ortzadar.lgbt" alt="logo-ortzadar-lgtb"></a>
		<a href = ".."><h2>Ortzadar LGTB</h2></a>
		<h3>Luchamos por que cada persona pueda acabar expresándose ante el resto como es, como de verdad quiere ser</h3>
	</hgroup>
	<nav>
		<ul>
			   <li><a><button id="bMenu" onclick="mostrarMenu();">MENU</button></a></li><!--
			--><li><a href = ".." ><button id="bInicio">INICIO</button></a></li><!--
			--><li><a href = "../campanias" ><button id="bCampanias">CAMPAÑAS</button></a></li><!--
			--><li><a href = "../comunicados" ><button id="bComunicados">COMUNICADOS</button></a></li><br><!--
			--><li><a href = "../conocenos" ><button id="bConocenos">CONÓCENOS</button></a></li><!--
			--><li><a href = "../donde-estamos.php" ><button id="bDondeEstamos">DÓNDE ESTAMOS</button></a></li><!--
			--><li><a href = "../contactar" ><button id="bContactar">CONTACTAR</button></a></li>
		</ul>
	</nav>
</header>