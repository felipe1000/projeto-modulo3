<?php
namespace SON\DB;


class connDB{

	private $conexao;
	private $cliente;
	private $banco;

	public function __construct(\PDO $conexao){

		$this->conexao=$conexao;
	}

	public function getConexao(){

		return $this->conexao;

	}
	public function apagando(){

		$conn=$this->conexao;
		$conn->query("DROP DATABASE IF EXISTS`clientes`;");
		echo " --Banco de Dados Removido--<br>";
	}
	public function criandoBanco(){

		$verifica = $conn=$this->conexao;
		$conn->query("CREATE DATABASE IF NOT EXISTS `clientes`;");
            if ( $verifica ) {
            	echo '--Banco de Dados Criado --<br>';
            } else {
            	echo '--Falha ao criar banco de dados!--<br>';
            }
	}
	public function getBanco(){

		return $this->banco = 'clientes';

	}
	public function criandoTabela(\PDO $conexaoBanco){
		
		$conn=$conexaoBanco;
		$conn->query("CREATE TABLE IF NOT EXISTS `cliente` (
				`id_cliente` int(10) NOT NULL AUTO_INCREMENT,
				`nome` varchar(100) NOT NULL,
				`idade` varchar(3) NOT NULL,
				`cpf` varchar(12) NOT NULL,
				`endereco` varchar(500) NOT NULL,
				`classificacao` varchar(10) NOT NULL,
				`endereco_especifico` varchar(500) NOT NULL,
				`tipo` varchar(20) NOT NULL,
				`cnpj` varchar(20) NOT NULL,
				PRIMARY KEY (`id_cliente`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;");
		  	echo "--Tabela Criada com sucesso-- <br>";

	}



	
}
?>