<?
session_start();
include("cabecalho.php");
include("rodape.php");
include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

//prepara uma query
$stmt = mysqli_prepare($conexao, "select nome from usuarios where email= ? and senha = ?");

//passa os parametros para a query
mysqli_stmt_bind_param($stmt, "ss", $email, $senha);

//executa a query
mysqli_stmt_execute($stmt);

//informa qual variavel recebe o valor retornado da consulta
mysqli_stmt_bind_result($stmt, $nome);

/*verifica se a consulta retornou algo
 * true se sim
 * false se erro
 * null se vazio
 */
if(mysqli_stmt_fetch($stmt)){
	//se a consulta = true, cria a sessão logado e a define como true;
	$_SESSION['logado'] = array('usuario'=> $nome, 'horaSecao'=> date("d/m/Y H:i:s"));
}

//fecha a conexao 
mysqli_stmt_close($stmt);

//direciona para index
header("Location: index.php");


?>

