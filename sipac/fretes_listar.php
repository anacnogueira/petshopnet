<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 20/12/2011                                     '
   Última Modificação: 29/12/2011                         '
   Página: fretes_listar.php			                      '
---------------------------------------------------------*/
 $form				= "frm_frete";
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub     = $rotinaClass->cod_modulo();

//Pegar variaveis de Filtro
 $regra			        = $_REQUEST["regra"];
 $descricao			    = $_REQUEST["descricao"];
 $prazo_entrega			= $_REQUEST["prazo_entrega"];
 $status			      = $_REQUEST["status"];
 $order						  = $_REQUEST["order"];
 $qtde					    = $_REQUEST["qtde"];
 $campo						  = $_REQUEST["campo"];
 $ordenacaoCampo	  = $_REQUEST["ordenacaocampo"];

 if($order == "")
 {
  $regra             = $_COOKIE["regra$cod_sub"];
  $descricao         = $_COOKIE["descricao$cod_sub"];
  $prazo_entrega     = $_COOKIE["prazo_entrega$cod_sub"];
  $status            = $_COOKIE["status$cod_sub"];
  $order				     = $_COOKIE["order$cod_sub"];
  $qtde				       = $_COOKIE["qtde$cod_sub"];
	$campo						 = $_COOKIE["campo$cod_sub"];
  $ordenacaoCampo	   = $_COOKIE["ordenacaocampo$cod_sub"];
 }
 else
 {
   //Setar as cookies
 	 @setcookie("regra$cod_sub",$regra);
   @setcookie("descricao$cod_sub",$descricao);
   @setcookie("prazo_entrega$cod_sub",$prazo_entrega);
   @setcookie("status$cod_sub",$status);
   @setcookie("order$cod_sub",$order);
   @setcookie("qtde$cod_sub",$qtde);
   @setcookie("campo$cod_sub",$campo);
   @setcookie("ordenacaocampo$cod_sub",$ordenacaoCampo);

	 $_COOKIE["regra$cod_sub"] 	         = $regra;
   $_COOKIE["descricao$cod_sub"]       = $descricao;
   $_COOKIE["prazo_entrega$cod_sub"]   = $prazo_entrega;
   $_COOKIE["status$cod_sub"]          = $status;
   $_COOKIE["order$cod_sub"] 					 = $order;
   $_COOKIE["qtde$cod_sub"] 					 = $qtde;
	 $_COOKIE["campo$cod_sub"] 					 = $campo;
   $_COOKIE["ordenacaocampo$cod_sub"]  = $ordenacaoCampo;
 }

 $arraCampoNome		= array("Regra","Descrição","Prazo de Entrega");
 $arraCampoValor	= array("frete_id","regra","descricao","prazo_entrega","valor");
 $arraStatus      = array("-1","Todos","S","Ativo","N","Inativo");
 $arraQtde				= array(10, 20, 30, 50, 100);

 // Validação das Variaveis '
 if($status=="")	        $status	          = "-1";
 if($qtde=="")						$qtde					    = 1;
 if($ordenacaoCampo=="")	$ordenacaoCampo		= 0;
 if($pagina=="")          $pagina           = 1;

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
		$descr      = "Decrescente";
	}
  $sql = "SELECT
  frete_id,regra,descricao,prazo_entrega,valor,status
  FROM fretes
  WHERE 1=1";
  if(!empty($regra))
    $sql	.= "	AND	regra LIKE '%" . $regra . "%'";
  if(!empty($descricao))
    $sql	.= "	AND	descricao LIKE '%" . $descricao . "%'";
 if(!empty($prazo_entrega))
    $sql	.= "	AND	prazo_entrega = '" . $prazo_entrega . "'";

	if($status != "-1")
	 $sql .= " AND status='".$status."'";

	$sql .= "	ORDER BY " . $arraCampoValor[$ordenacaoCampo] . " " . $order;
  $result = $conn->sql($sql);
  $recordCount1 = mysql_num_rows($result);

  //echo $sql;
 //Paginação
 $mult_pag = new Mult_Pag();
 $mult_pag->num_pesq_pag = $arraQtde[$qtde];
 $result = $mult_pag->Executar($sql, "otimizada", "mysql");
 $reg_pag = mysql_num_rows($result);

 if($recordCount1 >0)
 {
    for ($indx = 0; $indx < $reg_pag; $indx++)
    {
      $linha = mysql_fetch_array($result);
      $lista	.=	"<tr class='listaItem'>\n";
      $lista	.=	"	<td class='Sels'><input type='checkbox' class='checkbox' name='sels[]' value='". $linha["frete_id"]."' /></td>\n";
      $lista	.=	"	<td>". $linha["frete_id"]."</td>\n";
      $lista	.=	"	<td>". $linha["regra"]."</td>\n";
      $lista	.=	"	<td>". $linha["descricao"]."</td>\n";
       $lista	.=	"	<td>". $linha["prazo_entrega"]."</td>\n";
      $lista	.=	"	<td>". number_format($linha["valor"],2,",",".")."</td>\n";
      $lista	.=	"	<td style='text-align:center'>". alterarStatus2('fretes','frete_id',$linha["frete_id"],'status',$linha["status"])."\n";
      $lista  .=  $rotinaClass->menu_rotinas_interno($linha["frete_id"]);
   	  $lista	.=	"</tr>\n";
    }
 }
 else
  $lista	=	"<tr class='ListaItem'><td colspan='10' align='center'>Nenhum registro encontrado</td></tr>\r\n";
 if($recordCount1 == 1)
	$resposta = "<span class='TextoPequeno'>1 registro encontrado</span>";
 elseif($recordCount1 > 1)
	$resposta = "<span class='TextoPequeno'>". $recordCount1 ." registros encontrados</span>";
 else
  $resposta = "<span class='TextoPequeno'>nenhum registro encontrado</span>";

 require_once("topo.php");
 require_once("menu_lateral.php")
?>

<div id="conteudo">
 	<div class='titulo'><?= $titulo ?></div>
 	<form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
     <table cellpadding="0" cellspacing="0" border="0" id="filtro">
  		<tr>
				<td class="legenda" ><label for="palavrachave">regra:</label></td>
				<td><input name="regra" type="text" class="palavrachave" value="<?= str_replace('\"', '&quot;',$regra) ?>" size="30" /></td>
				<td class="legenda"><label for="regra">descrição:</label></td>
				<td><input name="descrição" type="text" class="palavrachave" value="<?= str_replace('\"', '&quot;',$descricao) ?>" size="30" /></td>
			</tr>
			<tr>
        <td class="legenda"><label for="regra">Prazo de entrega(dias):</label></td>
				<td><input name="prazo_entrega" type="text" size="10" value="<?= str_replace('\"', '&quot;',$prazo_entrega) ?>" size="30" /></td>
			  <td class="legenda"><label for="promo_status">Status:</label></td>
			  <td>
			    <select name="status">
            <?= fct_Array2_MontarLista($arraStatus,$status) ?>
			    </select>
        </td>
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
     Lista de Regras de frete:&nbsp;&nbsp;<?= $resposta?>
     <? $rotinaClass->menu_rotinas_superior(); ?>
   	 <table class="TableLista" border='0' cellpadding='0' cellspacing='2'>
      <tr class='cabecalho'>
         <td class='Sels' title='Clique aqui para selecionar ou remover a seleção de todos os itens.'><input type="checkbox" class='checkbox Todos' name="sels[]" /></td>
         <td class="ordenarLista" id="i0">ID <?= ordenacao(0) ?></td>
         <td class="ordenarLista" id="i1">Regra <?= ordenacao(1) ?></td>
         <td class="ordenarLista" id="i2">Descrição <?= ordenacao(2) ?></td>
         <td class="ordenarLista" id="i3">Prazo de entrega <?= ordenacao(3) ?></td>
         <td class="ordenarLista" id="i4">Valor <?= ordenacao(4) ?></td>
         <td>Status</td>
       <? $rotinaClass->menu_rotinas_cabecalho(); ?>
      </tr>
     <?= $lista ?>
     <? if($recordCount1 >0 and $reg_pag > 0){ ?>
     <tr>
      <td colspan='10' class='paginacao'>
        <ul>
          <?
            $todos_links = $mult_pag->Construir_Links("todos", "sim");
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

