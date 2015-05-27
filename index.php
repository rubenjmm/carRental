<?php
defined('ROOT') or define ('ROOT', (dirname(__FILE__))."/");
require "utils/head.php";
require "utils/navbar.php";
?>

<body>
<div class="row" style="z-index: -1; position: fixed;">
    <?php
    require ROOT."utils/slider.php";
    ?>
</div>
<div class="row" style="z-index: 1; position:relative;top: 200px">
    <div class="col-md-6">
        <form class="form-group form-style-10" style="background: #fa7921"  action="searchRentACar.php" method="post">
            <p><h3 style="text-decoration-color: #0d2e58">Pesquise por carros perto de si</h3></p>
            <br>
            <input type="text" name="cidade" placeholder="Cidade" class="form-control">
            <br>
            <div class="row">
                <div class="col-md-12" align="right">
                    <button type="submit" class="btn btn-custom">Pesquisar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6" style="position: relative; top: 200px; right: 50px" >
        <div class="form-group" align="center">
            <h3 style="color: #00507d">Destinos mais populares</h3>
            <div class="row rcorners1">
                <div class="col-sm-6">
                    <img src="img/porto.jpg" style="max-width: 100px; max-height: 100px" class="img-responsive">
                </div>
                <div class="col-sm-6" align="center">
                    <br>
                    <h3>Porto</h3>
                </div>
            </div><br>
            <div class="row rcorners1">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <br>
                    <h3>Lisboa</h3>
                </div>
            </div><br>
            <div class="row rcorners1" align="center">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <br>
                    <h3>Faro</h3>
                </div>
            </div><br>
            <div class="row rcorners1" align="center">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <br>
                    <h3>Funchal</h3>
                </div>
            </div><br>
            <br>
        </div>
    </div>
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