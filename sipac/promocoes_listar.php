<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/10/2007                                     '
   Última Modificação: __/__/____                         '
   Página: promoções_listar.php			                      '
---------------------------------------------------------*/
 $form				= "frm_promocao";
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub     = $rotinaClass->cod_modulo();

//Pegar variaveis de Filtro
 $palavraChave			= $_REQUEST["palavrachave"];
 $order						  = $_REQUEST["order"];
 $promo_status      = $_REQUEST["promo_status"];
 $qtde					    = $_REQUEST["qtde"];
 $campo						  = $_REQUEST["campo"];
 $ordenacaoCampo	  = $_REQUEST["ordenacaocampo"];

 if($order =="")
 {
  $palavraChave      = $_COOKIE["palavraChave$cod_sub"];
  $order				     = $_COOKIE["order$cod_sub"];
  $promo_status	     = $_COOKIE["promo_status$cod_sub"];
	$qtde				       = $_COOKIE["qtde$cod_sub"];
	$campo						 = $_COOKIE["campo$cod_sub"];
  $ordenacaoCampo	   = $_COOKIE["ordenacaocampo$cod_sub"];
 }
 else
 {
   //Setar as cookies
 	 @setcookie("palavraChave$cod_sub",$palavraChave);
   @setcookie("promo_status$cod_sub",$promo_status);
   @setcookie("order$cod_sub",$order);
   @setcookie("qtde$cod_sub",$qtde);
   @setcookie("campo$cod_sub",$campo);
   @setcookie("ordenacaocampo$cod_sub",$ordenacaoCampo);

	 $_COOKIE["palavraChave$cod_sub"] 	 = $palavraChave;
   $_COOKIE["order$cod_sub"] 					 = $order;
   $_COOKIE["promo_status$cod_sub"]    = $promo_status;
	 $_COOKIE["qtde$cod_sub"] 					 = $qtde;
	 $_COOKIE["campo$cod_sub"] 					 = $campo;
   $_COOKIE["ordenacaocampo$cod_sub"]  = $ordenacaoCampo;
 }

 $arraCampoNome		= array("Produto","Preço Promocional","Preço Antigo","Data Inicio","Data Fim","Código",);
 $arraCampoValor	= array("produtos_nome","promocoes_preco","produtos_preco","data_ini","data_fin","promocoes_id");
 $arraStatus      = array("-1","Todos","S","Ativo","N","Inativo");
 $arraQtde				= array(10, 20, 30, 50, 100);

 // Validação das Variaveis '
 if($campo=="")					 	$campo						= 0;
 if($promo_status=="")	  $promo_status	= "-1";
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
  promo.promocoes_id,prod.produtos_codigo,prod.produtos_nome,
  prod.produtos_preco,promo.promocoes_preco,promocoes_status,promo.data_ini,promo.data_fin
  FROM promocoes promo
  INNER JOIN produtos prod  ON  prod.produtos_codigo = promo.produtos_codigo
  WHERE 1=1";
	if(!empty($palavraChave) and !empty($arraCampoValor[$campo]) and $arraCampoNome[$campo] !="categoria")
  {
		$SQL	.= "	AND	" . $arraCampoValor[$campo];
	  if(strtoupper($arraCampoNome[$campo])=="Código")
		  $SQL	.= " IN (". $palavraChave .") ";
	  else if($arraCampoValor[$campo] == "data_ini" || $arraCampoValor[$campo] == "data_fin")
      $SQL	.= " LIKE '%". fct_conversorData($palavraChave,2) ."%' ";
    else
			$sql	.= " LIKE '%". $palavraChave ."%' ";
	}
	if($promo_status != "-1")
	{
	  $sql .= " AND promocoes_status='".$promo_status."'";
	}
	$sql .= "	ORDER BY " . $arraCampoValor[$ordenacaoCampo] . " " . $order;
  $result = $conn->sql($sql);
  $recordCount1 = mysql_num_rows($result);
 
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
      $listaCategorias =  rtrim($listaCategorias,",");
      $lista	.=	"<tr class='listaItem'>\n";
      $lista	.=	"	<td class='Sels'><input type='checkbox' class='checkbox' name='sels[]' value='". $linha["promocoes_id"]."' /></td>\n";
      $lista	.=	"	<td>". $linha["produtos_nome"]."</td>\n";
      $lista	.=	"	<td>". str_replace(".",",",$linha["promocoes_preco"])."</td>\n";
      $lista	.=	"	<td>". str_replace(".",",",$linha["produtos_preco"])."</td>\n";
      $lista	.=	"	<td>". fct_conversorData($linha["data_ini"],1)."</td>\n";
      $lista	.=	"	<td>". fct_conversorData($linha["data_fin"],1)."</td>\n";
      $lista	.=	"	<td style='text-align:center'>". alterarStatus($linha["promocoes_status"],$linha["promocoes_id"],'promocoes')."\n";
      $lista  .=  $rotinaClass->menu_rotinas_interno($linha["promocoes_id"]);
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
				<td class="legenda" ><label for="palavrachave">Filtrar por:</label></td>
				<td><input name="palavrachave" type="text" class="palavrachave" value="<?= str_replace('\"', '&quot;',$palavraChave) ?>" size="30" /></td>
				<td class="legenda"><label for="campo">Campo:</label></td>
				<td><select name="campo" class="log">
         		<?= fct_Array_MontarLista($arraCampoNome,$campo) ?>
						</select>
        </td>
			</tr>
			<tr>
			  <td class="legenda"><label for="promo_status">Status:</label></td>
			  <td>
			    <select name="promo_status">
        <?= fct_Array2_MontarLista($arraStatus,$promo_status) ?>
			    </select>
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
     Lista de Promoções:&nbsp;&nbsp;<?= $resposta?>
     <? $rotinaClass->menu_rotinas_superior(); ?>
   	 <table class="TableLista" border='0' cellpadding='0' cellspacing='2'>
      <tr class='cabecalho'>
         <td class='Sels' title='Clique aqui para selecionar ou remover a seleção de todos os itens.'><input type="checkbox" class='checkbox Todos' name="sels[]" /></td>
         <td style='width:200px' class="ordenarLista" id="i0">Produto <?= ordenacao(0) ?></td>
         <td class="ordenarLista" id="i1">Preço Promocional <?= ordenacao(1) ?></td>
         <td class="ordenarLista" id="i2">Preço Antigo <?= ordenacao(2) ?></td>
         <td class="ordenarLista" id="i3">Início <?= ordenacao(3) ?></td>
         <td class="ordenarLista" id="i3">Fim <?= ordenacao(3) ?></td>
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

