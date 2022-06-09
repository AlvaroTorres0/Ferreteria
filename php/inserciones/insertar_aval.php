<?php
$num_empleado=$_POST['num_empleado'];
$nombre=$_POST['nombre'];
$apepat=$_POST['apepat'];
$apemat=$_POST['apemat'];
$Telefono1=$_POST['Telefono1'];
$Telefono2=$_POST['Telefono2'];
$municipio=$_POST['municipio'];
$colonia=$_POST['colonia'];
$calleynum=$_POST['calleynum'];



include('../../conexion.php');//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ferreteria.aval (noEmpleadoAval, nombreAval,apepatAval,apematAval, telefono1Aval, telefono2Aval,municipioAval,coloniaAval , calleynumAval)
        VALUES ('$num_empleado', '$nombre', '$apepat', '$apemat','$Telefono1','$Telefono2','$municipio','$colonia','$calleynum')";
if (mysqli_query($conn, $sql)) {
    echo "Nuevo registro insertado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();

?>