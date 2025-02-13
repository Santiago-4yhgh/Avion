<?php
	
	$asiento = $_POST['asiento'];
	$conexion = new mysqli("localhost", "root", "adrianareina453", "aereopuerto");
	$actualiza = $conexion->query("UPDATE avion SET disponible = false WHERE asiento = $asiento");
	if($actualiza)//
		$exito = '{"exito":1,"asiento":'.$asiento.'}';
	else
		$exito = '{"exito":0}';
	$conexion->close();
    //$dato='[{"nombre":"'.$nombre.'","edad":'.$edad.',"sexo":"'.$mascu.'"]}'; 
    
	echo($exito);	 		
?>