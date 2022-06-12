<?php
$num_empleado=$_POST['num_empleado'];
$nombre=$_POST['nombre'];
$apepat=$_POST['apepat'];
$apemat=$_POST['apemat'];
$municipio=$_POST['municipio'];
$calleynum=$_POST['calleynum'];
$colonia=$_POST['colonia'];
$salario=$_POST['salario'];
$noCuenta=$_POST['noCuenta'];
$Telefono1=$_POST['Telefono1'];
$Telefono2=$_POST['Telefono2'];
$Cargo=$_POST['Cargo'];
$email=$_POST['email'];
$status=$_POST['status'];


include('../../conexion.php');
//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE empleado SET noEmpleado = '$num_empleado',nombreEmpleado = '$nombre',apepatEmpleado = '$apepat',apematEmpleado = '$apemat',municipioEmpleado = '$municipio',calleynumEmpleado = '$calleynum',coloniaEmpleado = '$colonia',cargo = '$Cargo',salario = '$salario',noCuenta = '$noCuenta',telefono1Empleado = '$Telefono1',telefono2Empleado = '$Telefono2',correoEmpleado = '$email',estatusEmpleado = '$status' WHERE noEmpleado = '$num_empleado'";


if(mysqli_query($conn, $sql)) {
    echo "Modificado";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();

?>