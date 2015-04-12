<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: 27/03/2009                         '
   Página: logs_pesquisar.php		                          '
---------------------------------------------------------*/

 $form        = "frm_log";
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo      = $rotinaClass->menu_rotinas_titulo("");
 $link        = "listar_logs.php";
 $cod_sub     = $rotinaClass->cod_modulo();

  //Variaveis do filtro
 $qtde			 = $_REQUEST["qtde"];
 $order			 = $_REQUEST["order"];
 $ordenacaoCampo = $_REQUEST["ordenacaocampo"];
 $data_de   	 = fct_conversorData($_REQUEST["data_de"],2);
 $data_ate  	 = fct_conversorData($_REQUEST["data_ate"],2);
 $operacao       = $_REQUEST["operacao"];
 $c_modulos      = $_REQUEST["c_modulos"];
 $c_submodulos   = $_REQUEST["c_submodulos"];
 $users_nome     = $_REQUEST["users_nome"];

 $SQL_modulo    = "SELECT modulos_id, modulos_nome FROM modulos";
 $arraOperacao = array("0","Selecione","-1","Indiferente");
 $SQL_operacao = "SELECT DISTINCT logs_historico_operacao  FROM logs_historico WHERE logs_historico_operacao IS NOT NULL AND logs_historico_operacao !=''";
 $result = $conn->sql($SQL_operacao);

 while($op = mysql_fetch_array($result))
 {
  $arraOperacao[] = $op[0];
  $arraOperacao[] = $op[0];
 }

 $arraCampoValor	= array("logs_historico_operacao","logs_historico_data","logs_historico_hora","modulos_nome","submodulos_nome","users_nome");
 $arraQtde				= array(10, 20, 30, 50, 100);

 // Validação das Variaveis '
 if($qtde == "")     		$qtde				= 1;
 if($ordenacaoCampo=="")	$ordenacaoCampo		= 1;

 if(empty($order) or $order == "Desc")
 {
    $order	   = "Desc";
	$nextOrder = "Asc";
	$seta	   = "s_desc.png";
	$descr     = "Decrescente";
 }
 else
 {
    $order		= "Asc";
	$nextOrder	= "Desc";
	$seta		= "s_asc.png";
	$descr      = "Ascente";
 }

 $sql = "SELECT
 logs_historico_id, logs_historico_operacao, logs_historico_data,
 logs_historico_hora, modulos_nome, submodulos_nome, users_nome
 FROM logs_historico
 LEFT JOIN submodulos ON submodulos.submodulos_id = logs_historico.submodulos_id
 LEFT JOIN modulos ON modulos.modulos_id = submodulos.modulos_id
 LEFT JOIN users ON users.users_id = logs_historico.users_id
 WHERE 1=1";

  //1. Filtrar apenas pela data inicial até o dia de hoje
  if(!empty($data_de) and empty($data_ate))
    $sql .= " AND logs_historico_data  >=  '$data_de'";

  //2. Filtrar apenas pela data final (do começo até o dia selecionado)
  if(empty($data_de) and !empty($data_ate))
   $sql .= " AND logs_historico_data  <=  '$data_ate'";

  //3. Filtrar a partir da data inicial até a data final
  if(!empty($data_de) and !empty($data_ate))
   $sql .= " AND (logs_historico_data  BETWEEN '$data_de' AND '$data_ate')";

  //4. Filtrar por tipo de log
  if(!empty($logs_historico_operacao))
   $sql .= " AND logs_historico_operacao='$logs_historico_operacao'";

  //5. Filtrar por Módulo
  if(!empty($modulos_id))
   $sql .=" AND modulos.modulos_id='$modulos_id'";

  //6. Filtrar por Submódulo
  if(!empty($submodulos_id))
   $sql .=" AND submodulos.submodulos_id='$submodulos_id'";

  //7. Filtrar por Usuário
  if(!empty($users_nome))
   $sql .=" AND users.users_nome LIKE '%$users_nome%'";

  $sql .= "	ORDER BY " . $arraCampoValor[$ordenacaoCampo] . " " . $order;
  $result = $conn->sql($sql);
  $recordCount1 = mysql_num_rows($result);

  //Paginação
  $mult_pag = new Mult_Pag();
  $mult_pag->num_pesq_pag = $arraQtde[$qtde];
  $result = $mult_pag->Executar($sql, "otimizada", "mysql");
  $reg_pag = mysql_num_rows($result);

  if($recordCount1 > 0)
  {
    for ($indx = 0; $indx < $reg_pag; $indx++)
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
  <script type="text/javascript" src="js/jquery.selects.js"></script>
  <script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
  <script type='text/javascript' src='js/logs.js'></script>
 	<div class='titulo'><?= $titulo ?></div>
 	<form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
     <input name="return" type="hidden" value="<?=$pageAtual ?>" />
     <table cellpadding="0" cellspacing="0" border="0" id="filtro">
		 <tr>
		  <td class="legenda"><label for="data_de">Data Inicial:</label></td>
		  <td>
				<input name="data_de" type="text" size="10" maxlength="10" value="<?= fct_conversorData($data_de,1)?>" />
				<img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário"  class="calendar" id="data_de" />
        (dd/mm/aaaa)
			</td>
		 </tr>
		 <tr>
		  <td class="legenda"><label for="data_ate">Data Final:</label></td>
		  <td>
				<input name="data_ate" type="text" size="10" maxlength="10" value="<?= fct_conversorData($data_ate,1)?>" />
        <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="data_ate" />
			 (dd/mm/aaaa)
			</td>
		 </tr>
		 <tr>
		  <td class="legenda"><label for="logs_historico_operacao">Tipo:</label></td>
		  <td>
			 <select name="logs_historico_operacao" class="log">
         <?=fct_Array2_MontarLista($arraOperacao,$operacao) ?>
			 </select>
			</td>
		 </tr>
		 <tr>
		  <td class="legenda"><label for="modulos_id">Módulo:</label></td>
		  <td>
				<select name="modulos_id" class="log" id="modulos_id">
       	<?=fct_MontarLista2($SQL_modulo,$modulos_id) ?>
      	</select>
			</td>
		 </tr>
     <tr>
     <td class="legenda"><label for="submodulos_id">Submódulo:</label></td>
     <td>
      <select name="submodulos_id" id='submodulos_id' disabled="disabled" class='log'>
        <option value="0">&nbsp;</option>
      </select>
     </td>
    </tr>
		  <tr>
		  <td class="legenda"><label for="users_nome">Usuário:</label></td>
		  <td>
       <input name="users_nome" type="text" value="<?=$users_nome ?>" />
       <input name="btn_filtrar" type="submit" value="filtrar" />
			</td>
		 </tr>
		</table>
		 <br />
    Ações efetuadas no sistema:&nbsp;&nbsp;<?= $resposta?>
     <? $rotinaClass->menu_rotinas_superior(); ?>
   	 <table class="TableLista">
     	<tr class='cabecalho'>
        <td class="ordenarLista" id="i0">Tipo      <?= ordenacao(0) ?></td>
        <td class="ordenarLista" id="i1">Data      <?= ordenacao(1) ?></td>
        <td class="ordenarLista" id="i2">Hora      <?= ordenacao(2) ?></td>
        <td class="ordenarLista" id="i3">Módulo    <?= ordenacao(3) ?></td>
        <td class="ordenarLista" id="i4">Suhmódulo <?= ordenacao(4) ?></td>
        <td class="ordenarLista" id="i5">Usuário   <?= ordenacao(5) ?></td>
       <? $rotinaClass->menu_rotinas_cabecalho(); ?>
      </tr>
     <?= $lista ?>
     <?  if($recordCount > 0 and $reg_pag>0){  ?>
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

