<?php
	$mail = $_POST['cuerpo'];
	//Titulo
	$titulo =$_POST['asunto'];
	//cabecera
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	//dirección del remitente
	switch ($_POST['tipo_tto']) {
	   case 0:
	         $tto = "";
	         break;
	   case 1:
	         $tto = "don ";
	         break;
	   case 2:
	         $tto = "doña ";

	}
	$headers .= "From: " . $tto . $_POST['nombre'] . " " . $_POST['apellidos'] . " <" . $_POST['correo'] . ">\r\n";
	//Enviamos el mensaje a tu_dirección_email 
	$bool = mail("contactar@ortzadar.lgbt",$titulo,$mail,$headers);
	if($bool){
	    alert("Mensaje enviado correctamente.");
		sleep(3);
		header('Location: index.php');
	}else{
	    alert("Mensaje no enviado. Lo sentimos.");
		sleep(3);
		header('Location: index.php');
	}
?>