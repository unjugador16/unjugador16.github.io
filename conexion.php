<?php 

$hostname = "b0w2sdcfmwli4czllxje-mysql.services.clever-cloud.com"; // bg0bgu95i1hddoqybtyd-mysql.services.clever-cloud.com
$database = "b0w2sdcfmwli4czllxje"; // bg0bgu95i1hddoqybtyd
$username = "u67qvvog4xmmiwfi"; // u6opw9qrerzhn3xy
$password = "ptXsJd2O1apwmKz41ycc"; // O7w1EnAq8ou6RjiUKsIA


$conexion = new mysqli($hostname, $username, $password, $database);

if ($conexion -> connect_errno) {
    echo "lo sentimos, el sitio web está experimentando problemas";
}
?>