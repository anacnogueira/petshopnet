<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 11/09/2007                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: fabricantes_listar.php			                    '
---------------------------------------------------------*/

 $form        = "frm_fornecedor";
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo 			= $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub     = $rotinaClass->cod_modulo();
 
 //Pegar variaveis de Filtro
 $palavraChave			= $_REQUEST["palavrachave"];
 $order						  = $_REQUEST["order"];
 $qtde					    = $_REQUEST["qtde"];
 $campo						  = $_REQUEST["campo"];
 $ordenacaoCampo	  = $_REQUEST["ordenacaocampo"];

 if($order =="")
 {
  $palavraChave      = $_COOKIE["palavraChave$cod_sub"];
  $order				     = $_COOKIE["order$cod_sub"];
	$qtde				       = $_COOKIE["qtde$cod_sub"];
	$campo						 = $_COOKIE["campo$cod_sub"];
  $ordenacaoCampo	   = $_COOKIE["ordenacaocampo$cod_sub"];
 }
 else
 {
   //Setar as cookies
 	 @setcookie("palavraChave$cod_sub",$palavraChave);
   @setcookie("order$cod_sub",$order);
   @setcookie("qtde$cod_sub",$qtde);
   @setcookie("campo$cod_sub",$campo);
   @setcookie("ordenacaocampo$cod_sub",$ordenacaoCampo);

	 $_COOKIE["palavraChave$cod_sub"] = $palavraChave;
   $_COOKIE["order$cod_sub"] = $order;
	 $_COOKIE["qtde$cod_sub"] = $qtde;
	 $_COOKIE["campo$cod_sub"] = $campo;
   $_COOKIE["ordenacaocampo$cod_sub"] = $ordenacaoCampo;
 }

 $arraCampoNome	= array("Nome","ID");
 $arraCampoValor	= array("fornecedores_nome","fornecedores_id");
 $arraQtde				= array(10, 20, 30, 50, 100);

 // Valida��o das Variaveis '
 if($campo=="")					 	$campo						= 0;
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
		$descr = "Decrescente";
	}
  $SQL = "SELECT
            fornecedores_id, fornecedores_nome
            FROM fornecedores  WHERE 1=1";
	if(!empty($palavraChave) and !empty($arraCampoValor[$campo]))
  {
		$SQL	.= "	AND	" . $arraCampoValor[$campo];
	  if(strtoupper($arraCampoNome[$campo])=="ID")
		  $SQL	.= " IN (". $palavraChave .") ";
	  else
			$SQL	.= " LIKE '%". $palavraChave ."%' ";
	}
	$SQL .= "	ORDER BY " . $arraCampoValor[$ordenacaoCampo] . " " . $order;
 //echo $SQL;
 $result = $conn->sql($SQL);
 $recordCount1 = mysql_num_rows($result);
 
 //Pagina��o
 $mult_pag = new Mult_Pag();
 $mult_pag->num_pesq_pag = $arraQtde[$qtde];
 $result = $mult_pag->Executar($SQL, "otimizada", "mysql");
 $reg_pag = mysql_num_rows($result);

 if($recordCount1 >0)
   {
    for ($indx = 0; $indx < $reg_pag; $indx++)
    {
     $linha = mysql_fetch_array($result);
     $lista	.=	"<tr class='listaItem'>\n";
     $lista	.=	"	<td class='Sels'><input type='checkbox' class='checkbox' name='sels[]' value='". $linha["fornecedores_id"]."' /></td>\n";
     $lista	.=	"	<td>". $linha["fornecedores_nome"]."</td>\n";
     $lista  .=  $rotinaClass->menu_rotinas_interno($linha["fornecedores_id"]);
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
 	<form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
     <table cellpadding="0" cellspacing="0" border="0" id="filtro">
  		<tr>
				<td class="legenda"><label for="palavrachave">Filtrar por:</label></td>
				<td><input name="palavrachave" type="text" class="palavrachave" value="<?= str_replace('\"', '&quot;',$palavraChave) ?>"/></td>
				<td class="legenda"><label for="campo">Campo:</label></td>
				<td><select name="campo" class="log">
         		<?= fct_Array_MontarLista($arraCampoNome,$campo) ?>
						</select>
        </td>
			</tr>
			<tr>
      	<td class="legenda"><label for="qtde">Exibir:</label></td>
				<td colspan="3">
					<select name="qtde">
					<?= fct_Array_MontarLista($arraQtde, $qtde) ?>
					</select>
          <input type="submit" value="filtrar"  />
				</td>
			 </tr>
     </table>
     <br />
     Lista de Fabricantes:&nbsp;&nbsp;<?= $resposta?>
     <? $rotinaClass->menu_rotinas_superior(); ?>
   	 <table class="TableLista" border='0' cellpadding='0' cellspacing='2'>
     	<tr class='cabecalho'>
			 <td class='Sels' title='Clique aqui para selecionar ou remover a sele��o de todos os itens.'><input type="checkbox" class='checkbox Todos' name="sels[]" /></td>
       <td class="ordenarLista" id="i0">Nome <?= ordenacao(0) ?></td>
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

