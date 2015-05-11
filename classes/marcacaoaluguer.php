<?php
require_once "classes/ligabd.php";

class MarcacaoAluguer
{    
    public $id;
    public $referencia;
    public $veiculo_id;
    public $condutor_id;
	public $cliente_id;
	public $pagamento_id;
	
    public function __construct($id = null,$referencia = null, $veiculo_id = null, $condutor_id = null, $cliente_id=null, $pagamento_id=null) {
      $this->id = $id;
      $this->referencia=$referencia;
	  $this->veiculo_id=$veiculo_id;
      $this->condutor_id=$condutor_id;
      $this->cliente_id=$cliente_id;
	  $this->pagamento_id=$pagamento_id;
    }
	
	public function load($id) {
        $sql = "SELECT marcacoesalugueres.id AS id, referencia, veiculo_id, condutor_id, cliente_id, 
		pagamento_id
                FROM veiculos, condutores, clientes, pagamentos WHERE veiculo_id = veiculos.id 
				AND marcacoesalugueres.id = $id
				AND condutor_id = condutores.id AND cliente_id = clientes.id AND 
				pagamento_id = pagamentos.id";
                 
        $result = mysql_query($sql) or die('getdata: Invalid query: ' . mysql_error());
        $row = mysql_fetch_assoc($result);
        
        $this->id = $row['id'];
        $this->referencia = $row['referencia'];
        $this->veiculo_id = $row['veiculo_id'];
        $this->condutor_id = $row['condutor_id'];
        $this->cliente_id = $row['cliente_id'];
		$this->pagamento_id = $row['pagamento_id'];
    }
	
	public function insert() {
        $sql = "INSERT INTO marcacoesalugueres (referencia, veiculo_id, condutor_id, cliente_id, 
		pagamento_id)
                VALUES ('$this->referencia', '$this->veiculo_id', '$this->condutor_id', 
				'$this->cliente_id', '$this->pagamento_id')"; 

        $result = mysql_query($sql) or die('insert: Invalid query: ' . mysql_error());
        $this->id = mysql_insert_id();
	}
	
	public function update() {
        $sql = "UPDATE marcacoesalugueres SET referencia = '$this->referencia', 
		veiculo_id = '$this->veiculo_id', condutor_id = '$this->condutor_id', cliente_id = '$this->cliente_id',
		pagamento_id = '$this->pagamento_id'
                WHERE id = $this->id";

        $result = mysql_query($sql) or die('update: Invalid query: ' . mysql_error());
    }
	
	public static function delete($id) {
        $sql = "DELETE FROM marcacoesalugueres WHERE id = $id";
        $result = mysql_query($sql) or die('delete: Invalid query: ' . mysql_error());
    }		
	
	 public static function getAll() {
        $sql = 'SELECT * FROM veiculos, condutores, clientes, pagamentos WHERE 
		veiculos.id = marcacoesalugueres.veiculo_id AND condutores.id = marcacoesalugueres.condutor_id 
		AND clientes.id = marcacoesalugueres.cliente_id AND pagamentos.id = marcacoesalugueres.pagamento_id';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $marcacoesalugueres = array();
        while ($row = mysql_fetch_assoc($result)) {
            $marcacoesalugueres[] = new MarcacaoAluguer($row["id"], $row["referencia"], $row["veiculo_id"], $row["condutor_id"], $row["cliente_id"], $row["pagamento_id"]);
        }
        return $marcacoesalugueres;
    }
	
}
?>