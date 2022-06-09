<?php
$id_producto=$_POST['id_producto'];
$nombre=$_POST['nombre'];
$Descripcion=$_POST['Descripcion'];
$Precio=$_POST['Precio'];
$Existencia=$_POST['Existencia'];
$Categoria=$_POST['Categoria'];
$Marca=$_POST['Marca'];
$status=$_POST['status'];
$Costo=$_POST['Costo'];
$puntosproducto=$_POST['puntosproducto'];

include('../../conexion.php');
//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ferreteria.producto (codigoProducto, nombreProducto,descripcion,precio,existencia,categoria, marca ,estatusProducto ,costo, puntosProducto)VALUES ('$id_producto', '$nombre', '$Descripcion', '$Precio','$Existencia','$Categoria','$Marca','$status','$Costo','$puntosproducto')";
if(mysqli_query($conn, $sql)) {
    echo "Nuevo registro insertado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();

?>