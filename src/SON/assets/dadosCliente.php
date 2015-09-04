<?php

define('CLASS_DIR', '../../');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

use SON\Types\PessoaFisica;
use SON\Types\PessoaJuridica;

 $cliente1 = new PessoaFisica();
 $cliente1->setNome("Felipe")
		  ->setIdade('32')
		  ->setCpf('000895666-52')
		  ->setEndereco('Av.João afonso, n.10');
 $cliente2 = new PessoaFisica();
 $cliente2->setNome("Ana")
 		  ->setIdade('45')
		  ->setCpf('210785562-12')
		  ->setEndereco('Rua. Carlos Barbosa, n.205');
 $cliente3 = new PessoaFisica();
 $cliente3->setNome("Geferson")
  		  ->setIdade('35')
		  ->setCpf('507799450-00')
		  ->setEndereco('Rua.Hamburgo, n.24');
 $cliente4 = new PessoaFisica();
 $cliente4->setNome("Debora")
  		  ->setIdade('17')
		  ->setCpf('222581270-52')
		  ->setEndereco('Av.Barão do Cai, n.850');
 $cliente5 = new PessoaFisica();
 $cliente5->setNome("Anderson")
  		  ->setIdade('33')
		  ->setCpf('520123450-88')
		  ->setEndereco('Av.Leopoldina, n.1220');
 $cliente6 = new PessoaFisica();
 $cliente6->setNome("Edson")
  		  ->setIdade('25')
		  ->setCpf('456888809-45')
		  ->setEndereco('Rua.Doze de Dezembro, n.1013');
 $cliente7 = new PessoaFisica();
 $cliente7->setNome("Rudinei")
  		  ->setIdade('45')
		  ->setCpf('569780287-70')
		  ->setEndereco('Av.Baltazar, n.2345');
 $cliente8 = new PessoaFisica();
 $cliente8->setNome("Vanderlei")
  		  ->setIdade('28')
		  ->setCpf('756265287-22')
		  ->setEndereco('Av.XXIV, n.1000');
 $cliente9 = new PessoaFisica();
 $cliente9->setNome("Carlos")
  		  ->setIdade('19')
		  ->setCpf('128715845-20')
		  ->setEndereco('Av.Ladeira, n.2230');
 $cliente10 = new PessoaFisica();
 $cliente10->setNome("Hugo")
  		  ->setIdade('50')
		  ->setCpf('450956165-70')
		  ->setEndereco('Av.Castelo Branco, n.1589');
 
 $cliente11 = new PessoaJuridica();
 $cliente11->setNome("Julio")
  		  ->setIdade('50')
		  ->setCnpj('333546651-07')
		  ->setEndereco('Av.Martins, n.1589');
 $cliente12 = new PessoaJuridica();
 $cliente12->setNome("Rose")
  		  ->setIdade('45')
		  ->setCnpj('002465802-67')
		  ->setEndereco('Av.Das Cucuias, n.1589');
 $cliente13 = new PessoaJuridica();
 $cliente13->setNome("Vagner")
  		  ->setIdade('35')
		  ->setCnpj('008695412-70')
		  ->setEndereco('Rua.Treze, n.1589');
 $cliente14 = new PessoaJuridica();
 $cliente14->setNome("Eliezer")
  		  ->setIdade('33')
		  ->setCnpj('011900023-62')
		  ->setEndereco('Av.Pinheiro, n.1589');
 $cliente15 = new PessoaJuridica();
 $cliente15->setNome("Leandro")
  		  ->setIdade('22')
		  ->setCnpj('802465721-40')
		  ->setEndereco('Av.Manolo, n.1201')
		  ->setEnderecoEspecifico("Av.Orlando Aires, n,222");
 $cliente16 = new PessoaJuridica();
 $cliente16->setNome("Matheus")
  		  ->setIdade('16')
		  ->setCnpj('520879456-98')
		  ->setEndereco('Av.Das Indias, n.1589')
		  ->setEnderecoEspecifico("Av.Flores Cunha, n,102");

 $nome=$_GET['nome'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Projeto- Modulo 3"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Projeto - Módulo 3</title>
	<link rel="stylesheet" href="../../../public/css/bootstrap.css">
	<link rel="stylesheet" href="../../../public/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="../../../public/css/estilo.css">
	<script type="text/javascript" src="../../../public/js/bootstrap-tab.js"></script>
	<script type="text/javascript" src="../../../public/js/bootstrap.js"></script>
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

			  	$clientes = [$cliente1,$cliente2,$cliente3,$cliente4,$cliente5,$cliente6,$cliente7,$cliente8,$cliente9,$cliente10,$cliente11,$cliente12,$cliente13,$cliente14,$cliente15,$cliente16];

			  	foreach ($clientes as $x) {
			  		$verifique = $x->getNome();

			  		if($nome==$verifique){
			  			echo "<tr><td>Nome: ".$x->getNome()."</td></tr>";
	             		echo "<tr><td>Idade: ".$x->getIdade()."</td></tr>";
		                echo ($x instanceof PessoaFisica) ? "<tr><td>Cpf: ".$x->getCpf() : "<tr><td>Cnpj: ".$x->getCnpj()."</td></tr>";
		                echo "<tr><td>Endereço: ".$x->getEndereco()."</td></tr>";
		                echo "<tr><td>Pessoa: ".$x->getTipo()."</td></tr>";
		                if(!null==$x->getEnderecoEspecifico()){
		                	echo "<tr><td><strong>Endereco Especifico: ".$x->getEnderecoEspecifico()."</strong></td></tr>";
		                }
		   
	                }
	            }
	            ?>
	            <tr><td><a class="btn btn-info" href='../../../public/index.php'>Inicio</a></td></tr>
	            </tbody>
	        </table>
		  </div>
	    </div>
    </div>
    <?php include_once("footer.php"); ?>

</body>
</html>