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
            <th>Telefono 1</th>
            <th>Telefono 2</th>
            <th>Municipio</th>            
            <th>Colonia</th>
            <th>Calle y <br>numero</th>


			
		</tr>
		</thead>
<?php
foreach ($conn->query('SELECT * from aval') as $row){
    ?>
<tr>
	<td><?php echo $row['noEmpleadoAval'] ?></td>
    <td><?php echo $row['nombreAval'] ?></td>
    <td><?php echo $row['apepatAval'] ?></td>
    <td><?php echo $row['apematAval'] ?></td>    
    <td><?php echo $row['telefono1Aval'] ?></td>
    <td><?php echo $row['telefono2Aval'] ?></td>
    <td><?php echo $row['municipioAval'] ?></td> 
    <td><?php echo $row['coloniaAval'] ?></td>
    <td><?php echo $row['calleynumAval'] ?></td>    



</tr>
<?php
	}
?>
</table>
</div> 