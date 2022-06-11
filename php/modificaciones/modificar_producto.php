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

$sql = "UPDATE producto SET codigoProducto = '$id_producto',nombreProducto = '$nombre',descripcion = '$Descripcion',precio = '$Precio',existencia = '$Existencia',categoria = '$Categoria',marca = '$Marca',estatusProducto = '$status',costo = '$Costo',puntosProducto = '$puntosproducto' WHERE codigoProducto = '$id_producto'";


if(mysqli_query($conn, $sql)) {
    echo "Modificado";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();

?>