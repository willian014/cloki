<?php
# INDEX
require_once("classes/core.class.php");


	$core = new Core();

	echo $core ->interacao();


		if (isset($_POST['voltarr'])) {
        header("Location: materia.php");
	}
?>