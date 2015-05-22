<?php
include 'classes/filial.php';
include 'classes/empresa.php';

if (isset($_POST["username"], $_POST["password"])) {
    $user = $_POST["username"];
    $pass = md5($_POST["password"]);

    $filial = Filial::loadByUsername($user);
    $empresa = Empresa::loadByUsername($user);
	
	if ($filial == NULL and $empresa == NULL) {
        header("Location: index.php?erro=1");
	} else if ($pass != $filial->password and $pass != $empresa->password) {
        header("Location: index.php?erro=2");
    } else {
        if ($filial <> NULL) {
		session_start();
        $_SESSION['filial_id'] = $filial->id;
        header("Location: index_filial.php?filial_id=$filial->id");
		}
		else {
		session_start();
        $_SESSION['empresa_id'] = $empresa->id;
        header("Location: index_empresa.php?empresa_id=$empresa->id");
		}
    }    
}
else {
    header("Location: index.php?erro=3");
}
?>