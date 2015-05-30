<?php
defined('ROOT') or define ('ROOT', (dirname(__FILE__))."/");
require_once ROOT."utils/head.php";
require_once ROOT."utils/navbar.php";
require_once 'classes/filial.php';
?>

<div class="row">
	<div class="col-md-5">
	<?php
	require ROOT."utils/maps.php";
	?>
	</div>
	<div class="col-md-7">
	<a href="index.php"><input type="button" class="btn btn-custom" style="width: 569px; height: 60px; position: relative; top: 20px; left: 106px; font-size: 200%;"  value="RESERVE AGORA" ></a>
	</div>
</div>

<table style="position: relative; top: 30px;" align="center">
	<tr>
		<th>Empresa</th>
		<th>Mostar no Mapa</th>
		<th>Ver Opções</th>
	</tr>
<?php
$filiais = Filial::getAllByCidade($_GET['cidade']);

// For each book print each attribute in one column of the table
foreach ($filiais as $filial):
?>
	<tr>
		<td><?php echo $filial->username; ?></td>
		<td><a href="pesquisa_inicial.php?lat=<?php echo $filial->lat; ?>&long=<?php echo $filial->long; ?>">Mostrar no mapa</a></td>
		<td><a href="pesquisa_filial.php?filial_id=<?php echo $filial->id; ?>">Mostrar todos os veiculos</a></td>
	</tr>
<?php
endforeach;
?>
</table>