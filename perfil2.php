<?php
# INDEX
require_once("classes/usuario.class.php");


	$usuario = new Usuario();

	echo $usuario->perfilEraldo();

		if (isset($_POST['voltar2'])) {
        header("Location: interacao.php");
	}

		if (isset($_POST['solicitar'])) {
        header("Location: solicitar.php");
	}

?>