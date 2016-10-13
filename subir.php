<?php

require 'funciones.php';

$conexion = conexion('galeria_practica', 'root', '');

if (!$conexion) {
	//header('Location: index.php');
	echo 'Hola mundo';
	die();
}


	// $_FILES regresa un arreglo del archivo que se esta enviando
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
	//print_r($_FILES);
	$check = @getimagesize($_FILES['foto']['tmp_name']);
	if ($check != false) {
		
		$carpeta_destino = 'fotos/';
		$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
		//echo $archivo_subido;
		move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

		$statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUES(:titulo, :imagen, :texto)');
		$statement->execute(array(':titulo' => $_POST['titulo'], ':imagen' => $_FILES['foto']['name'], ':texto' => $_POST['texto']));

		header('Location: index.php');
	} else {
		$error = "El archivo es muy pesado";
	}
} 

require 'views/subir.view.php';

?>