<?php
# INDEX
require_once("classes/usuario.class.php");


	$usuario = new Usuario();

	echo $usuario->solicitar();

	if (isset($_POST['enviar'])) {
		?>
		<div class="alert alert-success" role="alert" style="margin-bottom: 190px;">
  			Mensagem enviada com sucesso
		</div>
		<?php

	}

?>