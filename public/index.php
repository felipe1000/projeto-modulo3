<?php

define('CLASS_DIR', '../src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

use SON\DB\clienteDB;
use SON\Types\PessoaFisica;
use SON\Types\PessoaJuridica;



 if(isset($_GET['ordem'])){
 	$ordem=$_GET['ordem'];
 }else{
 	$ordem="ascendente";
 }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Projeto- Modulo 3"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Projeto - Módulo 3</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/estilo.css">
	<script type="text/javascript" src="js/bootstrap-tab.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

	<?php include_once("SON/assets/header.php"); ?>
	
	<div class="container">
		<div class="row">
		  <div class="span3"><br>
		  	<a class="btn btn-info" href='fixture.php'>Executar Fixture</a><br><br>
		  	<table class="table table table-striped">
				<thead>
				   <tr>
				     <th>Nome</th>
				     <th>Pessoa</th>
				     <th>Classificação</th>
				   </tr>
				</thead>
				<tbody>
			  	<?php
			  	$conexao = new \PDO('mysql:host=localhost:3306;dbname=clientes', 'root', 'root');
			  	$conn = new clienteDB($conexao);
			  	if ($conn->mostrarClientes() == true){

			  		$stmt = $conn->mostrarClientes();
			  		$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

			  	}else{

			  		echo "Erro na mostrargem de Dados";
			  	}
                
                if($ordem =="descendente"){

			  		krsort($clientes);
			  	}

			  	foreach ($clientes as $cliente) {

					$nome=$cliente['nome'];
					$x=$cliente['classificacao'];

		        	$classificacao=null;
				    $estrela="<i class='icon-star-empty'></i>";
				    
				    for ($i=0; $i < $x ; $i++) { 
				    	$classificacao .= $estrela;
				    }

		         	echo "<tr><td><a href='../src/SON/assets/dadosCliente.php?nome=$nome'>".$cliente['nome']."</a></td>";
		         	echo "<td>".$cliente['tipo']."</td>";
		         	echo "<td>".$classificacao."</td></tr>";

		        }

			  	?>
	            <tr><td><a class="btn btn-info" href='index.php?ordem=descendente'>Ordem Descendente</a></td></tr>
	            <tr><td><a class="btn btn-info" href='index.php?ordem=ascendente'>Ordem Ascendente</a></td></tr>
	            </tbody>
	        </table>
		  </div>
	    </div>
    </div>
    <?php include_once("SON/assets/footer.php"); ?>

</body>
</html>