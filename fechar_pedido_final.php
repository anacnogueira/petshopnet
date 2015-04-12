<?
  $title       = "Confirmação de pagamento";
  require_once("lib/configs.php");
  require_once("lib/sessao.php");
  
  $pedidos_id  = $_POST["pedidos_id"];

  //7. Selecionar pedido
  $sql = "SELECT p.pedidos_id as pid, p.clientes_nome,p.data_compra,c.clientes_email,
  ce.clientes_end_nome, ce.clientes_logradouro, ce.clientes_numero,
  ce.clientes_complemento, ce.clientes_bairro, ce.clientes_cidade,
  ce.clientes_uf,  ce.clientes_cep, c.clientes_telefone,
  p.pedido_frete,pt.valor_total,p.formas_pagamento_id, f.formas_pagamento_desc,p.parcelas, formas_pagamento_html
  FROM pedidos p
  INNER JOIN clientes_end ce ON ce.clientes_end_id = p.clientes_end_id
  INNER JOIN clientes c ON c.clientes_id = p.clientes_id
  INNER JOIN pedido_total pt ON pt.pedidos_id = p.pedidos_id
  INNER JOIN formas_pagamento f ON f.formas_pagamento_id = p.formas_pagamento_id
  WHERE p.pedidos_id = '".mysql_real_escape_string($pedidos_id)."'";
  $result_ped = $conn->sql($sql);

  while($cliente = mysql_fetch_array($result_ped))
  {
	$pid                   = $cliente["pid"];
	$formas_pagamento_id   = $cliente["formas_pagamento_id"];
	$formas_pagamento_desc = $cliente["formas_pagamento_desc"];
	$formas_pagamento_html = $cliente["formas_pagamento_html"];
	$parcelas 			   = $cliente["parcelas"];
	$clientes_nome         = $cliente["clientes_nome"];
    $clientes_email        = $cliente["clientes_email"];
    $data_adionado         = fct_conversorData(left($cliente["data_compra"],10),1);
    $clientes_end_nome     = $cliente["clientes_end_nome"];
    $clientes_logradouro   = $cliente["clientes_logradouro"];
    $clientes_numero       = $cliente["clientes_numero"];
    $clientes_complemento  = $cliente["clientes_complemento"];
    $clientes_bairro       = $cliente["clientes_bairro"];
    $clientes_cidade       = $cliente["clientes_cidade"];
    $clientes_uf           = $cliente["clientes_uf"];
    $clientes_cep          = $cliente["clientes_cep"];
    $clientes_telefone     = $cliente["clientes_telefone"];
    $pedido_frete          = $cliente["pedido_frete"];

  }

  //8. Lista de produtos do pedido
  $sql = "SELECT pr.produtos_nome, pp.produtos_quantidade, pp.produtos_preco, pp.preco_final, valor_total
  FROM pedidos_produtos pp
  INNER JOIN produtos pr ON pr.produtos_codigo = pp.produtos_codigo
  INNER JOIN pedido_total pt ON pt.pedidos_id = pp.pedidos_id
  WHERE pp.pedidos_id = '".mysql_real_escape_string($pedidos_id)."'";
  $result = $conn->sql($sql);
  while($prod = mysql_fetch_array($result))
  {
    $listaProdutos .="<tr>";
    $listaProdutos .=" <td>".$prod["produtos_nome"]."</td>";
    $listaProdutos .=" <td>".number_format($prod["produtos_preco"],2,",",".")."</td>";
    $listaProdutos .=" <td>".$prod["produtos_quantidade"]."</td>";
    $listaProdutos .=" <td>".number_format(($prod["produtos_preco"]*$prod["produtos_quantidade"]),2,",",".")."</td>";
    $listaProdutos .="</tr>";
    $vlTotal =  $prod["valor_total"];
  }

  //9.Dados do pagamento
  $parc = (($parcelas == 1 or $parcelas == 0)?"à vista":$parcelas."x");
 	$listaPgto = "<p>Informações do pagamento ($parc no ".$formas_pagamento_desc.")</p>";
  if($formas_pagamento_id == 3)   //Pagamento com boleto bancário
  {
    $Merchantid    = trim(NUM_LOJA);
    $orderid       = trim($pedidos_id);
    $nome_servidor = "mup.comercioeletronico.com.br";
    
    $link       =   "https://". $nome_servidor. "/sepsBoleto/". $Merchantid . "/prepara_pagto.asp?merchantid=". $Merchantid . "&orderid=". $orderid;
    //Link de debug
    $link_debug = str_replace("/sepsBoleto/". $Merchantid,"/paymethods/boleto/model5dbg",$link);
    $listaPgto .= "<div class='boleto'>";
    $listaPgto .= "  	<img src='banco_imagens/boleto_bb_img.gif' alt='Boleto Bancário' /><br /><br />";
    $listaPgto .= "  	<p><a href='".$link."' id='visualizar_boleto' class='popup'><img src='banco_imagens/btn_visualizar_boleto.gif' alt='visualizar'  border='0' /></a></p><br />";
    $listaPgto .= "  	<span class='alert'>Clique no botão acima para visualizar e imprimir o boleto</span>";
    $listaPgto .= "</div>";
 }

  require_once("topo.php");
  require_once("login_topo.php");
  require_once("busca.php");
  //require_once("categorias.php");
  //require_once("parceiros.php");

 ?>

<!-- Fechar Pedido Escolher Forma de Pgto-->
<script type="text/javascript" src="js/pagamentos.js"></script>
<div id="conteudo" class="interna">
  <?= progressoCompra($pageAtual) ?>
  <h2>Dados da Entrega</h2>
  <table class='bordaForm' style='width:100%'>
		<tr>
			<td><strong>Nome: </strong><?=$clientes_nome  ?></td>
  		<td colspan="2"><strong>Data: </strong><?=$data_adionado?></td>
		</tr>
   	<tr>
			<td><strong>Endereço: </strong><?=$clientes_logradouro ?>, <?=$clientes_numero?></td>
			<td colspan="2"><strong>Complemento: </strong> <?=$clientes_complemento?></td>
		</tr>
		<tr>
		  <td><strong>Bairro: </strong><?=$clientes_bairro?></td>
		  <td colspan="2"><strong>CEP: </strong><?=$clientes_cep?></td>
		</tr>
		<tr>
		  <td><strong>Cidade-UF: </strong><?=$clientes_cidade ?> - <?=$clientes_uf?></td>
		  <td colspan="2"><strong>Telefone: </strong><?=$clientes_telefone?></td>
		</tr>
  </table><br />
	<h2>Dados do Pedido</h2>
  <table border="0" class='tbl_pedidos' cellspacing='0'>
    <tr class='cabecalho_especial'>
      <td>Descrição </td>
		  <td>Preço Unitário</td>
		  <td>Qtde</td>
		  <td>Subtotal</td>
		</tr>
		<?= $listaProdutos ?>
		<tr class='frete'>
      <td colspan="3"><div>Custo do Serviço de entrega</div></td>
      <td><?=number_format($pedido_frete,2,",",".")?> </td>
    </tr>
		<tr class='total'>
      <td colspan="3"><div>TOTAL:</div></td>
      <td><?=number_format(($vlTotal),2,",",".") ?></td>
    </tr>
  </table>
	<span class='alert'>*Entrega da compra após a confirmação do pagamento</span><br />
  <h2>Dados do Pagamento</h2>
	<div class='detalhes_pgto'>
   <?=$listaPgto?>
  </div>
   <p>Detalhes e informações sobre sua compra já foram enviadas para <strong><?=$clientes_email ?></strong></p>
	 <p>O número do seu pedido é <strong><?=$pid?></strong>, anote-o em um lugar seguro.</p>
	 <p>Sua compra foi recebida com sucesso, agradecemos seu pedido.</p>
	 <p><strong><?= EMPRESA ?></strong></p>

  <div class="btns_carrinho">
    <a name="finalizar">&nbsp;</a><a href="index.php"><img src="banco_imagens/btn_finalizar.gif" alt="Finalizar Compra" title="Finalizar Compra" border="0" /></a>
	  <a name="imprimir">&nbsp;</a><a href="#" class='print'><img src="banco_imagens/btn_imprimir.gif" alt="Imprimir recibo" border="0" /></a>
 </div>
</div>
<? require_once("rodape.php"); ?>
