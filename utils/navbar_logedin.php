<!DOCTYPE html>
<html lang="en">

<?php
require_once ROOT."utils/head.php";
?>

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