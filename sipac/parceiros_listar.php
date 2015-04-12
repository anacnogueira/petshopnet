<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 12/09/2008                                     '
   Última Modificação: 15/10/2009                         '
   Página: parceiros_listar.php			                      '
---------------------------------------------------------*/
 $form        = "frm_parceiro";
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo      = $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub       = $rotinaClass->cod_modulo();

//Pegar variaveis de Filtro
 $palavraChave			= $_REQUEST["palavrachave"];
 $order						  = $_REQUEST["order"];
 $status            = $_REQUEST["status"];
 $qtde					    = $_REQUEST["qtde"];
 $campo						  = $_REQUEST["campo"];
 $ordenacaoCampo	  = $_REQUEST["ordenacaocampo"];

 if($order =="")
 {
  $palavraChave      = $_COOKIE["palavraChave$cod_sub"];
  $order				     = $_COOKIE["order$cod_sub"];
  $status	           = $_COOKIE["status$cod_sub"];
	$qtde				       = $_COOKIE["qtde$cod_sub"];
	$campo						 = $_COOKIE["campo$cod_sub"];
  $ordenacaoCampo	   = $_COOKIE["ordenacaocampo$cod_sub"];
 }
 else
 {
   //Setar as cookies
 	 @setcookie("palavraChave$cod_sub",$palavraChave);
 	 @setcookie("status$cod_sub",$status);
   @setcookie("order$cod_sub",$order);
   @setcookie("qtde$cod_sub",$qtde);
   @setcookie("campo$cod_sub",$campo);
   @setcookie("ordenacaocampo$cod_sub",$ordenacaoCampo);
 }

 $arraCampoNome		= array("Nome Fantasia","Razão Social","Código","Valor");
 $arraCampoValor	= array("parceiros_nome_fantasia","parceiros_razao_social","parceiros_valor","parceiros_id");
 $arraStatus      = array("-1","Todos","1","Ativo","0","Inativo");
 $arraQtde				= array(10, 20, 30, 50, 100);

 // Validação das Variaveis '
 if($campo == "")					 	$campo						= 0;
 if($status == "")	        $status	= "-1";
 if($qtde == "")						$qtde					    = 1;
 if($ordenacaoCampo == "")	$ordenacaoCampo		= 0;

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
  $SQL = "SELECT
  parceiros_id,parceiros_razao_social,parceiros_nome_fantasia,
  parceiros_valor,parceiros_status
  FROM parceiros
   WHERE 1 = 1";
	if(!empty($palavraChave) and !empty($arraCampoValor[$campo]) and $arraCampoNome[$campo] !="categoria")
  {
		$SQL	.= "	AND	" . $arraCampoValor[$campo];
	  if(strtoupper($arraCampoNome[$campo])=="Código")
		  $SQL	.= " IN (". $palavraChave .") ";
	  else
			$SQL	.= " LIKE '%". $palavraChave ."%' ";
	}
	if($status != "-1")
   $SQL .= " AND parceiros_status='".$status."'";

 $SQL .= "	ORDER BY " . $arraCampoValor[$ordenacaoCampo] . " " . $order;
 $result = $conn->sql($SQL);
 $recordCount1 = mysql_num_rows($result);
 
 //Paginação
 $mult_pag = new Mult_Pag();
 $mult_pag->num_pesq_pag = $arraQtde[$qtde];
 $result = $mult_pag->Executar($SQL, "otimizada", "mysql");
 $reg_pag = mysql_num_rows($result);

 if($recordCount1 >0)
 {
  for ($indx = 0; $indx < $reg_pag; $indx++)
  {
    $linha = mysql_fetch_array($result);
    //Selecionar categorias
    $SQL = "SELECT categorias_descricao
    FROM  parceiros_categorias as p
    LEFT JOIN categorias  c ON p.categorias_id = c.categorias_id
    WHERE parceiros_id='".$linha[0]."'";
    //echo $SQL;
    $listaCategorias = "";
    $result2 = $conn->sql($SQL);
    while($linha2 = mysql_fetch_array($result2))
    {
			if(!empty($linha2[0]))
			 $listaCategorias .= $linha2[0].",";
	    else
       $listaCategorias .= "Página Inicial".",";

		 }
		 $listaCategorias =  rtrim($listaCategorias,",");
     $lista	.=	"<tr class='listaItem'>\n";
     $lista	.=	"	<td class='Sels'><input type='checkbox' class='checkbox' name='sels[]' value='". $linha["parceiros_id"]."' /></td>\n";
     $lista	.=	"	<td>". $linha["parceiros_nome_fantasia"]."</td>\n";
     $lista	.=	"	<td>". $linha["parceiros_razao_social"]."</td>\n";
     $lista	.=	"	<td>". number_format($linha["parceiros_valor"],2,",",".")."</td>\n";
     $lista	.=	"	<td>". $listaCategorias."</td>\n";
     $lista	.=	"	<td style='text-align:center'>".alterarStatus($linha["parceiros_status"],$linha["parceiros_id"],"parceiros") ."</td>\n";
     $lista  .=  $rotinaClass->menu_rotinas_interno($linha["parceiros_id"]);
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
<div id="conteudo">
	<script type='text/javascript' src='js/parceiros.js'></script>
 	<div class='titulo'><?= $titulo ?></div>
 	<form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
     <table cellpadding="0" cellspacing="0" border="0" id="filtro">
  		<tr>
				<td class="legenda"><label for="palavrachave">Filtrar por:</label></td>
				<td><input name="palavrachave" type="text" class="palavrachave" value="<?= str_replace('\"', '&quot;',$palavraChave) ?>" /></td>
				<td class="legenda"><label for="campo">Campo:</label></td>
				<td><select name="campo" class="log">
         		<?= fct_Array_MontarLista($arraCampoNome,$campo) ?>
						</select>
        </td>
			</tr>
			<tr>
			  <td class="legenda"><label for="produtos_status">Status:</label></td>
			  <td>
			    <select name="produtos_status">
        <?= fct_Array2_MontarLista($arraStatus,$status) ?>
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
     Lista de Parceiros:&nbsp;&nbsp;<?= $resposta?>
     <? $rotinaClass->menu_rotinas_superior(); ?>
   	 <table class="TableLista" border='0' cellpadding='0' cellspacing='2'>
     	<tr class='cabecalho'>
			 <td class='Sels' title='Clique aqui para selecionar ou remover a seleção de todos os itens.'><input type="checkbox" class='checkbox' name="Sels[]" onClick="fct_SelecionaTodos(this.form);" /></td>
       <td class="ordenarLista" id="i0">Nome Fantasia <?= ordenacao(0) ?></td>
       <td class="ordenarLista" id="i1">Razão Social <?= ordenacao(1) ?></td>
       <td class="ordenarLista" id="i2">Valor <?= ordenacao(2) ?></td>
       <td>Categoria(s)</td>
       <td>Status</td>
       <? $rotinaClass->menu_rotinas_cabecalho(); ?>
      </tr>
     <?= $lista ?>
     <?  if($recordCount1>0 and $reg_pag > 0){  ?>
     <tr>
      <td colspan='10' class="paginacao">
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

