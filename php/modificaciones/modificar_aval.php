<?php
$num_empleado=$_POST['num_empleado'];
$nombre=$_POST['nombre'];
$apepat=$_POST['apepat'];
$apemat=$_POST['apemat'];
$Telefono1=$_POST['telefono1'];
$Telefono2=$_POST['telefono2'];
$municipio=$_POST['municipio'];
$colonia=$_POST['colonia'];
$calleynum=$_POST['calleynum'];



include('../../conexion.php');
//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE aval SET noEmpleadoAval = '$num_empleado',nombreAval = '$nombre',apepatAval = '$apepat',apematAval = '$apemat',telefono1Aval = '$Telefono1',telefono2Aval = '$Telefono2',municipioAval = '$municipio',coloniaAval = '$colonia',calleynumAval = '$calleynum' WHERE noEmpleadoAval = '$num_empleado'";


if(mysqli_query($conn, $sql)) {
    echo "Modificado";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();

?>