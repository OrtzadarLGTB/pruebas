<!DOCTYPE html>
<html lang="es-ES">
	<head>
		<?php include '../includes/elementoHead.php' ?>
		<title>Ortzadar LGTB - Inicio</title>
		<meta name="description" content="Datos y formulario de contacto para establecer comunicación con la asociación.">
		<meta name="keywords" content="contacto,formulario,datos">
	</head>
	<body>
		<?php include '../includes/elementoHeader.php' ?>
		<script>jQuery('#bContactar').addClass('activo');</script>
		<div id="contenido">
			<main>
				<h1>Contactar</h1>
				<h2>Datos de contacto:</h2>
				<dl>
					<dt>Nombre</dt>
					<dd><pre>&#9;Ortzadar LGTB</pre></dd>
					<dt>Dirección postal</dt>
					<dd><pre>&#9;Edificio El Sario. Campus de Arrosadia.</pre></dd>
					<dd><pre>&#9;Calle Sadar s/n. 31006. Pamplona. Navarra (España).</dd>
					<dt>Correo electrónico</pre></dt>
					<dd><pre>&#9;<span style="direction: rtl; unicode-bidi:bidi-override;">tbgl.radaztro@aloh</span></pre></dd>
					<dt>Teléfono</dt>
					<dd><pre>&#9;948 16 97 72</pre></dd>
				</dl>
				<!-- <hr>
				<p>Si lo prefieres, puedes rellenar este formulario. Te responderemos lo antes posible.</p>
				<hr>
				<h2>Formulario de contacto:</h2>
				<br>
				<form action="nada.php" method="post">
					<label for="lista_tipo_tto">Tto: </label>
					<select name="tipo_tto" id="lista_tipo_tto">
						<option value="0">-</option>
						<option value="1">Don</option>
						<option value="2">Doña</option>
					</select>
					<br><br>
					<label for="nombre_contacto">Nombre: </label><br>
					<input type="text" name="nombre" id="nombre_contacto" required>
					<br><br>
					<label for="apellidos_contacto">Apellido(s): </label><br>
					<input type="text" name="apellidos" id="apellidos_contacto" required>
					<br><br>
					<label for="correo_msj">Correo electrónico: </label><br>
					<input type="text" name="correo" id="correo_msj" required>
					<br><br>
					<label for="asunto_msj">Asunto: </label><br>
					<input type="text" name="asunto" id="asunto_msj" required>
					<br><br>
					<label for="cuerpo_msj">Mensaje: </label><br>
					<textarea name="cuerpo" id="cuerpo_msj" required onClick='this.value=""'>Escriba aquí el contenido del mensaje.</textarea>
					<br><br>
					<button type="reset">Borrar</button>
					<button type="submit">Enviar</button>
				</form>-->
				<br>
			</main>		
			<?php include '../includes/elementoAside.php' ?>
		</div>
		<?php include '../includes/elementoFooter.php' ?>
	</body>
</html>