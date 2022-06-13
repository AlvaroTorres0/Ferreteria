<?php
include('../../conexion.php');//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos
$idEmpleadoAval=$_REQUEST['idEmpleadoAval'];//capturar codigo del formulario

$sql="delete from aval where noEmpleadoAval='$idEmpleadoAval'";//consulta sql

if (mysqli_query($conn, $sql)) {

 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
?>