<?php
require_once "classes/ligabd.php";

class Veiculo
{    
    public $condutor_id;
    public $cliente_id;
	
    public function __construct($condutor_id= null, $cliente_id=null) {
      $this->condutor_id=$condutor_id;
      $this->cliente_id=$cliente_id;
    }
	
}
?>