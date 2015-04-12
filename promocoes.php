<?
  $title = "Promoções";
  require_once("lib/configs.php");
  
  $cat_id = 0;

 //Produtos da página Inicial
 $where = " AND (promocoes_preco <> '' OR promocoes_preco IS NOT NULL)";

 require_once("topo.php");
 require_once("login_topo.php");
 require_once("busca.php");
 require_once("categorias.php");
 //require_once("parceiros.php");
?>
  <!-- Home -->
  <div id="conteudo">
    <h4>Promoções</h4>
      <div class="lista_produtos">
       <?= lista_produtos($where,$order,$limit,$paginacao); ?>
     </div>
  </div>
<? require_once("rodape.php"); ?>
