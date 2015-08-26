<?php

 require_once "Cliente.php";

 $cliente1 = new cliente();
 $cliente1->setNome("Felipe");
 $cliente2 = new cliente();
 $cliente2->setNome("Ana");
 $cliente3 = new cliente();
 $cliente3->setNome("Geferson");
 $cliente4 = new cliente();
 $cliente4->setNome("Debora");
 $cliente5 = new cliente();
 $cliente5->setNome("Anderson");
 $cliente6 = new cliente();
 $cliente6->setNome("Edson");
 $cliente7 = new cliente();
 $cliente7->setNome("Rudinei");
 $cliente8 = new cliente();
 $cliente8->setNome("Vanderlei");
 $cliente9 = new cliente();
 $cliente9->setNome("Carlos");
 $cliente10 = new cliente();
 $cliente10->setNome("Hugo");

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

	<?php include_once("header.php"); ?>
	
	<div class="container">
		<div class="row">
		  <div class="span3"><br>
		  	<table class="table table-condensed">
				<thead>
				   <tr>
				     <th>Lista de Cliente</th>
				   </tr>
				</thead>
				<tbody>
			  	<?php 
			  	$clientes = [$cliente1,$cliente2,$cliente3,$cliente4,$cliente5,$cliente6,$cliente7,$cliente8,$cliente9,$cliente10];
			  	if($ordem =="descendente"){

			  		krsort($clientes);
			  	}
	             array_walk($clientes, function ($x){
	             	$nome=$x->getNome();
	             	echo "<tr><td><a href='dadosCliente.php?nome=$nome'>".$nome."</a></td></tr>";
	             	
	             });
	            ?>
	            <tr><td><a class="btn btn-info" href='index.php?ordem=descendente'>Ordem Descendente</a></td></tr>
	            <tr><td><a class="btn btn-info" href='index.php?ordem=ascendente'>Ordem Ascendente</a></td></tr>
	            </tbody>
	        </table>
		  </div>
	    </div>
    </div>
    <?php include_once("footer.php"); ?>

</body>
</html>