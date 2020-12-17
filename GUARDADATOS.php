<?php
include("BASEDEDATOS.php");

if (isset($_POST['GUARDAR'])) {
		$autor=$_POST["autor"];
		$nproducto=$_POST["producto_name"];
		$descrip=$_POST["descripcion"];
		$precio=$_POST["precio"];
		$numcont=$_POST["contacto"];
		$imagen=$_POST["img"];

		$consulta = "INSERT into registro_producto(AUTOR,NOMBRE_DEL_PRODUCTO,DESCRIPCION,PRECIO,CONTACTO,IMAGEN_PRODUCTO)values('$autor','$nproducto','$descrip','$precio','$numcont','$imagen')";

		$resul=mysqli_query($coneccion,$consulta);

		if(!$resul) {
			die("La CONSULTA LAMENTABLEMENTE FALLECIO");
		}

		$_SESSION['message'] = 'Tus Datos Han Sido Guardados Exitosamente';

		$_SESSION['message_type'] = 'success';

		header('Location: publica.php');

}

?>