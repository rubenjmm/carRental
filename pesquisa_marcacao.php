<?php
$filiais = Filial::getAllByCidade($_GET['cidade']);

foreach ($filiais as $filial):

    $fi_id=$filial->id;
    $marcacao=Marcacao::loadByDatas($_GET['datainicio'],$_GET['$datafim'],$fi_id);

    if(!$marcacao){
        header(Var_dump("2"));
        ?>
        <tr>
            <td><?php echo $filial->username; ?></td>
        </tr>

    <?php
    }
    else
    {
        header(Var_dump("1"));
    }
endforeach;
?>
