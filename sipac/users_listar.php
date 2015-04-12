<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: users_listar.php		                        '
---------------------------------------------------------*/
 $form        = "frm_user";
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub       = $rotinaClass->cod_modulo();

//Pegar variaveis de Filtro
 $palavraChave	  = $_REQUEST["palavrachave"];
 $order			      = $_REQUEST["order"];
 $qtde			      = $_REQUEST["qtde"];
 $campo			      = $_REQUEST["campo"];
 $ordenacaoCampo  = $_REQUEST["ordenacaocampo"];

 if($order =="")
 {
  $palavraChave   = $_COOKIE["cpalavraChave$cod_sub"];
  $order			= $_COOKIE["corder$cod_sub"];
	$qtde			= $_COOKIE["cqtde$cod_sub"];
  $campo			= $_COOKIE["ccampo$cod_sub"];
  $ordenacaoCampo	= $_COOKIE["cordenacaocampo$cod_sub"];
 }
 else
 {
    //Setar as cookies
 	@setcookie("cpalavraChave$cod_sub",$palavraChave);
 	@setcookie("corder$cod_sub",$order);
  @setcookie("cqtde$cod_sub",$qtde);
  @setcookie("ccampo$cod_sub",$campo);
  @setcookie("cordenacaocampo$cod_sub",$ordenacaoCampo);
 }

 $arraCampoNome	  = array("Nome","Grupo","CPF");
 $arraCampoValor  = array("users_nome","grupos_nome","users_cpf",);
 $arraQtde		  = array(10, 20, 30, 50, 100);

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
	$order			= "Desc";
	$nextOrder	= "Asc";
	$seta				= "s_desc.png";
	$descr = "Decrescente";
 }

 $SQL = "SELECT
 users_id, users_nome, users_cpf,  grupos_nome
 FROM 	users
 INNER JOIN grupos ON grupos.grupos_id = users.grupos_id
 WHERE 1=1";
 if(!empty($palavraChave) and !empty($arraCampoValor[$campo]))
 {
	$SQL	.= "	AND	" . $arraCampoValor[$campo];
	if(strtoupper($arraCampoNome[$campo])=="ID")
	  $SQL	.= " IN (". $palavraChave .") ";
	else
	 $SQL	.= " LIKE '%". $palavraChave ."%' ";
 }
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

      $lista	.=	"<tr class='listaItem'>\n";
      $lista	.=	"	<td class='Sels'><input type='checkbox' class='checkbox' name='Sels[]' value='". $linha["users_id"]."' /></td>\n";
   	  $lista	.=	"	<td>". $linha["users_nome"]."</td>\n";
   	  $lista	.=	"	<td>". $linha["grupos_nome"]."</td>\n";
   	  $lista	.=	"	<td>". $linha["users_cpf"]."</td>\n";
      $lista  .=  $rotinaClass->menu_rotinas_interno($linha["users_id"]);
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
     Lista de Users:&nbsp;&nbsp;<?= $resposta?>
     <? $rotinaClass->menu_rotinas_superior(); ?>
   	 <table class="TableLista">
     	<tr class='cabecalho'>
		  <td class='Sels' title='Clique aqui para selecionar ou remover a seleção de todos os itens.'><input type="checkbox" class='checkbox Todos' name="Sels[]" /></td>
          <td class="ordenarLista" id="i0">Nome <?= ordenacao(0) ?></td>
          <td class="ordenarLista" id="i1">Grupo <?= ordenacao(1) ?></td>
          <td class="ordenarLista" id="i2">CPF  <?= ordenacao(2) ?></td>
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
  <input type="hidden" name="tipo" value="user" />
	<input type="hidden" name="order" value="<?=$order?>" />
	<input type="hidden" name="ordenacaocampo" value="<?=$ordenacaoCampo?>" />
 </form>
</div>
<? require_once("rodape.php") ?>

