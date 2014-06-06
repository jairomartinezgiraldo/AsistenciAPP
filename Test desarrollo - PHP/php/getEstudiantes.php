<?php

	$link = mysqli_connect("localhost", "root", "pass", "bd1");

	$grupo_est = $_POST['grupo'];

	$sql_get_estudiantes = "SELECT idestudiante, codigo, nombrel, apellido 
	FROM estudiantes, estudiantes_has_grupos WHERE grupos_idgrupos = ".$grupo_est." AND idestudiante = estudiantes_idestudiante";
	$query_get_estudiantes = mysqli_query($link, $sql_get_estudiantes);

	while($e = mysqli_fetch_assoc($query_get_estudiantes)){
		$output[] = $e;
	}

	echo json_encode($output);
?>