<?php

class Cliente{
	
	public $nome;
	public $idade;
	public $cpf;
	public $endereco;

	public function __construct(){


	    $this->clientes = $clientes = [
			
			1  => ['nome' => 'Felipe', 'idade'=>'32', 'cpf'=>'000895666-52', 'endereco'=>'Av.João afonso, n.10'],
			2  => ['nome' => 'Ana', 'idade' => '40', 'cpf'=> '210785562-12', 'endereco'=>'Rua. Carlos Barbosa, n.205'],
			3  => ['nome' => 'Geferson', 'idade'=> '35', 'cpf'=>'507799450-00', 'endereco'=>'Rua.Hamburgo, n.24'],
			4  => ['nome' => 'Debora', 'idade'=>'17', 'cpf'=>'222581270-52', 'endereco'=>'Av.Barão do Cai, n.850'],
			5  => ['nome' => 'Anderson', 'idade'=> '33', 'cpf'=>'520123450-88', 'endereco'=>'Av.Leopoldina, n.1220'],
			6  => ['nome' => 'Edson'  , 'idade'=>'25', 'cpf'=>'456888809-45', 'endereco'=>'Rua.Doze de Dezembro, n.1013'],
			7  => ['nome' => 'Rudinei', 'idade'=>'45', 'cpf'=>'569780287-70', 'endereco'=>'Av.Baltazar, n.2345'],
			8  => ['nome' => 'Vanderlei', 'idade'=>'28', 'cpf'=>'756265287-22', 'endereco'=>'Av.XXIV, n.1000'],
			9  => ['nome' => 'Carlos', 'idade'=>'19', 'cpf'=>'128715845-20', 'endereco'=>'Av.Ladeira, n.2230'],
			10  => ['nome' =>'Hugo', 'idade'=>'50', 'cpf'=>'450956165-70', 'endereco'=>'Av.Castelo Branco, n.1589'],

			];
	}

	public function Cliente($ordem){

		$lista=$this->clientes;

		if($ordem=="Descendente"){
			krsort($lista);
		}
		array_walk($lista, function ($x){
			$nome=$x['nome'];
			echo "<tr><td><a href='dadosCliente.php?nome=$nome'>".$x['nome']."</a></td></tr>";
		});	
	}

	public function Detalhes($nome){

		$lista=$this->clientes;
		foreach ($lista as $x ) {
			if($nome==$x['nome']){

			    echo "<tr><td>Idade: ".$x['idade']."</td></tr>";
			    echo "<tr><td>Cpf: ".$x['cpf']."</td></tr>";
			    echo "<tr><td>Endereço: ".$x['endereco']."</td></tr>";

			}
		}

	}

}
?>