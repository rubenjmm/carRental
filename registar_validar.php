<?php
defined('ROOT') or define ('ROOT', (dirname(__FILE__))."/");
require "utils/head.php";
require_once "classes/empresa.php";
require_once "classes/cliente.php";
?>

<?php
    if(isset($_POST['nome']) and isset($_POST['password']) and isset($_POST['username']) and isset($_POST['morada']) and isset($_POST['telemovel']) and isset($_POST['email']) and !( empty($_POST['nome'])) and !( empty($_POST['password'])) and !( empty($_POST['username'])) and !( empty($_POST['morada'])) and !( empty($_POST['telemovel'])) and !( empty($_POST['email']))):
    {
        if (($_POST['tipo'] == "Sr.") || ($_POST['tipo'] == "Sra.")):
        {
            $allCli = Cliente::getAllUsernames();
            $allCliLowCase = array_map('strtolower', $allCli);
            if (in_array(strtolower($_POST['username']), $allCliLowCase)) {
                unset($_POST);
                header("Location: registar.php?erro=1");
                exit;
            }

            //__construct($id = null, $nome = null, $titulo = null, $morada = null, $username = null, $password = null, $telemovel=null, $email=null) {
            $cliente= new Cliente(NULL, $_POST['nome'], $_POST['tipo'] ,$_POST['morada'], $_POST['username'], md5($_POST['password']), $_POST['telemovel'], $_POST['email']);
            $cliente->insert();

            unset($_POST);
            $ok = 1;
        }
        elseif (($_POST['tipo'] == "Empresa") and isset($_POST['telefone']) and isset($_POST['nif']) and !(empty($_POST['telefone'])) and !(empty($_POST['nif']))):
        {
            $allCo = Empresa::getAllUsernames();
            $allCoLowCase = array_map('strtolower', $allCo);

            if (in_array(strtolower($_POST['username']), $allCoLowCase)) {
                unset($_POST);
                header("Location: registar.php?erro=1");
                exit;
            }

            //__construct($id = null, $nome = null, $morada = null, $username=null, $password=null, $nif=null, $telefone=null, $telemovel=null, $email=null) {
            $company = new Empresa(NULL, $_POST['nome'], $_POST['morada'], $_POST['username'], md5($_POST['password']), $_POST['nif'], $_POST['telefone'], $_POST['telemovel'], $_POST['email']);
            $company->insert();

            unset($_POST);
            $ok = 1;
        }endif;
    }
    else:
    {
        unset($_POST);
        header("Location: registar.php?erro=2");
        exit;
    }
    endif;

    unset($_POST);

    if ($ok == 1):
    {
        require ROOT."utils/navbar.php";
        ?>
            <meta http-equiv="refresh" content="5; url=index.php" />

            <body>
                <div class="row fullscreen" style="z-index: -1; position: fixed;">
                    <?php
                        require ROOT."utils/slider.php";
                    ?>
                </div>
                <div class="row">
                    <text style="font-size: 250%" align="center">Registo Completo</text><br>
                    <text style="font-size: 150%" align="center">Sera redirecionado para a pagina inicila dentro de 5 segundos</text>
                    <a href="index.php">(clique aqui se não for redirecionado)</a>
                </div>
            </body>
            </html>
            <?php
        $ok = 0;
    } endif;

?>