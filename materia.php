<?php
# INDEX
require_once("classes/usuario.class.php");


	$usuario = new Usuario();

	// echo $usuario->materia();:
	echo $usuario->materia();

	if (isset($_POST['voltar'])) {
		header("Location: index.php");
}


?>