<?php 

include 'conexion.php';
/*
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];

$consulta = "INSERT INTO productos (codigo, nombre, precio, stock) VALUES ('$codigo','$nombre','$precio','$stock')"; */

$names = $_POST["names"];
$surnames = $_POST["surnames"];
$email = $_POST["email"];
$passwords = $_POST["passwords"]; 

$consulta = "INSERT INTO individuo (names, surnames, email, passwords) VALUES ('$names','$surnames','$email','$passwords')";

mysqli_query($conexion, $consulta) or die (mysqli_error($conexion));
mysqli_close($conexion);
?>