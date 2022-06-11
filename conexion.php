<?php
//haremos uso de esta función cada ves que deseamos conectarnos a la base de datos.
function conectar(){
    $username = "root";
    $bdname= "ferreteria";
    $servername = "localhost";
    $password = "sisekersuren";
$conn = new mysqli($servername, $username, $password, $bdname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
return $conn;
}
?>