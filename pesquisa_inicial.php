<?php
defined('ROOT') or define ('ROOT', (dirname(__FILE__))."/");
require_once ROOT."utils/head.php";
require_once ROOT."utils/navbar.php";
require_once ROOT."utils/slider.php";
require_once 'classes/filial.php';
?>


<?php
$filiais = Filial::getAllByCidade($_GET['cidade']);

// For each book print each attribute in one column of the table
foreach ($filiais as $filial):
?>
	<tr>
		<td><?php echo $filial->username; ?></td>
		<td><a href="pesquisa_filial.php?filial_id=<?php echo $filial->id; ?>">Mostrar todos os veiculos</a></td>
	</tr>
<?php
endforeach;
?>