<?php
require_once "classes/ligabd.php";

class Pagamento	
{    
    public $id;
    public $montante;
    public $descricao;
    public $data;
	public $cliente_id;
	
    public function __construct($id = null, $montante = null, $descricao = null, $data = null, $cliente_id=null) {
      $this->id = $id;
      $this->montante=$montante;
	  $this->descricao=$descricao;
      $this->data=$data;
      $this->cliente_id=$cliente_id;
    }
	
	public function load($id) {
        $sql = "SELECT pagamentos.id AS id, montante, descricao, data, cliente_id
                FROM pagamentos, clientes WHERE pagamentos.id = $id AND cliente_id = clientes.id";
                 
        $result = mysql_query($sql) or die('getdata: Invalid query: ' . mysql_error());
        $row = mysql_fetch_assoc($result);
        
        $this->id = $row['id'];
        $this->montante = $row['montante'];
        $this->descricao = $row['descricao'];
        $this->data = $row['data'];
        $this->cliente_id = $row['cliente_id'];
    }
	
	public function insert() {
        $sql = "INSERT INTO pagamentos (montante, descricao, data, cliente_id)
                VALUES ('$this->montante', '$this->descricao', '$this->data', '$this->cliente_id')"; 

        $result = mysql_query($sql) or die('insert: Invalid query: ' . mysql_error());
        $this->id = mysql_insert_id();
	}
	
	public function update() {
        $sql = "UPDATE pagamentos SET montante = '$this->montante', 
		descricao = '$this->descricao', data = $this->data, cliente_id = $this->cliente_id
                WHERE id = $this->id";

        $result = mysql_query($sql) or die('update: Invalid query: ' . mysql_error());
    }
	
	public static function delete($id) {
        $sql = "DELETE FROM pagamentos WHERE id = $id";
        $result = mysql_query($sql) or die('delete: Invalid query: ' . mysql_error());
    }		
	
	 public static function getAll() {
        $sql = 'SELECT * FROM pagamentos, clientes WHERE clientes.id = pagamentos.cliente_id';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $pagamentos = array();
        while ($row = mysql_fetch_assoc($result)) {
            $pagamentos[] = new Pagamento($row["id"], $row["montante"], $row["descricao"], $row["data"], $row["cliente_id"]);
        }
        return $pagamentos;
    }
	
}
?>