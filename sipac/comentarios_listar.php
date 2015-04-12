<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 14/10/2009                                     '
   Última Modificação: __/__/____                         '
   Página: comentarios_listar.php			                    '
---------------------------------------------------------*/
 $form        = "frm_comentario";
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo      = $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub       = $rotinaClass->cod_modulo();

//Pegar variaveis de Filtro
 $palavraChave	        = $_REQUEST["palavrachave"];
 $order			        = $_REQUEST["order"];
 $comentarios_status    = $_REQUEST["comentarios_status"];
 $qtde			        = $_REQUEST["qtde"];
 $campo			        = $_REQUEST["campo"];
 $ordenacaoCampo        = $_REQUEST["ordenacaocampo"];

 if($order == "")
 {
  $palavraChave        = $_COOKIE["palavraChave$cod_sub"];
  $order			   = $_COOKIE["order$cod_sub"];
  $comentarios_statu   = $_COOKIE["comentarios_status$cod_sub"];
  $qtde				   = $_COOKIE["qtde$cod_sub"];
  $campo			   = $_COOKIE["campo$cod_sub"];
  $ordenacaoCampo	   = $_COOKIE["ordenacaocampo$cod_sub"];
 }
 else
 {
   //Setar as cookies
   @setcookie("palavraChave$cod_sub",$palavraChave);
   @setcookie("order$cod_sub",$order);
   @setcookie("comentarios_status$cod_sub",$comentarios_status);
   @setcookie("qtde$cod_sub",$qtde);
   @setcookie("campo$cod_sub",$campo);
   @setcookie("ordenacaocampo$cod_sub",$ordenacaoCampo);
 
   $_COOKIE["palavraChave$cod_sub"] 	  = $palavraChave;
   $_COOKIE["order$cod_sub"] 			  = $order;
   $_COOKIE["comentarios_status$cod_sub"] = $comentarios_status;
   $_COOKIE["qtde$cod_sub"] 			  = $qtde;
   $_COOKIE["campo$cod_sub"] 			  = $campo;
   $_COOKIE["ordenacaocampo$cod_sub"]     = $ordenacaoCampo;
 }

 $arraCampoNome		= array("Produto","Nome","Nota","Data Adicionado","Código");
 $arraCampoValor	= array("produtos_nome","comentarios_nome","comentarios_nota","comentarios_data","comentarios_id");
 $arraStatus        = array("-1","Todos","1","Ativo","0","Inativo");
 $arraQtde			= array(10, 20, 30, 50, 100);

 // Validação das Variaveis '
 if($campo=="")			  $campo			= 0;
 if($qtde=="")			  $qtde				= 1;
 if($ordenacaoCampo=="")  $ordenacaoCampo	= 0;
 if($pagina=="")          $pagina           = 1;

 if(empty($order) or $order == "Asc")
 {
    $order			= "Asc";
		$nextOrder	= "Desc";
		$seta		= "s_asc.png";
		$descr      = "Ascente";
	}
  else
  {
		$order		= "Desc";
		$nextOrder	= "Asc";
		$seta		= "s_desc.png";
		$descr      = "Decrescente";
	}
  $sql = "SELECT
  comentarios_id,co.produtos_codigo,p.produtos_nome,comentarios_nota,comentarios_data,comentarios_status,comentarios_nome
  FROM comentarios co
  INNER JOIN produtos p  ON  p.produtos_codigo = co.produtos_codigo
  WHERE 1=1";

  if(!empty($palavraChave) and !empty($arraCampoValor[$campo]) and $arraCampoNome[$campo] !="categoria")
  {
	$sql	.= "	AND	" . $arraCampoValor[$campo];
	if(strtoupper($arraCampoNome[$campo])=="Código")
	 $sql	.= " IN (". $palavraChave .") ";
	else
	 $sql	.= " LIKE '%". $palavraChave ."%' ";
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
     	    
     $lista	.=	"<tr class='listaItem'>\n";
     $lista	.=	"	<td class='Sels'><input type='checkbox' class='checkbox' name='sels[]' value='". $linha["comentarios_id"]."' /></td>\n";
     $lista	.=	"	<td>". $linha["produtos_nome"]."</td>\n";
     $lista	.=	"	<td>". $linha["comentarios_nome"]."</td>\n";
     $lista	.=	"	<td>". $linha["comentarios_nota"] ."</td>\n";
     $lista	.=	"	<td>". fct_conversorData($linha["comentarios_data"],1)."</td>\n";
     $lista	.=	"	<td style='text-align:center'>".alterarStatus($linha["comentarios_status"],$linha["comentarios_id"],'comentarios') ."</td>\n";
     $lista  .=  $rotinaClass->menu_rotinas_interno($linha["comentarios_id"]);
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

  $header  .= "<link href='templates/jquery.rating.css' rel='stylesheet' type='text/css' />\n";
  require_once("topo.php");
  require_once("menu_lateral.php");
?>

<div id="conteudo">
   <script type="text/javascript" src="js/jquery.rating.js"></script>
   <script type='text/javascript' src='js/comentarios.js'></script>
 	<div class='titulo'><?= $titulo ?></div>
 	<form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
     <table cellpadding="0" cellspacing="0" border="0" id="filtro">
  		<tr>
				<td class="legenda"><label for="palavrachave">Filtrar por:</label></td>
				<td><input name="palavrachave" type="text" class="palavrachave" value="<?= str_replace('\"', '&quot;',$palavraChave) ?>" size="30" /></td>
				<td class="legenda" width="60"><label for="campo">Campo:</label></td>
				<td><select name="campo" class="log">
         		     <?= fct_Array_MontarLista($arraCampoNome,$campo) ?>
					</select>
                </td>
			</tr>
			<tr>
			  <td class="legenda"><label for="produtos_status">Status:</label></td>
			  <td>
			    <select name="produtos_status" style="width:120px">
        			<?= fct_Array2_MontarLista($arraStatus,$comentarios_status) ?>
			    </select>
      			<td class="legenda"><label for="qtde">Exibir:</label></td>
				<td>
				  <select name="qtde" style="width:100px">
					<?= fct_Array_MontarLista($arraQtde, $qtde) ?>
				   </select>
          		   <input type="submit" value="filtrar"  />
				</td>
			 </tr>
     </table>
     <br />
     Lista de Comentários:&nbsp;&nbsp;<?= $resposta?>
     <? $rotinaClass->menu_rotinas_superior(); ?>
   	 <table class="TableLista" border='0' cellpadding='0' cellspacing='2'>
     	<tr class='cabecalho'>
		 <td class='Sels' title='Clique aqui para selecionar ou remover a seleção de todos os itens.'><input type="checkbox" class='checkbox Todos' name="sels[]" /></td>
         <td class="ordenarLista" id="i0">Produto <?= ordenacao(0) ?></td>
         <td class="ordenarLista" id="i1">Nome    <?= ordenacao(1) ?></td>
         <td class="ordenarLista" id="i2">Nota    <?= ordenacao(2) ?></td>
         <td style="width:100px" class="ordenarLista" id="i3">Data Adicionado <?= ordenacao(3) ?></td>
         <td style="width:100px">Status</td>
       <? $rotinaClass->menu_rotinas_cabecalho(); ?>
      </tr>
     <?= $lista ?>
     <?  if($recordCount1>0 and $reg_pag > 0){  ?>
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
