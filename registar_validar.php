<?php
defined('ROOT') or define ('ROOT', (dirname(__FILE__))."/");
require "utils/head.php";
require_once "classes/empresa.php";
?>

<?php
    if(isset($_POST['nome']) and isset($_POST['password']) and isset($_POST['username']) and isset($_POST['Morada']) and isset($_POST['nif']) and isset($_POST['telefone']) and isset($_POST['telemovel']) and isset($_POST['email']))
    {
        /*if (isset($_POST['condutor']))
        {
        }
        else
        {
        }*/

        $allCo = Empresa::getAll();
        $allCoLowCase = array_map('strtolower', $allCo);

        if (in_array(strtolower($_POST['username']), $allCoLowCase)) {
            header('registar.php?erro=1');
        }

        //__construct($id = null, $nome = null, $morada = null, $username=null, $password=null, $nif=null, $telefone=null, $telemovel=null, $email=null) {
        $company = new Empresa(NULL, $_POST['nome'], $_POST['morada'], $_POST['password'], $_POST['morada'], $_POST['cidade'], $_POST['telefone'], $_POST['telemovel'], $_POST['email'], $_SESSION['empresa_id']);
        $company->insert();
    }

    else
        header('registar.php?erro=2');
?>

<?php
    require ROOT."utils/navbar.php";
?>

<meta http-equiv="refresh" content="5;url=http://www.google.com/" />
<body>
<div class="row">
    <text style="position: relative; top: 150px; font-size: 250%" align="center">Registo Completo</text><br>
    <text style="position: relative; top: 150px; font-size: 150%" align="center">Sera redirecionado para a pagina inicila dentro de 5 segundos</text>
</div>
</body>