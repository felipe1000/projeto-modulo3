<?php

class Cliente{
	
	protected $nome;
	private $idade;
	private $cpf;
	private $endereco;


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
	
	public function getCpf()
	{
	    return $this->cpf;
	}
	
	public function setCpf($cpf)
	{
	    $this->cpf = $cpf;
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

}
?>