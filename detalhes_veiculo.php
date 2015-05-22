<?php
require_once "utils/head.php";
require_once "utils/navbar.php";
require_once "utils/slider.php";
	require_once 'classes/veiculo.php';

	
?>

<?php
	$veiculos=Veiculo::getDetails($_GET['id']);
	
	foreach ($veiculos as $veiculo):
?>
	<tr>
		<p><td> Marca: </td><td/><?php echo $veiculo->marca; ?></td></p>
		<p><td> Modelo: </td><td><?php echo $veiculo->modelo; ?></td></p>
		<p><td> Matricula: </td><td><?php echo $veiculo->matricula; ?></td></p>
		<p><td> Cor: </td><td><?php echo $veiculo->cor; ?></td></p>
		<p><td> Kms: </td><td><?php echo $veiculo->kms; ?></td></p>
	</tr>
<?php
	endforeach;
?>
