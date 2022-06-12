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

$sql = "UPDATE cliente SET idCliente = '$id_cliente',nombreCliente = '$nombre',apepatCliente = '$apepat',apematCliente = '$apemat',telefonoCliente = '$Tel',municipioCliente = '$municipio',calleynumCliente = '$calleynum',cpCliente = '$cp',correoCliente = '$email',puntosCliente = '$puntoscliente' WHERE idCliente = '$id_cliente'";


if(mysqli_query($conn, $sql)) {
    echo "Modificado";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();

?>