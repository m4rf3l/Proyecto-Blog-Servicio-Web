<?php

	include 'conexion.php';

	$cuerpo = file_get_contents('php://input');
	$entrada = json_decode($cuerpo);

	$titulo = $entrada->titulo;
	$autor = $entrada->autor;
	$fecha = $entrada->fecha;
	$contenido = $entrada->contenido;

	$sql = "INSERT INTO `u681386667_ents`.`entradas` (`titulo`, `autor`, `fecha`, `contenido`) VALUES ('$titulo', '$autor', '$fecha', '$contenido');";

	if ($connection->query($sql)) {
		$msg = array("status" =>1 , "msg" => "La entrada fue publicada con éxito.");
	} else {
		$msg = array("status" =>0 , "msg" => "Error al publicar la entrada.");
	}

	$json = $msg;

	header('content-type: application/json');
	echo json_encode($json);

	@mysqli_close($conexion);

?>