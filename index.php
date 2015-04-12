<?
  $title = "Seja Bem Vindo";
  require_once("lib/configs.php");
  
  $cat_id = 0;

	
 $where = " AND produtos_quantidade > 0 AND produtos_destaque='1'";
 $order = "ORDER BY prod.produtos_codigo DESC";
 $paginacao = "S";

  require_once("topo.php");
  require_once("login_topo.php");
	require_once("busca.php");
	require_once("categorias.php");
	//require_once("parceiros.php");
?>
  <!-- Home -->

  <div id="conteudo">
    <h4>Ofertas</h4>
     <div class="lista_produtos">
       <?= lista_produtos($where,$order,$limit,$paginacao); ?>
     </div>
      <div class='linkPromocoes' style='clear:both'><h2><a href='promocoes.php'>Veja mais promoções</a></h2></div>

  </div>
<? require_once("rodape.php"); ?>

