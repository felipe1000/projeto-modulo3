<?php
class PessoaFisica extends Cliente implements Fisica{
	private $tipo;
	private $cpf;
	

	public function __construct(){

		$this->tipo="Física";
	}
	public function getTipo()
	{
	    return $this->tipo;
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
}