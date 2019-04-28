<?php
require_once("classes/core.class.php");
# usuario
class Usuario extends Core{


	// adicionar empresa (gambi)
	public function perfil(){		
		?>

	<div class="row">
		<div class="col-3"></div>
		<div class="col-6 foto text-center">
			<img src="imagens/alunos/perfil1.jpeg" style="width: 100px;">
		</div>
		<div class="col-3"></div>
	</div>


	<div class="row">
		<div class="col-3"></div>		
		<div class="col-6 media">
		Willian Guerra			
		</div>
		<div class="col-3"></div>
	</div>
	<div class="row">
		
		<div class="col-8 materia">
			Programação
		</div>

		<div class="col-3 notas">
			10
		</div>
	
		
		<div class="col-8 materia">
			Informatica e Sociedade
		</div>

		<div class="col-3 notas">
			8.5
		</div>

		<div class="col-8 materia">
			Ingles Tecnico
		</div>

		<div class="col-3 notas">
			10
		</div>
		<div class="col-8 materia">
			Cálculos Matemáticos
		</div>

		<div class="col-3 notas">
			10
		</div>
	</div>

	<form method="POST" action="#">
		<div class="row solicitarAjuda">
			<div class="col-3">
				<input type="submit" name="voltar2" value="Voltar" class="btn btn-seccondary">
			</div>
			
			<div class="col-4">
			</div>

			<div class="col-4">
				<input type="submit" name="solicitar" value="Solicitar Ajuda" class="btn btn-info">
			</div>
		</div>
	</form>
	<?php
}
	public function perfilEraldo(){		
			?>

		<div class="row">
			<div class="col-3"></div>
			<div class="col-6 foto text-center">
				<img src="imagens/alunos/perfil.jpg" style="width: 100px;">
			</div>
			<div class="col-3"></div>
		</div>


		<div class="row">
			<div class="col-3"></div>		
			<div class="col-6 media">
			Eraldo Pereira			
			</div>
			<div class="col-3"></div>
		</div>
		<div class="row">
			
			<div class="col-8 materia">
				Cálculo I
			</div>

			<div class="col-3 notas">
				9,5
			</div>
		
			
			<div class="col-8 materia">
				Informatica e Sociedade
			</div>

			<div class="col-3 notas">
				8,5
			</div>

			<div class="col-8 materia">
				Ingles Tecnico
			</div>

			<div class="col-3 notas">
				10
			</div>
			<div class="col-8 materia">
				Perspectivas Profissinais
			</div>

			<div class="col-3 notas">
				9,0
			</div>
		</div>

		<form method="POST" action="#">
			<div class="row solicitarAjuda">
				<div class="col-3">
					<input type="submit" name="voltar2" value="Voltar" class="btn btn-seccondary">
				</div>
				
				<div class="col-4">
				</div>

				<div class="col-4">
					<input type="submit" name="solicitar" value="Solicitar Ajuda" class="btn btn-info" style="margin-bottom: 34px;">
				</div>
			</div>
		</form>
		<?php
	}
	public function materia(){
    ?>
	<div class="row">
		<div class="col-1"></div>
		<div class="col-10 materia ">
			Matéria 1
			<a href="interacao.php"><i class="fas fa-sign-in-alt"></i></a>
		</div>
		<div class="col-1"></div>
	</div>
	<div class="row">
		<div class="col-1"></div>
		<div class="col-10 materia ">
			Matéria 2
			<a href="interacao.php"><i class="fas fa-sign-in-alt"></i></a>
		</div>
		<div class="col-1"></div>
	</div>
	<div class="row">
		<div class="col-1"></div>
		<div class="col-10 materia ">
			Matéria 3
			<a href="interacao.php"><i class="fas fa-sign-in-alt"></i></a>
		</div>
		<div class="col-1"></div>
	</div>

	<div class="row">
		<div class="col-1"></div>
		<div class="col-10">
				<form name="inicio" method="POST" action="#">
					<input type="submit" name="voltar" value="Voltar" class="btn btn-Secondary" style="width:268px; height: 60px; margin-top: 140px; margin-bottom: 170px;">
				</form>
		</div>
		<div class="col-1"></div>
	</div>

 	<?php
}
	public function avaliacao(){
			?>
	<form method="POST" action="#"> 
		<div class="estrelas">
			<input type="radio" id="vazio" name="estrela" value="" checked>

			<label for="estrela_um"><i class="fa"></i></label>
			<input type="radio" id="estrela_um" name="estrela" value="1">

			<label for="estrela_dois"><i class="fa"></i></label>
			<input type="radio" id="estrela_dois" name="estrela" value="2">
			
			<label for="estrela_tres"><i class="fa"></i></label>
			<input type="radio" id="estrela_tres" name="estrela" value="3">
			
			<label for="estrela_quatro"><i class="fa"></i></label>
			<input type="radio" id="estrela_quatro" name="estrela" value="4">
			<label for="estrela_cinco"><i class="fa"></i></label>
			<input type="radio" id="estrela_cinco" name="estrela" value="5">
			<p>
				<input type="submit" value="Cadastrar" class="btn btn-success" name="">
			</p>
		</div>
		
	</form>
	<?php
	}
	public function solicitar(){
    ?>
    <form method="POST">
 		<div class="form-group">
    		<label for="exampleFormControlTextarea1"><h5>Informe sua Dificuldade:</h5></label>
    		<textarea class="form-control" placeholder="Escreva aqui..." id="exampleFormControlTextarea1" rows="6"></textarea>
    		<input type="submit" name="enviar" placeholder="Enviar" class="btn btn-success"style="margin-top: 20px; margin-left: 258px">
		</div>
	</form>
    </form>
    <?php
}
}




