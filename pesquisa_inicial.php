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


<div class="row">
    <div class="col-md-12 col-centered results-table" style="top: 20px">
        <br>
        <text style="font-weight: bold">Empresa</text>
        <text style="font-weight: bold">Mostar no Mapa</text>
        <text style="font-weight: bold">Ver Opções</text>
    </div>
<?php
    $filiais = Filial::getAllByCidade($_GET['cidade']);

    // For each book print each attribute in one column of the table
    foreach ($filiais as $filial):
?>
    <div class="col-md-12 col-centered results-table">
        <br>
        <td><?php echo $filial->username; ?></td>
        <td><a href="pesquisa_inicial.php?lat=<?php echo $filial->lat; ?>&long=<?php echo $filial->long; ?>">Mostrar no mapa</a></td>
        <td><a href="pesquisa_filial.php?filial_id=<?php echo $filial->id; ?>">Mostrar todos os veiculos</a></td>
    </div>

<?php
    endforeach;
?>

</div>