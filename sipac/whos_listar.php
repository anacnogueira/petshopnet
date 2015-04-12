<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 24/01/2008                                     '
   Última Modificação: 16/10/2009                         '
   Página: who_listar.php		                              '
---------------------------------------------------------*/
 $form        = "frm_who";
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub       = $rotinaClass->cod_modulo();
 
//Pegar variaveis de Filtro
 $order			  = $_REQUEST["order"];
 $qtde			  = $_REQUEST["qtde"];
 $ordenacaoCampo  = $_REQUEST["ordenacaocampo"];

 if($order =="")
 {
   $order		    = $_COOKIE["order$cod_sub"];
   $qtde			= $_COOKIE["qtde$cod_sub"];
   $ordenacaoCampo  = $_COOKIE["ordenacaocampo$cod_sub"];
 }
 else
 {
   //Setar as cookies
   @setcookie("order$cod_sub",$order);
   @setcookie("qtde$cod_sub",$qtde);
   @setcookie("ordenacaocampo$cod_sub",$ordenacaoCampo);

   $_COOKIE["order$cod_sub"] = $order;
   $_COOKIE["qtde$cod_sub"] = $qtde;
   $_COOKIE["ordenacaocampo$cod_sub"] = $ordenacaoCampo;
 }

 $arraCampoValor	= array("clientes_id","nome_completo","ip_address","hora_entrada","hora_ultimo_click");
 $arraQtde				= array(10, 20, 30, 50, 100);

 // Validação das Variaveis '
 if($campo=="")				$campo				= 0;
 if($qtde=="")				$qtde				= 1;
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
	
	$xx_min_atras = (time() - 900);
	// remove entradas que já expiraram
    $SQL = "DELETE FROM usuarios_online WHERE  hora_ultimo_click < '$xx_min_atras'";
    $result = $conn->sql($SQL);
  
  $sql = "SELECT
  usuarios_online_id, clientes_id, nome_completo, ip_address,
  hora_entrada, hora_ultimo_click
  FROM usuarios_online
  WHERE 1=1";
  $sql .= "	ORDER BY " . $arraCampoValor[$ordenacaoCampo] . " " . $order;
 
  //echo $SQL;
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
     $tempo_online = (time() - $linha['hora_entrada']);

     $lista	.=	"<tr class='listaItem'>\n";
     $lista	.=	"	<td>".gmdate('H:i:s',$tempo_online)."</td>\n";
   	 $lista	.=	"	<td>". $linha["clientes_id"]."</td>\n";
   	 $lista	.=	"	<td><a href='whos_detalhes.php?Sels=".$linha["usuarios_online_id"]."'>". $linha["nome_completo"]."</td>\n";
     $lista	.=	"	<td>". $linha["ip_address"]."</td>\n";
   	 $lista	.=	"	<td>". date('H:i:s',$linha["hora_entrada"])."</td>\n";
   	 $lista	.=	"	<td>". date('H:i:s', $linha["hora_ultimo_click"])."</td>\n";
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
        <td class="legenda"><label for="qtde">Exibir:</label></td>
		<td colspan="3">
			<select name="qtde">
		    	<?= fct_Array_MontarLista($arraQtde, $qtde) ?>
			</select>
            <input type="submit" value="filtrar"  />
		</td>
	  </tr>
     </table><br />
     Lista de Users:&nbsp;&nbsp;<?= $resposta?>
   	 <table class="TableLista" border='0' cellpadding='0' cellspacing='2'>
     	<tr class='cabecalho'>
         <td>Online</td>
         <td class="ordenarLista" id="i0">ID <?= ordenacao(0) ?></td>
         <td class="ordenarLista" id="i1">Nome Completo <?= ordenacao(1) ?></td>
         <td class="ordenarLista" id="i2">Endereço IP <?= ordenacao(2) ?></td>
         <td class="ordenarLista" id="i3">Entrada <?= ordenacao(3) ?></td>
         <td class="ordenarLista" id="i4">Último Click <?= ordenacao(4) ?></td>
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
