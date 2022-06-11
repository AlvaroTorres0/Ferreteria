<?php

$id_cliente=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$apepat=$_POST['apepat'];
$apemat=$_POST['apemat'];
$Tel=$_POST['Tel'];
$municipio=$_POST['municipio'];
$calleynum=$_POST['calleynum'];
$cp=$_POST['cp'];
$email=$_POST['email'];
$puntoscliente=$_POST['puntoscliente'];


include('../../conexion.php');
//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ferreteria.cliente (idCliente, nombreCliente,apepatCliente,apematCliente,telefonoCliente,municipioCliente, calleynumCliente,cpCliente, correoCliente, puntosCliente)VALUES ('$id_cliente', '$nombre', '$apepat', '$apemat','$Tel','$municipio','$calleynum','$cp','$email','$puntoscliente')";
if (mysqli_query($conn, $sql)) {

    echo "Nuevo registro insertado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
?>