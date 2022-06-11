<?php

include('../../conexion.php');
//incluye el archivo php que contiene la conexion
$conn=Conectar();//variable que almacena la conexión ala base de datos
$id_producto=$_REQUEST['ID_producto'];
$sql = "SELECT * FROM ferreteria.producto WHERE codigoProducto=" . "'" . $id_producto . "'";

?>


<?php
foreach ($conn->query($sql) as $row){
?>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

<form method="post" name="formDatosPersonales" id="Producto">
                    <h2>Modifique los datos</h2>
                    <div class="grid">

                        <img src="img/aprobado.png">
                        <input type="text" name="id_producto" id="id_producto" placeholder="Codigo del Producto" value=<?php echo $row['codigoProducto'] ?> />

                        <img src="img/product.png">
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" value=<?php echo $row['nombreProducto'] ?> />

                        <img src="img/paper.png">
                        <input type="text" name="Descripcion" id="Descripcion" placeholder="Descripicion" value=<?php echo $row['descripcion'] ?> />

                        <img src="img/price-tag.png">
                        <input type="text" name="Precio" id="Precio" placeholder="Precio" required value=<?php echo $row['precio'] ?> />

                        <img src="img/actual.png">
                        <input type="text" name="Existencia" id="Existencia" placeholder="Existencia" value=<?php echo $row['existencia'] ?> />

                        <img src="img/subfolder.png">
                        <input type="text" name="Categoria" id="Categoria" placeholder="Categoria" value=<?php echo $row['categoria'] ?> />

                        <img src="img/brand.png">
                        <input type="text" name="Marca" id="Marca" placeholder="Marca" required value=<?php echo $row['marca'] ?> />

                        <img src="img/checked.png">
                        <input type="number" name="status" id="status" placeholder="Status" required min="1" max="1" value=<?php echo $row['estatusProducto'] ?> />

                        <img src="img/price-tag.png">
                        <input type="text" name="Costo" id="Costo" placeholder="Costo" required value=<?php echo $row['costo'] ?> />

                        <img src="img/point.png">
                        <input type="text" name="puntosproducto" id="puntosproducto" placeholder="Puntos del Producto"
                            required value=<?php echo $row['puntosProducto'] ?> />

<?php
	}
?>

</div>
<button type="button" id="Modificar" style="width:200px;">Enviar datos</button>
</form>

<script>
    $('#Modificar').click(function () {
        $.ajax({
            url: 'php/inserciones/insertar_producto.php',
            type: 'POST',
            data: $('#Producto').serialize(),
            success: function (res) {
                $('#respuesta').html(res);
            }
        });
    });

</script>