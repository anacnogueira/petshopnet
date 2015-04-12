<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: clientes_listar.php		                        '
---------------------------------------------------------*/
 $form        = "frm_cliente"; 
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub     = $rotinaClass->cod_modulo();
 

//Pegar variaveis de Filtro
 $palavraChave			= $_REQUEST["palavrachave"];
 $order					= $_REQUEST["order"];
 $qtde					= $_REQUEST["qtde"];
 $campo					= $_REQUEST["campo"];
 $ordenacaoCampo	    = $_REQUEST["ordenacaocampo"];

 //Setar as cookies
 setcookie("palavraChave$cod_sub",$palavraChave);
 setcookie("order$cod_sub",$order);
 setcookie("qtde$cod_sub",$qtde);
 setcookie("campo$cod_sub",$campo);
 setcookie("ordenacaocampo$cod_sub",$ordenacaoCampo);

 if($order == "")
 {
   $palavraChave      = $_COOKIE["palavraChave$cod_sub"];
   $order			  = $_COOKIE["order$cod_sub"];
   $qtde			  = $_COOKIE["qtde$cod_sub"];
   $campo			  = $_COOKIE["campo$cod_sub"];
   $ordenacaoCampo	  = $_COOKIE["ordenacaocampo$cod_sub"];
 }
 else
 {
   $_COOKIE["palavraChave$cod_sub"] 	 = $palavraChave;
   $_COOKIE["order$cod_sub"] 			 = $order;
   $_COOKIE["qtde$cod_sub"] 			 = $qtde;
   $_COOKIE["campo$cod_sub"] 			 = $campo;
   $_COOKIE["ordenacaocampo$cod_sub"]    = $ordenacaoCampo;
 }

 $arraCampoNome		= array("Código","Nome","Conta Criada em");
 $arraCampoValor	= array("cli.clientes_id","CONCAT(clientes_nome,' ',clientes_sobrenome)","clientes_historico_data_conta_criada");
 $arraQtde				= array(10, 20, 30, 50, 100);

 // Validação das Variaveis '
 if($campo=="")					 	$campo			  = 0;
 if($qtde=="")						$qtde			  = 1;
 if($ordenacaoCampo=="")	        $ordenacaoCampo	  = 0;
 if($pagina=="")                    $pagina           = 1;

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
  $sql = "SELECT DISTINCT
  cli.clientes_id,
  CONCAT(clientes_nome,' ',clientes_sobrenome) as clientes_nomecompleto,
  clientes_historico_data_conta_criada
  FROM clientes cli
  INNER JOIN clientes_historico  ch ON  ch.clientes_id = cli.clientes_id
  WHERE 1=1";
  if(!empty($palavraChave) and !empty($arraCampoValor[$campo]) and $arraCampoNome[$campo] !="categoria")
  {
	$sql	.= "	AND	" . $arraCampoValor[$campo];
	if($arraCampoNome[$campo]=="Código")
	  $sql	.= " IN (". $palavraChave .") ";
	elseif($arraCampoNome[$campo]=="Conta Criada em")
	  $sql	.= " LIKE '%". fct_conversorData($palavraChave,2) ."%' ";
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
     $lista	.=	"	<td class='Sels'><input type='checkbox' class='checkbox' name='sels[]' value='". $linha["clientes_id"]."' /></td>\n";
     $lista	.=	"	<td>". $linha["clientes_id"]."</td>\n";
	 $lista	.=	"	<td>". $linha["clientes_nomecompleto"]."</td>\n";
     $lista	.=	"	<td>". fct_conversorData($linha["clientes_historico_data_conta_criada"],4)."</td>\n";
     $lista  .=  $rotinaClass->menu_rotinas_interno($linha["clientes_id"]);
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
       	  <td class="legenda" colspan="3"><label for="qtde">Exibir:</label></td>
		  <td>
			<select name="qtde">
			  <?= fct_Array_MontarLista($arraQtde, $qtde) ?>
			</select>
            <input type="submit" value="filtrar" />
		  </td>
		</tr>
     </table><br />
     Lista de Clientes:&nbsp;&nbsp;<?= $resposta?>
     <? $rotinaClass->menu_rotinas_superior(); ?>
   	 <table class="TableLista" border='0' cellpadding='0' cellspacing='2'>
     	<tr class='cabecalho'>
		 <td class='Sels' title='Clique aqui para selecionar ou remover a seleção de todos os itens.'><input type="checkbox" class='checkbox Todos' name="sels[]" /></td>
         <td style='width:100px' class="ordenarLista" id="i0">Cód. <?= ordenacao(0) ?></td>
		 <td class="ordenarLista" id="i1">Nome <?= ordenacao(1) ?></td>
         <td style='width:150px' class="ordenarLista" id="i2">Conta Criada Em <?= ordenacao(2) ?></td>
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
