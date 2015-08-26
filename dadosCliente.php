<?php

 require_once "Cliente.php";

 $cliente1 = new cliente();
 $cliente1->setNome("Felipe")
		  ->setIdade('32')
		  ->setCpf('000895666-52')
		  ->setEndereco('Av.João afonso, n.10');
 $cliente2 = new cliente();
 $cliente2->setNome("Ana")
 		  ->setIdade('45')
		  ->setCpf('210785562-12')
		  ->setEndereco('Rua. Carlos Barbosa, n.205');
 $cliente3 = new cliente();
 $cliente3->setNome("Geferson")
  		  ->setIdade('35')
		  ->setCpf('507799450-00')
		  ->setEndereco('Rua.Hamburgo, n.24');
 $cliente4 = new cliente();
 $cliente4->setNome("Debora")
  		  ->setIdade('17')
		  ->setCpf('222581270-52')
		  ->setEndereco('Av.Barão do Cai, n.850');
 $cliente5 = new cliente();
 $cliente5->setNome("Anderson")
  		  ->setIdade('33')
		  ->setCpf('520123450-88')
		  ->setEndereco('Av.Leopoldina, n.1220');
 $cliente6 = new cliente();
 $cliente6->setNome("Edson")
  		  ->setIdade('25')
		  ->setCpf('456888809-45')
		  ->setEndereco('Rua.Doze de Dezembro, n.1013');
 $cliente7 = new cliente();
 $cliente7->setNome("Rudinei")
  		  ->setIdade('45')
		  ->setCpf('569780287-70')
		  ->setEndereco('Av.Baltazar, n.2345');
 $cliente8 = new cliente();
 $cliente8->setNome("Vanderlei")
  		  ->setIdade('28')
		  ->setCpf('756265287-22')
		  ->setEndereco('Av.XXIV, n.1000');
 $cliente9 = new cliente();
 $cliente9->setNome("Carlos")
  		  ->setIdade('19')
		  ->setCpf('128715845-20')
		  ->setEndereco('Av.Ladeira, n.2230');
 $cliente10 = new cliente();
 $cliente10->setNome("Hugo")
  		  ->setIdade('50')
		  ->setCpf('450956165-70')
		  ->setEndereco('Av.Castelo Branco, n.1589');

 $nome=$_GET['nome'];
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
				     <th><?php echo $nome; ?></th>
				   </tr>
				</thead>
				<tbody>
			  	<?php 

			  	$clientes = [$cliente1,$cliente2,$cliente3,$cliente4,$cliente5,$cliente6,$cliente7,$cliente8,$cliente9,$cliente10];

			  	foreach ($clientes as $x) {
			  		$verifique = $x->getNome();

			  		if($nome==$verifique){
			  			echo "<tr><td>Nome: ".$x->getNome()."</td></tr>";
	             		echo "<tr><td>Idade: ".$x->getIdade()."</td></tr>";
		                echo "<tr><td>Cpf: ".$x->getCpf()."</td></tr>";
		                echo "<tr><td>Endereço: ".$x->getEndereco()."</td></tr>";
	                }
	            }
	            ?>
	            <tr><td><a class="btn btn-info" href='index.php'>Inicio</a></td></tr>
	            </tbody>
	        </table>
		  </div>
	    </div>
    </div>
    <?php include_once("footer.php"); ?>

</body>
</html>