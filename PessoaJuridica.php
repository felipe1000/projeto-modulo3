<?php
class PessoaJuridica extends Cliente implements Juridica
{
	private $tipo;
	private $cnpj;

	public function __construct(){

		$this->tipo = "Juridica";
	}

	public function getTipo()
	{
	    return $this->tipo;
	}

	public function getCnpj()
	{
	    return $this->cnpj;
	}
	
	public function setCnpj($cnpj)
	{
	    $this->cnpj = $cnpj;
	    return $this;
	}
}