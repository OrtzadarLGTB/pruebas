<?php $_SERVER["DOCUMENT_ROOT"] ?>
<!DOCTYPE html>
<html lang="es-ES">
	<head>
		<?php include '../includes/elementoHead.php' ?>
		<title>Ortzadar LGTB - Comunicados</title>
		<meta name="description" content="Comunicados realizados por la asociación ante polémicas, actuaciones o fechas que, principalmente, afecten al colectivo LGTB.">
		<meta name="keywords" content="comunicados,fechas,actos,polémicas">
	</head>
	<body>
		<?php include '../includes/elementoHeader.php' ?>
		<script>jQuery('#bComunicados').addClass('activo');</script>
		<nav class="movil">
				<a href="./dia-vih-2016.php">Anterior &laquo;</a><!--
				--><a href="./ataque-terrorista-orlando.php">&raquo; Siguiente</a>
		</nav>
		<div id="contenido" class="navlateral">
			<?php include '../includes/navComunicados.php' ?>
			<main>
				<h1>Comunicados</h1>
				<p>En ocasiones, ciertas acciones de terceros nos resultan indignantes, hirientes, ultrajantes o, simplemente, nos consternan, ¿verdad?</p>
				<p>En Ortzadadar afirmamos que sí y, aunque no podamos llegar físicamente (como nos gustaría), nos hacemos oír por medio de comunicados ante diferentes hechos. En esta sección te mantendremos al tanto de éstos.</p>
				<br>
			</main>		
			<?php include '../includes/elementoAside.php' ?>
		</div>
		<?php include '../includes/elementoFooter.php' ?>
	</body>
</html>