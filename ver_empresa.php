<?php
include 'classes/empresa.php';
session_start();

if (!isset($_SESSION['empresa_id'])) {
    header('Location: login.php?erro=4');
}
?>

<html>

<head>
<title></title>
</head>

<body>

<?php
  $id = $_GET["id"];
  if (isset($id)) {
    $empresa = new Empresa();
    $empresa->load($id);
  }
  if (!isset($id)) { ?>
    <h2>Erro. Funcionário não encontrado.</h2>
<?php } else { ?>

    <h1>Ficha de funcionário</h1>
    <h2>Informação Pessoal</h2>

    <?php echo $empresa->username; ?>

<?php } ?>

<a href="logout.php">Logout</a>

</body>

</html>
