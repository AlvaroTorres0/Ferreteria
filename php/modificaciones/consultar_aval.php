<?php

include('../../conexion.php');
//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos
$noEmpleado=$_REQUEST['noEmpleado'];
$sql = "SELECT * FROM ferreteria.aval WHERE noEmpleadoAval=" . "'" . $noEmpleado . "'";

?>


<?php
foreach ($conn->query($sql) as $row){
?>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

<form method="post" name="formDatosAval" id="AvalActualizar">
                    <h2>Modifique los datos</h2>
                    <div class="grid">

                        <img src="img/id.png">
                        <input type="text" name="num_empleado" id="num_empleado" placeholder="numero de empleado" value=<?php echo $row['noEmpleadoAval'] ?> />

                        <img src="img/user.png">
                        <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre" value=<?php echo $row['nombreAval'] ?> />

                        <img src="img/user.png">
                        <input type="text" name="apepat" id="apepat" placeholder="1r Apellido" value=<?php echo $row['apepatAval'] ?> />
                        <img src="img/user.png">
                        <input type="text" name="apemat" id="apemat" placeholder="2nd Apellido" value=<?php echo $row['apematAval'] ?> />

                        <img src="img/phone-call.png">
                        <input type="Number" name="telefono1" id="telefono1" placeholder="Telefono 1" value=<?php echo $row['telefono1Aval'] ?> />
                        <img src="img/phone-call.png">
                        <input type="Number" name="telefono2" id="telefono2" placeholder="Telefono 2" value=<?php echo $row['telefono2Aval'] ?> />

                        <img src="img/location.png">
                        <input type="text" name="municipio" id="municipio" placeholder="Municipio" value=<?php echo $row['municipioAval'] ?> />

                        <img src="img/location.png">
                        <input type="text" name="colonia" id="colonia" placeholder="Colonia" value=<?php echo $row['coloniaAval'] ?> />

                        <img src="img/location.png">
                        <input type="text" name="calleynum" id="calleynum" placeholder="Calle y número" value=<?php echo $row['calleynumAval'] ?> />

<?php
	}
?>

</div>
</form>