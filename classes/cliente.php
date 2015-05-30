<?php
require_once "classes/ligabd.php";

class Cliente
{    
    public $id;
    public $nome;
    public $titulo;
    public $morada;
	public $username;
	public $password;
	public $telemovel;
	public $email;
	
    public function __construct($id = null, $nome = null, $titulo = null, $morada = null, $username = null, $password = null, $telemovel=null, $email=null) {
      $this->id = $id;
      $this->nome = $nome;
	  $this->titulo=$titulo;
      $this->morada = $morada;
	  $this->username = $username;
	  $this->password = $password;
      $this->telemovel = $telemovel;
	  $this->email=$email;
    }
	
	public function load($id) {
        $sql = "SELECT clientes.id AS id, nome, titulo, morada, username, password, telemovel, email
                FROM clientes WHERE clientes.id = $id";
        $result = mysql_query($sql) or die('getdata: Invalid query: ' . mysql_error());
        $row = mysql_fetch_assoc($result);
        
        $this->id = $row['id'];
        $this->nome = $row['nome'];
        $this->titulo = $row['titulo'];
        $this->morada = $row['morada'];
        $this->username = $row['username'];
		$this->password = $row['password'];
		$this->telemovel = $row['telemovel'];
		$this->email = $row['email'];
    }
	
	public function insert() {
        $sql = "INSERT INTO clientes (nome, titulo, morada, username, password, telemovel, email)
                VALUES ('$this->nome', '$this->titulo', '$this->morada', '$this->username',
				'$this->password', '$this->telemovel', '$this->email')"; 

        $result = mysql_query($sql) or die('insert: Invalid query: ' . mysql_error());
        $this->id = mysql_insert_id();
	}
	
	public function update() {
        $sql = "UPDATE clientes SET nome = '$this->nome', titulo = '$this->titulo', 
		morada = '$this->morada', username = '$this->username', password = '$this->password', 
		telemovel = '$this->telemovel', email = '$this->email'
                WHERE id = $this->id";

        $result = mysql_query($sql) or die('update: Invalid query: ' . mysql_error());
    }
	
	public static function delete($id) {
        $sql = "DELETE FROM clientes WHERE id = $id";
        $result = mysql_query($sql) or die('delete: Invalid query: ' . mysql_error());
    }
	
	 public static function getAll() {
        $sql = 'SELECT * FROM clientes';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $clientes = array();
        while ($row = mysql_fetch_assoc($result)) {
            $clientes[] = new Cliente($row["id"], $row["nome"], $row["titulo"], 
			$row["morada"], $row["username"], $row["password"], $row["telemovel"], $row["email"]);
        }
        return $clientes;
    }

    public static function getAllUsernames() {
        $sql = 'SELECT username FROM clientes';
        $result = mysql_query($sql) or die('getall: Invalid query: ' . mysql_error());

        $clientes = array();
        while ($row = mysql_fetch_assoc($result)) {
            $clientes[] = $row["username"];
        }
        return $clientes;
    }
}
?>