<?php
require_once "classes/ligabd.php";

class TipoVeiculo
{    
    public $id;
    public $categoria;
	public $preco;
	public $npassageiros;
	public $nbagagens;
	public $foto;

    public function __construct($id = null, $categoria = null, $preco = null, $npassageiros = null, $nbagagens = null, $foto = null) {
      $this->id = $id;
      $this->categoria=$categoria;
	  $this->preco=$preco;
	  $this->npassageiros=$npassageiros;
      $this->nbagagens=$nbagagens;
	  $this->foto=$foto;
	  }
	  
	  public function load($id) {
        $sql = "SELECT tiposveiculos.id AS id, categoria, preco, npassageiros, nbagagens, foto
                FROM tiposveiculos WHERE tiposveiculos.id = $id";
        $result = mysql_query($sql) or die('getdata: Invalid query: ' . mysql_error());
        $row = mysql_fetch_assoc($result);
        
        $this->id = $row['id'];
        $this->categoria = $row['categoria'];
		$this->preco = $row['preco'];
        $this->npassageiros = $row['npassageiros'];
        $this->nbagagens = $row['nbagagens'];
		$this->foto = $row['foto'];

    }
	
	public function insert() {
        $sql = "INSERT INTO tiposveiculos (categoria, preco, npassageiros, nbagagens, foto)
                VALUES ('$this->categoria', '$this->preco', '$this->npassageiros', '$this->nbagagens', '$this->foto')";

        $result = mysql_query($sql) or die('insert: Invalid query: ' . mysql_error());
        $this->id = mysql_insert_id();
	}
	
	public function update() {
        $sql = "UPDATE tiposveiculos SET categoria = '$this->categoria', preco = '$this->preco', npassageiros = '$this->npassageiros',
		nbagagens = '$this->nbagagens', foto = '$this->foto'
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
            $tiposveiculos[] = new Cliente($row["id"], $row["categoria"], $row["preco"], $row["npassageiros"],
			$row["nbagagens"], $row["foto"]);
        }
        return $tiposveiculos;
    }
	
}
?>