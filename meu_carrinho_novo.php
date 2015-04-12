<?
 $title = "Meu Carrinho";
 require_once("lib/configs.php");

 $acao            = $_GET['acao'];
 $produtos_codigo = $_GET['produtos_codigo'];
 $quantidade      = $_POST['quantidade'];
 $cep_destino     = $_POST["cep_destino"];
 $peso_frete      = $_POST["peso_frete"];
 $valor_frete     = $_POST["valor_frete"];

  //verificar ação
  if(!empty($acao))
  {
    switch($acao)
    {
      case "incluir":
        fct_incluir();
      break;
      case "excluir":
        fct_excluir();
      break;
      case "modificar":
        fct_modificar();
      break;
    }
  }
  function fct_incluir()
 {
   global $conn, $produtos_codigo;

   if(!empty($produtos_codigo) and is_numeric($produtos_codigo))
   {
     // Tratamos a variavel de caracteres indevidos
     //$produtos_codigo = addslashes(htmlentities($produtos_codigo));
     $sql = "SELECT * FROM  carrinho WHERE produtos_codigo='".mysql_real_escape_string($produtos_codigo)."'
     AND session_id = '".session_id()."'";
     $result = $conn->sql($sql);
     $recordCount  = mysql_num_rows($result);

     if($recordCount == 0)
     {
       //Selecionar informações do produto
       $sql = "SELECT produtos_nome, produtos_preco,  promocoes_preco,data_fin, promocoes_status
       FROM produtos prod
       LEFT JOIN promocoes promo ON promo.produtos_codigo = prod.produtos_codigo
       WHERE prod.produtos_codigo='".mysql_real_escape_string($produtos_codigo)."'";
       $result = $conn->sql($sql);

	   $recordCountProd = mysql_num_rows($result);
       $linhaProduto = mysql_fetch_array($result);

      if($recordCountProd > 0)
      {

		    if($linhaProduto["promocoes_status"] == "S" and !empty($linhaProduto["promocoes_preco"]) and (empty($linhaProduto["expira_data"])  or data_vencimento(fct_conversorData($linhaProduto["expira_data"],1))))
         $produtos_preco = $linhaProduto["promocoes_preco"];
        else
         $produtos_preco = $linhaProduto["produtos_preco"];
      }


      //Inserir o produto do candidato
       $sql = "INSERT INTO carrinho SET
       produtos_codigo = '".mysql_real_escape_string($produtos_codigo)."',
       produtos_nome = '".$linhaProduto["produtos_nome"]."',
       produtos_preco = '".$produtos_preco."',
       produtos_quantidade = '1',
       session_id = '".session_id()."',
       date = NOW()";
       $result = $conn->sql($sql);
      }
    }
  }


 function fct_excluir()
 {
   global $conn, $produtos_codigo;
   if(!empty($produtos_codigo) and is_numeric($produtos_codigo))
   {
    // Tratamos a variavel de caracteres indevidos
    $produtos_id = addslashes(htmlentities($produtos_codigo));
    $sql = "SELECT * FROM  carrinho WHERE produtos_codigo='".mysql_real_escape_string($produtos_codigo)."'
    AND session_id = '".session_id()."'";
    $result = $conn->sql($sql);
    $recordCount  = mysql_num_rows($result);
    if($recordCount > 0 )
      $sql_delete    = "DELETE FROM carrinho WHERE session_id = '".session_id()."' AND 
      produtos_codigo='".mysql_real_escape_string($produtos_codigo)."'";
    }
    elseif(isset($_REQUEST["tipo"]) and $_REQUEST["tipo"] == "All")
      $sql_delete   = "DELETE FROM carrinho WHERE session_id = '".session_id()."'";

    $result = $conn->sql($sql_delete);
 }

 function fct_modificar()
 {

  global $conn, $peso_frete,$quantidade;

  if(is_array($quantidade))
  {

		foreach($quantidade as $cod => $qtd)
    {

      if(is_numeric($cod)  and is_numeric($qtd))
      {
        $sql = "UPDATE carrinho SET produtos_quantidade = '".mysql_real_escape_string($qtd)."' 
        WHERE  produtos_codigo = '".mysql_real_escape_string($cod)."' AND session_id = '".session_id()."'";
        $result = $conn->sql($sql);
      }
    }
  }
  if(isset($_GET["pag"]))
    header("location: ".$_GET["pag"]);
 }

 //Selecionar os dados do carrinho
 $sql = "SELECT c.produtos_codigo, c.produtos_nome, c.produtos_preco,
 c.produtos_quantidade, p.produtos_peso, pf.produtos_frete_gratis,
 pf.produtos_frete_ini,pf.produtos_frete_fin
 FROM carrinho c
 INNER JOIN produtos p ON p.produtos_codigo = c.produtos_codigo
 INNER JOIN  produtos_frete pf ON pf.produtos_codigo = p.produtos_codigo
 WHERE session_id = '".session_id()."'
 GROUP BY c.produtos_codigo";

 $result = $conn->sql($sql);
 $qtdeCarrinho = mysql_num_rows($result);
 $i = 0;

 while($linhaCarrinho = mysql_fetch_array($result))
 {


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
<!--script type='text/javascript' src='js/jquery.numeric.js'></script-->
<script type="text/javascript" src="js/jquery.numeric.pack.js"></script>

<script type='text/javascript' src='js/carrinho.js'></script>
<div id="conteudo" class="interna">
<span class='back'><a href="#" onclick="history.go(-1)"><img src="banco_imagens/btn_voltar.gif" alt="Voltar" border="0" /></a></span>

<?= progressoCompra($pageAtual) ?>
 <h1><?=$title ?></h1>
  <? if($qtdeCarrinho > 0) { ?>
    <form id="frm_carrinho" action="meu_carrinho.php?acao=modificar" method="post" >
     <input name="produtos" type="hidden" value="<?=$arra_produtos ?>" />
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
				<td>Para continuar a quantidade de itens do produto do carrinho, digite a quantidade desejada do produto e clique em "Atualizar".</td>
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

