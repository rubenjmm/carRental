<?php
require_once "classes/ligabd.php";

class MarcacaoRevisao
{    
    public $id;
    public $kms;
    public $componentes;
    public $veiculo_id;
	
    public function __construct($id = null, $kms = null, $componentes=null, $veiculo_id=null) {
      $this->id = $id;
      $this->kms=$kms;
	  $this->componentes=$componentes;
	  $this->veiculo_id=$veiculo_id;
    }
	
	public function load($id) {
        $sql = "SELECT marcacoesrevisoes.id AS id, kms, componentes, veiculo_id
                FROM marcacoesrevisoes, veiculos WHERE veiculo_id = veiculos.id 
				AND marcacoesrevisoes.id = $id";
                 
        $result = mysql_query($sql) or die('getdata: Invalid query: ' . mysql_error());
        $row = mysql_fetch_assoc($result);
        
        $this->id = $row['id'];
        $this->kms = $row['kms'];
        $this->componentes = $row['componentes'];
        $this->veiculo_id = $row['veiculo_id'];
    }
	
	public function insert() {
        $sql = "INSERT INTO marcacoesrevisoes (kms, componentes, veiculo_id)
                VALUES ('$this->kms', '$this->componentes', '$this->veiculo_id')"; 

        $result = mysql_query($sql) or die('insert: Invalid query: ' . mysql_error());
        $this->id = mysql_insert_id();
	}
	
	public function update() {
        $sql = "UPDATE marcacoesrevisoes SET kms = '$this->kms', 
		componentes = '$this->componentes', veiculo_id = '$this->veiculo_id'
                WHERE id = $this->id";

        $result = mysql_query($sql) or die('update: Invalid query: ' . mysql_error());
    }
	
	public static function delete($id) {
        $sql = "DELETE FROM marcacoesrevisoes WHERE id = $id";
        $result = mysql_query($sql) or die('delete: Invalid query: ' . mysql_error());
    }		
	
	 public static function getAll() {
        $sql = 'SELECT * FROM marcacoesrevisoes, veiculos WHERE 
		veiculos.id = marcacoesrevisoes.veiculo_id';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $marcacoesrevisoes = array();
        while ($row = mysql_fetch_assoc($result)) {
            $marcacoesrevisoes[] = new MarcacaoRevisao($row["id"], $row["kms"], $row["componentes"], $row["veiculo_id"]);
        }
        return $marcacoesrevisoes;
    }
	
}
?>