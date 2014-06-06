<?php
	
	$link = mysqli_connect("localhost", "root", "pass", "bd1");


	$profesor = $_POST['usuario_id'];

	$sql_get_cursos = "SELECT idgrupos, nombre, nrc FROM `cursos`, grupos WHERE cursos_idcurso = idcurso AND profesores_idprofesores = ".$profesor;

	$query_get_cursos = mysqli_query($link, $sql_get_cursos);

	while($datos_cursos = mysqli_fetch_assoc($query_get_cursos)){
		$output[] = $datos_cursos;
	}

	echo json_encode($output);

?>