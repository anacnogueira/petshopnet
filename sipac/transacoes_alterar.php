<?php
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 29/04/2011                                     '
   Última Modificação: __/__/____                         '
   Página: transacoes_alterar.php		                        '
---------------------------------------------------------*/

 $form        = "frm_transacao";
 require_once("lib/configs.php");
 $titulo      = $rotinaClass->menu_rotinas_titulo("");
 $link   			= "transacoes_listar.php";
 $sels        = $_REQUEST["sels"];
 if(is_array($sels)) $sels = $sels[0];

 $sql = "SELECT pedidos_id ,referencia,transacao_id,valor_frete,tipo_pagamento,
 status_transacao,cliente_nome,cliente_email,cliente_endereco,
 cliente_complemento,cliente_numero,cliente_bairro,cliente_cidade,
 cliente_estado,cliente_cep,cliente_telefone,
 (SELECT SUM(produto_valor) FROM transacoes_produtos prod
 WHERE prod.trans_id = tra.pedidos_id) AS valor
 FROM transacoes tra WHERE transacao_id  = '".$sels."'";

 $result = $conn->sql($sql);
 $campo = mysql_fetch_array($result);
 require_once("topo.php");
 require_once("menu_lateral.php");
?>
<div id="conteudo">
  <strong>Detalhe da transação</strong>
  <table class="TableLista">
    <tr>
     <td style='width: 130px'>Código Referência:</td>
     <td><?php echo $campo["referencia"]; ?></td>
    </tr>
    <tr>
      <td>Código Transação:</td>
      <td><?php echo $campo["transacao_id"]; ?></td>
    </tr>
    <tr>
      <td>Valor:</td>
      <td><?php echo number_format($campo["valor"],2,",",""); ?></td>
    </tr>
    <tr>
      <td>Frete:</td>
      <td><?php echo number_format($campo["valor_frete"],2,",",""); ?></td>
    </tr>
    <tr>
      <td>Total:</td>
      <td><?php echo number_format($campo["valor"] + $campo["valor_frete"],2,",",""); ?></td>
    </tr>
    <tr>
      <td>Forma de pagamento:</td>
      <td><?php echo $campo["tipo_pagamento"]; ?></td>
    </tr>
    <tr>
      <td>Status transação:</td>
      <td><?php echo $campo["status_transacao"]; ?></td>
    </tr>
  </table>
  <strong>Comprador</strong>
  <table class="TableLista">
    <tr>
      <td>Nome:</td>
      <td><?php echo $campo["cliente_nome"]; ?></td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><?php echo $campo["cliente_email"]; ?></td>
    </tr>
    <tr>
      <td>Telefone:</td>
      <td><?php echo $campo["cliente_telefone"]; ?></td>
    </tr>
    <tr>
     <td>Endereço:</td>
     <td>
      <?php echo $campo["cliente_endereco"]; ?>,<?php echo $campo["cliente_numero"]; ?>
      <?php echo $campo["cliente_complemento"]; ?><br />
      <?php echo $campo["cliente_bairro"]; ?><br />
      <?php echo $campo["cliente_cidade"]; ?> - <?php echo $campo["cliente_estado"]; ?>
     </td>
    </tr>
  </table>
  <strong>Itens do Pedido</strong>

  <table class="TableLista">
    <tr>
      <th>ID</th>
      <th>Produto</th>
      <th>Quantidade</th>
      <th>Valor(R$)</th>
      <th>Total</th>
    </tr>
    <?php
      $sql = "SELECT tra.produto_codigo,prod.produtos_nome,tra.produto_valor,tra.produto_qtde
      FROM transacoes_produtos tra
      INNER JOIN produtos prod ON prod.produtos_codigo = tra.produto_codigo
      WHERE   tra.trans_id 	= '".$campo["pedidos_id"]."'";

      $result = $conn->sql($sql);
      while($prod = mysql_fetch_array($result)){
    ?>
     <tr style='text-align:center'>
      <td><?php echo $prod["produto_codigo"]; ?></td>
      <td><?php echo $prod["produtos_nome"]; ?></td>
      <td><?php echo number_format($prod["produto_valor"],2,",",""); ?></td>
      <td><?php echo $prod["produto_qtde"]; ?></td>
      <td><?php echo number_format($prod["produto_valor"] * $prod["produto_qtde"],2,",",""); ?></td>
     </tr>
    <?php } ?>
    <tr style='text-align:right'>
      <td colspan='4' align='right'>Frete:</td>
      <td><?php echo number_format($campo["valor_frete"],2,",",""); ?></td>
    </tr>
    <tr style='text-align:right'>
      <td colspan='4' align='right'>Total:</td>
      <td><?php echo number_format($campo["valor"] + $campo["valor_frete"],2,",",""); ?></td>
    </tr>
  </table>
  <strong>Endereço de entrega</strong>
  <table class="TableLista">
    <tr>
      <td style='width: 130px'>CEP:</td>
      <td><?php echo $campo["cliente_cep"]; ?></td>
    </tr>
    <tr>
      <td>Endereço:</td>
      <td><?php echo $campo["cliente_endereco"]; ?></td>
    </tr>
    <tr>
      <td>Número:</td>
      <td><?php echo $campo["cliente_numero"]; ?></td>
    </tr>
    <tr>
      <td>Cidade:</td>
      <td><?php echo $campo["cliente_cidade"]; ?></td>
    </tr>
    <tr>
      <td>Estado:</td>
      <td><?php echo $campo["cliente_estado"]; ?></td>
    </tr>
  </table>
</div>
<? require_once("rodape.php") ?>

