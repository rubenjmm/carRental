<head>
<title>Login</title>
</head>

<body>
<h2>Autenticação</h2>

<form method="post" action="validar_login.php">
	<fieldset style="width:200px">
		<p><label for="username">Username:</label><input type="text" name="username"/> </p>
		<p><label for="password">Password:</label><input type="password" name="password"/> </p/>
		<p align="center"><input type="submit" value="Login" /> </p>
	</fieldset>
</form>

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
