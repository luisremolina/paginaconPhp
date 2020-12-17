<?php  
// echo " coneccion exitosa ";
session_start();
$coneccion=mysqli_connect(
	"localhost",
	"root",
	"",
	"mercabarriga"
)or die(mysqli_erro($mysqli));
?>
