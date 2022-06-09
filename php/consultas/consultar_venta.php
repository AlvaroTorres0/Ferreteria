<?php
include('../../conexion.php');
//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos

?>

<div class="col-12">
        <table border="1">
		<thead>
		<tr>
			<th> Folio <br> venta </th>
			<th>ID del <br> cliente</th>
            <th>ID del <br> producto</th>
			<th>ID del <br> empleado</th>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Total</th>
		</tr>
		</thead>
<?php
foreach ($conn->query('SELECT * from venta') as $row){
    ?>
<tr>
	<td><?php echo $row['folioVenta'] ?></td>
    <td><?php echo $row['idClienteVenta'] ?></td>
    <td><?php echo $row['codigoProductoVenta'] ?></td>
    <td><?php echo $row['noEmpleadoVenta'] ?></td>
    <td><?php echo $row['fechaVenta'] ?></td>
    <td><?php echo $row['cantidad'] ?></td>
    <td><?php echo $row['total'] ?></td>
</tr>
<?php
	}
?>
</table>
</div>