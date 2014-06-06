<?php
	
	$link = mysqli_connect("localhost", "root", "pass", "bd1");

	$asistencia_ids = $_POST['numeros'];

	$asistencias = explode("-", $asistencia_ids);
	$asistencias_data = $asistencias[0];

	$sql_add_asistencia = '';

	for ($i=0; $i < count($asistencias) - 1; $i++) { 
		//$asistencias_data .= ','.$asistencias[$i];

		$sql_add_asistencia = "INSERT INTO asistencias (fecha, idestudiantes, idgrupos, dia_hoy) VALUES(NOW(),".$asistencias[$i].", ".$_POST['grupo'].", 1)";
		$query = mysqli_query($link, $sql_add_asistencia);
	}

	
	if($query){
		echo '1';
	}else{
		echo mysqli_error($link);
	}

?>