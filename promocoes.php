<?
  $title = "Promo��es";
  require_once("lib/configs.php");
  
  $cat_id = 0;

 //Produtos da p�gina Inicial
 $where = " AND (promocoes_preco <> '' OR promocoes_preco IS NOT NULL)";

 require_once("topo.php");
 require_once("login_topo.php");
 require_once("busca.php");
 require_once("categorias.php");
 //require_once("parceiros.php");
?>
  <!-- Home -->
  <div id="conteudo">
    <h4>Promo��es</h4>
      <div class="lista_produtos">
       <?= lista_produtos($where,$order,$limit,$paginacao); ?>
     </div>
  </div>
<? require_once("rodape.php"); ?>
