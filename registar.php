<html>
<?php
defined('ROOT') or define ('ROOT', (dirname(__FILE__))."/");
require ROOT."utils/head.php";
require ROOT."utils/navbar.php";
?>


<title>Registo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
<h2>Registo</h2>
<div class="row">
    <div class="col-md-6">
        <form method="post" class="form-style-10" action="registar_empresa.php">
            <h3>Empresa</h3>
            <p><input type="text" name="nome" placeholder="Nome"/> </p>
            <input placeholder="Password" type="password" name="password"/> </p>
            <input placeholder="Username" type="text" name="username"/> </p>
            <input type="text" name="Morada" placeholder="Morada"/> </p>
            <input type="text" name="nif" placeholder="nif"/> </p>
            <input type="text" name="telefone" placeholder="Telefone"/> </p>
            <input type="text" name="telemovel" placeholder="Telemovel"/> </p>
            <input type="text" name="email" placeholder="e-mail"/> </p>
            <p align="right"><input type="submit" value="Registar" /> </p>
        </form>
    </div>
    <div class="col-md-6">
        <form method="post" class="form-style-10" action="registar_cliente.php">
            <input type="text" name="nome" placeholder="Nome"/> </p>
            <input placeholder="Password" type="password" name="password"/> </p>
            <input placeholder="Username" type="text" name="username"/> </p>
            <input type="text" name="Morada" placeholder="Morada"/> </p>
            <input type="text" name="nif" placeholder="nif"/> </p>
            <input type="text" name="telefone" placeholder="Telefone"/> </p>
            <input type="text" name="telemovel" placeholder="Telemovel"/> </p>
            <input type="text" name="email" placeholder="e-mail"/> </p>
            <p align="right"><input type="submit" value="Registar" /> </p>
        </form>
    </div>
</div>


</body>
</html>
