<?php 

$hostname = "b0w2sdcfmwli4czllxje-mysql.services.clever-cloud.com"; // bg0bgu95i1hddoqybtyd-mysql.services.clever-cloud.com
$database = "b0w2sdcfmwli4czllxje"; // bg0bgu95i1hddoqybtyd
$username = "u67qvvog4xmmiwfi"; // u6opw9qrerzhn3xy
$password = "ptXsJd2O1apwmKz41ycc"; // O7w1EnAq8ou6RjiUKsIA


$conexion = new mysqli($hostname, $username, $password, $database);

if ($conexion -> connect_errno) {
    echo "lo sentimos, el sitio web está experimentando problemas";
}

$names = $_POST["names"];
$surnames = $_POST["surnames"];
$email = $_POST["email"];
$passwords = $_POST["passwords"]; 

$consulta = "INSERT INTO individuo (names, surnames, email, passwords) VALUES ('$names','$surnames','$email','$passwords')";

mysqli_query($conexion, $consulta) or die (mysqli_error($conexion));
mysqli_close($conexion);
?>
