<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 16/10/2007                                     '
   Última Modificação: 15/10/2009                         '
   Página: pedidos_fatura.php		                          '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $sels = $_REQUEST["sels"];
  
 if(is_array($sels)) $sels = $sels[0];
 
 $sql = "SELECT pe.pedidos_id,CONCAT(cli.clientes_nome,' ',cli.clientes_sobrenome) cliente_nome,clientes_end_nome, clientes_logradouro,clientes_numero,
 clientes_bairro, clientes_cep, clientes_cidade, clientes_uf, clientes_email,DATE_FORMAT(data_compra,'%d/%m/%Y') as data_compra,
 formas_pagamento_desc
 FROM  pedidos pe
 INNER JOIN clientes cli ON cli.clientes_id = pe.clientes_id
 INNER JOIN clientes_end ce ON ce.clientes_end_id = pe.clientes_end_id
 INNER JOIN formas_pagamento fp ON fp.formas_pagamento_id = pe.formas_pagamento_id
 WHERE pe.pedidos_id = '$sels'";
 $result = $conn->sql($sql);
 $totCampos = mysql_num_fields($result);

 while($dados = mysql_fetch_array($result))
 {
   for($i = 0;$i < $totCampos;$i++)
   {
     $meta   = mysql_fetch_field($result, $i);
     $campo  =  $meta->name;
     $$campo = $dados[$i];
   }
 }
 
 //Lista os produtos do pedido
 $sql = "SELECT DISTINCT pro.produtos_nome, ped.produtos_modelo, ped.produtos_preco,
 ped.preco_final, ped.produtos_quantidade,p.pedido_frete
 FROM pedidos_produtos as ped
 INNER JOIN pedidos as p ON p.pedidos_id = p.pedidos_id
 INNER JOIN produtos as pro ON pro.produtos_codigo = ped.produtos_codigo
 WHERE ped.pedidos_id='$sels'";
  $result = $conn->sql($sql);
  while($linha = mysql_fetch_array($result))
  {
    $listaProdutos .="<tr>\n";
    $listaProdutos .="<td>".$linha["produtos_nome"]."</td>\n";
    $listaProdutos .="<td>".number_format($linha["produtos_preco"],2,",",".")."</td>\n";
    $listaProdutos .="<td>".number_format($linha["preco_final"],2,",",".")."</td>\n";
    $listaProdutos .="</tr>\n";

    //Somar o subtotal
    $subtotal += $linha["preco_final"];
    $frete     = $linha["pedido_frete"];

  }
   $total = $subtotal + $frete;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::ADMIN - Fatura::</title>
<link href='templates/sipac.css' rel='stylesheet' type='text/css' />
<script type='text/javascript' src='js/funcoes.js'></script>
</head>
<body class="guia">

<div class="logo_guia">
<img src="<?=LOGO ?>" class="logo" alt="<?=EMPRESA ?>" />
<?= ENDERECO?><br />
<?= BAIRRO ?><br />
<?= CIDADE ?> - <?= UF ?><br />
<?=CEP ?><br />
<?= TELEFONE ?>
</div>
<div class="guia_guia">
<h1>Fatura</h1>
N°: <?=$pedidos_id ?><br />
Data: <?=$data_compra ?>
</div>
<div class="vendido_guia">
<p><strong>Vendido para:</strong></p>
<?=$cliente_nome ?><br />
<?=$clientes_logradouro ?>, <?=$clientes_numero ?>	<br />
<?=$clientes_bairro ?> <br />
<?=$clientes_cep ?><br />
<?=$clientes_cidade ?> - <?=$clientes_uf ?> <br />
<?=$clientes_email ?><br />
</div>
<div class="entrega_guia">
<p><strong>Entregue para:</strong></p>
<?=$clientes_end_nome ?><br />
<?=$clientes_logradouro ?>, <?=$clientes_numero ?>	<br />
<?=$clientes_bairro ?> <br />
<?=$clientes_cep ?><br />
<?=$clientes_cidade ?> - <?=$clientes_uf ?> <br />
</div>
<div class="pagamento_guia">
<strong>Forma de Pagamento: </strong> <?=$formas_pagamento_desc ?>
<table class="TableLista" style="width:100%">
  <tr class="cabecalho">
    <td>Produto</td>
    <td>Preço</td>
    <td>Total</td>
  </tr>
  <?= $listaProdutos ?>
</table>
<div class="total_guia">
SubTotal: R$<?=number_format($subtotal,2,",",".")?><br />
Frete: R$<?=number_format($frete,2,",",".")?><br />
Total: R$<?=number_format($total,2,",",".") ?><br />
</div>
</div>
</body>
<? $conn->fechar(); ?>
