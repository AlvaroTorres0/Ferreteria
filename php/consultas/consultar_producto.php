<?php
include('../../conexion.php');
//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos

?>

<div class="col-12">
        <table border="1">
		<thead>
		<tr>
			<th> ID </th>
			<th>Nombre</th>
			<th>Descripcion</th>
            <th>Precio</th>
            <th>Existencia</th>
            <th>Categoria</th>
            <th>Marca</th>
            <th>Status</th>
            <th>Costo</th>
            <th>Puntos</th>
			
		</tr>
		</thead>
<?php
foreach ($conn->query('SELECT * from producto') as $row){
    ?>
<tr>
	<td><?php echo $row['codigoProducto'] ?></td>
    <td><?php echo $row['nombreProducto'] ?></td>
    <td><?php echo $row['descripcion'] ?></td>
    <td><?php echo $row['precio'] ?></td>
    <td><?php echo $row['existencia'] ?></td>
    <td><?php echo $row['categoria'] ?></td>
    <td><?php echo $row['marca'] ?></td>
    <td><?php echo $row['estatusProducto'] ?></td>
    <td><?php echo $row['costo'] ?></td>
    <td><?php echo $row['puntosProducto'] ?></td>
</tr>
<?php
	}
?>
</table>
</div> 