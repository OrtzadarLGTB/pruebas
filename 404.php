<!DOCTYPE html>
<html lang="es-ES">
	<head>
		<?php include '/includes/elementoHead.php' ?>		
		<!--<link rel="stylesheet" href="/css/error-styles.css"  media="none" onload="if(media!='all')media='all'">-->
		<title>Error 404</title>
		<style>
			main{
				padding-top:100px;
				text-align:center;
				display:center;
			}
			body > div > main > h1{color: red;}
			body > div > main > h2{color:blue;}
		</style>
	</head>
	<body>
		<?php include '/includes/elementoHeader.php' ?>
		<div id="contenido">
			<main>
				<audio autoplay>
					<source src="/sound.ogg" type="audio/ogg">
					<source src="/sound.mp3" type="audio/mp3">
				</audio>
				<h1>¡Ups! Error 404</h1>
				<h2>La página o recurso solicitado no existe</h2>		
				<p>Lamentamos mucho esto... ¿Quieres volver a la <a href=".">página principal</a>?</p>
			</main>		
			<?php include '/includes/elementoAside.php' ?>
		</div>
		<?php include '/includes/elementoFooter.php' ?>
	</body>
</html>