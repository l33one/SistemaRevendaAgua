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

	$tipo = $_SESSION['secao']['tipo'];

	switch ($tipo){
		case 'C':
			//echo "cliente";
			include 'clienteHome.php';
			break;
		case 'F':
			//ECHO "Fornecedor";
			include 'homeFornecedor.php';
			break;
		
	}
	?>