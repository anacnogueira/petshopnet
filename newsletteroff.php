<?
  $title = "Cancelamento de newsletter";
  require_once("lib/configs.php");
  require_once("lib/sessao.php");
  $clientes_id = $_GET["cod"];

  if(!empty($clientes_id) and isset($_POST["btn_confirm"])){
   $sql = "UPDATE clientes SET clientes_newsletter = 0 WHERE clientes_id = '".$clientes_id."'";
   $result = $conn->sql($sql);
  }
  
  require_once("topo.php");
  require_once("login_topo.php");
	require_once("busca.php");
	//require_once("categorias.php");
	//require_once("parceiros.php");
?>
  <!-- Cancelamento de newsletter -->

  <div id="conteudo" class='interna'>
    <h1>Cancelameto de recebimento de newsletter</h4>
     <? if(!isset($_POST["btn_cancel"]) && !isset($_POST["btn_confirm"])) {?>
     <p>Voc� deseja realmente cancelar o envio  de e-mails de produtos da PetShopNet?</p>
     <form id='frm_cancel' action='newsletteroff.php' method='post'>
       <input name='btn_cancel' type='submit' value='Cancelar' />
       <input name='btn_confirm' type='submit' value='Confirmar' />
       <input name='cod' type='hidden' value='<?=$clientes_id  ?>' />
     </form>
     <? } else if(isset($_POST["btn_confirm"])) { ?>
      <p>Envio de e-mail cancelado. Voc� pode voltar a receber e-mail
      a qualquer momento que desejar clicando em Meu Cadastro >> Assinar/Cancelar Newsletter
      e selecionar a op��o de envio.<br />
      <a href='http://www.petshopnet.com.br/'>Ir para loja.</a></p>
     <? } else if(isset($_POST["btn_cancel"])) { ?>
      <p>Cancelamento de envio de e-mail n�o efetuado.<br />
      <a href='http://www.petshopnet.com.br/'>Ir para loja.</a></p>
     <? } ?>
  </div>
<? require_once("rodape.php"); ?>

