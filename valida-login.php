<?
include("cabecalho.php");
include("rodape.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

echo $email . ' - ' . $senha;
?>

