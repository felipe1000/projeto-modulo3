<?php
namespace SON\DB;


class clienteDB{

	private $conexao;
	private $cliente;
	private $classificacao;

	public function __construct(\PDO $conexao){

		try{

			if(!isset($conexao)){

				throw new \InvalidArgumentException("Configuração de Banco de Dados não Existe!");
			}

			$this->conexao=$conexao;

	    }catch (\PDOException $e){
	    	
	    	echo $e->getMessage()."\n";
	    	echo $e->getTraceAsString()."\n";
	    }


	}

	public function getConexao(){

		return $this->conexao;

	}

	public function persist($clientes){

		foreach ($clientes as $cliente) {

			$nome=$cliente['nome'];
			$x=$cliente['classificacao'];

        	$this->classificacao=null;
		    $estrela="<i class='icon-star-empty'></i>";
		    
		    for ($i=0; $i < $x ; $i++) { 
		    	$this->classificacao .= $estrela;
		    }

         	echo "<tr><td><a href='../src/SON/assets/dadosCliente.php?nome=$nome'>".$cliente['nome']."</a></td>";
         	echo "<td>".$cliente['tipo']."</td>";
         	echo "<td>".$this->classificacao."</td></tr>";

        }

	}

	public function flush($clientes){

		foreach ($clientes as $x) {
			  			echo "<tr><td>Nome: ".$x['nome']."</td></tr>";
	             		echo "<tr><td>Idade: ".$x['idade']."</td></tr>";
		                echo ($x['tipo']=='fisica') ? "<tr><td>Cpf: ".$x['cpf'] : "<tr><td>Cnpj: ".$x['cnpj']."</td></tr>";
		                echo "<tr><td>Endereço: ".$x['endereco']."</td></tr>";
		                echo "<tr><td>Pessoa: ".$x['tipo']."</td></tr>";
		                if(!null==$x['endereco_especifico']){
		                	echo "<tr><td><strong>Endereco Especifico: ".$x['endereco_especifico']."</strong></td></tr>";
		                }
	            }
	
	}

	public function Remover(){
		echo "Removendo Tabela";
		$conn=$this->conexao;
        $conn->query("DROP TABLE IF EXISTS `cliente`;");
        echo " -OK<br>";
	}

	public function Criando(){
		echo "Criando Tabela";
		$conn=$this->conexao;
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
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;");
         echo " -OK<br>";
	}

	public function Inserindo(){
		echo "Inserindo Dados";
		$conn=$this->conexao;
        $stmt = $conn->prepare("INSERT INTO `cliente` (`id_cliente`, `nome`, `idade`, `cpf`, `endereco`, `classificacao`, `endereco_especifico`, `tipo`, `cnpj`) VALUES
(1, 'Felipe', '32', '000895666-52', 'Av.João afonso, n.10', '5', '', 'fisica', ''),
(2, 'Ana', '45', '210785562-12', 'Rua. Carlos Barbosa, n.205', '3', '', 'fisica', ''),
(3, 'Geferson', '35', '507799450-00', 'Rua.Hamburgo, n.24', '4', '', 'fisica', ''),
(4, 'Debora', '17', '222581270-52', 'Av.Barão do Cai, n.850', '3', '', 'fisica', ''),
(5, 'Anderson', '33', '520123450-88', 'Av.Leopoldina, n.1220', '4', '', 'fisica', ''),
(6, 'Edson', '25', '456888809-45', 'Rua.Doze de Dezembro, n.1013', '2', '', 'fisica', ''),
(7, 'Rudinei', '45', '569780287-70', 'Av.Baltazar, n.2345', '2', '', 'fisica', ''),
(8, 'Vanderlei', '28', '756265287-22', 'Av.XXIV, n.1000', '1', '', 'fisica', ''),
(9, 'Carlos', '19', '128715845-20', 'Av.Ladeira, n.2230', '3', '', 'fisica', ''),
(10, 'Hugo', '50', '450956165-70', 'Av.Castelo Branco, n.1589', '4', '', 'fisica', ''),
(11, 'Julio', '50', '333546651-07', 'Av.Martins, n.1589', '4', '', 'juridica', '333546651-07'),
(12, 'Rose', '45', '002465802-67', 'Av.Das Cucuias, n.1589', '2', '', 'juridica', '002465802-67'),
(13, 'Vagner', '35', '008695412-70', 'Rua.Treze, n.1589', '3', '', 'juridica', '008695412-70'),
(14, 'Eliezer', '33', '011900023-62', 'Av.Pinheiro, n.1589', '2', '', 'juridica', '011900023-62'),
(15, 'Leandro', '22', '802465721-40', 'Av.Manolo, n.1201', '4', 'Av.Orlando Aires, n,222', 'juridica', '802465721-40'),
(16, 'Matheus', '16', '520879456-98', 'Av.Das Indias, n.1589', '2', 'Av.Flores Cunha, n,102', 'juridica', '520879456-98');");
        $stmt->execute();
        echo " -OK<br>";

        echo "#### Concluído ####<br>";
	}
}
?>