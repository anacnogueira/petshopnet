<?
  $title = "Login";
  require_once("lib/configs.php");

  require_once("topo.php");
  require_once("login_topo.php");
	require_once("busca.php");
	//require_once("categorias.php");
	//require_once("parceiros.php");
?>
<!-- Login -->
<div id="conteudo" class="interna">
<?= progressoCompra($pageAtual) ?>
 <table class="tbl_login"  border="0">
   <tr>
   <td class="compra">
     <h1>Minha primeira compra</h1>
     <p>Se você ainda não possui uma conta, crie agora mesmo para fazer suas compras e acompanhar seus pedidos.</p>
     <h2><a href="cadastro.php?return=<?=$_GET["return"] ?>">Cadastre-se</a></h2>
   </td>
   <td>
    <h1>Já sou cliente cadastrado</h1><br />
    <form id="frm_login" action="valida_login.php" method="post">
      <label for="clientes_email">E-mail:</label><br /><input type="text" name="clientes_email" value="<?=$_SESSION["email"] ?>" size="30" /><br /><br />
      <label for="clientes_senha">Senha:</label><br /><input type="password" name="clientes_senha" size="30" /><br /><br />
      <div class="erro">&nbsp;<?= $_SESSION["msg"] ?></div>
      <input type="image" src="banco_imagens/btn_entrar.gif" class="noBorder btn" value="Continuar" /><br />
      <input name="return" type="hidden" value="<?=$_REQUEST["return"] ?>" />
      <div class='senha_esquecida'><a href="senha_esquecida.php">Esqueceu a senha? Clique aqui</a></div>
    </form>
   </td>
  </tr>
 </table>
</div>
<? require_once("rodape.php"); ?>
