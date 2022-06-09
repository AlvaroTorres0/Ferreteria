<?php
$folioventa=$_POST['folioventa'];
$id_cliente=$_POST['id_cliente'];
$id_producto=$_POST['id_producto'];
$num_empleado=$_POST['num_empleado'];
$fecha=$_POST['fecha'];
$cantidad=$_POST['Cantidad'];
$total=$_POST['Total'];

include('../../conexion.php');
//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ferreteria.venta (folioVenta, idClienteVenta,codigoProductoVenta ,noEmpleadoVenta, fechaVenta, cantidad,total)
        VALUES ('$folioventa', '$id_cliente', '$id_producto', '$num_empleado','$fecha','$cantidad','$total')";
if (mysqli_query($conn, $sql)) {
    echo "Nuevo registro insertado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();

?>