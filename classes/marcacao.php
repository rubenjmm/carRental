<?php
require_once "classes/ligabd.php";

class Marcacao
{    
    public $id;
    public $datamarcacao;
    public $datainicio;
    public $datafim;
	public $filial_id;
	
    public function __construct($id = null, $datamarcacao = null,$datainicio = null, $datafim=null, $filial_id=null) {
      $this->id = $id;
      $this->datamarcacao=$datamarcacao;
	  $this->datainicio=$datainicio;
      $this->datafim=$datafim;
      $this->filial_id=$filial_id;
    }
	
	public function load($id) {
        $sql = "SELECT marcacoes.id AS id, datamarcacao, datainicio, datafim, filial_id
                FROM marcacoes, filiais WHERE filial_id = filiais.id 
				AND marcacoes.id = $id";
                 
        $result = mysql_query($sql) or die('getdata: Invalid query: ' . mysql_error());
        $row = mysql_fetch_assoc($result);
        
        $this->id = $row['id'];
        $this->datamarcacao = $row['datamarcacao'];
        $this->datainicio = $row['datainicio'];
        $this->datafim = $row['datafim'];
        $this->filial_id = $row['filial_id'];
    }
	
	public function insert() {
        $sql = "INSERT INTO marcacoes (datamarcacao, datainicio, datafim, filial_id)
                VALUES ('$this->datamarcacao', '$this->datainicio', '$this->datafim', 
				'$this->filial_id')"; 

        $result = mysql_query($sql) or die('insert: Invalid query: ' . mysql_error());
        $this->id = mysql_insert_id();
	}
	
	public function update() {
        $sql = "UPDATE marcacoes SET datamarcacao = '$this->datamarcacao', 
		datainicio = '$this->datainicio', datafim = '$this->datafim', filial_id = '$this->filial_id'
                WHERE id = $this->id";

        $result = mysql_query($sql) or die('update: Invalid query: ' . mysql_error());
    }
	
	public static function delete($id) {
        $sql = "DELETE FROM marcacoes WHERE id = $id";
        $result = mysql_query($sql) or die('delete: Invalid query: ' . mysql_error());
    }		
	
	 public static function getAll() {
        $sql = 'SELECT * FROM marcacoes, filiais WHERE 
		filiais.id = marcacoes.filial_id';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $marcacoes = array();
        while ($row = mysql_fetch_assoc($result)) {
            $marcacoes[] = new Marcacao($row["id"], $row["datamarcacao"], $row["datainicio"], $row["datafim"], $row["filial_id"]);
        }
        return $marcacoes;
    }
	
	public static function loadByDatas($datainicio, $datafim, $filial_id) {
      $result = mysql_query("select * from marcacoes where datainicio = '$datainicio' and datafim='$datafim' and filial_id='$filial_id'");
			if ($result==NULL) {
   				$marc = new Marcacao();
				$marc->id = $row["id"];
				$marc->datamarcacao = $row["datamarcacao"];
				$marc->datainicio = $row["datainicio"];
				$marc->datafim = $row["datafim"];
				$marc->filial_id = $row["filial_id"];
			return $marc;
			}

			$row = mysql_fetch_assoc($result);
			if ($row==NULL) {
				$marc = new Marcacao();
				$marc->id = $row["id"];
				$marc->datamarcacao = $row["datamarcacao"];
				$marc->datainicio = $row["datainicio"];
				$marc->datafim = $row["datafim"];
				$marc->filial_id = $row["filial_id"];
			return $marc;
			}
        return ;
	}
}
?>