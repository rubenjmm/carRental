<?php
require_once "ligabd.php";

class Filial
{    
    public $id;
    public $username;
    public $password;
    public $morada;
	public $cidade;
	public $telefone;
	public $telemovel;
	public $email;
	public $empresa_id;
	
    public function __construct($id = null, $username = null, $password = null, $morada = null, $cidade = null, $telefone=null, $telemovel=null, $email=null, $empresa_id=null) {
      $this->id = $id;
      $this->username = $username;
	  $this->password=$password;
      $this->morada = $morada;
	  $this->cidade = $cidade;
	  $this->telefone=$telefone;
      $this->telemovel = $telemovel;
	  $this->email=$email;
	  $this->empresa_id=$empresa_id;
    }
	
	public function load($id) {
      $result = mysql_query("select * from filiais where id = '$id'");
			if (!$result) {
   				die('Invalid query: ' . mysql_error());
			}
			$row = mysql_fetch_assoc($result);
			$this->id = $row["id"];
			$this->username = $row["username"];
    }

	public static function loadByUsername($username) {
      $result = mysql_query("select * from filiais where username = '$username'");
			if (!$result) {
   				return NULL;
			}
			$row = mysql_fetch_assoc($result);
      if (!$row) {
        return NULL;
      }
      
      $filial = new Filial();
			$filial->id = $row["id"];
			$filial->username = $row["username"];
			$filial->password = $row["password"];
      return $filial;
	}
		
	public function insert() {
        $sql = "INSERT INTO filiais (username, password, morada, cidade, telefone, 
		telemovel, email, empresa_id)
                VALUES ('$this->username', '$this->password', '$this->morada', '$this->cidade',
				'$this->telefone', '$this->telemovel', '$this->email', '$this->empresa_id')"; 

        $result = mysql_query($sql) or die('insert: Invalid query: ' . mysql_error());
        $this->id = mysql_insert_id();
	}
	
	public function update() {
        $sql = "UPDATE filiais SET username = '$this->username', 
		password = '$this->password', morada = '$this->morada', cidade = '$this->cidade', telefone = '$this->telefone',
		telemovel = '$this->telemovel',	email = '$this->email',	empresa_id = '$this->empresa_id'
                WHERE id = $this->id";

        $result = mysql_query($sql) or die('update: Invalid query: ' . mysql_error());
    }
	
	public static function delete($id) {
        $sql = 'DELETE FROM filiais WHERE id = "'. $id. '"';
        $result = mysql_query($sql) or die('delete: Invalid query: ' . mysql_error());
    }		
	
	public static function getAllByEmpresa($empresa_id) {
        $sql = 'SELECT * FROM filiais WHERE filiais.empresa_id = "'. $empresa_id. '"';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $filiais = array();
        while ($row = mysql_fetch_assoc($result)) {
            $filiais[] = new Filial($row["id"], $row["username"], $row["password"], $row["morada"], $row["cidade"], $row["telefone"], $row["telemovel"], $row["email"], $row["empresa_id"]);
        }
        return $filiais;
    }
	
	public static function getAllByCidade($cidade) {
        $sql = 'SELECT id, username FROM filiais WHERE cidade = "'. $cidade. '"';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $filiais = array();
        while ($row = mysql_fetch_assoc($result)) {
            $filiais[] = new Filial($row["id"], $row["username"]);
        }
        return $filiais;
    }
	
	
}
?>