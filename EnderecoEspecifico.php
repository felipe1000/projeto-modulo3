<?php

class EnderecoEspecifico extends PessoaJuridica
{
	private $enderecoEspecifico;
	
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