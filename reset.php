<?php
  sleep(1);
  
  // Crear la conexión
  $conexion = new mysqli("localhost", "root", "adrianareina453", "aereopuerto");

  // Verificar si la conexión fue exitosa
  if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
  }

  // Realizar la consulta de actualización
  $consulta = $conexion->query("UPDATE avion SET disponible = true");

  // Verificar si la consulta fue exitosa
  if ($consulta) {
    $exito = '{"exito":1}';
  } else {
    $exito = '{"exito":0}';
  }

  // Cerrar la conexión
  $conexion->close();

  // Mostrar el resultado
  echo $exito;
?>
