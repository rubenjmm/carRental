<?php
defined('ROOT') or define ('ROOT', (dirname(__FILE__))."/");
require "utils/head.php";
require "utils/navbar.php";
?>

<body>
<div class="row fullscreen" style="z-index: -1; position: fixed;">
    <?php
    require ROOT."utils/slider.php";
    ?>
</div>
<div class="row" style="z-index: 1; position:relative;top: 200px">
    <div class="col-md-6">
		<div class="row">
			<form class="form-group form-style-10" style="background: #fa7921;"  action="pesquisa_inicial.php" method="get">
            <h3 style="text-decoration-color: #0d2e58">Pesquise por carros perto de si</h3>
            <p style="text-decoration-color: #0d2e58">Cidade <input type="text" name="cidade" placeholder="Cidade" class="form-control">
            <div class="row">
                <div class="col-md-6">
                    <p style="text-decoration-color: #0d2e58">Data de levantamento <input type ="date" name="datainicio" placeholder="dd-mm-aaaa"></p>
                </div>
                <div class="col-md-6">
                    <p style="text-decoration-color: #0d2e58">Data de devolucao <input type="date" name ="datafim " placeholder="dd-mm-aaaa"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" align="right">
                    <button type="submit" class="btn btn-custom">Pesquisar</button>
                </div>
            </div>
        </form>
		</div><!--form de pesquisa-->
		<div class="row">
			<img src="img/imagemindex.jpg" style="position: relative; top: -30px; left: 120px;" class="img-responsive">
		</div>
    </div>

    <div class="col-md-6" style="position: relative; top: 200px; right: 50px" >
        <div class="form-group" align="center">
            <h3 style="color: #00507d">Destinos mais populares</h3>
            <div class="row rcorners1">
                <a href="pesquisa_inicial.php?cidade=porto">
                <div class="col-sm-6">
                    <img src="img/porto.jpg" style="width: 130px; height: 90px; position: relative; top: 5px; left: 20px; border-radius: 2px; " class="img-responsive">
                </div>
                <div class="col-sm-6" align="center">
                    <br>
                    <h3>Porto</h3>
                </div>
				</a>
            </div><br>
            <div class="row rcorners1">
                <a href="pesquisa_inicial.php?cidade=lisboa">
                <div class="col-sm-6">
                    <img src="img/lisboa.jpg" style="width: 130px; height: 90px; position: relative; top: 5px; left: 20px; border-radius: 2px;" class="img-responsive">
                </div>
                <div class="col-sm-6">
                    <br>
                    <h3>Lisboa</h3>
                </div>
				</a>
            </div><br>
            <div class="row rcorners1" align="center">
                <a href="pesquisa_inicial.php?cidade=faro">
                <div class="col-sm-6">
                    <img src="img/faro.jpg" style="width: 130px; height: 90px; position: relative; top: 5px; left: 20px; border-radius: 2px;" class="img-responsive">
                </div>
                <div class="col-sm-6">
                    <br>
                    <h3>Faro</h3>
                </div>
				</a>
            </div><br>
            <div class="row rcorners1" align="center">
                <a href="pesquisa_inicial.php?cidade=funchal">
                <div class="col-sm-6">
                    <img src="img/funchal.jpg" style="width: 130px; height: 90px; position: relative; top: 5px; left: 20px; border-radius: 2px;" class="img-responsive">
                </div>
                <div class="col-sm-6">
                    <br>
                    <h3>Funchal</h3>
                </div>
				</a>
            </div><br>
            <br>
        </div>
    </div><!--destinos populares-->
</div>

<div class="row" style="position: relative; top: 200px;" align="center">
	<?php
	require "utils/footer.php";
	?>
</div>

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