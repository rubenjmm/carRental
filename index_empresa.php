<?php

session_start();

require_once "utils/head.php";
require_once "utils/navbar.php";
require_once "utils/slider.php";
require_once "classes/filial.php";


if(isset($_GET["action"]) and $_GET["action"]=="delete" and isset($_GET["filial_id"])) {
	Filial::delete($_GET["filial_id"]);
}

if(isset($_POST['nome']) and isset($_POST['morada']) and isset($_POST['username']) and isset($_POST['password']) and isset($_POST['telefone']) and isset($_POST['telemovel']) and isset($_POST['email'])) {
	$filial = new Filial(NULL, $_POST['nome'], $_POST['morada'], $_POST['username'], $_POST['password'], $_POST['telefone'], $_POST['telemovel'], $_POST['email'], $_SESSION['empresa_id']);	
	$filial->insert();
}
?>

<table>
<?php
$filiais = Filial::getAllByEmpresa($_GET['empresa_id']);
foreach ($filiais as $filial):?>
    <tr>

		<td><?php echo $filial->username; ?></td>
		<td><?php echo $filial->morada; ?></td>
		<td><a href="index_empresa.php?empresa_id=<?php echo $_SESSION['empresa_id']; ?>&action=delete&filial_id=<?php echo $filial->id; ?>">Eliminar</td>
	</tr>
<?php endforeach;?>
</table>


<form method="post" action="index_empresa.php?empresa_id=<?php echo $_SESSION['empresa_id']; ?>">
    <fieldset style="width:200px">
        <p><label for="nome">Nome:</label><input type="text" name="nome"/> </p>
		<p><label for="morada">Morada:</label><input type="text" name="morada"/> </p>
		<p><label for="username">Username:</label><input type="text" name="username"/> </p>
        <p><label for="password">Password:</label><input type="password" name="password"/> </p>
        <p><label for="telefone">Telefone:</label><input type="text" name="telefone"/> </p>
        <p><label for="telemovel">Telemovel:</label><input type="text" name="telemovel"/> </p>
        <p><label for="email">E-mail:</label><input type="text" name="email"/> </p>
        <p align="center"><input type="submit" value="Adicionar"/></p>
    </fieldset>
</form>