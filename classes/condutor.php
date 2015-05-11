<?php
require_once "classes/ligabd.php";

class Condutor
{    
    public $id;
    public $nome;
    public $apelido;
    public $datanascimento;
	public $ncartaconducao;
	
    public function __construct($id = null, $nome = null, $apelido = null, $datanascimento = null, $ncartaconducao=null) {
      $this->id = $id;
      $this->nome=$nome;
	  $this->apelido=$apelido;
      $this->datanascimento=$datanascimento;
      $this->ncartaconducao=$ncartaconducao;
    }
	
	public function load($id) {
        $sql = "SELECT condutores.id AS id, nome, apelido, datanascimento, ncartaconducao
		FROM condutores WHERE condutores.id = $id";
        $result = mysql_query($sql) or die('getdata: Invalid query: ' . mysql_error());
        $row = mysql_fetch_assoc($result);
        
        $this->id = $row['id'];
        $this->nome = $row['nome'];
        $this->apelido = $row['apelido'];
        $this->datanascimento = $row['datanascimento'];
        $this->ncartaconducao = $row['ncartaconducao'];
    }
	
	public function insert() {
        $sql = "INSERT INTO condutores (nome, apelido, datanascimento, ncartaconducao)
                VALUES ('$this->nome', '$this->apelido', '$this->datanascimento', '$this->ncartaconducao')"; 

        $result = mysql_query($sql) or die('insert: Invalid query: ' . mysql_error());
        $this->id = mysql_insert_id();
	}
	
	public function update() {
        $sql = "UPDATE condutores SET nome = '$this->nome', apelido = '$this->apelido', 
		datanascimento = '$this->datanascimento', ncartaconducao = '$this->ncartaconducao'
                WHERE id = $this->id";

        $result = mysql_query($sql) or die('update: Invalid query: ' . mysql_error());
    }
	
	public static function delete($id) {
        $sql = "DELETE FROM condutores WHERE id = $id";
        $result = mysql_query($sql) or die('delete: Invalid query: ' . mysql_error());
    }
	
	 public static function getAll() {
        $sql = 'SELECT * FROM condutores';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $condutores = array();
        while ($row = mysql_fetch_assoc($result)) {
            $condutores[] = new Cliente($row["id"], $row["nome"], $row["apelido"], 
			$row["datanascimento"], $row["ncartaconducao"]);
        }
        return $condutores;
    }
	
}
?>