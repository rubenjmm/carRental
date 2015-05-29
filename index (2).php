<?php
defined('ROOT') or define ('ROOT', (dirname(__FILE__))."/");
require_once ROOT."utils/head.php";
require_once ROOT."utils/navbar.php";
require_once ROOT."utils/slider.php";
require_once "classes/filial.php";
require_once "classes/marcacao.php";

?>



<html>
<body>
<div class="row">
    <div class="col-md-6">
        <form class="form-group" action="index.php" method="GET">
			<p>Cidade: <input type="text" name="cidade" placeholder="Cidade" ></p>
			<p>Data de levantamento: <input type ="date" name="datainicio" placeholder="dd-mm-aaaa"></p>
			<p>Data de devolucao: <input type="date" name ="datafim " placeholder="dd-mm-aaaa"></p>
            <div class="row">
                <div class="col-md-12">
                    <input type="submit"  Value="Pesquisar" />
                </div>
            </div>
        </form>
    </div>
</div>

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
		else {
			header(Var_dump("1"));
		}	
		endforeach;
?>


<?php
    if (isset($_GET["erro"])) {
        $msg_erro = "";
        switch ($_GET["erro"]) {
            case 1: 
                $msg_erro = "Erro. username inexistente.";
                break;
            case 2: 
                $msg_erro = "Erro. Password errada.";
                break;
            case 3:
                $msg_erro = "Erro. Username ou password não definidos.";
                break;
            case 4:
                $msg_erro = "Não tem permissões para aceder à página.";
                break;
        }
        if ($msg_erro != "")
            echo "<h3>$msg_erro</h3>";
    }
?>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>









