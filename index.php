<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Car Rental</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

</head>

<body>

<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
    <div class="ws_images"><ul>
		<li><img src="data1/images/rentalcars04.jpg" alt="rental-cars-04" title="rental-cars-04" id="wows1_0"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/992by325rentalcarsv2redsedanoceanviewpremium1.jpg" alt="jquery slider plugin" title="992by325-Rental-Cars-V2-Red-Sedan-Ocean-View-PREMIUM1" id="wows1_1"/></a></li>
		<li><img src="data1/images/992by325rentalcarsv2rowofcarsmidsize1.jpg" alt="992by325-Rental-Cars-V2-Row-of-Cars-MIDSIZE1" title="992by325-Rental-Cars-V2-Row-of-Cars-MIDSIZE1" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="rental-cars-04"><span><img src="data1/tooltips/rentalcars04.jpg" alt="rental-cars-04"/>1</span></a>
		<a href="#" title="992by325-Rental-Cars-V2-Red-Sedan-Ocean-View-PREMIUM1"><span><img src="data1/tooltips/992by325rentalcarsv2redsedanoceanviewpremium1.jpg" alt="992by325-Rental-Cars-V2-Red-Sedan-Ocean-View-PREMIUM1"/>2</span></a>
		<a href="#" title="992by325-Rental-Cars-V2-Row-of-Cars-MIDSIZE1"><span><img src="data1/tooltips/992by325rentalcarsv2rowofcarsmidsize1.jpg" alt="992by325-Rental-Cars-V2-Row-of-Cars-MIDSIZE1"/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">jquery carousel</a> by WOWSlider.com v8.0</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

<nav class="navbar navbar-custom navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" rel="home" href="#" title="Car Rental">
                <img style="max-width:150px;margin:-17px;" src="img/nav_bar_logo.jpg" class="img-responsive" alt="Rent a Car">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" action="registar.php">
                <input type="submit" class="btn btn-custom" value="Registar">
            </form>
            <form class="navbar-form navbar-right" action="validar_login.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-custom">Login</button>
            </form>
        </div>
    </div>
</nav>

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