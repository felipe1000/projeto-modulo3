<?php
namespace SON\DB;

use SON\Cliente;

class clienteDB{

	private $conexao;
	private $cliente;

	public function __construct(\PDO $conexao){

		$this->conexao=$conexao;
	}

	public function getConexao(){

		return $this->conexao;

	}

	public function persist(Cliente $cliente){



	}

	public function flush(){

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
	}

}
?>