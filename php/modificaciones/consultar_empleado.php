<?php

include('../../conexion.php');
//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos
$noEmpleado=$_REQUEST['noEmpleado'];
$sql = "SELECT * FROM ferreteria.empleado WHERE noEmpleado=" . "'" . $noEmpleado . "'";

?>


<?php
foreach ($conn->query($sql) as $row){
?>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

tenemos que cambiar el nombre si no agarra el principal
<form method="post" name="formDatosAval" id="EmpleadoActualizar">
                    <h2>Modifique los datos</h2>
                    <div class="grid">

                        <img src="img/id.png">
                        <input type="text" name="num_empleado" id="num_empleado" placeholder="Número del Empleado"  value=<?php echo $row['noEmpleado'] ?> />

                        <img src="img/user.png">
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" value=<?php echo $row['nombreEmpleado'] ?> />

                        <img src="img/user.png">
                        <input type="text" name="apepat" id="apellidos" placeholder="1r Apellido" value=<?php echo $row['apepatEmpleado'] ?> />
                        <img src="img/user.png">
                        <input type="text" name="apemat" id="apellidos" placeholder="2nd Apellido" value=<?php echo $row['apematEmpleado'] ?> />

                        <img src="img/location.png">
                        <input type="text" name="municipio" id="asunto" placeholder="Municipio" value=<?php echo $row['municipioEmpleado'] ?> />

                        <img src="img/location.png">
                        <input type="text" name="calleynum" id="asunto" placeholder="Calle y numero" value=<?php echo $row['calleynumEmpleado'] ?> />

                        <img src="img/location.png">
                        <input type="text" name="colonia" id="asunto" placeholder="Colonia" value=<?php echo $row['coloniaEmpleado'] ?> />

                        <img src="img/employee.png">
                        <input type="text" name="Cargo" id="Cargo" placeholder="Cargo" value=<?php echo $row['cargo'] ?> />

                        <img src="img/salary.png">
                        <input type="number" name="salario" id="salario" placeholder="Salario" value=<?php echo $row['salario'] ?> />

                        <img src="img/counter.png">
                        <input type="number" name="noCuenta" id="noCuenta" placeholder="Numero de cuenta" value=<?php echo $row['noCuenta'] ?> />

                        <img src="img/phone-call.png">
                        <input type="Number" name="Telefono1" id="email" placeholder="Telefono" value=<?php echo $row['telefono1Empleado'] ?> />
                        <img src="img/phone-call.png">
                        <input type="Number" name="Telefono2" id="email" placeholder="Telefono" value=<?php echo $row['telefono2Empleado'] ?> />

                        <img src="img/email.png">
                        <input type="email" name="email" id="email" placeholder="email" value=<?php echo $row['correoEmpleado'] ?> />

                        <img src="img/checked.png">
                        <input type="number" name="status" id="status" placeholder="Satus" required min="0" max="1" value=<?php echo $row['estatusEmpleado'] ?> />

<?php
	}
?>

</div>
</form>