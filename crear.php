<?php

  $username = "root";
  $servername = "localhost";
  $password = "keepcalmand";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // Create database
    $sql = "CREATE DATABASE ferreteria";
    if ($conn->query($sql) === TRUE) {
      echo "Base creada con exito";
    } else {
      echo "" . $conn->error;
    }
    



    // TABLA PRODUCTO
    $sqlProducto = "CREATE TABLE ferreteria.producto (
        codigoProducto VARCHAR(13) PRIMARY KEY,
        nombreProducto VARCHAR(150) NOT NULL,
        descripcion VARCHAR(350) NOT NULL,
        precio DECIMAL(7,2) NOT NULL,
        existencia DECIMAL(4,0) NOT NULL,
        categoria VARCHAR(50) NOT NULL,
        marca VARCHAR(59) NOT NULL,
        estatusProducto TINYINT(1) NOT NULL,
        costo DECIMAL(7,2) NOT NULL,
        puntosProducto DECIMAL(4,0) NOT NULL
        )";

    
    // TABLA EMPLEADO
    $sqlEmpleado = "CREATE TABLE ferreteria.empleado (
      noEmpleado VARCHAR(3) PRIMARY KEY,
      nombreEmpleado VARCHAR(80) NOT NULL,
      apepatEmpleado VARCHAR(50) NOT NULL,
      apematEmpleado VARCHAR(50) NOT NULL,
      municipioEmpleado VARCHAR(30) NOT NULL,
      calleynumEmpleado VARCHAR(60) NOT NULL,
      coloniaEmpleado VARCHAR(60) NOT NULL,
      cargo VARCHAR(30) NOT NULL,
      salario DECIMAL(7,2) NOT NULL,
      noCuenta VARCHAR(16) NOT NULL,
      telefono1Empleado VARCHAR(10) NOT NULL,
      telefono2Empleado VARCHAR(10) NOT NULL,
      correoEmpleado VARCHAR(90) NOT NULL,
      estatusEmpleado TINYINT(1) NOT NULL
      )"; 
      
      


      // TABLA CLIENTE
    $sqlCliente = "CREATE TABLE ferreteria.cliente (
      idCliente VARCHAR(6) PRIMARY KEY,
      nombreCliente VARCHAR(80) NOT NULL,
      apepatCliente VARCHAR(50) NOT NULL,
      apematCliente VARCHAR(50) NOT NULL,
      telefonoCliente VARCHAR(10) NOT NULL,
      municipioCliente VARCHAR(30) NOT NULL,
      calleynumCliente VARCHAR(60) NOT NULL,
      cpCliente VARCHAR(5) NOT NULL,
      correoCliente VARCHAR(100) NOT NULL,
      puntosCliente DECIMAL(5,0) NOT NULL

      )"; 



        // TABLA VENTA
    $sqlVenta = "CREATE TABLE ferreteria.venta (
      folioVenta VARCHAR(3) PRIMARY KEY,
      idClienteVenta VARCHAR(6) NOT NULL,
      codigoProductoVenta VARCHAR(13) NOT NULL,
      noEmpleadoVenta VARCHAR(3) NOT NULL,
      fechaVenta DATE NOT NULL,
      cantidad DECIMAL(4,0) NOT NULL,
      total DECIMAL(7,2) NOT NULL,
      FOREIGN KEY (idClienteVenta) REFERENCES ferreteria.cliente(idCliente),
      FOREIGN KEY (codigoProductoVenta) REFERENCES ferreteria.producto(codigoProducto),
      FOREIGN KEY (noEmpleadoVenta) REFERENCES ferreteria.empleado(noEmpleado)
 
      )";




      // TABLA AVAL
      $sqlAval = "CREATE TABLE ferreteria.aval (
      noEmpleadoAval VARCHAR(8) NOT NULL,
      nombreAval VARCHAR(80) NOT NULL,
      apepatAval VARCHAR(50) NOT NULL,
      apematAval VARCHAR(50) NOT NULL,
      telefono1Aval VARCHAR(10) NOT NULL,
      telefono2Aval VARCHAR(10) NOT NULL,
      municipioAval VARCHAR(30) NULL,
      coloniaAval VARCHAR(60) NOT NULL,
      calleynumAval VARCHAR(60) NOT NULL,
      FOREIGN KEY (noEmpleadoAval) REFERENCES ferreteria.empleado(noEmpleado)

      )";


        // CREAR TABLAS
        $conn -> query($sqlProducto);
        $conn -> query($sqlCliente);
        $conn -> query($sqlEmpleado);
        $conn -> query($sqlVenta);
        $conn -> query($sqlAval);
        
        /*if ($conn->query($sqlProducto) === TRUE) {
          echo "Tabla datos creada con éxito";
        } else {
          echo "Error al crear la tabla: " . $conn->error;
        }*/
?>