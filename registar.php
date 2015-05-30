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
<div class="row" style="z-index: 0; position: relative; right: -25px;">
    <h2>Registo</h2>
</div>
<div class="row" style="z-index: 1;  position: relative; top: -25px;">
    <div class="col-md-6">
        <form method="post" class="form-style-10">
            <h2>Condutor</h2>
            <p><input type="text" name="nome" placeholder="Nome"/></p>
            <p><input placeholder="Apelido" type="text" name="apelido"/> </p>
            <p style="text-decoration-color: #0d2e58">Data de nascimento <input type ="date" name="datanascimento" placeholder="dd-mm-aaaa"></p>
            <p><input type="text" name="ncartaconducao" placeholder="Nº Carta de Condução"/> </p>
            <p align="right"><input type="submit" value="Registar" /> </p>
        </form>
    </div>
    <div class="col-md-6">
        <form method="post" class="form-style-10" action="registar_validar.php">
            <h2>Cliente</h2>
            <div class="row">
                <div class="col-md-9 left">
                    <input type="text" name="nome" placeholder="Nome">
                </div>
                <div class="col-md-3 right">
                    <select name="tipo" >
                        <option value="Sr.">Sr.</option>
                        <option value="Sra.">Sra.</option>
                        <option value="Empresa">Co.</option>
                    </select>
                </div>
            </div>
            <p><input placeholder="Password" type="password" name="password"/> </p>
            <p><input placeholder="Username" type="text" name="username"/> </p>
            <p><input type="text" name="Morada" placeholder="Morada"/> </p>
            <p><input type="text" name="nif" placeholder="nif"/> </p>
            <p><input type="text" name="telefone" placeholder="Telefone"/> </p>
            <p><input type="text" name="telemovel" placeholder="Telemovel"/> </p>
            <p><input type="text" name="email" placeholder="e-mail"/> </p>
            <!--<p><text class="h4">Condutor? </text><input type="radio" name="condutor" value="sim" style="position: relative; left: 10px;"><text class="h5" style="position: relative; left: 15px;"> Sim </text><input type="radio" name="condutor" value="nao" style="position: relative; left: 50px;"><text class="h5" style="position: relative; left: 55px"> Não</text></p>-->
            <p align="right"><input type="submit" value="Registar" /> </p>
        </form>
    </div>
</div>
</body>

</html>
