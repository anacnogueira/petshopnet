<?
  $title = "Inscrição de newsletter";
  require_once("lib/configs.php");
  
	$clientes_id = $_SESSION["xxClientesIDxx"];
  if(isset($_POST["btn_salvar"]))
  {
   $clientes_newsletter   		= $_POST["clientes_newsletter"];
   if(empty($clientes_newsletter)) $clientes_newsletter = 0;
   
   $sql = "UPDATE clientes SET clientes_newsletter = '".mysql_real_escape_string($clientes_newsletter)."'
    WHERE clientes_id='$clientes_id'";
    $result = $conn->sql($sql);

    $_SESSION["msg_operacao"] = "Inscrição de newsletter atualizada com sucesso.";
	header("location:meu_cadastro.php");
 }
 else
 {
  $sql    = "SELECT  clientes_newsletter FROM clientes WHERE clientes_id='$clientes_id'";
  $result = $conn->sql($sql);
  while($linha = mysql_fetch_array($result))
  {
    $clientes_newsletter    = $linha["clientes_newsletter"];
  }
 }
 require_once("topo.php");
 require_once("lib/sessao.php");
 require_once("login_topo.php");
 require_once("busca.php");
 //require_once("categorias.php");
 //require_once("parceiros.php");
?>
<!-- Inscrição de newsletter -->
<div id="conteudo" class="interna">
 <span class='back'><a href="meu_cadastro.php"><img src="banco_imagens/btn_voltar.gif" alt="Voltar" border="0" /></a></span>
  <h1><?=$title ?></h1>
  <form id="frm_news" action="<?=$pageAtual ?>" method="post">
    <div class="bordaForm">
     <p><input name="clientes_newsletter" type="checkbox" value="1" class="noBorder" <? if($clientes_newsletter == 1) {?>checked="checked" <?}?> />
        Desejo receber promoções e ofertas especiais da loja e outros anúncios promocionais.</p>
     </div>
     <br /><input name="btn_salvar" type="image" src="banco_imagens/btn_enviar.gif" class="noBorder btn" value="Enviar" />
  </form>
</div>
<? require_once("rodape.php"); ?>

