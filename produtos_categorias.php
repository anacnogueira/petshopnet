<?
  $title  = "Produtos - ".$_REQUEST["cat"];
  require_once("lib/configs.php");

  $cat_id = $_GET["categorias_id"];
  $cat    = $_GET["cat"];
	 
  $where = " AND (pc.categorias_id = '".mysql_real_escape_string($cat_id)."' OR pc.categorias_id IN(
  SELECT categorias_id FROM categorias WHERE parent_id = '".mysql_real_escape_string($cat_id)."'))";
  $order = "ORDER BY prod.produtos_id DESC";
  $limit = "";
  $paginacao = "S";

  require_once("topo.php");
  require_once("login_topo.php");
  require_once("busca.php");
  require_once("categorias.php");
  //require_once("parceiros.php");
?>
<!-- Produtos Categorias -->
<div id="conteudo">
 <div class='breadCrumb'><?=breadCrumb($cat_id) ?></div>
 <div class="lista_produtos">
   <?= lista_produtos($where,$order,$limit,$paginacao); ?>
 </div>

</div>
<? require_once("rodape.php"); ?>

