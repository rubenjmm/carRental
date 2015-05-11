<?php
require_once "classes/ligabd.php";

class Veiculo
{    
    public $id;
    public $marca;
    public $modelo;
    public $matricula;
	public $cor;
	public $kms;
	public $tipo_id;
	
    public function __construct($id = null, $marca = null, $modelo = null, $matricula = null, $cor=null, $kms=null, $tipo_id=null) {
      $this->id = $id;
      $this->marca=$marca;
	  $this->modelo=$modelo;
      $this->matricula=$matricula;
      $this->cor=$cor;
	  $this->kms=$kms;
	  $this->tipo_id=$tipo_id;
    }
	
	public function load($id) {
        $sql = "SELECT veiculos.id AS id, marca, modelo, matricula, cor, kms, tipo_id
                FROM veiculos, tiposveiculos WHERE tipo_id = tiposveiculos.id 
				AND veiculos.id = $id";
                 
        $result = mysql_query($sql) or die('getdata: Invalid query: ' . mysql_error());
        $row = mysql_fetch_assoc($result);
        
        $this->id = $row['id'];
        $this->marca = $row['marca'];
        $this->modelo = $row['modelo'];
        $this->matricula = $row['matricula'];
        $this->cor = $row['cor'];
		$this->kms = $row['kms'];
		$this->tipo_id = $row['tipo_id'];
    }
	
	public function insert() {
        $sql = "INSERT INTO veiculos (marca, modelo, matricula, cor, kms, tipo_id)
                VALUES ('$this->marca', '$this->modelo', '$this->matricula', 
				'$this->cor', '$this->kms', '$this->tipo_id')"; 

        $result = mysql_query($sql) or die('insert: Invalid query: ' . mysql_error());
        $this->id = mysql_insert_id();
	}
	
	public function update() {
        $sql = "UPDATE veiculos SET marca = '$this->marca', 
		modelo = '$this->modelo', matricula = '$this->matricula', cor = '$this->cor',
		kms = '$this->kms', tipo_id = '$this->tipo_id'
                WHERE id = $this->id";

        $result = mysql_query($sql) or die('update: Invalid query: ' . mysql_error());
    }
	
	public static function delete($id) {
        $sql = "DELETE FROM veiculos WHERE id = $id";
        $result = mysql_query($sql) or die('delete: Invalid query: ' . mysql_error());
    }		
	
	 public static function getAll() {
        $sql = 'SELECT * FROM veiculos, tiposveiculos WHERE tiposveiculos.id = veiculos.tipo_id';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $veiculos = array();
        while ($row = mysql_fetch_assoc($result)) {
            $veiculos[] = new Veiculo($row["id"], $row["marca"], $row["modelo"], $row["matricula"], 
			$row["cor"], $row["kms"], $row["tipo_id"]);
        }
        return $veiculos;
    }
	
}
?>