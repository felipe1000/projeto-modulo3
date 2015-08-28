<?php
class PessoaFisica extends Cliente
{
	private $tipo;
	private $classificacao;

	public function __construct(){

		$this->tipo="Física";
	}
	public function getTipo()
	{
	    return $this->tipo;
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
}
?>