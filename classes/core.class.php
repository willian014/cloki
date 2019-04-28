<?php
# core
class Core {

	// cadastros
	public $id;
	public $nome;

	// banco de dados
	public $local = "localhost";
	public $user  = "root";
	public $pass  = "";
	public $banco = "ploki";
	public $conexao;

	 // mysql
	 public $sql;
	 public $prepara;
	 public $rs;


	public function __construct() {

		# inicializa sessao
		session_start();

		// conexao Mysql
		$this->conexao = mysqli_connect($this->local,$this->user,$this->pass,$this->banco);

		# chamar cabeçalho
		$this->header();

		# chamar menu
		$this->menu();

	}

	public function __destruct() {


		# chamar rodapé
		$this->footer();


	}

	public function header(){
		?>
			<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/estilos.css">
	    <link rel="stylesheet" href="css/media.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	</head>
		<div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2"></script>
	<body>

<div class="container-fluid">


		<?php
	}

	public function menu(){
		?>
	<nav class="navbar navbar-expand-lg navbar-light bg-yellow">
	  <a class="navbar-brand" href="index.php"><img src="imagens/logo/logo2.png" style="width: 40px; height: 40px;"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	     <li class="nav-item active">
	        <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
	    </li>
	    <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Interação
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Matéria</a>
	          <a class="dropdown-item" href="#">Alunos</a>
	    </li>
	    <li class="nav-item">
	        <a class="nav-link" href="contato.php">Contato</a>
	    </li>
	      
	    </ul>
	   
	  </div>
	</nav>
		<?php

	}


	public function conteudo(){
		?>
		
	<div class="row">
		<div class="col-12 boasvindas">
			<p class="text-center" style="margin-top: 30px; margin-bottom: 25px; font-size: 30px"> Nunca foi tão fácil ajudar os outros!</p>

				
		</div>
	</div>

	<div class="row">
		<div class="col-1"></div>
		<div class="col-10">
			<p><img src="imagens/alunos/aluno1.jpg" width="268"></p>
		</div>
		<div class="col-1"></div>
	</div>
	<div class="row">
		<div class="col-1"></div>
		<div class="col-10">
			<form name="comeco" method="POST" action="#">
					<input type="submit" name="comecar" value="Começar" class="btn btn-danger" style="width:268px; height: 60px; margin-bottom: 150px; color: #000;">
				</form>
		</div>
		<div class="col-1"></div>
	</div>
	


	<?php
	}

	public function interacao(){
	?>	

	<div class="row">
		<div class="col-3"></div>
		<div class="col-6 tituloAlunos text-center">
			Alunos Livres
		</div>
		<div class="col-3"></div>
	</div>

	<div class="row">
		<div class="col-1"></div>
		<div class="col-10 alunos ">
			Willian
			<a href="perfil.php"><i class="fas fa-sign-in-alt"></i></a>
								 <i class="fas fa-users" style="margin-left: 120px;">9</i>
								 <i class="fas fa-comments">5.0</i>
		</div>
		<div class="col-1">
			
		</div>
	</div>

	<div class="row">
		<div class="col-1"></div>
		<div class="col-10 alunos ">
			Eraldo
			<a href="perfil2.php"><i class="fas fa-sign-in-alt"></i></a>
								<i class="fas fa-users" style="margin-left: 120px;"> 6</i>
								<i class="fas fa-comments">4.2</i>
		</div>
		<div class="col-1"></div>
	</div>

	<div class="row">
		<div class="col-1"></div>
		<div class="col-10 alunos ">
			João P
			<a href="perfil.php"><i class="fas fa-sign-in-alt"></i></a>
								<i class="fas fa-users" style="margin-left: 120px;"> 4</i>
								<i class="fas fa-comments">3.0</i>
		</div>
		<div class="col-1"></div>
	</div>

	

	<div class="row">
		<div class="col-1"></div>
		<div class="col-10">
				<form name="inicio" method="POST" action="#">
					<input type="submit" name="voltarr" value="Voltar" class="btn btn-Secondary" style="width:268px; height: 60px; margin-top: 107px; margin-bottom: 120px;">
				</form>
		</div>
		<div class="col-1"></div>
	</div>


	<?php
}

	public function footer(){
		?>			
	<div class="row">
		<div class="col-12 rodape text-center">
		     &copy;2019, Cloki, Design by Willian G. Possamai
		</div>
	</div>

		    <!-- Optional JavaScript -->
		    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		    <script src="js/jquery-3.3.1.slim.min.js"></script>
		    <script src="js/popper.min.js"></script>
		    <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>
		<?php
}
}