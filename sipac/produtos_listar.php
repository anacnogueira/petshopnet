<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 064/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: produtos_listar.php		                        '
---------------------------------------------------------*/

 $form        = "frm_produto1";
 require_once("lib/configs.php");
 require_once("lib/class.paginacao.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("Listar");
 $cod_sub       = $rotinaClass->cod_modulo();
 
//Pegar variaveis de Filtro
 $produtos_nome			 = $_REQUEST["produtos_nome"];
 $fornecedores_nome	 = $_REQUEST["fornecedores_nome"];
 $produtos_codigo		 = $_REQUEST["produtos_codigo"];
 $produtos_status    = $_REQUEST["produtos_status"];
 $qtde					     = $_REQUEST["qtde"];
 $imagem					   = $_REQUEST["imagem"];
 $order						   = $_REQUEST["order"];
 $ordenacaoCampo	   = $_REQUEST["ordenacaocampo"];

 if($order =="")
 {
  $produtos_nome     = $_COOKIE["cprodutos_nome$cod_sub"];
  $fornecedores_nome = $_COOKIE["cfornecedores_nome$cod_sub"];
  $produtos_codigo   = $_COOKIE["cprodutos_codigo$cod_sub"];
  $produtos_status	 = $_COOKIE["produtos_status$cod_sub"];
	$qtde				       = $_COOKIE["cqtde$cod_sub"];
  $imagem				     = $_COOKIE["cimageme$cod_sub"];
  $order				     = $_COOKIE["corder$cod_sub"];
  $ordenacaoCampo	   = $_COOKIE["cordenacaocampo$cod_sub"];
 }
 else
 {
   //Setar as cookies
 	 setcookie("cprodutos_nome$cod_sub",$produtos_nome);
 	 setcookie("cfornecedores_nome$cod_sub",$fornecedores_nome);
 	 setcookie("cprodutos_codigo$cod_sub",$produtos_codigo);
   setcookie("produtos_status$cod_sub",$produtos_status);
   setcookie("cqtde$cod_sub",$qtde);
   setcookie("cimagem$cod_sub",$imegem);
   setcookie("corder$cod_sub",$order);
   setcookie("cordenacaocampo$cod_sub",$ordenacaoCampo);
 }

 $arraCampoValor	= array("p.produtos_codigo","produtos_nome","fornecedores_nome","categorias_descricao");
 $arraStatus      = array("-1","Todos","S","Em estoque","N","Fora de estoque");
 $arraImagem      = array("-1","Todos","S","Sim","N","Não");
 $arraQtde				= array(10, 20, 30, 50, 100);

 // Validação das Variaveis '
 if($produtos_status=="")	$produtos_status	= "-1";
 if($imagem=="")	        $imagem	          = "-1";
 if($qtde=="")						$qtde					    = 1;
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
  $sql = "SELECT  p.produtos_id, produtos_nome, fornecedores_nome, produtos_status, produtos_preco,
  GROUP_CONCAT(categorias_descricao) categorias_descricao,p.produtos_codigo
  FROM produtos p
  LEFT JOIN fornecedores f ON f.fornecedores_id = p.fornecedores_id
  LEFT JOIN produtos_categoria pc ON  pc.produtos_codigo = p.produtos_codigo
  LEFT JOIN categorias c ON c.categorias_id = pc.categorias_id
  WHERE 1=1";
	if(!empty($produtos_nome))
    $sql	.= "	AND	p.produtos_nome LIKE '%" . $produtos_nome."%'";
	if(!empty($fornecedores_nome))
		$sql	.= " AND f.fornecedores_nome LIKE '%". $fornecedores_nome ."%'";
  if(!empty($produtos_codigo))
		$sql	.= " AND p.produtos_codigo = '". $produtos_codigo ."'";
  if($produtos_status != "-1")
    $sql .= " AND p.produtos_status = '".$produtos_status."'";
  if($imagem == "S"){
     $sql .= " AND p.produtos_codigo IN (
        SELECT i.produtos_codigo FROM produtos_imagens i
        WHERE p.produtos_codigo = i.produtos_codigo)";
  }
  if($imagem == "N"){
     $sql .= " AND p.produtos_codigo NOT IN (
        SELECT i.produtos_codigo FROM produtos_imagens i
        WHERE p.produtos_codigo = i.produtos_codigo)";
  }


	$sql .= " GROUP BY p.produtos_codigo";
	$sql .= "	ORDER BY " . $arraCampoValor[$ordenacaoCampo] . " " . $order;
 //echo $sql;
 $result = $conn->sql($sql);
 $recordCount1 = mysql_num_rows($result);
 
 //Paginação
 $mult_pag = new Mult_Pag();
 $mult_pag->num_pesq_pag = $arraQtde[$qtde];
 $result = $mult_pag->Executar($sql, "otimizada", "mysql");
 $reg_pag = mysql_num_rows($result);
  
 if($recordCount1 >0){
  for ($indx = 0; $indx < $reg_pag; $indx++) {
    $linha = mysql_fetch_array($result);

    $lista	.=	"<tr class='listaItem'>\n";
    $lista	.=	"	<td class='checkbox'><input type='checkbox' class='checkbox' name='sels[]' value='". $linha["produtos_id"]."' /></td>\n";
    $lista	.=	"	<td>". $linha["produtos_codigo"]."</td>\n";
    $lista	.=	"	<td>". html_entity_decode($linha["produtos_nome"])."</td>\n";
    $lista	.=	"	<td>". number_format($linha["produtos_preco"],2,",",".")."</td>\n";
    $lista	.=	"	<td>". html_entity_decode($linha["fornecedores_nome"])."</td>\n";
    $lista	.=	"	<td>". html_entity_decode($linha["categorias_descricao"])."</td>\n";
    $lista	.=	"	<td style='text-align:center'>".alterarStatus($linha["produtos_status"],$linha["produtos_id"],"produtos") ."</td>\n";
    $lista  .=  $rotinaClass->menu_rotinas_interno($linha["produtos_id"]);
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
				<td class="legenda"><label for="produtos_nome">Nome:</label></td>
				<td><input name="produtos_nome" id="produtos_nome" type="text" value="<?= $produtos_nome ?>" size="30" /></td>
        <td class="legenda"><label for="fornecedores_nome">Fabricante:</label></td>
        <td>
          <input name="fornecedores_nome" id="fornecedores_nome"  class="completar" type="text" style='width: 200px' value="<?=$fornecedores_nome ?>" />
         </td>
      </tr>
      <tr>
        <td class="legenda"><label for="produtos_codigo">Código:</label></td>
				<td><input name="produtos_codigo" id="produtos_codigo" type="text" value="<?=$produtos_codigo ?>" /></td>
        <td class="legenda"><label for="produtos_status">Status:</label></td>
			  <td>
			    <select name="produtos_status">
        <?= fct_Array2_MontarLista($arraStatus,$produtos_status) ?>
			    </select>
			  </td>
      </tr>
      <tr>
        <td class="legenda">Imagem</td>
        <td>
          <select name="imagem">
            <?= fct_Array2_MontarLista($arraImagem, $imagem); ?>
          </select>
        </td>
        <td class="legenda"><label for="qtde">Exibir:</label></td>
				<td>
					<select name="qtde">
					<?= fct_Array_MontarLista($arraQtde, $qtde) ?>
					</select>
          <input type="submit" value="filtrar"  />
				</td>

			 </tr>
     </table>
     <br />
     Lista de Produtos:&nbsp;&nbsp;<?= $resposta?>
     <? $rotinaClass->menu_rotinas_superior(); ?>
   	 <table class="TableLista">
     	<tr class='cabecalho'>
			 <td class='Sels' title='Clique aqui para selecionar ou remover a seleção de todos os itens.'><input type="checkbox" class='checkbox Todos' name="sels[]" /></td>
       <td class="ordenarLista" id="i0">Cód. <?= ordenacao(0) ?></td>
       <td class="ordenarLista" id="i1">Produto <?= ordenacao(1) ?></td>
       <td>Preço</td>
       <td class="ordenarLista" id="i2">Fabricante  <?= ordenacao(2) ?></td>
       <td class="ordenarLista" id="i3">Categoria(s)  <?= ordenacao(3) ?></td>
       <td>Status</td>
       <? $rotinaClass->menu_rotinas_cabecalho(); ?>
      </tr>
     <?= $lista ?>
     <? if($recordCount1 >0 and $reg_pag > 0){ ?>
     <tr>
      <td colspan='10' class='paginacao'>
        <ul>
          <?
            $todos_links = $mult_pag->Construir_Links("strings", "sim");
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

