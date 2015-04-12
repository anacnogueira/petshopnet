<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 16/10/2007                                     '
   Última Modificação: 15/10/2009                         '
   Página: pedidos_alterar.php	                          '
---------------------------------------------------------*/
 $form        = "frm_pedido";
 require_once("lib/configs.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("");
 $link = "pedidos_listar.php";
 $sels       = $_REQUEST["sels"];
  
  if(is_array($sels)) $sels = $sels[0];

 if(isset($_POST["btn_alterar"]))
 {
   $clientes_nome        = $_POST["clientes_nome"];
   $clientes_email       = $_POST["clientes_email"];
   $pedidos_status_id    = $_POST["pedidos_status_id"];
   $comentarios          = $_POST["comentarios"];
   $cliente_notificado   = $_POST["cliente_notificado"];
   $cliente_coment       = $_POST["cliente_coment"];

  //Modificar o status do pedido
  $sql = "UPDATE pedidos SET
  pedidos_status_id 	= '$pedidos_status_id'
  WHERE pedidos_id='$sels'";
  $result = $conn->sql($sql);
  $mensagem_log = "Status do pedido alterado com sucesso($sels).";

  //Seleciona o status do pedido
  $SQL = "SELECT pedidos_status_nome FROM pedidos_status
  WHERE pedidos_status_id='$pedidos_status_id'";
  $result = $conn->sql($SQL);
  while($linha = mysql_fetch_array($result))
    $pedidos_status_nome = $linha["pedidos_status_nome"];

  //Seleciona os produtos do cliente
  $sql = "SELECT DISTINCT pro.produtos_nome, ped.produtos_quantidade,pro.produtos_codigo
  FROM pedidos_produtos as ped
  INNER JOIN produtos as pro ON pro.produtos_codigo = ped.produtos_codigo
   WHERE pedidos_id='$sels'";
  $result = $conn->sql($sql);
  
  $listaProdutos = "<table border='1'>";
  $listaProdutos .= " <tr>";
  $listaProdutos .= "   <td>Produto</td>";
  $listaProdutos .= "   <td>Quantidade</td>";
  $listaProdutos .= " </tr>";
  
  while($linha = mysql_fetch_array($result))
  {
    $listaProdutos .="<tr>\n";
    $listaProdutos .="<td>".$linha["produtos_nome"]." - ".$linha["produtos_modelo"]."</td>\n";
    $listaProdutos .="<td>".$linha["produtos_quantidade"]."</td>\n";
    $listaProdutos .="</tr>\n";
    
    
    if($pedidos_status_id == 3) //Produto enviado
    {
      //Se o status for enviado retirar a quatidade produtos encontrados da tabela de produtos
      $sql = "UPDATE produtos SET produtos_quantidade = produtos_quantidade - ".$linha["produtos_quantidade"]." WHERE produtos_codigo = '".$linha["produtos_codigo"]."'";
      $result2 = $conn->sql($sql); 
      
    }
     
  }
  $listaProdutos .= "</table>\n";

  //Enviar e-mail para o cliente caso ele precise ser notificado
  if($cliente_notificado == 1)
  {
     $from    ='no-reply@'.str_replace("http://www.","",URL);
     $to      = $clientes_email;
     $subject = "Pedido $pedidos_status_nome - $sels - ".EMPRESA;
     $msg     = "$clientes_nome, ";
     $msg    .= " Obrigado por escolher ".EMPRESA." para a sua compra";
     $msg    .= "<p>Seu pedido de número $sels está com status $pedido_status_nome</p>";
     $msg    .= " O(s) item(ns) que compõe(m) seu pedido são:";
     $msg    .= $listaProdutos;
     if($cliente_coment == 1)
     $msg    .= $comentarios;
     fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg);
  }
  
  //Inserir no histórico
  $sql = "INSERT INTO pedidos_status_historico SET
  pedidos_id = '$sels',
  pedidos_status_id = '$pedidos_status_id',
  data_adicionado = NOW(),
  cliente_notificado = '$cliente_notificado',
  comentarios = '$comentarios'";
  $result = $conn->sql($sql);
  
  $mensagem_log = "<br />Status do pedido cadastrado com sucesso($sels).";
  createLog('',$pageName,'',$mensagem_log);
  header("location: $link");
 }
 else
 {
	//Selecionar dados do cliente
  $sql = "SELECT CONCAT(cli.clientes_nome,' ',cli.clientes_sobrenome) as clientes_nome, clientes_telefone,
  clientes_celular, clientes_email, clientes_logradouro, clientes_numero, clientes_complemento, clientes_bairro,
  clientes_cidade, clientes_uf, clientes_cep, pedidos_status_id, fp.formas_pagamento_desc, fp.formas_pagamento_id, pedido_frete
  FROM pedidos pe
  INNER JOIN clientes cli ON pe.clientes_id = cli.clientes_id
  INNER JOIN clientes_end ce ON ce.clientes_end_id = pe.clientes_end_id
  INNER JOIN formas_pagamento fp ON fp.formas_pagamento_id =   pe.formas_pagamento_id
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

  //Produtos do pedido
  $sql = "SELECT pro.produtos_nome, pro.produtos_codigo, pe.produtos_preco, pe.preco_final, pe.produtos_quantidade
  FROM pedidos_produtos as pe
  INNER JOIN produtos as pro ON pro.produtos_codigo = pe.produtos_codigo
  WHERE pedidos_id='$sels'";
  //echo $sql;
  $result = $conn->sql($sql);
  while($linha = mysql_fetch_array($result))
  {
    $listaProdutos .="<tr style='text-align:center'>\n";
    $listaProdutos .="<td>".$linha["produtos_nome"]."</td>\n";
    $listaProdutos .="<td>".$linha["produtos_modelo"]."</td>\n";
    $listaProdutos .="<td>".number_format($linha["produtos_preco"],2, ',', ' ')."</td>\n";
    $listaProdutos .="<td>".$linha["produtos_quantidade"]."</td>\n";
    $listaProdutos .="<td>".number_format($linha["preco_final"],2, ',', ' ')."</td>\n";
    $listaProdutos .="</tr>\n";
    
    //Somar o subtotal
    $subtotal += $linha["preco_final"];

  }
   $total = $subtotal +($subtotal * $taxa);
   
   //Historico do status do pedido
   $sql = "SELECT pedidos_status_nome, DATE_FORMAT(data_adicionado,'%d/%m/%Y') as data_adicionado, cliente_notificado, comentarios
   FROM  pedidos_status_historico psh
   INNER JOIN pedidos_status ps  ON  ps.pedidos_status_id = psh.pedidos_status_id
   WHERE pedidos_id='$sels' ORDER BY pedidos_status_historico_id DESC";
   $result = $conn->sql($sql);
   
   while($linha = mysql_fetch_array($result))
   {
    $listaHistorico  .= "<tr>\n";
    $listaHistorico .= "<td>".$linha["data_adicionado"]."</td>\n";
    $listaHistorico .= "<td>".($linha["cliente_notificado"]==1?"Sim":"Não")."</td>\n";
    $listaHistorico .= "<td>".$linha["pedidos_status_nome"]."</td>\n";
    $listaHistorico .= "<td>".$linha["comentarios"]."</td>\n";
    $listaHistorico .= "</tr>\n";
   }
 }
 
 $SQL_status = "SELECT pedidos_status_id,pedidos_status_nome FROM pedidos_status";

 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/pedidos.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
   <strong>Informações do cliente</strong>
   <table class="TableLista">
    <tr>
     <td class='legenda' width="70">Nome:</td>
     <td><?= $clientes_nome ?></td>
    </tr>
    <tr>
     <td class='legenda'>Telefone:</td>
     <td><?= $clientes_telefone ?></td>
    </tr>
    <tr>
     <td class='legenda'>Tel. Celular:</td>
     <td><?= $clientes_celular ?></td>
    </tr>
    <tr>
     <td class='legenda'>E-mail:</td>
     <td><?=$clientes_email ?></td>
    </tr>
   </table><br />
   <strong>Endereço</strong>
    <table class="TableLista">
    	<tr>
     		<td class='legenda' width="70">Logradouro:</td>
     		<td> <?= $clientes_logradouro ?> N° <?= $clientes_numero ?></td>
    	</tr>
    		<tr>
     		<td class='legenda'>Bairro: </td>
     		<td><?= $clientes_bairro ?></td>
    	</tr>
    		<tr>
     		<td class='legenda'>CEP: </td>
     		<td><?= $clientes_cep ?></td>
    	</tr>
    	<tr>
     		<td class='legenda'>Cidade: </td>
     		<td><?= $clientes_cidade ?></td>
        <td>Estado: <?= $clientes_uf ?></td>
    	</tr>
    </table>
    <br />
    <strong>Forma de Pagamento: </strong>
    <div class="TableLista">
      <p><strong>Forma:</strong> <?= $formas_pagamento_desc ?></p>
      <? if($formas_pagamento_id == 3) { //Verificar MUP do Bradesco ?>
        <p><strong>Login: </strong> adm_mar1114</p>
        <p><strong>Senha: </strong> 83780670</p>
        <p><a href="https://mup.comercioeletronico.com.br/sepsManager/compra.asp?MerchantId=004601114&amp;lid_m=<?=ltrim($sels,0)?>&amp;" class="popup">Verificar situação do boleto </a></p>
      <? } ?>
    </div><br />
    <table class="TableLista">
      <tr class='cabecalho'>
        <td>Produto</td>
        <td>Modelo</td>
        <td>Preço(R$)</td>
        <td>Quantidade</td>
        <td>Total</td>
       </tr>
       <?=$listaProdutos ?>
    </table>
    <div style="text-align:right;">
		<strong>Subtotal: <?=number_format($subtotal,2, ',', ' ') ?><br />
     Frete <?=number_format($pedido_frete,2, ',', ' ') ?><br />
    Total: <?=number_format(($subtotal+$pedido_frete),2, ',', ' ') ?></strong><br />
    </div>
    <br />
   <strong>Status</strong>
   <table class="TableLista">
    <tr>
      <td class='legenda' width="170"><label for="pedidos_status_id">Status:</label></td>
      <td><?=fct_MontarLista($SQL_status,$pedidos_status_id,"pedidos_status_id")?></td>
    </tr>
     <tr>
      <td class='legenda' style="vertical-align:top;"><label for="comentarios">Comentário:</label></td>
			<td><textarea name="comentarios" cols="57" rows="5"></textarea></td>
		</tr>
    <tr>
      <td class='legenda'><label for="cliente_notificado">Avisar ao cliente:</label></td>
			<td><input type="checkbox" name="cliente_notificado" value="1" checked="checked" /></td>
		</tr>
		<tr>
      <td class='legenda'><label for="cliente_coment">Enviar comentário ao cliente:</label></td>
			<td><input type="checkbox" name="cliente_coment" value="1" checked="checked" /></td>
		</tr>
   </table>
   <br />
   <strong>Histórico</strong>
    <table class="TableLista">
    	<tr class='cabecalho'>
        <td>Adicionado em:</td>
        <td>Cliente Informado</td>
        <td>Status</td>
        <td>Comentários</td>
       </tr>
       <?=$listaHistorico?>
    </table>
   <br />
   <table class="TableLista">
    <tr class='BarraPag'>
      <td colspan="2">
			<input name="btn_alterar" type="submit" value="salvar" />
			<input name="sels" type="hidden" value="<?=$sels ?>" />
			<input name="clientes_nome" type="hidden" value="<?=$clientes_nome?>" />
			<input name="clientes_email" type="hidden" value="<?=$clientes_email?>" />
			</td>
     </tr>
    </table>
  </form>
</div>
<? require_once("rodape.php") ?>
