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

$sql = "INSERT INTO ferreteria.empleado (noEmpleado, nombreEmpleado,apepatEmpleado,apematEmpleado,municipioEmpleado, calleynumEmpleado,coloniaEmpleado, cargo, salario, noCuenta, telefono1Empleado, telefono2Empleado, correoEmpleado, estatusEmpleado)
        VALUES ('$num_empleado', '$nombre', '$apepat', '$apemat','$municipio','$calleynum','$colonia','$Cargo','$salario','$noCuenta','$Telefono1','$Telefono2','$email','$status')";
if (mysqli_query($conn, $sql)) {
    echo "Nuevo registro insertado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();

?>