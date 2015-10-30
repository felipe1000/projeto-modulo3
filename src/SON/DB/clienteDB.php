<?php
namespace SON\DB;

use SON\Cliente;
use SON\Types\PessoaFisica;
use SON\Types\PessoaJuridica;


class clienteDB{

	private $cliente;

	public function __construct(\PDO $conexao){

		$this->conexao=$conexao;
	}

	public function persist( $cliente ){

		if ($cliente instanceof PessoaFisica or $cliente instanceof PessoaJuridica) {

			$this->cliente=$cliente;
			return $this;
		
		}

	}

	public function flush(){

		$nome = $this->cliente->getNome();
		$idade = $this->cliente->getIdade();
		$classificacao = $this->cliente->getClassificacao();
		$endereco = $this->cliente->getEndereco();
		$enderecoEspecifico = $this->cliente->getEnderecoEspecifico();
		$tipo = $this->cliente->getTipo();
		if ($this->cliente instanceof PessoaFisica) {
			$cnpj = '';
			$cpf = $this->cliente->getCpf();
		}else{
			$cnpj = $this->cliente->getCnpj();
			$cpf= '';
		}
		
		$tipo = $this->cliente->getTipo();

		$conn=$this->conexao;
        $stmt = $conn->prepare("INSERT INTO `cliente` (`nome`, `idade`, `cpf`, `endereco`, `classificacao`, `endereco_especifico`, `tipo`, `cnpj`) VALUES
('$nome', '$idade', '$cpf', '$endereco', '$classificacao', '$enderecoEspecifico', '$tipo', '$cnpj')");
        $stmt->execute();
 	}
	public function getCliente(){

		return $this->cliente;
	}

	public function mostrarClientes(){

        $conn=$this->conexao;
		$sql = "SELECT nome,tipo,classificacao FROM cliente";
		$stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
	}
	public function dadosCliente($nome){
        
        $conn=$this->conexao;
		$sql = $sql = "SELECT * FROM cliente WHERE nome=:nome";
	  	$stmt = $conn->prepare($sql);
	  	$stmt->bindValue("nome",$nome);
        $stmt->execute();

        return $stmt;
	}
}
?>