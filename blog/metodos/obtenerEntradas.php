<?php
	include 'conexion.php';

	$sql = "SELECT * FROM entradas";
	$qur = $connection->query($sql);

	$msg = array();

	while($r = mysqli_fetch_assoc($qur)) {

		$msg [] = array("id" => $r['id'], "titulo" => $r['titulo'], "autor" => $r['autor'], "fecha" => $r['fecha'], "contenido" => $r['contenido']);
	}

	$json = $msg;

	header('content-type: application/json');
	echo json_encode($json);

	@mysqli_close($conexion);
?>