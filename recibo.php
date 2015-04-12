<?
 /*--------------------------------------------------------'
   PetShopNet - Recibo de Pagamento Via Boleto            '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 23/11/2009                                     '
   �ltima Modifica��o: 23/11/2009                         '
   P�gina: recibo.php			                                '
---------------------------------------------------------*/

  require_once("lib/configs.php");
  header("Content-Type: text/plain; charset=\"UTF-8\"");
  // ******************************************************************************************
  // **************  ESTA � A P�GINA MAIS IMPORTANTE DO PROCESSO DE INTEGRA��O  ***************
  //******************************************************************************************

  // ============ RECUPERA DADOS DA COMPRA =============
  
  //REM Recupera todos os dados da compra identificada pelo numOrder

  $query = "SELECT * FROM pedidos WHERE pedidos_id='" . $_REQUEST["numOrder"] . "'";
  $result = $conn->sql($query);
  $totCampos = mysql_num_fields($result);
  $compra = array();
  while($dados = mysql_fetch_array($result))
 {
    for($i = 0;$i < $totCampos;$i++)
    {
     $meta   = mysql_fetch_field($result, $i);
     $compra[$meta->name] = $dados[$i];
    }
 }

 //Valor Total do Pedido
 $sql = "SELECT valor_total FROM pedido_total WHERE pedidos_id='" . $_REQUEST["numOrder"] . "'";
 $result = $conn->sql($sql);
 if(mysql_num_rows($result) > 0)
   $ValorTotal =  mysql_result($result,0,"valor_total");

  //O numero do pedido do boleto � diferente do n�mero do pedido e deve ter no m�ximo 9 d�gitos
  //Neste exemplo, estamos colocando o n�mero do pedido como os 9 �ltimos d�gitos do n�mero de
  //pedido da loja. Voltamos a lembrar que o gerador de n�mero de pedidos deste exemplo pode gerar
  // n�meros repetidos.

  $NumeroBoleto = right($_REQUEST["numOrder"], 9);
  
  //Aqui monta a mensagem com os dados da compra que ser�o repassados para o MUP
  //Este primeiro " IF "  refere-se � constru��o dos dados do boleto banc�rio
  //Preste muita aten��o na formata��o dos dados :  Ap�s o <BEGIN_BOLETO_DESCRIPTION> N�o poder�
  //onter quebra de linha ou espa�os, o mesmo devendo acontecer com o <END_BOLETO_DESCRIPTION>, que
  //n�o poder� ser precedido de quebra de linha nem espa�os.

  //Resposta para Boleto Banc�rio e Financiamento Eletronico Bradesco
  if($_REQUEST["transId"] == "getBoleto") { ?>
  <BEGIN_ORDER_DESCRIPTION><orderid>=(<?= $_REQUEST["numOrder"] ?>)
<?
   $sql = "SELECT p.produtos_nome,pp.produtos_quantidade,p.produtos_preco
   FROM pedidos_produtos pp
   INNER JOIN produtos p ON p.produtos_codigo = pp.produtos_codigo
   WHERE pp.pedidos_id = '".  $_REQUEST["numOrder"] ."'";
   $result = $conn->sql($sql);

  while($items = mysql_fetch_object($result)) { ?>
	<descritivo>=(<?= $items->produtos_nome ?>)
	<quantidade>=(<?= $items->produtos_quantidade ?>)
	<unidade>=(pc)
	<valor>=(<?= number_format($items->produtos_preco,"2","",""); ?>)
<?   }  ?>
<? if(!empty($compra["pedido_frete"])) { ?>
 <adicional>=(frete)
	<valorAdicional>=(<?= number_format($compra["pedido_frete"],"2","",""); ?>)
<? } ?>
	<END_ORDER_DESCRIPTION>
<?
 //Monta os dados do cliente
 $sql = "SELECT * FROM clientes c
 INNER JOIN clientes_end ce ON c.clientes_id = ce.clientes_id
 INNER JOIN pedidos p ON ce.clientes_end_id = p.clientes_end_id
 WHERE p.pedidos_id ='" . $_REQUEST["numOrder"]. "'";
 $result = $conn->sql($sql);

 $cliente = mysql_fetch_object($result);
?>
	<BEGIN_BOLETO_DESCRIPTION><CEDENTE>=(PetShopNet)
	<BANCO>=(<?= BANCO ?>)
	<NUMEROAGENCIA>=(<?= NUMEROAGENCIA ?>)
	<NUMEROCONTA>=(<?= NUMEROCONTA ?>)
	<ASSINATURA>=(<?= ASSINATURA ?>)
	<DATAEMISSAO>=(<?=date('d/m/Y') ?>)
	<DATAPROCESSAMENTO>=(<?= date('d/m/Y')?>)
	<DATAVENCIMENTO>=(<?= adicionaDias(date('d/m/Y'),30) ?>)
  <NOMESACADO>=(<?= $cliente->clientes_nome." ".$cliente->clientes_sobrenome ?>)
	<ENDERECOSACADO>=(<?=$cliente->clientes_logradouro.", ".$cliente->clientes_numero?>)
	<CIDADESACADO>=(<?=$cliente->clientes_cidade?>)
	<UFSACADO>=(<?=$cliente->clientes_uf?>)
	<CEPSACADO>=(<?=$cliente->clientes_cep?>)
	<CPFSACADO>=(<?=$cliente->clientes_cpf?>)
	<NUMEROPEDIDO>=(<?= $NumeroBoleto ?>)
	<VALORDOCUMENTOFORMATADO>=(<?=number_format($ValorTotal,2,",","")?>)
	<SHOPPINGID>=(1)
	<NUMDOC>=(<?= $NumeroBoleto?>)
	<CARTEIRA>=(25)
	<ANONOSSONUMERO>=(97)<END_BOLETO_DESCRIPTION>
	<?
    //Aqui monta a mensagem com os dados da compra que ser�o repassados para o MUP
    //Este primeiro " IF "  refere-se � constru��o dos dados para TRANSFER�NCIA ENTRE CONTAS
    //Preste muita aten��o na formata��o dos dados :  Ap�s o <BEGIN_TRANSFER_DESCRIPTION> N�o poder�
    //conter quebra de linha ou espa�os, o mesmo devendo acontecer com o <END_TRANSFER_DESCRIPTION>, que
    //n�o poder� ser precedido de quebra de linha nem espa�os.
 }
?>

<?
    // Resposta para Transferencia entre Contas
    if($_REQUEST["transId"] == "getTransfer") { ?>
    <BEGIN_ORDER_DESCRIPTION><orderid>=(<?= $_REQUEST["numorder"] ?>)
<?
   $sql = "SELECT p.produtos_nome,pp.produtos_quantidade,p.produtos_preco
   FROM pedidos_produtos pp
   INNER JOIN produtos p ON pp.produtos_id = pp.produtos_id
   WHERE pp.pedidos_id = '".  $_REQUEST["numOrder"] ."'";
   $result = $conn->sql($sql);

  while($items = mysql_fetch_object($result)) { ?>
	<descritivo>=(<?= $items->produtos_nome ?>)
	<quantidade>=(<?= $items->produtos_quantidade ?>)
	<unidade>=(pc)
	<valor>=(<?= $items->produtos_preco ?>)
<?   }  ?>
	<adicional>=(frete)
	<valorAdicional>=(<?= $compra["pedido_frete"] ?>00)
	<adicional>=(manuseio)
	<valorAdicional>=(00)<END_ORDER_DESCRIPTION>
	
	<BEGIN_TRANSFER_DESCRIPTION><NUMEROAGENCIA>=(<?= NUMEROAGENCIA_TRANSFERENCIA ?>)
	<NUMEROCONTA>=(<?= NUMEROCONTA_TRANSFERENCIA ?>)
	<ASSINATURA>=(<?= ASSINATURA_TRANSFERENCIA ?>)<END_TRANSFER_DESCRIPTION>
<? } ?>

<?
  //Aqui monta a mensagem com os dados da compra que ser�o repassados para o MUP para os m�todos
  //de pagamento com CARTEIRA ELETRONICA E PAGAMENTO F�CIL
  //Preste muita aten��o na formata��o dos dados :  Ap�s o <BEGIN_ORDER_DESCRIPTION> N�o poder�
  //conter quebra de linha ou espa�os, o mesmo devendo acontecer com o <END_ORDER_DESCRIPTION>, que
  //M n�o poder� ser precedido de quebra de linha nem espa�os.
?>

<?
  //Resposta para Pagamento F�cil e Carteira Eletronica Bradesco
  if($_REQUEST["transId"] == "getOrder") { ?>
  <BEGIN_ORDER_DESCRIPTION><orderid>=(<?= $_REQUEST["numorder"] ?>)
<?
   $sql = "SELECT p.produtos_nome,pp.produtos_quantidade,p.produtos_preco
   FROM pedidos_produtos pp
   INNER JOIN produtos p ON pp.produtos_id = pp.produtos_id
   WHERE pp.pedidos_id = '".  $_REQUEST["numOrder"] ."'";
   $result = $conn->sql($sql);

  while($items = mysql_fetch_object($result)) { ?>
	<descritivo>=(<?= $items->produtos_nome ?>)
	<quantidade>=(<?= $items->produtos_quantidade ?>)
	<unidade>=(pc)
	<valor>=(<?= $items->produtos_preco ?>)
<?   }  ?>
	<adicional>=(frete)
	<valorAdicional>=(<?= $compra["pedido_frete"] ?>00)
	<adicional>=(manuseio)
	<valorAdicional>=(00)<END_ORDER_DESCRIPTION>
<? } ?>

<?
  //Resposta para o 2� acesso: Pagamento F�cil, Carteira Eletronica e Transferencia entre Contas
  if($_REQUEST["transId"] == "putAuth") {
	 if($_REQUEST["if"] == "bradesco" and $_REQUEST["cod"] == 0) {
		//ATUALIZA A BASE DE DADOS DA LOJA COM OS DADOS DO PAGAMENTO CART�ES BRADESCO
		$compra["metodoPagto"]  = "CEB";
		$compra["tipoPagto"]    = $_REQUEST["tipopagto"];
		$compra["prazo"]        = $_REQUEST["prazo"];
		$compra["numParcelas"]  = $_REQUEST["numparc"];
		$compra["valorParcela"] = $_REQUEST["valparc"];
		$compra["total"]        = $_REQUEST["valtotal"];
		$compra["dataCompra"]   = date('Y-m-d h:i:s');
		$compra["status"]       = 3;
		$compra["ccname"]       = $_REQUEST["ccname"];
		$compra["ccemail"]      = $_REQUEST["ccemail"];
		$compra["cctype"]       = $_REQUEST["cctype"];
		$Compra["assinatura"]   = $_REQUEST["assinatura"];

    $i = 1;
    $query = "UPDATE compras SET ";
    foreach($compra as $key=>$value)
    {
      $query .= $key . "=" . "'" . $value . "'" .(count($compra) != $i ? "," : "");
      $i++;
    }
    $query .= " WHERE numCompra = '". $_REQUEST["numOrder"] . "'";
    $result = mysql_query($query) or die(mysql_error());
 ?><PUT_AUTH_OK>
 <? } ?>
 <?
	if($_REQUEST["if"] == "financiamento" and $_REQUEST["cod"] == 0) {
		//ATUALIZA A BASE DE DADOS DA LOJA COM OS DADOS DO PAGAMENTO
		?><PUT_AUTH_OK>
  <? }
 }

 if($_REQUEST["transId"] == "putAuthBoleto") {
	//ATUALIZA A BASE DE DADOS DA LOJA COM OS DADOS DO PAGAMENTO
	?><PUT_AUTH_OK><?
}

if($_REQUEST["Cod"] != 0) {
	?><ERRO><? print_r($_POST) ?>
<? }  ?>
