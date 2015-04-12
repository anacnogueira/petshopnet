<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 16/12/2007                                     '
   �ltima Modifica��o: 16/10/2009                         '
   P�gina: pedidos_clientes.php        	                  '
---------------------------------------------------------*/
 $form        = "frm_pedido_cliente";
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo      = $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub     = $rotinaClass->cod_modulo();
 
 //Pegar variaveis de Filtro
 
 $order				  = $_REQUEST["order"]; 
 $ordenacaoCampo	  = $_REQUEST["ordenacaocampo"];

 if($order =="")
 {
  
  $order			   = $_COOKIE["corder$cod_sub"];
  $ordenacaoCampo	   = $_COOKIE["cordenacaocampo$cod_sub"];
 }
 else
 {
   //Setar as cookies
   @setcookie("corder$cod_sub",$order);
   @setcookie("cordenacaocampo$cod_sub",$ordenacaoCampo);
 }

 $arraCampoNome	= array("CONCAT(cl.clientes_nome,'  ',cl.clientes_sobrenome)","COUNT(pp.produtos_id)");

 // Valida��o das Variaveis '
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
 CONCAT(cl.clientes_nome,'  ',cl.clientes_sobrenome) as nome_cliente,
 COUNT(pp.produtos_codigo) as total
 FROM clientes cl
 INNER JOIN pedidos p ON p.clientes_id = cl.clientes_id
 INNER JOIN pedidos_produtos pp ON p.pedidos_id = pp.pedidos_id
 WHERE pedidos_status_id=3 GROUP BY cl.clientes_id ORDER BY total DESC";
 $result = $conn->sql($sql);
 $recordCount1 = mysql_num_rows($result);
 
 //Pagina��o
 $mult_pag = new Mult_Pag();
 $mult_pag->num_pesq_pag = 20;
 $result = $mult_pag->Executar($sql, "otimizada", "mysql");
 $reg_pag = mysql_num_rows($result);
 $pos = 1;
 if($recordCount1 >0)
 {
    for ($indx = 0; $indx < $reg_pag; $indx++)
    {
		 if($pos <10)
		  $pos = "0".$pos;
		 $linha = mysql_fetch_array($result);

     $lista	.=	"<tr class='listaItem'>\n";
     $lista	.=	"	<td>". $pos ."</td>\n";
     $lista	.=	"	<td>". $linha["nome_cliente"]."</td>\n";
     $lista	.=	"	<td>". $linha["total"]."</td>\n";
     $lista	.=	"</tr>\n";
     $pos++;
    }
   }
 else
  $lista =	"<tr class='listaItem'><td colspan='10' align='center'>Nenhum registro encontrado</td></tr>\r\n";
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
 <form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
  <br />
  Lista de Pedidos:&nbsp;&nbsp;<?= $resposta?>
  <table class="TableLista" border='0' cellpadding='0' cellspacing='2'>
   	<tr class='cabecalho'>
	   <td class='Sels'>Pos.</td>
        <td class="ordenarLista" id="i0">Cliente <?= ordenacao(0) ?></td>
        <td class="ordenarLista" id="i1">Qtde <?= ordenacao(1) ?></td>
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