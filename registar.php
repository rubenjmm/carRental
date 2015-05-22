<html>
<?php
defined('ROOT') or define ('ROOT', (dirname(__FILE__))."/");
require ROOT."utils/head.php";
require ROOT."utils/navbar.php";
?>

<body>
<div class="row" style="z-index: -1; position: fixed;right: ">
    <?php
        require ROOT."utils/slider.php";
    ?>
</div>
<div class="row" style="z-index: 0; position: relative; top: 0px; right: -25px;">
    <h2>Registo</h2>
</div>
<div class="row" style="z-index: 1;  position: relative; top: -25px;">
    <div class="col-md-6">
        <form method="post" class="form-style-10" action="registar_empresa.php">
            <h3>Empresa</h3>
            <p><input type="text" name="nome" placeholder="Nome"/> </p>
            <p><input placeholder="Password" type="password" name="password"/> </p>
            <p><input placeholder="Username" type="text" name="username"/> </p>
            <p><input type="text" name="Morada" placeholder="Morada"/> </p>
            <p><input type="text" name="nif" placeholder="nif"/> </p>
            <p><input type="text" name="telefone" placeholder="Telefone"/> </p>
            <p><input type="text" name="telemovel" placeholder="Telemovel"/> </p>
            <p><input type="text" name="email" placeholder="e-mail"/> </p>
            <p align="right"><input type="submit" value="Registar" /> </p>
        </form>
    </div>
    <div class="col-md-6">
        <form method="post" class="form-style-10" action="registar_cliente.php">
            <h2>Cliente</h2>
            <p><input type="text" name="nome" placeholder="Nome"/> </p>
            <p><input placeholder="Password" type="password" name="password"/> </p>
            <p><input placeholder="Username" type="text" name="username"/> </p>
            <p><input type="text" name="Morada" placeholder="Morada"/> </p>
            <p><input type="text" name="nif" placeholder="nif"/> </p>
            <p><input type="text" name="telefone" placeholder="Telefone"/> </p>
            <p><input type="text" name="telemovel" placeholder="Telemovel"/> </p>
            <p><input type="text" name="email" placeholder="e-mail"/> </p>
            <p align="right"><input type="submit" value="Registar" /> </p>
        </form>
    </div>
</div>
</body>
</html>
