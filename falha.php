<?
  $title       = "Falha de Pagamento";
  require_once("lib/configs.php");

  require_once("topo.php");
  require_once("lib/sessao.php");
  require_once("login_topo.php");
	require_once("busca.php");
	//require_once("categorias.php");
	//require_once("parceiros.php");
 ?>

<div id="conteudo" class="interna">

  <h2>Falha no Pagamento</h2>
  <p>Sua compra falhou</p>
	<p>Observe a descri��o do erro abaixo e caso necessite de ajuda contacte o nosso pessoal de suporte.</p>
   <table>
		<tr style='background:#ffff00'>
       <td>C�digo do erro</td>
       <td><?= $_REQUEST["cod"] ?></td>
    </tr>
		<tr style='background:#33ffff'>
      <td>Descri��o do erro</td>
      <td><?= $_REQUEST["ErrorDesc"] ?></td>
    </tr>
  	<?
				if((($_REQUEST["cod"] <=-101) and ($_REQUEST["cod"] >=-104)) or
				($_REQUEST["cod"]=-111) or ($_REEQUEST["cod"]=-125) or
				($_REQUEST["cod"]=-124)) {
		?>
			<tr style='background:#33ffff'>
        <td colspan='2'>Pagamento sujeito a confirma��o. Aguarde confirma��o ou <a href="javascript:history.back()">re-envie o pedido de pagamento</a></td>
        </tr>
    <? } if($_REQUEST["cod"] == "-5001") { ?>
				<tr><td colspan='2'>N�O FOI POSS�VEL A UTILIZA��O DE CHEQUES COMO MEIO DE PAGAMENTO.<br />
				UTILIZE OUTRO MEIO OU ENTRE EM CONTATO COM A TELECHEQUE NOS TELEFONES: <br /><br />SAC Emitentes<br />
				Grande S�o Paulo: 011 3218 0870<BR>Demais localidades Brasil: 0800 701 9131<br />
		<? } ?>
		</td></tr>
		</table>
		<hr />
		<h3>Dados da compra</h3>
		<table>
			<tr style='background:#ffff00'><td>N�mero da transa��o com o banco</td><td><?= $_REQUEST["OrderId"] ?></td></tr>
		</table><br />
		Query String: <? print_r($_GET) ?><br />
</div>
<? require_once("rodape.php"); ?>
