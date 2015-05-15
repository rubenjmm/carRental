<head>
<title>Registo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
<h2>Registo</h2>
<div class="row">
    <div class="col-md-6">
        <form method="post" action="registar_empresa.php">
            <fieldset style="width:200px">
                <p><label for="username">Username:</label><input type="text" name="username"/> </p>
                <p><label for="password">Password:</label><input type="password" name="password"/> </p>
                <p><label for="nome">Nome:</label><input type="text" name="nome"/> </p>
                <p><label for="morada">Morada:</label><input type="text" name="Morada"/> </p>
                <p><label for="nif">nif:</label><input type="text" name="nif"/> </p>
                <p><label for="telefone">Telefone:</label><input type="text" name="telefone"/> </p>
                <p><label for="telemovel">Telemovel:</label><input type="text" name="telemovel"/> </p>
                <p><label for="email">E-mail:</label><input type="text" name="email"/> </p>
                <p align="center"><input type="submit" value="Registar" /> </p>
            </fieldset>
        </form>
    </div>
    <div class="col-md-6">
        <form method="post" action="registar_cliente.php">
            <fieldset style="width:200px">
                <p><label for="username">Username:</label><input type="text" name="username"/> </p>
                <p><label for="password">Password:</label><input type="password" name="password"/> </p>
                <p><label for="nome">Nome:</label><input type="text" name="nome"/></p>
                <p><label for="titulo">Titulo:</label><input type="text" name="titulo"/> </p>
                <p><label for="morada">Morada:</label><input type="text" name="Morada"/> </p>
                <p><label for="nif">nif:</label><input type="text" name="nif"/> </p>
                <p><label for="telemovel">Telemovel:</label><input type="text" name="telemovel"/> </p>
                <p><label for="email">E-mail:</label><input type="text" name="email"/> </p>
                <p align="center"><input type="submit" value="Registar" /> </p>
            </fieldset>
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

</body>


</html>
