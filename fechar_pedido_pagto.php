<?
  $title       = "Confirmação de pagamento";
  require_once("lib/configs.php");
  require_once("lib/sessao.php");
  include_once("lib/calculaFrete_string.php");
  
  $clientes_end_id 		  = $_POST["clientes_end_id"];
  $session_id           = (!empty($_SESSION["sessao"]) ? $_SESSION["sessao"] : session_id());

  //Informações do endereço de entrega do cliente
  $sql = "SELECT  ce.clientes_end_nome, ce.clientes_logradouro,
  ce.clientes_numero, ce.clientes_complemento, ce.clientes_cidade,
  ce.clientes_cep, ce.clientes_uf, ce.clientes_pais
  FROM clientes c
  INNER JOIN clientes_end ce ON ce.clientes_id = c.clientes_id
  WHERE c.clientes_id = '".$_SESSION["xxClientesIDxx"]."'
  AND ce.clientes_end_id = '".mysql_real_escape_string($clientes_end_id)."'";
  $result = $conn->sql($sql);

  while($end = mysql_fetch_array($result))
  {
	$endereco .= "<tr style='text-align:left'>";
	$endereco .= "<td colspan='4'><strong>".$end["clientes_end_nome"]."</strong><br />";
	$endereco .= $end["clientes_logradouro"].", ".$end["clientes_numero"];
	$endereco .= (!empty($end["clientes_complemento"])?" - ".$end["clientes_complemento"]:'');
	$endereco .= " - ".$end["clientes_bairro"]."<br />";
    $endereco .= "CEP: ".$end["clientes_cep"]." - ".strtoupper($end["clientes_cidade"])." - ".$end["clientes_uf"]."</td>";
    $endereco .= "</tr>";

   //Informações do frete
    //1. Peso dos produtos
    $sql = "SELECT SUM(p.produtos_peso) as peso_total
    FROM carrinho c
    INNER JOIN produtos p ON p.produtos_codigo = c.produtos_codigo
    INNER JOIN produtos_frete pf ON pf.produtos_codigo = p.produtos_codigo
    WHERE (produtos_frete_gratis = 'N' OR produtos_frete_ini > NOW()  OR produtos_frete_fin < NOW())
    AND session_id = '".$session_id."'";
    $result2 = $conn->sql($sql);
    if(mysql_num_rows($result2) > 0) $peso_frete = mysql_result($result2,0,0);

    $valor_frete = str_replace(",",".",calcula_frete($end["clientes_cep"],str_replace(".",",",$peso_frete)));
   }

  //Informações do produto
   $sql = "SELECT  c.produtos_codigo,c.produtos_nome,c.produtos_preco, c.produtos_quantidade,c.session_id
   FROM carrinho c WHERE session_id = '".$session_id."'";
   $result = $conn->sql($sql);

   $i = 0;
   while($pedido = mysql_fetch_array($result))
   {
     $listaCarrinho .= "<tr class='stripe'>\n";
     $listaCarrinho .= "<td>".$pedido["produtos_nome"]."</td>\n";
     $listaCarrinho .= "<td>".number_format($pedido["produtos_preco"],2,",",".")."</td>\n";
     $listaCarrinho .= "<td>".$pedido["produtos_quantidade"]."</td>\n";
     $listaCarrinho .= "<td>".number_format($pedido["produtos_preco"]*$pedido["produtos_quantidade"],2,",",".")."</td>\n";
     $listaCarrinho .= "</tr>\n";

     $soma_carrinho += $pedido["produtos_preco"] * $pedido["produtos_quantidade"];
     $i++;
   }
   $vlTotal = $soma_carrinho;

  //Selecionar formas de pagamento
  $sql = "SELECT formas_pagamento_id,formas_pagamento_desc,formas_pagamento_img
  FROM formas_pagamento WHERE formas_pagamento_status = 'S'";
  $result = $conn->sql($sql);
  if(mysql_num_rows($result) > 0)
  {
	 $listaPagamento = "<ul>\n";
	 while($pgto = mysql_fetch_array($result))
	 {
    $listaPagamento .= "<li>\n";
    $listaPagamento .= "<input name='formas_pagamento_id' type='radio' value='".$pgto["formas_pagamento_id"]."' />\n";
    if(!empty($pgto["formas_pagamento_img"]))
	   $listaPagamento .= "<img src='".DIR_PAGAMENTOS.$pgto["formas_pagamento_img"]."' alt ='".$pgto["formas_pagamento_desc"]."'/>\n";
	  else
	   $listaPagamento .= "<span>".$pgto["formas_pagamento_desc"]."</span><br />\n";


	  $listaPagamento .= "</li>";
   }
	 $listaPagamento .= "</ul>\n";
  }

  //------------------- Inicio Fechar Pedido ------------------//


  if(isset($_REQUEST["btn_enviar"]) or isset($_REQUEST["btn_enviar_x"]))
  {

    $clientes_end_id 	  = $_POST["clientes_end_id"];
    $formas_pagamento_id  = $_POST["formas_pagamento_id"];
    $valor_frete          = str_replace(",",".",$_POST["valor_frete"]);
    $vlTotal              = str_replace(",",".",$_POST["vlTotal"]);
    $parcela		      = $_POST["parcela"];

  //Verifica se o carrinho ja foi esvaziado
  	$sql = "SELECT * FROM carrinho WHERE session_id = '".$session_id."'";
    $result = $conn->sql($sql);
  	if(mysql_num_rows($result) > 0)
  	{
       $sql = "INSERT INTO pedidos SET
       clientes_id         = '".$_SESSION["xxClientesIDxx"]."',
       clientes_nome       = '".$_SESSION["xxClientesNomexx"]."',
       clientes_end_id     = '".mysql_real_escape_string($clientes_end_id)."',
       formas_pagamento_id = '".mysql_real_escape_string($formas_pagamento_id)."',
       parcelas            = '".mysql_real_escape_string($parcela)."',
       data_modificacao    = NOW(),
       data_compra         = NOW(),
       pedidos_status_id    = 1,
       pedido_frete        = '".mysql_real_escape_string(str_replace(",",".",$valor_frete))."'";
       $result = $conn->sql($sql);
       $pedidos_id = $conn->id();

       //2.1 Selecionar ordem do pedido
	     $sql = "SELECT MAX(ordem_pedido) FROM pedido_total";
	     $result = $conn->sql($sql);
         $ordem_pedido = mysql_result($result,0,0);
		 if(empty($ordem_pedido)) $ordem_pedido = 1;

	    $sql = "INSERT INTO pedido_total SET
        pedidos_id   = '".mysql_real_escape_string($pedidos_id)."',
        valor_total  = '".mysql_real_escape_string($vlTotal)."',
        ordem_pedido = '".$ordem_pedido."'";
        $result = $conn->sql($sql);

       //3. Gravar items do pedido
       // 3.1 Selecionar os produtos que estão dentro do carrinho
       $sql = "INSERT INTO pedidos_produtos (
	     pedidos_id, produtos_codigo, produtos_preco, preco_final, produtos_quantidade)
       SELECT ".mysql_real_escape_string($pedidos_id).", produtos_codigo, produtos_preco, 
       (produtos_preco * produtos_quantidade),produtos_quantidade FROM carrinho WHERE session_id = '".$session_id."'";
      //echo $sql;
      //exit;      
      $result = $conn->sql($sql);

       //4. Gravar histórico do pedido
       $sql = "INSERT INTO pedidos_status_historico SET
       pedidos_id 		  = '".mysql_real_escape_string($pedidos_id)."',
       pedidos_status_id  = '1',
       data_adicionado 	  = NOW(),
       cliente_notificado = 1";
       $result = $conn->sql($sql);

       //5. enviar notificação para cliente
       $from     =  'no-reply@'.str_replace("http://www.","",URL);
       $to       = $_SESSION["xxEmailxx"] ;
       $bcc      = "atendimento@petshopnet.com.br";
       $subject  = "Confirmação de pedido - ".right("000000".$pedidos_id,6);
       $msg     .= "<br />Número do pedido: ".right("000000".$pedidos_id,6)." <br />";
       $msg     .= "Detalhes da fatura: <br />";
       $msg     .= "Data do pedido: ".date("d/m/Y")."<br />";
       $msg     .= "Produtos<br />";
       $msg     .= "------------------------------------------------------<br />";

       $sql = "SELECT pp.preco_final,pp.produtos_preco,pp.produtos_quantidade,
	   pp.produtos_quantidade, p.produtos_nome
	   FROM pedidos_produtos pp
       INNER JOIN produtos p ON pp.produtos_codigo = p.produtos_codigo
	   WHERE pp.pedidos_id = '".mysql_real_escape_string($pedidos_id)."'";
	   $result = $conn->sql($sql);
	   while($prod = mysql_fetch_array($result))
	   {
		    $msg      .= $prod["produtos_quantidade"]." x ".$prod["produtos_nome"]." = R$ ".number_format($prod["preco_final"],2,",",".")."<br />";
		    $subTotal += $prod["preco_final"];
	   }
	   $msg	.= "Subtotal: R$ ".number_format($subTotal,2,",",".")."<br />";
       $msg	.= " Total: R$ ".number_format($vlTotal,2,",",".")."<br />";
	   $msg .= "Endereço de Entrega<br />";
	   $msg	.= "------------------------------------------------------<br />";

       //5.1 Selecionar dados de entrega
	   $sql = "SELECT ce.clientes_end_nome, ce.clientes_logradouro, ce.clientes_numero,
	   ce.clientes_complemento, ce.clientes_bairro, ce.clientes_cidade, ce.clientes_uf, ce.clientes_cep
	   FROM clientes_end ce
       INNER JOIN pedidos p ON p.clientes_end_id = ce.clientes_end_id
	   WHERE p.pedidos_id = '".mysql_real_escape_string($pedidos_id)."'";
	   $result = $conn->sql($sql);
	    while($entrega = mysql_fetch_array($result))
	     {
	 	    $msg .= $entrega["clientes_end_nome"]."<br />";
            $msg .= $entrega["clientes_logradouro"].",  ".$entrega["clientes_numero"]." - ".$entrega["clientes_bairro"]." - CEP:".$entrega["clientes_cep"]."<br />";
            $msg .= $entrega["clientes_cidade"].", ".$entrega["clientes_uf"]."<br />";
	    }
       fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg);
       
       //Enviar cópia para atendimento
       //$to = "atendimento@petshopnet.com.br";
       //fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg);

       //6. Excluir carrinho
       $sql = "DELETE FROM carrinho WHERE session_id = '".$session_id."'";
	     $result = $conn->sql($sql);

	     header("location: fechar_pedido_final.php?pedidos_id=$pedidos_id");
    }
  }
//------------------- Fim Fechar Pedido ------------------//

  require_once("topo.php");
  require_once("login_topo.php");
  require_once("busca.php");
  //require_once("categorias.php");
 //require_once("parceiros.php");
?>
<!-- Fechar Pedido Escolher Forma de Pgto-->
<script type='text/javascript' src='js/pagamentos.js'></script>
<div id="conteudo" class='interna'>
<span class='back'><a href="#" onclick="history.go(-1)"><img src="banco_imagens/btn_voltar.gif" alt="Voltar" border="0" /></a></span>
 <?= progressoCompra($pageAtual) ?>
 <form id="frm_pedido" action="<?=$pageAtual ?>" method="post">
 <input name="clientes_end_id" type="hidden" value="<?=$clientes_end_id ?>" />
  <h1> 1° Confira os dados da sua compra </h1>
  <table class='tbl_pedidos' cellspacing='0'>
    <tr class='cabecalho_especial'>
      <td style='width:400px'>PRODUTO</td>
      <td style='width:50px'>PRE&Ccedil;O Unit.</td>
      <td>QTDE</td>
      <td style='width:50px;'>SUBTOTAL</td>
    </tr>
    <?=$listaCarrinho ?>
    <tr class='frete'>
     <td colspan="3"><p>Custo do Serviço de entrega</p></td>
     <td><input name="valor_frete" type="text" value="<?= number_format($valor_frete,2,",","") ?>" readonly="readonly" class="readonly" size="6" /></td>
    </tr>

    <tr class='total'>
     <td colspan="3"><div>TOTAL</div></td>
     <td><input name="vlTotal" type="text" value="<?=number_format(($vlTotal+$valor_frete),2,",","") ?>" readonly="readonly" class="readonly" size="10" /></td>

    </tr>
    <tr style='text-align:left'>
      <td colspan="3"> ENDEREÇO DE ENTREGA </td>
      <?=$endereco?>
      <tr>
      <td>
       <a href="fechar_pedido.php?clientes_end_id=<?=$clientes_end_id?>&amp;acao=alterar"><img src='banco_imagens/btn_alterar_end.gif' alt='Alterar Endereço' border='0' /></a></td>
    </tr>
    </table>
   <br />
 <h1> 2° Escolha a forma de pagamento </h1><br />
  <div id="formas_pagamento">
   <?= $listaPagamento  ?>
  </div>
  <div id="parcelas">&nbsp;</div>
 <br clear="all" />
 <input name="btn_enviar" type="image"  src="banco_imagens/btn_fechar_ped.gif" class="noBorder btn" value="Fechar Pedido" />



  </form>
</div>
<? require_once("rodape.php"); ?>

