<?php

define('CLASS_DIR', '../src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

use SON\DB\clienteDB;
use SON\Types\PessoaFisica;
use SON\Types\PessoaJuridica;

  $cliente1 = new PessoaFisica();
//  $cliente1->setNome("Felipe")
//           ->setClassificacao(5);
  $cliente2 = new PessoaFisica();
//  $cliente2->setNome("Ana")
//           ->setClassificacao(3);
  $cliente3 = new PessoaFisica();
//  $cliente3->setNome("Geferson")
//            ->setClassificacao(4);
  $cliente4 = new PessoaFisica();
//  $cliente4->setNome("Debora")
//           ->setClassificacao(3);
  $cliente5 = new PessoaFisica();
//  $cliente5->setNome("Anderson")
//           ->setClassificacao(4);
  $cliente6 = new PessoaFisica();
//  $cliente6->setNome("Edson")
//           ->setClassificacao(5);
  $cliente7 = new PessoaFisica();
//  $cliente7->setNome("Rudinei")
//           ->setClassificacao(3);
  $cliente8 = new PessoaFisica();
//  $cliente8->setNome("Vanderlei")
//           ->setClassificacao(3);
  $cliente9 = new PessoaFisica();
//  $cliente9->setNome("Carlos")
//           ->setClassificacao(4);
  $cliente10 = new PessoaFisica();
//  $cliente10->setNome("Hugo")
//            ->setClassificacao(2);

  $cliente11 = new PessoaJuridica();
//  $cliente11->setNome("Julio")
//            ->setClassificacao(3);
  $cliente12 = new PessoaJuridica();
//  $cliente12->setNome("Rose")
//            ->setClassificacao(2);
  $cliente13 = new PessoaJuridica();
//  $cliente13->setNome("Vagner")
//            ->setClassificacao(3);
  $cliente14 = new PessoaJuridica();
//  $cliente14->setNome("Eliezer")
//            ->setClassificacao(4);
  $cliente15 = new PessoaJuridica();
//  $cliente15->setNome("Leandro")
//            ->setClassificacao(5);
  $cliente16 = new PessoaJuridica();
//  $cliente16->setNome("Matheus")
//            ->setClassificacao(1);

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
			  	$conexao = new \PDO('mysql:host=localhost;dbname=clientes', 'root', '');
			  	$conn = new clienteDB($conexao);
			  	$conn->persist($cliente1);
			  	$conn->persist($cliente2);
			  	$conn->persist($cliente3);
			  	$conn->persist($cliente4);
			  	$conn->persist($cliente5);
			  	$conn->persist($cliente6);
			  	$conn->persist($cliente7);
			  	$conn->persist($cliente8);
			  	$conn->persist($cliente9);
			  	$conn->persist($cliente10);
			  	$conn->persist($cliente11);
			  	$conn->persist($cliente12);
			  	$conn->persist($cliente13);
			  	$conn->persist($cliente14);
			  	$conn->persist($cliente15);
			  	$conn->persist($cliente16);
			  	$conn->flush();
			  	$prepara = $conn ->getConexao();
			  	$sql = "SELECT nome,tipo,classificacao FROM cliente";
			  	$stmt = $prepara->prepare($sql);
                $stmt->execute();

                $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
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