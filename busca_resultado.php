<?
  $title = "Resultado da Busca";
  require_once("lib/configs.php");

  //Resultado de Busca
  $keyword    = trim($_POST["keyWord"]);
  $arraBusca  = explode(" ",$keyword);
  for($i = 0;$i<count($arraBusca);$i++){
    $arraBusca[$i] = htmlentities($arraBusca[$i],ENT_QUOTES);
    $where .= " AND (produtos_nome LIKE '%".mysql_real_escape_string($arraBusca[$i])."%'
    OR prod.produtos_codigo IN (SELECT produtos_codigo FROM produtos_relacionamentos 
    WHERE palavra_chave LIKE '%".mysql_real_escape_string($arraBusca[$i])."%'))";
  }
  $order = "ORDER BY prod.produtos_id DESC";
  $limit = "";
  $paginacao = "S";

  require_once("topo.php");
  require_once("login_topo.php");
  require_once("busca.php");
  require_once("categorias.php");
  //require_once("parceiros.php");
?>
<!-- Resultado da Busca -->
<div id="conteudo">
 <h1><?=$title ?></h1>
  <? if(!empty($keyword)) { ?>
  <p>Produto(s) encontrados com a palavra chave <strong><?= $keyword ?></strong> </p>
  <div class="lista_produtos">
    <?= lista_produtos($where,$order,$limit,$paginacao); ?>
	</div>
	<? } else { ?>
	   <p class="alert">Nenhum termo definido para a busca</p>
	<? } ?>
</div>
<? require_once("rodape.php"); ?>

