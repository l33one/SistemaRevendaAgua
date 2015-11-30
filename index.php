<?
//starta a seção da aplicação
session_start();

include("cabecalho.php");
include("rodape.php");

/*verifica se existe aluem logado 
 * se não, direciona para fazer o login;
 * se sim, prossegue no processamento da pagina
 */
if(!isset($_SESSION['secao']) || $_SESSION['secao']['status'] != true) header("Location: login.php");

?>

<h1>Sistema de Revenda de Água</h1>
<h3>Olá <?php echo $_SESSION['secao']['usuario'];?>, Seja bem vindo.</h3>

