<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: logs_listar.php		                        '
---------------------------------------------------------*/
$form        = "frm_logs";
 require_once("lib/configs.php");
 $titulo      = $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub     = $rotinaClass->cod_modulo();

 $order				  = $_REQUEST["order"];
 $ordenacaoCampo	  = $_REQUEST["ordenacaocampo"];

 $arraCampoValor	= array("logs_historico_operacao","logs_historico_data","logs_historico_hora","modulos_nome","submodulos_nome","users_nome");

  // Validação das Variaveis '
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

 $sql = "SELECT logs_historico_id, logs_historico_operacao, logs_historico_data,
 logs_historico_hora, modulos_nome, submodulos_nome, users_nome
 FROM logs_historico
 LEFT JOIN submodulos ON submodulos.submodulos_id = logs_historico.submodulos_id
 LEFT JOIN modulos ON modulos.modulos_id = submodulos.modulos_id
 LEFT JOIN users ON users.users_id = logs_historico.users_id
 WHERE (CONCAT(logs_historico_data,' ',logs_historico_hora) BETWEEN DATE_SUB(now(),interval 24 HOUR) AND NOW())
 ORDER BY " . $arraCampoValor[$ordenacaoCampo] . " " . $order;
 $result = $conn->sql($sql);
 $recordCount = mysql_num_rows($result);

 if($recordCount > 0)
 {
    for ($indx = 0; $indx < $recordCount; $indx++)
    {
      $linha = mysql_fetch_array($result);
      $lista	.=	"<tr class='listaItem'>\n";
      $lista	.=	"	<td><a href='logs_detalhes.php?Sels=".$linha["logs_historico_id"]."&amp;link=$pageAtual'>". $linha["logs_historico_operacao"]."</a></td>\n";
      $lista	.=	"	<td>". fct_conversorData($linha["logs_historico_data"],1)."</td>\n";
      $lista	.=	"	<td>". $linha["logs_historico_hora"]."</td>\n";
      $lista	.=	"	<td>". $linha["modulos_nome"]."</td>\n";
      $lista	.=	"	<td>". $linha["submodulos_nome"]."</td>\n";
      $lista	.=	"	<td>". $linha["users_nome"]."</td>\n";
      $lista	.=	"</tr>\n";
    }
 }
 else
  $lista	=	"<tr class='listaItem'><td colspan='10' align='center'>Nenhum registro encontrado</td></tr>\r\n";
 if($recordCount == 1)
	$resposta = "<span class='TextoPequeno'>1 registro encontrado</span>";
 elseif($recordCount > 1)
	$resposta = "<span class='TextoPequeno'>". $recordCount1 ." registros encontrados</span>";
 else
  $resposta = "<span class='TextoPequeno'>nenhum registro encontrado</span>";

 require_once("topo.php");
 require_once("menu_lateral.php");

 ?>
<div id="conteudo">
 	<div class='titulo'><?= $titulo ?></div>
 	<form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
     Ações efetuadas no sistema nas últimas 24 horas:&nbsp;&nbsp;<?= $resposta?>
     <? $rotinaClass->menu_rotinas_superior(); ?>
   	 <table class="TableLista">
     	<tr class='cabecalho'>
        <td class="ordenarLista" id="i0">Tipo      <?= ordenacao(0) ?></td>
        <td class="ordenarLista" id="i1">Data      <?= ordenacao(1) ?></td>
        <td class="ordenarLista" id="i2">Hora      <?= ordenacao(2) ?></td>
        <td class="ordenarLista" id="i3">Módulo    <?= ordenacao(3) ?></td>
        <td class="ordenarLista" id="i4">Submódulo <?= ordenacao(4) ?></td>
        <td class="ordenarLista" id="i5">Usuário   <?= ordenacao(5) ?></td>
       <? $rotinaClass->menu_rotinas_cabecalho(); ?>
      </tr>
     <?= $lista ?>
    </table>
	<input type="hidden" name="order" value="<?=$order?>" />
	<input type="hidden" name="ordenacaocampo" value="<?=$ordenacaoCampo?>" />
 </form>
</div>
<? require_once("rodape.php") ?>

