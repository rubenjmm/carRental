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
    <link rel="stylesheet" type="text/css" href="animated_jumbo/engine/style.css" />
    <script type="text/javascript" src="animated_jumbo/engine/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

</head>

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
