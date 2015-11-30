<!-- Tela de Login -->

<?
include("cabecalho.php");
include("rodape.php");
?>
<!-- Formulário envia dados de login para validação  -->




<div class="container-login">
    <form method="post" action="valida-login.php">
        <table>
            <tr>
                <td>E-mail: </td>
                <td><input name="email" type="email" required/></td>
            </tr>
            <tr>
                <td>Senha: </td>
                <td><input name="senha" type="password" required/></td>
            </tr>
            <tr>
                <td><button type="submit">Entrar</button></td>
            </tr>
        </table>
        
    </form>
</div>
