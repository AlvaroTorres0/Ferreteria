<?php
include('../../conexion.php');//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos
$idProducto=$_REQUEST['idProducto'];//capturar codigo del formulario

$sql="delete from producto where codigoProducto='$idProducto'";//consulta sql

if (mysqli_query($conn, $sql)) {

 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
?>