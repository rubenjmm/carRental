<?php
require_once "utils/head.php";
require_once "utils/navbar.php";
require_once "utils/slider.php";
require_once 'classes/veiculo.php';

?>


<?php

$veiculos = Veiculo::getAllByFilial($_GET['filial_id']);

foreach ($veiculos as $veiculo):
?>

	<tr>
		<p><td><?php echo $veiculo->marca; ?></td>
		<td><?php echo $veiculo->modelo; ?></td>
		<td><a href="detalhes_veiculo.php?id=<?php echo $veiculo->id; ?>">Detalhes do veiculo</a></td></p>
	</tr>
<?php
endforeach;
?>