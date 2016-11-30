<?php 

	$pelicula = $_POST["pelicula"];
	$unidades = $_POST["unidades"];


	if(strtolower($pelicula)=="matrix" && ($unidades<=2 && $unidades>0)) {

		echo "Su pelicula ha sido arrendada";


	}

	elseif(strtolower($pelicula)=="psicosis" && ($unidades<=3 && $unidades>0)){

		echo "Su pelicula ha sido arrendada";


	}
	else{
		echo "Numero de unidades incorrecto";

	}







 ?>