<?php

include('../../conexion.php');
//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos
$noCliente=$_REQUEST['noCliente'];
$sql = "SELECT * FROM ferreteria.cliente WHERE idCliente=" . "'" . $noCliente . "'";

?>


<?php
foreach ($conn->query($sql) as $row){
?>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

<form method="post" name="formDatosAval" id="ClienteActualizar">
                    <h2>Modifique los datos</h2>
                    <div class="grid">

                    <img src="img/id.png">
                        <input type="text" name="id_cliente" id="id_cliente" placeholder="ID del Cliente" value=<?php echo $row['idCliente'] ?> />

                        <img src="img/user.png">
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" value=<?php echo $row['nombreCliente'] ?> />

                        <img src="img/user.png">
                        <input type="text" name="apepat" id="apellidos" placeholder="1r Apellido" value=<?php echo $row['apepatCliente'] ?> />

                        <img src="img/user.png">
                        <input type="text" name="apemat" id="apellidos" placeholder="2nd Apellido" value=<?php echo $row['apematCliente'] ?> />

                        <img src="img/phone-call.png">
                        <input type="text" name="Tel" id="Tel" placeholder="Telefono" value=<?php echo $row['telefonoCliente'] ?> />

                        <img src="img/location.png">
                        <input type="text" name="municipio" id="municipio" placeholder="Municipio" value=<?php echo $row['municipioCliente'] ?> />

                        <img src="img/location.png">
                        <input type="text" name="calleynum" id="calleynum" placeholder="Calle y numero" value=<?php echo $row['calleynumCliente'] ?> />

                        <img src="img/mail.png">
                        <input type="number" name="cp" id="cp" placeholder="Codigo Postal" value=<?php echo $row['cpCliente'] ?> />


                        <img src="img/email.png">
                        <input type="email" name="email" id="email" placeholder="email" value=<?php echo $row['correoCliente'] ?> />

                        <img src="img/point.png">
                        <input type="text" name="puntoscliente" id="puntoscliente" placeholder="Puntos del Cliente" value=<?php echo $row['puntosCliente'] ?> />

<?php
	}
?>

</div>
</form>