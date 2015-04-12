<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 11/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: categorias_listar.php			                    '
---------------------------------------------------------*/
$form        = "frm_categoria";
require_once("lib/configs.php");
$titulo = $rotinaClass->menu_rotinas_titulo("Listar");
$cod_sub       = $rotinaClass->cod_modulo();

 //Pegar variaveis de Filtro
 $palavraChave		= $_REQUEST["palavrachave"];
 $order				    = $_REQUEST["order"];
 $qtde				    = $_REQUEST["qtde"];
 $campo				    = $_REQUEST["campo"];
 $ordenacaoCampo	= $_REQUEST["ordenacaocampo"];

function listaCategorias2($parent_id,$space)
{
   global $conn,$rotinaClass,$cod_sub;
   global $palavraChave, $order, $qtde, $campo, $ordenacaoCampo;

   if($order =="")
   {
    $palavraChave   = $_COOKIE["palavraChave$cod_sub"];
    $order			    = $_COOKIE["order$cod_sub"];
    $qtde			      = $_COOKIE["qtde$cod_sub"];
    $campo			    = $_COOKIE["campo$cod_sub"];
    $ordenacaoCampo	= $_COOKIE["ordenacaocampo$cod_sub"];
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

   $arraCampoNome	  = array("Nome","ID");
   $arraCampoValor  = array("categorias_descricao","categorias_id","categoria_parent");
   $arraQtde		  = array(10, 20, 30, 50, 100);

  // Validação das Variaveis '
  if($campo=="")			  $campo			= 0;
  if($qtde=="")			  $qtde				= 1;
  if($ordenacaoCampo=="")  $ordenacaoCampo	= 0;
  if($pagina=="")          $pagina           = 1;
  if($parent_id=="")       $parent_id        = 0;

  $link = $pageName."?parent_id=$ant_id";
  if(empty($order) or $order == "Asc")
  {
    $order		  = "Asc";
	  $nextOrder	= "Desc";
	  $seta		    = "s_asc.png";
	  $descr      = "Ascente";
 }
 else
 {
   $order		   = "Desc";
	 $nextOrder	 = "Asc";
	 $seta		   = "s_desc.png";
	 $descr      = "Decrescente";
 }

   $sql = "SELECT * FROM categorias WHERE parent_id = $parent_id";
   if(!empty($palavraChave) and !empty($arraCampoValor[$campo]))
   {
	   $sql	.= "	AND	" . $arraCampoValor[$campo];
	   if(strtoupper($arraCampoNome[$campo])=="ID")
	     $sql	.= " IN (". $palavraChave .") ";
	   else
	    $sql	.= " LIKE '%". $palavraChave ."%' ";
   }
   $sql .= "	ORDER BY " . $arraCampoValor[$ordenacaoCampo] . " " . $order;

   $result = $conn->sql($sql);
   if(mysql_num_rows($result))
   {
      while($linha = mysql_fetch_array($result))
      {
         echo "<tr class='listaItem'>\n";
         echo "<td class='Sels'><input type='checkbox' class='checkbox' name='sels[]' value='".$linha["categorias_id"]."' /> </td>\n";
         echo "<td>". $space . htmlspecialchars($linha["categorias_descricao"]) . "</td>\n";
         echo  $rotinaClass->menu_rotinas_interno($linha["categorias_id"]);
         echo "</tr>\n";
         listaCategorias2($linha["categorias_id"],'&nbsp; '.$space);
      }
   }

}

 $arraCampoNome	  = array("Nome","ID");
 $arraCampoValor  = array("categorias_descricao","categorias_id","categoria_parent");
 $arraQtde		    = array(10, 20, 30, 50, 100);

 require_once("topo.php");
 require_once("menu_lateral.php");
?>
<div id="conteudo">
  <div class='titulo'><?= $titulo ?></div>
  <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
    <table cellpadding="0" cellspacing="0" border="0" id="filtro">
      <tr>
        <td class="legenda" width="80"><label for="palavrachave">Filtrar por:</label></td>
        <td><input name="palavrachave" type="text" class="palavrachave" value="<?= str_replace('\"', '&quot;',$palavraChave) ?>" size="30" /></td>
        <td class="legenda" width="60"><label for="campo">Campo:</label></td>
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
    </table><br />

    <? $rotinaClass->menu_rotinas_superior(); ?>
    <table class="TableLista" border='0' cellpadding='0' cellspacing='2'>
      <tr class='cabecalho'>
        <td class="Sels" title="Clique aqui para selecionar ou remover a seleção de todos os itens."><input type="checkbox" class="checkbox Todos" name="sels[]" /></td>
        <td class="ordenarLista" id="i0"> Categorias <?= ordenacao(0) ?></td>
        <? $rotinaClass->menu_rotinas_cabecalho(); ?>
      </tr>
      <? listaCategorias2(0," ") ?>
    </table>
    <input type="hidden" name="order" value="<?=$order?>" />
    <input type="hidden" name="ordenacaocampo" value="<?=$ordenacaoCampo?>" />
  </form>
</div>
<? require_once("rodape.php") ?>

