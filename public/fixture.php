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

            echo "--Criando Banco de Dados--<br>";
            $verifica= $conexao ->exec("CREATE DATABASE IF NOT EXISTS `clientes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `clientes`;");
            if ( $verifica ) {
            	echo '--Banco de dados criado com sucesso!--<br>';
            } else {
            	echo '--Falha ao criar banco de dados!--<br>';
            }

			echo "--Criando Tabela--<br>";
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
		  	echo "--Tabela Criada com sucesso-- <br>";

		  	
		  	echo "--Inserindo Dados na Tabela--<br>";
		  	$conexao -> query("INSERT INTO `cliente` (`id_cliente`, `nome`, `idade`, `cpf`, `endereco`, `classificacao`, `endereco_especifico`, `tipo`, `cnpj`) VALUES
			(1, 'Felipe', '32', '000895666-52', 'Av.João afonso, n.10', '5', '', 'fisica', ''),
			(2, 'Ana', '45', '210785562-12', 'Rua. Carlos Barbosa, n.205', '3', '', 'fisica', ''),
			(3, 'Geferson', '35', '507799450-00', 'Rua.Hamburgo, n.24', '4', '', 'fisica', ''),
			(4, 'Debora', '17', '222581270-52', 'Av.Barão do Cai, n.850', '3', '', 'fisica', ''),
			(5, 'Anderson', '33', '520123450-88', 'Av.Leopoldina, n.1220', '4', '', 'fisica', ''),
			(6, 'Edson', '25', '456888809-45', 'Rua.Doze de Dezembro, n.1013', '2', '', 'fisica', ''),
			(7, 'Rudinei', '45', '569780287-70', 'Av.Baltazar, n.2345', '2', '', 'fisica', ''),
			(8, 'Vanderlei', '28', '756265287-22', 'Av.XXIV, n.1000', '1', '', 'fisica', ''),
			(9, 'Carlos', '19', '128715845-20', 'Av.Ladeira, n.2230', '3', '', 'fisica', ''),
			(10, 'Hugo', '50', '450956165-70', 'Av.Castelo Branco, n.1589', '4', '', 'fisica', ''),
			(11, 'Julio', '50', '333546651-07', 'Av.Martins, n.1589', '4', '', 'juridica', '333546651-07'),
			(12, 'Rose', '45', '002465802-67', 'Av.Das Cucuias, n.1589', '2', '', 'juridica', '002465802-67'),
			(13, 'Vagner', '35', '008695412-70', 'Rua.Treze, n.1589', '3', '', 'juridica', '008695412-70'),
			(14, 'Eliezer', '33', '011900023-62', 'Av.Pinheiro, n.1589', '2', '', 'juridica', '011900023-62'),
			(15, 'Leandro', '22', '802465721-40', 'Av.Manolo, n.1201', '4', 'Av.Orlando Aires, n,222', 'juridica', '802465721-40'),
			(16, 'Matheus', '16', '520879456-98', 'Av.Das Indias, n.1589', '2', 'Av.Flores Cunha, n,102', 'juridica', '520879456-98');");
		  	
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