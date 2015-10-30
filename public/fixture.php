<?php

define('CLASS_DIR', '../src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

use SON\DB\connDB;
use SON\DB\clienteDB;
use SON\Types\PessoaFisica;
use SON\Types\PessoaJuridica;

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
		  <div class="span3">
		  	<?php
            
		    $conexao = new \PDO('mysql:host=localhost', 'root', '');
			$conn = new connDB($conexao);

		    echo "#### Executando Fixture ####<br>";
			echo "--Removendo Banco de Dados--<br>";
            
            $conn->apagando();

            echo "--Criando Banco de Dados--<br>";
            $conn->criandoBanco();

			echo "--Criando Tabela--<br>";
            $dbname=$conn->getBanco();
            $conexaoBanco = new \PDO("mysql:host=localhost;dbname={$dbname}","root", "");
			$conn ->criandoTabela($conexaoBanco);

		    echo "--Inserindo Dados na Tabela--<br>";
		    
            $fisica = new PessoaFisica();
            $juridica = new PessoaJuridica();
        
            $cliente1 = new clienteDB($conexaoBanco);

            $cliente1 ->persist($fisica);
            $cliente1 ->getCliente()->setNome('Felipe');
            $cliente1 ->getCliente()->setClassificacao(5);
            $cliente1 ->getCliente()->setIdade('32');
            $cliente1 ->getCliente()->setEndereco('Av.João afonso, n.10');
            $cliente1 ->getCliente()->setEnderecoEspecifico('');
            $cliente1 ->getCliente()->setCpf('000895666-52');
            $cliente1 ->getCliente()->getTipo();
            $cliente1->flush();

            $cliente2 = new clienteDB($conexaoBanco);

            $cliente2 ->persist($fisica);
            $cliente2 ->getCliente()->setNome('Ana');
            $cliente2 ->getCliente()->setClassificacao(3);
            $cliente2 ->getCliente()->setIdade('45');
            $cliente2 ->getCliente()->setEndereco('Rua. Carlos Barbosa, n.205');
            $cliente2 ->getCliente()->setEnderecoEspecifico('');
            $cliente2 ->getCliente()->setCpf('210785562-12');
            $cliente2 ->getCliente()->getTipo();
            $cliente2->flush();

            $cliente3 = new clienteDB($conexaoBanco);

            $cliente3 ->persist($fisica);
            $cliente3 ->getCliente()->setNome('Geferson');
            $cliente3 ->getCliente()->setClassificacao(4);
            $cliente3 ->getCliente()->setIdade('35');
            $cliente3 ->getCliente()->setEndereco('Rua.Hamburgo, n.24');
            $cliente3 ->getCliente()->setEnderecoEspecifico('');
            $cliente3 ->getCliente()->setCpf('507799450-00');
            $cliente3 ->getCliente()->getTipo();
            $cliente3->flush();


            $cliente4 = new clienteDB($conexaoBanco);

            $cliente4 ->persist($fisica);
            $cliente4 ->getCliente()->setNome('Anderson');
            $cliente4 ->getCliente()->setClassificacao(4);
            $cliente4 ->getCliente()->setIdade('33');
            $cliente4 ->getCliente()->setEndereco('Av.Leopoldina, n.1220');
            $cliente4 ->getCliente()->setEnderecoEspecifico('');
            $cliente4 ->getCliente()->setCpf('520123450-88');
            $cliente4 ->getCliente()->getTipo();
            $cliente4->flush();


            $cliente5 = new clienteDB($conexaoBanco);

            $cliente5 ->persist($fisica);
            $cliente5 ->getCliente()->setNome('Edson');
            $cliente5 ->getCliente()->setClassificacao(2);
            $cliente5 ->getCliente()->setIdade('25');
            $cliente5 ->getCliente()->setEndereco('Rua. Carlos Barbosa, n.500');
            $cliente5 ->getCliente()->setEnderecoEspecifico('');
            $cliente5 ->getCliente()->setCpf('456888809-45');
            $cliente5 ->getCliente()->getTipo();
            $cliente5->flush();


            $cliente6 = new clienteDB($conexaoBanco);

            $cliente6 ->persist($fisica);
            $cliente6 ->getCliente()->setNome('Rudinei');
            $cliente6 ->getCliente()->setClassificacao(2);
            $cliente6 ->getCliente()->setIdade('45');
            $cliente6 ->getCliente()->setEndereco('Av.Baltazar, n.2345');
            $cliente6 ->getCliente()->setEnderecoEspecifico('');
            $cliente6 ->getCliente()->setCpf('569780287-70');
            $cliente6 ->getCliente()->getTipo();
            $cliente6->flush();


            $cliente7 = new clienteDB($conexaoBanco);

            $cliente7 ->persist($fisica);
            $cliente7 ->getCliente()->setNome('Vanderlei');
            $cliente7 ->getCliente()->setClassificacao(1);
            $cliente7 ->getCliente()->setIdade('28');
            $cliente7 ->getCliente()->setEndereco('Av.XXIV, n.1000');
            $cliente7 ->getCliente()->setEnderecoEspecifico('');
            $cliente7 ->getCliente()->setCpf('756265287-22');
            $cliente7 ->getCliente()->getTipo();
            $cliente7->flush();


            $cliente8 = new clienteDB($conexaoBanco);

            $cliente8 ->persist($fisica);
            $cliente8 ->getCliente()->setNome('Carlos');
            $cliente8 ->getCliente()->setClassificacao(3);
            $cliente8 ->getCliente()->setIdade('35');
            $cliente8 ->getCliente()->setEndereco('Av.Ladeira, n.2230');
            $cliente8 ->getCliente()->setEnderecoEspecifico('');
            $cliente8 ->getCliente()->setCpf('128715845-20');
            $cliente8 ->getCliente()->getTipo();
            $cliente8->flush();


            $cliente9 = new clienteDB($conexaoBanco);

            $cliente9 ->persist($fisica);
            $cliente9 ->getCliente()->setNome('Hugo');
            $cliente9 ->getCliente()->setClassificacao(4);
            $cliente9 ->getCliente()->setIdade('50');
            $cliente9 ->getCliente()->setEndereco('Av.Castelo Branco, n.1589');
            $cliente9 ->getCliente()->setEnderecoEspecifico('');
            $cliente9 ->getCliente()->setCpf('450956165-70');
            $cliente9 ->getCliente()->getTipo();
            $cliente9->flush();


            $cliente10 = new clienteDB($conexaoBanco);

            $cliente10 ->persist($fisica);
            $cliente10 ->getCliente()->setNome('Debora');
            $cliente10 ->getCliente()->setClassificacao(3);
            $cliente10 ->getCliente()->setIdade('17');
            $cliente10 ->getCliente()->setEndereco('Av.Barão do Cai, n.850');
            $cliente10 ->getCliente()->setEnderecoEspecifico('');
            $cliente10 ->getCliente()->setCpf('222581270-52');
            $cliente10 ->getCliente()->getTipo();
            $cliente10->flush();

            $cliente11 = new clienteDB($conexaoBanco);

            $cliente11 ->persist($juridica);
            $cliente11 ->getCliente()->setNome('Eliezer');
            $cliente11 ->getCliente()->setClassificacao(2);
            $cliente11 ->getCliente()->setIdade('33');
            $cliente11 ->getCliente()->setEndereco('Av.Pinheiro, n.1589');
            $cliente11 ->getCliente()->setEnderecoEspecifico('Rua. andarai, n.256');
            $cliente11 ->getCliente()->setCnpj('011900023-62');
            $cliente11 ->getCliente()->getTipo();
            $cliente11 ->flush();


            $cliente12 = new clienteDB($conexaoBanco);

            $cliente12 ->persist($juridica);
            $cliente12 ->getCliente()->setNome('Leandro');
            $cliente12 ->getCliente()->setClassificacao(3);
            $cliente12 ->getCliente()->setIdade('22');
            $cliente12 ->getCliente()->setEndereco('Av.Manolo, n.1201');
            $cliente12 ->getCliente()->setEnderecoEspecifico('Av.Ubatuba Reis, n.880');
            $cliente11 ->getCliente()->setCnpj('002753023-57');
            $cliente11 ->getCliente()->getTipo();
            $cliente11 ->flush():

      	  	echo "--Dados Inseridos--<br>";
      	  	echo "#### Fixture Finalizado####<br>";
      	  	?>    
	    <a class="btn btn-info" href='index.php'>Voltar</a>
		  </div>
	    </div>
    </div>
    <?php include_once("SON/assets/footer.php"); ?>

</body>
</html>