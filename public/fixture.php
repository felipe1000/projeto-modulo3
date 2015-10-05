<?php

define('CLASS_DIR', '../src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

use SON\DB\clienteDB;

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

		  	echo "#### Executando Fixture ####<br>";

			try {
				$conexao = new \PDO('mysql:host=localhost', 'root', '');
			}
			catch (PDOException $e) {
				print "Erro: " . $e->getMessage() . "<br/>";
				die();
			}
			
			// echo "Removendo Banco de Dados";
   //          $conn->query("DROP DATABASE `clientes`;");
   //          echo " -OK<br>";

            echo "Criando Banco de Dados<br>";
            $verifica= $conexao ->exec("CREATE DATABASE IF NOT EXISTS `clientes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `clientes`;");
            if ( $verifica ) {
            	echo 'Banco de dados criado com sucesso!<br>';
            } else {
            	echo 'Falha ao criar banco de dados!<br>';
            }

			echo "Criando Tabela<br>";
			$conexao -> query("CREATE TABLE IF NOT EXISTS `cliente` (
				`id_cliente` int(10) NOT NULL AUTO_INCREMENT,
				`nome` varchar(100) NOT NULL,
				`idade` varchar(3) NOT NULL,
				`cpf` varchar(12) NOT NULL,
				`endereco` varchar(500) NOT NULL,
				`classificacao` varchar(10) NOT NULL,
				`endereco_especifico` varchar(500) NOT NULL,
				`tipo` varchar(20) NOT NULL,
				`cnpj` varchar(20) NOT NULL,
				PRIMARY KEY (`id_cliente`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;");
		  	echo "Tabela Criada com sucesso <br>";
		  	echo "#### Fixture Finalizado####<br>";
		  	?>
	            
	        <a class="btn btn-info" href='index.php'>Voltar</a>
		  </div>
	    </div>
    </div>
    <?php include_once("SON/assets/footer.php"); ?>

</body>
</html>