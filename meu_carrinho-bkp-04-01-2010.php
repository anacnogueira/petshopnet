<?php
 $title = "Meu Carrinho";
 require_once("lib/configs.php");


 $campo   = format_array($_REQUEST);

 if(!empty($campo["acao"])){
  switch($campo["acao"]){
    case "incluir":
      fct_incluir($conn, $campo["produtos_codigo"]);
      break;
    case "excluir":
      fct_excluir($conn, $campo["produtos_codigo"]);
      break;
    case "modificar":
      fct_modificar($conn, $campo["quantidade"],$campo[]$campo["page"] );
      break;
  }
 }

 function fct_incluir($conn, $prod_cod = ""){
   if(!empty($prod_cod) and is_numeric($prod_cod)){
     $sql = "SELECT * FROM  carrinho WHERE produtos_codigo='".mysql_real_escape_string($prod_cod)."'
     AND session_id = '".session_id()."'";
     $result = $conn->sql($sql);
     $recordCount  = mysql_num_rows($result);

     if($recordCount == 0)  { //Só adiciona produto que ainda não estão no carrinho
       //Selecionar informações do produto
       $sql = "SELECT produtos_nome, produtos_preco,  promocoes_preco,data_fin, promocoes_status
       FROM produtos prod
       LEFT JOIN promocoes promo ON promo.produtos_codigo = prod.produtos_codigo
       WHERE prod.produtos_codigo='".mysql_real_escape_string($prod_cod)."'";
       $result = $conn->sql($sql);

       $recordCountProd = mysql_num_rows($result);
       $produto           = mysql_fetch_object($result);

       if($recordCountProd > 0){
        if($produto->promocoes_status== "S" and !empty($produto->promocoes_preco) and (empty($produto->data_fin)  or data_vencimento(fct_conversorData($produto->data_fin,1))))
          $preco = $produto->promocoes_preco;
        else
         $preco = $produto->produtos_preco;
       }

       //Inserir o produto do candidato
       $sql = "INSERT INTO carrinho SET
       produtos_codigo = '".mysql_real_escape_string($prod_cod)."',
       produtos_nome = '".$produto->produtos_nome."',
       produtos_preco = '".$preco."',
       produtos_quantidade = '1',
       session_id = '".session_id()."',
       date = NOW()";
       $result = $conn->sql($sql);
     }
   }
 } //FIM INCLUIR

 function fct_excluir($conn, $prod_cod = "") {
  $sql = "DELETE FROM carrinho WHERE session_id = '".mysql_real_escape_string(session_id())."'";
  if(!empty($prod_cod) and is_numeric($prod_cod))
    $sql .= " AND produtos_codigo ='".mysql_real_escape_string($prod_cod)."'";
  $conn->sql($sql);
 } //FIM EXCLUR

 function fct_modificar($conn, $arra_qtde = array(), $page = "") {
   if(is_array($arra_qtde)){
     foreach($arra_qtde as $cod => $qtde){
       if(is_numeric($cod)  and is_numeric($qtde)){
        $sql = "UPDATE carrinho SET produtos_quantidade = '".mysql_real_escape_string($qtde)."'
        WHERE  produtos_codigo = '".mysql_real_escape_string($cod)."' AND session_id = '".session_id()."'";
        $result = $conn->sql($sql);
      }
     }
   }
   if(!empty($page))
    header("location: ".$page);
 } //FIM modificar

 //Selecionar os dados do carrinho
 $sql = "SELECT c.produtos_codigo, c.produtos_nome, c.produtos_preco, c.produtos_quantidade, SUM(p.produtos_peso) as peso_total
 FROM carrinho c
 INNER JOIN produtos p ON p.produtos_codigo = c.produtos_codigo
 WHERE session_id = '".session_id()."'
 GROUP BY c.produtos_codigo";
 $result = $conn->sql($sql);
 $qtdeCarrinho = mysql_num_rows($result);
 while($linhaCarrinho = mysql_fetch_array($result))
 {
   //Verifica se o produto possui frete grátis
   $sql     = "SELECT * FROM produtos_frete WHERE produtos_frete_gratis = 'S' AND (produtos_frete_ini <= NOW()
   AND produtos_frete_fin >= NOW()) AND produtos_codigo = '".$linhaCarrinho["produtos_codigo"]."'";
   $result2 = $conn->sql($sql);

   if(mysql_num_rows($result2) == 0)
    $peso_frete += $linhaCarrinho["peso_total"] * $linhaCarrinho["produtos_quantidade"];


  if(!empty($quantidade[$linhaCarrinho['produtos_codigo']]))
	  $qtde = $quantidade[$linhaCarrinho['produtos_codigo']];
	else
	  $qtde = $linhaCarrinho['produtos_quantidade'];

  $listaCarrinho .= "<tr class='stripe'>\n";
  $listaCarrinho .= "<td>".$linhaCarrinho["produtos_nome"]."</td>\n";
  $listaCarrinho .= "<td><input name='quantidade[".ltrim($linhaCarrinho['produtos_codigo'])."]' type='text' size='3' maxlength='3' value='".$qtde."' /></td>\n";
  $listaCarrinho .= "<td><a href='meu_carrinho.php?produtos_codigo=".$linhaCarrinho["produtos_codigo"]."&amp;acao=excluir'><img src='".DIR_IMAGENS."btn_delete.png' alt='Remover' title='Remover' /></a></td>\n";
  $listaCarrinho .= "<td>".number_format($linhaCarrinho['produtos_preco'],2,",",".")."</td>\n";
  $listaCarrinho .= "<td>".number_format($linhaCarrinho['produtos_preco'] * $linhaCarrinho['produtos_quantidade'],2,",",".")."</td>\n";
  $listaCarrinho .= "</tr>\n";
  $soma_carrinho += ($linhaCarrinho['produtos_preco'] * $linhaCarrinho['produtos_quantidade']);
 }

 require_once("topo.php");
 require_once("login_topo.php");
 require_once("busca.php");
 //require_once("categorias.php");
 //require_once("parceiros.php");
?>
<!--Meu Carrinho  -->
<script type="text/javascript" src="js/jquery.numeric.pack.js"></script>
<script type='text/javascript' src='js/carrinho.js'></script>
<div id="conteudo" class="interna">
<span class='back'><a href="#" onclick="history.go(-1)"><img src="banco_imagens/btn_voltar.gif" alt="Voltar" border="0" /></a></span>

<?= progressoCompra($pageAtual) ?>
 <h1><?=$title ?></h1>
  <? if($qtdeCarrinho > 0) { ?>
    <form id="frm_carrinho" action="meu_carrinho.php?acao=modificar" method="post" >
     <input name="acao" type="hidden" value="<?=$campo["acao"] ?>" />
      <table border="0" class='tbl_carrinho' cellspacing='0'>
        <tr class='cabecalho_especial'>
          <td>DESCRI&Ccedil;&Atilde;O</td>
          <td>QTDE</td>
          <td>REMOVER</td>
		  <td>PRE&Ccedil;O UNIT&Aacute;RIO</td>
          <td>VALOR TOTAL</td>

        </tr>
        <?=$listaCarrinho ?>
        <tr class='frete'>
          <td colspan="2"><p>Digite o CEP do endereço de entrega para calcular o valor do frete</p></td>
          <td colspan="2">
            <input name="cep_destino" type="text" size="8" maxlength="8" value="<?=$cep_destino ?>" class="onlyNumbers" />
            <input name="btn_atualizar" type="submit" value="OK" />
          </td>
          <td colspan="2"><input name="valor_frete" type="text" size="10" readonly="readonly" value="<?= $valor_frete ?>" class="readonly" /></td>
        </tr>

        <tr class='total'>
          <td colspan="4"><div>TOTAL</div></td>
          <td id="somaCarrinho"><?=number_format($soma_carrinho+$valor_frete,2,",",".") ?></td>
        </tr>
      </table>
      <br />
			<table border='0' class='tbl_carrinho'>
			<tr class='atualizar'>
				<td>Para atualizar a quantidade de itens do produto do carrinho, digite a quantidade desejada do produto e clique em "Atualizar".</td>
			  <td><input name="btn_atualizar" type="image" src="banco_imagens/btn_atualizar.gif" class="noBorder" value="Atualizar Carrinho" align='right' /></td>
			 </tr></table>
			 <br /><br />
			 <div class="btns_carrinho">
      <a href="index.php"><img src="banco_imagens/btn_continuar.gif" alt="Continuar comprando" border="0" /></a>
      <a href="meu_carrinho.php?acao=excluir&amp;tipo=All"><img src="banco_imagens/btn_limpar.gif" alt="Limpar Carrinho" border="0" /></a>
      <a href="meu_carrinho.php?acao=modificar&amp;pag=fechar_pedido.php" class='envia_form'><img src="banco_imagens/btn_fechar_ped.gif" alt="Fechar pedido" border="0" /></a>
       </div>
      </form>
      <? } else {?>
      <div class="carrinho_vazio">
       <p> Seu carrinho está vazio.</p>
       <a href="index.php"><img src="banco_imagens/btn_voltar_loja.gif" alt="Voltar a loja" border="0" /></a>
      </div><br />
      <? } ?>
</div>
<? require_once("rodape.php"); ?>

