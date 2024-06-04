<?php 

include 'conexion.php';

$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];

$consulta = "UPDATE productos SET nombre='$nombre', precio='$precio', stock='$stock' WHERE codigo='$codigo'";
mysqli_query($conexion, $consulta) or die (mysqli_error($conexion));
mysqli_close($conexion);
?>