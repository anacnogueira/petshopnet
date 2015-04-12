<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 11/10/2007                                     '
   Última Modificação: 15/10/2009                         '
   Página: pedidos_listar.php			                        '
---------------------------------------------------------*/

 $form        = "frm_pedido";
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub       = $rotinaClass->cod_modulo();

 //Pegar variaveis de Filtro
 $palavraChave		= $_REQUEST["palavrachave"];
 $order				= $_REQUEST["order"];
 $status            = $_REQUEST["status"];
 $qtde				= $_REQUEST["qtde"];
 $campo				= $_REQUEST["campo"];
 $ordenacaoCampo	= $_REQUEST["ordenacaocampo"];

 if($status == "")
 {
    $palavraChave    = $_COOKIE["palavraChave$cod_sub"];
    $order			 = $_COOKIE["order$cod_sub"];
    $status			 = $_COOKIE["status$cod_sub"];
    $qtde			 = $_COOKIE["qtde$cod_sub"];
	$campo			 = $_COOKIE["campo$cod_sub"];
    $ordenacaoCampo	 = $_COOKIE["ordenacaocampo$cod_sub"];
 }
 else
 {
    //Setar as cookies
 	@setcookie("palavraChave$cod_sub",$palavraChave);
    @setcookie("order$cod_sub",$order);
    @setcookie("status$cod_sub",$status);
    @setcookie("qtde$cod_sub",$qtde);
    @setcookie("campo$cod_sub",$campo);
    @setcookie("ordenacaocampo$cod_sub",$ordenacaoCampo);
 
	$_COOKIE["palavraChave$cod_sub"] 	= $palavraChave;
    $_COOKIE["order$cod_sub"] 			= $order;
    $_COOKIE["status$cod_sub"] 			= $status;
    $_COOKIE["qtde$cod_sub"] 			= $qtde;
 	$_COOKIE["campo$cod_sub"] 			= $campo;
    $_COOKIE["ordenacaocampo$cod_sub"]  = $ordenacaoCampo;
 }

 $arraCampoNome		= array("N° Pedido","Cliente","Data da Compra");
 $arraCampoValor	= array("pe.pedidos_id","CONCAT( cli.clientes_nome, ' ', cli.clientes_sobrenome )","valor_total","data_compra","pedidos_status_nome");
 $arraStatus        = array("0","Todos","1","Pendente","2","Processando","3","Enviado","4","Cancelado");
 $arraQtde			= array(10, 20, 30, 50, 100);

 // Validação das Variaveis '
 if($campo=="")				$campo				= 0;
 if($qtde=="")				$qtde				= 1;
 if($status=="")			$staus				= 0;
 if($ordenacaoCampo=="")	$ordenacaoCampo		= 0;
 

 if(empty($order) or $order == "Asc")
 {
    $order		= "Asc";
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
 pe.pedidos_id,
 CONCAT( cli.clientes_nome, ' ', cli.clientes_sobrenome ) AS clientes_nomecompleto,
 data_compra,
 pedidos_status_nome,
 valor_total
 FROM pedidos pe
 INNER JOIN pedido_total pt ON pt.pedidos_id = pe.pedidos_id
 INNER JOIN clientes cli ON cli.clientes_id = pe.clientes_id
 INNER JOIN pedidos_status ps ON ps.pedidos_status_id = pe.pedidos_status_id
 WHERE 1 =1";
 
 if(isset($_REQUEST["Sels"]))
  $sql .=" AND clientes.clientes_id = '".$_REQUEST["Sels"]."'";
  
 if(!empty($palavraChave) and !empty($arraCampoValor[$campo]) and $arraCampoNome[$campo] !="categoria")
 {
   $sql .= " AND " . $arraCampoValor[$campo];
   if($arraCampoNome[$campo]=="N° Pedido")
	$sql	.= " IN (". $palavraChave .") ";
   elseif($arraCampoNome[$campo]=="Data da Compra")
    $sql	.= " LIKE '%". fct_conversorData($palavraChave,2) ."%' ";
   else
	$sql 	.= " LIKE '%". $palavraChave ."%' ";
 }
 if(!empty($status))
  $sql .= " AND pe.pedidos_status_id='".$status."'";
	
 $sql .= " GROUP BY pe.pedidos_id ";
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
     $lista	.=	"	<td class='Sels'><input type='checkbox' class='checkbox' name='sels[]' value='". $linha["pedidos_id"]."' /></td>\n";
     $lista	.=	"	<td>". $linha["pedidos_id"]."</td>\n";
     $lista	.=	"	<td>". $linha["clientes_nomecompleto"]."</td>\n";
     $lista	.=	"	<td>". number_format($linha["valor_total"],2,",",".")."</td>\n";
     $lista	.=	"	<td>". fct_conversorData($linha["data_compra"],4)."</td>\n";
     $lista	.=	"	<td>". $linha["pedidos_status_nome"]."</td>\n";
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
		  <td class="legenda" width="60"><label for="campo">Campo:</label></td>
		  <td><select name="campo" class="log">
         		<?= fct_Array_MontarLista($arraCampoNome,$campo) ?>
			  </select>
           </td>
		</tr>
        <tr>
		   <td class="legenda"><label for="status">Status:</label></td>
		   <td><select name="status">
                 <?= fct_Array2_MontarLista($arraStatus,$status) ?>
			   </select>
      	   <td class="legenda"><label for="qtde">Exibir:</label></td>
		   <td><select name="qtde" >
			 	<?= fct_Array_MontarLista($arraQtde, $qtde) ?>
			   </select>
              <input type="submit" value="filtrar"  />
		   </td>
		</tr>
	</table> <br />
   Lista de Pedidos:&nbsp;&nbsp;<?= $resposta?>
   <? $rotinaClass->menu_rotinas_superior(); ?>
   <table class="TableLista" border='0' cellpadding='0' cellspacing='2'>
     <tr class='cabecalho'>
	   <td class='Sels' title='Clique aqui para selecionar ou remover a seleção de todos os itens.'><input type="checkbox" class='checkbox Todos' name="sels[]" /></td>
       <td style="width:100px;" class="ordenarLista" id="i0">N° Pedido    <?= ordenacao(0) ?></td>
       <td class="ordenarLista" id="i1">Cliente      <?= ordenacao(1) ?></td>
       <td class="ordenarLista" id="i2">Total Pedido <?= ordenacao(2) ?></td>
       <td class="ordenarLista" id="i3">Data Compra  <?= ordenacao(3) ?></td>
       <td class="ordenarLista" id="i4">Status      <?= ordenacao(4) ?></td>
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
