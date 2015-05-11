<?php
require_once "classes/ligabd.php";

class TipoVeiculo
{    
    public $id;
    public $categoria;
	public $npassageiros;
	public $nbagagens;
	
    public function __construct($id = null, $categoria = null, $npassageiros = null, $nbagagens = null) {
      $this->id = $id;
      $this->categoria=$categoria;
	  $this->npassageiros=$npassageiros;
      $this->nbagagens=$nbagagens;
	  }
	  
	  public function load($id) {
        $sql = "SELECT tiposveiculos.id AS id, categoria, npassageiros, nbagagens
                FROM tiposveiculos WHERE tiposveiculos.id = $id";
        $result = mysql_query($sql) or die('getdata: Invalid query: ' . mysql_error());
        $row = mysql_fetch_assoc($result);
        
        $this->id = $row['id'];
        $this->categoria = $row['categoria'];
        $this->npassageiros = $row['npassageiros'];
        $this->nbagagens = $row['nbagagens'];
        
    }
	
	public function insert() {
        $sql = "INSERT INTO tiposveiculos (categoria, npassageiros, nbagagens)
                VALUES ('$this->categoria', '$this->npassageiros', '$this->nbagagens')"; 

        $result = mysql_query($sql) or die('insert: Invalid query: ' . mysql_error());
        $this->id = mysql_insert_id();
	}
	
	public function update() {
        $sql = "UPDATE tiposveiculos SET categoria = '$this->categoria', npassageiros = '$this->npassageiros', 
		nbagagens = '$this->nbagagens'
                WHERE id = $this->id";

        $result = mysql_query($sql) or die('update: Invalid query: ' . mysql_error());
    }
	
	public static function delete($id) {
        $sql = "DELETE FROM tiposveiculos WHERE id = $id";
        $result = mysql_query($sql) or die('delete: Invalid query: ' . mysql_error());
    }
	
	 public static function getAll() {
        $sql = 'SELECT * FROM tiposveiculos';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $tiposveiculos = array();
        while ($row = mysql_fetch_assoc($result)) {
            $tiposveiculos[] = new Cliente($row["id"], $row["categoria"], $row["npassageiros"], 
			$row["nbagagens"]);
        }
        return $tiposveiculos;
    }
	
}
?>