<?php

namespace SON;

abstract class Cliente{
	
	protected $nome;
	private $idade;
	private $classificacao;
	private $endereco;
	private $enderecoEspecifico;


	public function getNome(){

		return $this->nome;

	}

	public function setNome($nome){

		$this->nome=$nome;
		return $this;

	}
	public function getIdade()
	{
	    return $this->idade;
	}
	
	public function setIdade($idade)
	{
	    $this->idade = $idade;
	    return $this;
	}

	public function getEndereco()
	{
	    return $this->endereco;
	}
	
	public function setEndereco($endereco)
	{
	    $this->endereco = $endereco;
	    return $this;
	}

	public function getClassificacao()
	{
	    return $this->classificacao;
	}
	
	public function setClassificacao($x)
	{
		$estrela="<i class='icon-star-empty'></i>";
		for ($i=0; $i < $x ; $i++) { 

			$this->classificacao .= $estrela;
		}
	    return $this;
	}
	public function getEnderecoEspecifico()
	{
	    return $this->enderecoEspecifico;
	}
	
	public function setEnderecoEspecifico($enderecoEspecifico)
	{
	    return $this->enderecoEspecifico = $enderecoEspecifico;
	}

}
?>