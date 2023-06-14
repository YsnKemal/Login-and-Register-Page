<?php   

$host = "localhost";
$user= "root";
$parola = "";
$db = "users";


$connect = mysqli_connect($host, $user, $parola, $db);


mysqli_set_charset($connect, "UTF8"); 


?>