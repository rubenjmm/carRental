<?php

//public function __construct($id = null, $username = null, $password = null, $morada = null, $cidade = null, $telefone=null, $telemovel=null, $email=null, $empresa_id=null) {
if(isset($_POST['nome']) and isset($_POST['password']) and isset($_POST['username']) and isset($_POST['Morada']) and isset($_POST['nif']) and isset($_POST['telefone']) and isset($_POST['telemovel']) and isset($_POST['email']))
    if ($_POST['tipo'] == 100)
        $clinte = new Cliente(NULL, $_POST['nome'], (md5($_POST['password'])), $_POST['morada'], $_POST['cidade'], $_POST['telefone'], $_POST['telemovel'], $_POST['email'], $_SESSION['empresa_id']);
    $filial->insert();
}




?>