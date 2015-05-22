<?php

require_once "utils/head.php";
require_once "utils/navbar.php";
require_once "utils/slider.php";
require_once "classes/veiculo.php";

session_start();

if(isset($_GET["action"]) and $_GET["action"]=="delete" and isset($_GET["veiculo_id"])) {
	Veiculo::delete($_GET["veiculo_id"]);
}

if(isset($_POST['nome']) and isset($_POST['morada']) and isset($_POST['username']) and isset($_POST['password']) and isset($_POST['nif']) and isset($_POST['telefone']) and isset($_POST['telemovel']) and isset($_POST['email'])) {
	$veiculo = new Veiculo(NULL, $_POST['marca'], $_POST['morada'], $_POST['username'], $_POST['password'], $_POST['nif'], $_POST['telefone'], $_POST['telemovel'], $_POST['email'], $_session['empresa_id']);
	$veiculo->insert();
}
?>


<table>
<?php

$veiculos = Veiculo::getAllByFilial($_GET['filial_id']);
foreach ($veiculos as $veiculo):?>
    <tr>
		<td><?php echo $veiculo->marca; ?></td>
		<td><?php echo $veiculo->modelo; ?></td>
		<td><?php echo $veiculo->matricula; ?></td>
		<td><?php echo $veiculo->cor; ?></td>
		<td><?php echo $veiculo->kms; ?></td>
		<td><?php echo $veiculo->tipo_id; ?></td>
		<td><a href="index_filial.php?filial_id=<?php echo $_SESSION['filial_id']; ?>&action=delete&veiculo_id=<?php echo $veiculo->id; ?>">Eliminar</td>
	</tr>
<?php endforeach;?>
</table>