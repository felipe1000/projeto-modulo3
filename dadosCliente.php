<?php
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

			  	require_once "cliente.class.php";

			  	$clientes = new cliente();
			  	$clientes->Detalhes($nome);
			  			
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