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
			<th>Apellido<br>Paterno</th>
            <th>Apellido<br>Materno</th>
            <th>Telefono</th>
            <th>Municipio</th>
            <th>Calle y <br>numero</th>
            <th>Cp</th>
            <th>Correo</th>
            <th>Puntos</th>
			
		</tr>
		</thead>
<?php
foreach ($conn->query('SELECT * from cliente') as $row){
    ?>
<tr>
	<td><?php echo $row['idCliente'] ?></td>
    <td><?php echo $row['nombreCliente'] ?></td>
    <td><?php echo $row['apepatCliente'] ?></td>
    <td><?php echo $row['apematCliente'] ?></td>
    <td><?php echo $row['telefonoCliente'] ?></td>
    <td><?php echo $row['municipioCliente'] ?></td>
    <td><?php echo $row['calleynumCliente'] ?></td>
    <td><?php echo $row['cpCliente'] ?></td>
    <td><?php echo $row['correoCliente'] ?></td>
    <td><?php echo $row['puntosCliente'] ?></td>
</tr>
<?php
	}
?>
</table>
</div> 