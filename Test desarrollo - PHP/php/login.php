<?php

	
	$link = mysqli_connect("localhost", "root", "pass", "bd1");

	
	$codigo = $_POST['codigo'];	
	$clave = $_POST['clave'];


	$sql_login = "SELECT * FROM profesores WHERE codigo = '".$codigo."' AND password = '".$clave."'";
	
	$query_login = mysqli_query($link, $sql_login);

	if($query_login){
		
		if($row_usuario = mysqli_fetch_array($query_login)){
			
			echo $row_usuario['idprofesores'];
		}

		
	}else{
		echo '0';
	}

?>