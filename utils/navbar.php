<!DOCTYPE html>
<html lang="en">

<?php
defined('ROOT') or define ('ROOT', (dirname(dirname(__FILE__)))."/");
require_once ROOT."utils/head.php";
?>

<nav class="navbar navbar-custom navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" rel="home" href="index.php" title="Car Rental">
                <img style="max-width:150px;margin:-17px;" src="img/nav_bar_logo.jpg" class="img-responsive" alt="Rent a Car">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php if(PHP_SESSION_ACTIVE == session_status()):?>
                <form class="navbar-form navbar-right" action="logout.php">
                    <input type="submit" class="btn btn-custom" value="Logout">
                </form>
                <form  class="navbar-form navbar-right" action="index_empresa.php">
                    <input type="submit" class="btn btn-custom" value="My Profile">
                </form>
            <?php else: ?>
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
            <?php endif; ?>
        </div>
    </div>
</nav>
