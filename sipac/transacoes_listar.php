<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 26/04/2011                                     '
   Última Modificação: __/__/____                         '
   Página: transacoes_listar.php		                        '
---------------------------------------------------------*/

 $form        = "frm_transacao";
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo      = $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub     = $rotinaClass->cod_modulo();
 
//Pegar variaveis de Filtro
 $data_de			    = fct_conversorData($_REQUEST["data_de"],2);
 $data_ate	      = fct_conversorData($_REQUEST["data_ate"],2);
 $formas_pgto	    = $_REQUEST["formas_pgto"];
 $status          = $_REQUEST["status"];
 $nome            = $_REQUEST["nome"];
 $email           = $_REQUEST["email"];
 $referencia      = $_REQUEST["referencia"];
 $qtde					  = $_REQUEST["qtde"];
 $order					  = $_REQUEST["order"];
 $ordenacaoCampo  = $_REQUEST["ordenacaocampo"];

 if($order == ""){
  $data_de     = $_COOKIE["data_de$cod_sub"];
  $data_ate = $_COOKIE["data_ate$cod_sub"];
  $formas_pgto   = $_COOKIE["formas_pgto$cod_sub"];
  $status	 = $_COOKIE["status$cod_sub"];
  $nome = $_COOKIE["nome$cod_sub"];
  $email = $_COOKIE["email$cod_sub"];
  $referencia = $_COOKIE["referencia$cod_sub"];
	$qtde				       = $_COOKIE["cqtde$cod_sub"];
  $order				     = $_COOKIE["corder$cod_sub"];
  $ordenacaoCampo	   = $_COOKIE["cordenacaocampo$cod_sub"];
 }
 else
 {
   //Setar as cookies
 	 setcookie("data_de$cod_sub",$data_de);
 	 setcookie("data_ate$cod_sub",$data_ate);
 	 setcookie("formas_pgto$cod_sub",$formas_pgto);
   //setcookie("status$cod_sub",$status);
   setcookie("nome$cod_cub",$nome);
   setcookie("email$cod_sub",$email);
   setcookie("referencia$cod_sub",$referencia);
   setcookie("cqtde$cod_sub",$qtde);
   setcookie("corder$cod_sub",$order);
   setcookie("cordenacaocampo$cod_sub",$ordenacaoCampo);
 }

 $arraCampoValor	= array("data_transacao","tipo_pagamento","cliente_nome","status_transacao","valor_total");
 $arraQtde				= array(10, 20, 30, 50, 100);

 // Validação das Variaveis '
 if($qtde=="")						$qtde					    = 1;
 if($ordenacaoCampo=="")	$ordenacaoCampo		= 0;

 if(empty($order) or $order == "Asc")
 {
    $order			= "Asc";
		$nextOrder	= "Desc";
		$seta				= "s_asc.png";
		$descr      = "Ascente";
	}
  else
  {
		$order			= "Desc";
		$nextOrder	= "Asc";
		$seta				= "s_desc.png";
		$descr = "Decrescente";
	}
  $sql = "SELECT
  transacao_id,referencia ,data_transacao,tipo_pagamento,cliente_nome,status_transacao,
  (SELECT SUM(produto_valor) FROM transacoes_produtos prod
  WHERE prod.trans_id = tra.pedidos_id)+tra.valor_frete AS valor_total
  FROM transacoes tra WHERE 1=1";
  //1. Filtrar apenas pela data inicial até o dia de hoje
  if(!empty($data_de) and empty($data_ate))
    $sql .= " AND data_transacao  >=  '".$data_de."'";

  //2. Filtrar apenas pela data final (do começo até o dia selecionado)
  if(empty($data_de) and !empty($data_ate))
   $sql .= " AND data_transacao  <=  '".$data_ate."'";

  //3. Filtrar a partir da data inicial até a data final
  if(!empty($data_de) and !empty($data_ate))
   $sql .= " AND (data_transacao  BETWEEN '".$data_de."' AND '".$data_ate."')";

  //4. Filtrar pela forma de pagamento
  if(!empty($formas_pgto))
   $sql .= " AND tipo_pagamento= '".$formas_pgto."'";

  //5. Filtrar pelo status da transação
  if(!empty($status) and is_array($status)){
    $arra_status = implode("','",$status);
    $sql .= " AND status_transacao IN('".$arra_status."')";
  }

  //6. Filtrar pelo nome do cliente
  if(!empty($nome))
   $sql .= " AND cliente_nome  LIKE '%".$nome."%'";

  //7. Filtrar pelo e-mail do cliente
  if(!empty($email))
    $sql .= " AND cliente_email = '".$email."'";

  //8. Filtrar pela referência da transação
  if(!empty($referencia))
    $sql .= " AND referencia = '".trim($referencia)."'";

  $sql .= "	ORDER BY " . $arraCampoValor[$ordenacaoCampo] . " " . $order;
  //echo $sql;
  $result = $conn->sql($sql);
  $recordCount1 = mysql_num_rows($result);

  //Paginação
  $mult_pag = new Mult_Pag();
  $mult_pag->num_pesq_pag = $arraQtde[$qtde];
  $result = $mult_pag->Executar($sql, "otimizada", "mysql");
  $reg_pag = mysql_num_rows($result);
  
 if($recordCount1 >0){
  for ($indx = 0; $indx < $reg_pag; $indx++) {
    $linha = mysql_fetch_array($result);

    $lista	.=	"<tr class='listaItem'>\n";
    $lista	.=	"	<td class='checkbox'><input type='checkbox' class='checkbox' name='sels[]' value='". $linha["transacao_id"]."' /></td>\n";
    $lista	.=	"	<td>". $linha["referencia"]."</td>\n";
    $lista	.=	"	<td>". left(fct_conversorData($linha["data_transacao"],4),16)."</td>\n";
    $lista	.=	"	<td>". $linha["tipo_pagamento"]."</td>\n";
    $lista	.=	"	<td>". $linha["cliente_nome"]."</td>\n";
    $lista	.=	"	<td>". $linha["status_transacao"]."</td>\n";
    $lista	.=	"	<td>". number_format($linha["valor_total"],2,",",".")."</td>\n";
    $lista  .=  $rotinaClass->menu_rotinas_interno($linha["produtos_id"]);
   	$lista	.=	"</tr>\n";
  }
 }
 else
  $lista	=	"<tr class='listaItem'><td colspan='10' align='center'>Nenhum registro encontrado</td></tr>\r\n";
 if($recordCount1 == 1)
	$resposta = "<span class='TextoPequeno'>1 registro encontrado</span>";
 elseif($recordCount1 > 1)
	$resposta = "<span class='TextoPequeno'>". $recordCount1 ." registros encontrados</span>";
 else
  $resposta = "<span class='TextoPequeno'>nenhum registro encontrado</span>";

 require_once("topo.php");
 require_once("menu_lateral.php");

 ?>
 <script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
<div id="conteudo">
 	<div class='titulo'><?= $titulo ?></div>
 	<form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
     <table cellpadding="0" cellspacing="0" border="0" id="filtro">
  		<tr>
				<td class="legenda"><label for="data_de">Início:</label></td>
				<td>
          <input name="data_de" id="data_de" class="data" type="text" value="<?= fct_conversorData($data_de,1) ?>" size="10" maxlength="10" />
          <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário"  class="calendar" id="data_de" />
          (dd/mm/aaaa)
        </td>
        <td class="legenda"><label for="data_ate">Fim:</label></td>
        <td>
          <input name="data_ate" id="data_ate" class="data" type="text" value="<?= fct_conversorData($data_ate,1) ?>" size="10" maxlength="10" />
          <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário"  class="calendar" id="data_ate" />
          (dd/mm/aaaa)
        </td>
      </tr>
      <tr>
        <td class="legenda"><label for="formas_pgto">Formas Pagamento:</label></td>
				<td>
           <?php
            $sql = "SELECT nome,nome FROM meios_pagto_pagseguro";
            echo fct_MontarLista($sql,$formas_pagto,"formas_pgto","<option value='0'>Todos</option>");
           ?>
        </td>
        <td class="legenda"><label for="status">Status:</label></td>
			  <td>
          <?php
            $sql= "SELECT nome FROM status_transacao_pagseguro ORDER BY nome";
            $rs = $conn->sql($sql);
            while($dados = mysql_fetch_array($rs)){
              $checked = "";
              if(is_array($status)){
                foreach($status as $options){
                  if(strnatcmp(htmlentities($options), $dados["nome"]) == 0){
                    $checked = "checked='checked'";
                  }
                }
              }
          ?>
          <input type="checkbox" name="status[]" value="<?php echo $dados["nome"]; ?>" <?php echo $checked; ?> />
          <?php echo $dados["nome"]; ?>
          <?php } ?>
			  </td>
      </tr>
      <tr>
        <td class="legenda">Nome:</td>
        <td><input name="nome" type="text" value="<?php print $nome ?>" /></td>
        <td class="legenda">E-mail:</td>
        <td><input name="email" type="text" value="<?php print $email ?>" /></td>
      </tr>
      <tr>
        <td class="legenda">Referência:</td>
        <td><input name="referencia" type="text" value="<?php print $referencia?>" /></td>
        <td class="legenda"><label for="qtde">Exibir:</label></td>
				<td>
					<select name="qtde">
					<?= fct_Array_MontarLista($arraQtde, $qtde) ?>
					</select>
          <input type="submit" value="filtrar"  />
				</td>
			 </tr>
     </table>
     <br />
     Lista de Produtos:&nbsp;&nbsp;<?= $resposta?>
     <? $rotinaClass->menu_rotinas_superior(); ?>
   	 <table class="TableLista">
     	<tr class='cabecalho'>
			 <td class='Sels' title='Clique aqui para selecionar ou remover a seleção de todos os itens.'><input type="checkbox" class='checkbox Todos' name="sels[]" /></td>
       <td>Referência</td>
       <td class="ordenarLista" id="i0">Data <?= ordenacao(0) ?></td>
       <td class="ordenarLista" id="i1">Forma de Pagamento <?= ordenacao(1) ?></td>
       <td class="ordenarLista" id="i2">Nome  <?= ordenacao(2) ?></td>
       <td class="ordenarLista" id="i3">Status  <?= ordenacao(3) ?></td>
       <td class="ordenarLista" id="i4">Valor <?= ordenacao(4) ?></td>
       <? $rotinaClass->menu_rotinas_cabecalho(); ?>
      </tr>
     <?= $lista ?>
     <? if($recordCount1 >0 and $reg_pag > 0){ ?>
     <tr>
      <td colspan='10' class='paginacao'>
        <ul>
          <?
            $todos_links = $mult_pag->Construir_Links("strings", "sim");
            for ($n = 0; $n < count($todos_links); $n++)
             echo "<li>".$todos_links[$n] . "</li>\n";
           ?>
        </ul>
      </td>
    </tr>
    <? } ?>
  </table>
	<input type="hidden" name="order" value="<?=$order?>" />
	<input type="hidden" name="ordenacaocampo" value="<?=$ordenacaoCampo?>" />
 </form>
</div>
<? require_once("rodape.php") ?>

