<?php

require_once 'classes/filial.php';

?>


<?php
$filiais = Filial::getAllByCidade($_GET['cidade']);

// For each book print each attribute in one column of the table
foreach ($filiais as $filial):
?>
	<tr>
		<td><?php echo $filial->username; ?></td>
		<td><a href="pesquisa_filial.php?id=<?php echo $filial->id; ?>">Mostrar todos os veiculos</a></td>
	</tr>
<?php
endforeach;
?>