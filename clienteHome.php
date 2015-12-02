
<?php 
include 'conexao.php';
$id = $_SESSION['secao']['usuario'];
$sql = "select  nome, email, telefone, endereco from usuarios where usuario_id = ?";
$stmt = mysqli_stmt_init($conexao);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "d", $id);
mysqli_stmt_bind_result($stmt, $nome, $email, $fone, $end);
mysqli_stmt_execute($stmt);

$usuario = null;
while (mysqli_stmt_fetch($stmt)){
	$usuario['nome'] = $nome;
	$usuario['fone'] = $fone;
	$usuario['email'] = $email;
	$usuario['end'] = $end;
	
	

}
echo $usuario['nome'];
echo $usuario['fone'];
echo $usuario['email'];
echo $usuario['end'];
?>


<h1>Sistema de Revenda de Água - CLIENTE</h1>
<h3>Olá <?php echo $usuario['nome']?>, Seja bem vindo.</h3>
<h2><a href="logout.php">Logout</a></h2>

<form>
<button>Pedir Agua</button><br/>


Garrafão 20L<input type="radio" name="agua" required><br/>
Garrafão 5L<input type="radio" name="agua"required><br/>
Garrafa 1,5L<input type="radio" name="agua"required><br/>

Quantidade:<input type="number" name="quant" width="3" size="3"required><br/>
Valor do pedido:<input id="vlrPedido" type="number" value="0.00" disabled="disabled"><br/>
Pagar com:<input id="vlrPagamento" type="number" required><br/>
Valor do troco <input id="vlrtroco" type="number" value="0.00" disabled="disabled"><br/>

</form>
