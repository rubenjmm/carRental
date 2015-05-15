<?php
require_once "utils/header.php";
require_once "utils/slider.php";
?>

<body>

<div class="row">
    <div class="col-md-12">
        <!--TODO: mandar background para traz -->
        <img src="img/background.jpg" style="position: relative;" class="img-responsive image-zindex-1" alt="background">
        <img src="img/nav_bar_logo.jpg" style="position: relative;" class="img-responsive" alt="background">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form class="form-group" action="searchRentACar.php" method="post">
            <div class="row"><input type="text" name="pais" placeholder="País" class="form-control"></div>
            <div class="row"><input type="text" name="cidade" placeholder="Cidade" class="form-control"></div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-custom">Pesquisar</button>
                </div>
            </div>
        </form>
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