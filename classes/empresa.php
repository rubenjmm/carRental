<?php
require_once "ligabd.php";

class Empresa
{    
    public $id;
    public $nome;
    public $morada;
	public $username;
	public $password;
	public $nif;
	public $telefone;
	public $telemovel;
	public $email;
	
    public function __construct($id = null, $nome = null, $morada = null, $username=null, $password=null, $nif=null, $telefone=null, $telemovel=null, $email=null) {
      $this->id = $id;
      $this->nome = $nome;
      $this->morada = $morada;
	  $this->username=$username;
	  $this->password=$password;
	  $this->nif=$nif;
	  $this->telefone=$telefone;
      $this->telemovel = $telemovel;
	  $this->email=$email;
    }
	
	public function load($id) {
      $result = mysql_query("select * from empresas where id = '$id'");
			if (!$result) {
   				die('Invalid query: ' . mysql_error());
			}
			$row = mysql_fetch_assoc($result);
			$this->id = $row["id"];
			$this->username = $row["username"];
    }

	public static function loadByUsername($username) {
      $result = mysql_query("select * from empresas where username = '$username'");
			if (!$result) {
   				return NULL;
			}
			$row = mysql_fetch_assoc($result);
      if (!$row) {
        return NULL;
      }
      
      $empresa = new Empresa();
			$empresa->id = $row["id"];
			$empresa->username = $row["username"];
			$empresa->password = $row["password"];
      return $empresa;
	}
		
	public function insert() {
        $sql = "INSERT INTO empresas (nome, morada, username, password, nif, telefone, telemovel, email)
                VALUES ('$this->nome', '$this->morada', '$this->username',
				'$this->password', '$this->nif', '$this->telefone', '$this->telemovel', '$this->email')"; 

        $result = mysql_query($sql) or die('insert: Invalid query: ' . mysql_error());
        $this->id = mysql_insert_id();
	}
	
	public function update() {
        $sql = "UPDATE empresas SET nome = '$this->nome', morada = '$this->morada', 
		username = '$this->username', password = '$this->password', nif = '$this->nif',
		telefone = '$this->telefone', telemovel = '$this->telemovel', email = '$this->email'
                WHERE id = $this->id";

        $result = mysql_query($sql) or die('update: Invalid query: ' . mysql_error());
    }
	
	public static function delete($id) {
        $sql = "DELETE FROM empresas WHERE id = $id";
        $result = mysql_query($sql) or die('delete: Invalid query: ' . mysql_error());
    }
	
	 public static function getAll() {
        $sql = 'SELECT * FROM empresas';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $empresas = array();
        while ($row = mysql_fetch_assoc($result)) {
            $empresas[] = new Cliente($row["id"], $row["nome"], $row["morada"], $row["username"], 
			$row["password"], $row["nif"], $row["telefone"], $row["telemovel"], $row["email"]);
        }
        return $empresas;
    }

    public static function getAllUsernames() {
        $sql = 'SELECT username FROM empresas';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $empresas = array();
        while ($row = mysql_fetch_assoc($result)) {
            $empresas[] = $row["username"];
        }
        return $empresas;
    }

}
?>