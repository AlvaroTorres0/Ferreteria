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
            <th>Municipio</th>
            <th>Calle y <br>numero</th>
            <th>Colonia</th>
            <th>Cargo</th>
            <th>Salario</th>
            <th>Numero <br>de cuenta</th>
            <th>Telefono 1</th>
            <th>Telefono 2</th>
            <th>Correo</th>
            <th>Status</th>
			
		</tr>
		</thead>
<?php
foreach ($conn->query('SELECT * from empleado') as $row){
    ?>
<tr>
	<td><?php echo $row['noEmpleado'] ?></td>
    <td><?php echo $row['nombreEmpleado'] ?></td>
    <td><?php echo $row['apepatEmpleado'] ?></td>
    <td><?php echo $row['apematEmpleado'] ?></td>
    <td><?php echo $row['municipioEmpleado'] ?></td>
    <td><?php echo $row['calleynumEmpleado'] ?></td>
    <td><?php echo $row['coloniaEmpleado'] ?></td>
    <td><?php echo $row['cargo'] ?></td>
    <td><?php echo $row['salario'] ?></td>
    <td><?php echo $row['noCuenta'] ?></td>
    <td><?php echo $row['telefono1Empleado'] ?></td>
    <td><?php echo $row['telefono2Empleado'] ?></td>
    <td><?php echo $row['correoEmpleado'] ?></td>
    <td><?php echo $row['estatusEmpleado'] ?></td>
</tr>
<?php
	}
?>
</table>
</div> 