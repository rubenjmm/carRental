<?php

session_start();

require_once "utils/head.php";
require_once "utils/navbar.php";
require_once "utils/slider.php";
require_once "classes/veiculo.php";



if(isset($_GET["action"]) and $_GET["action"]=="delete" and isset($_GET["veiculo_id"])) {
	Veiculo::delete($_GET["veiculo_id"]);
}

if(isset($_POST['marca']) and isset($_POST['modelo']) and isset($_POST['matricula']) and isset($_POST['cor']) and isset($_POST['kms'])) {
	$veiculo = new Veiculo(NULL, $_POST['marca'], $_POST['modelo'], $_POST['matricula'], $_POST['cor'], $_POST['kms'], $_POST['tipo_id'], $_SESSION['filial_id']);
	$veiculo->insert();
}
?>


<table>
	<tr>
		<th>Marca</th>
		<th>Modelo</th>
		<th>Matricula</th>
	</tr>
<?php

$veiculos = Veiculo::getAllByFilial($_GET['filial_id']);
foreach ($veiculos as $veiculo):?>
    <tr>
		<td><?php echo $veiculo->marca; ?></td>
		<td><?php echo $veiculo->modelo; ?></td>
		<td><?php echo $veiculo->matricula; ?></td>
		<td><a href="detalhes_veiculo.php?id=<?php echo $veiculo->id; ?>">Ver Detalhes</td>
		<td><a href="index_filial.php?filial_id=<?php echo $_SESSION['filial_id']; ?>&action=delete&veiculo_id=<?php echo $veiculo->id; ?>">Eliminar</td>
	</tr>
<?php endforeach;?>
</table>

<form method="post" action="index_filial.php?filial_id=<?php echo $_SESSION['filial_id']; ?>">
    <fieldset style="width:200px">
        <p><label for="marca">Marca:</label><input type="text" name="marca"/> </p>
		<p><label for="modelo">Modelo:</label><input type="text" name="modelo"/> </p>
		<p><label for="matricula">Matricula:</label><input type="text" name="matricula"/> </p>
        <p><label for="cor">Cor:</label><input type="text" name="cor"/> </p>
        <p><label for="kms">Kms:</label><input type="text" name="kms"/> </p>
        <p><label for="tipo_id">Tipo:</label><input type="text" name="tipo_id"/> </p>
        <p align="center"><input type="submit" value="Adicionar"/></p>
    </fieldset>
</form>