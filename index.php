<?php
# INDEX
require_once("classes/core.class.php");

$core    = new Core();
// verificar se ta logado
		# chamar cabeçalho
 echo $core->conteudo();

 
	if (isset($_POST['comecar'])) {
        header("Location: materia.php");
	}
?>