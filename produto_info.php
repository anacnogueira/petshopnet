<?php
 $title = "Produto";
 require_once("lib/configs.php");
  
 $head  = " <script src='lightbox/js/prototype.js' type='text/javascript'></script>\n";
  $head .= " <script src='lightbox/js/scriptaculous.js?load=effects,builder' type='text/javascript'></script>\n";
  $head .= " <script src='lightbox/js/lightbox.js' type='text/javascript' ></script>\n";
  $head .= " <link rel='stylesheet' href='lightbox/css/lightbox.css' type='text/css' media='screen' />\n";
  $head .= " <link type='text/css' rel='stylesheet' href='templates/jquery.rating.css' />\n";
  $head .= " <link type='text/css' rel='stylesheet' href='templates/div_float.css' />\n";
  $head .= " <script type='text/javascript' src='js/jquery.rating.js'></script>\n";
  $head .= " <script type='text/javascript' src='js/interface/interface.js'></script>\n";
  $head .= " <script type='text/javascript' src='js/jquery.form.js'></script>\n";
  $head .= " <script type='text/javascript' src='js/produtos.js'></script>\n";
  $head .= " <script type='text/javascript' src='js/comentarios.js'></script>\n";
  $head .= " <script type='text/javascript' src='js/prazo.js'></script>\n";
   
  $produtos_codigo = $_GET["produtos_codigo"];
  $cat_id          = $_GET["categorias_id"];

  //Informações do produto
  $sql = "SELECT prod.produtos_codigo, produtos_nome, produtos_preco,promocoes_preco, data_fin,
  promo.promocoes_status, produtos_descricao,fornecedores_nome, produtos_status
  FROM produtos prod
  LEFT JOIN promocoes promo ON promo.produtos_codigo = prod.produtos_codigo
  LEFT JOIN fornecedores f ON f.fornecedores_id  = prod.fornecedores_id
  WHERE prod.produtos_codigo='".mysql_real_escape_string($produtos_codigo)."'";
  $result = $conn->sql($sql);
  if(mysql_num_rows($result) > 0)
   $produto = mysql_fetch_object($result);

  if($produto->promocoes_status == "S" and !empty($produto->promocoes_preco) and (empty($produto->data_fin)  or data_vencimento(fct_conversorData($produto->data_fin,1))))
  {
    $produtos_preco  = "<span class='de'>De:   R$ " . number_format($produto->produtos_preco,"2",",",".") ."</span><br />";
    $promocoes_preco = "<span class='por'>Por:  R$ ". number_format($produto->promocoes_preco,"2",",",".")."</span>";
  }
  else
  {
    $produtos_preco = "<span class='por'> R$ ". number_format($produto->produtos_preco,"2",",",".") ."</span><br />";
	  $promocoes_preco = "";
  }

  //Verifica se o produto tem frete grátis
  $sql = "SELECT produtos_frete_gratis FROM produtos_frete
  WHERE produtos_codigo='".$produtos_codigo."' AND produtos_frete_gratis='S'
  AND (produtos_frete_ini IS NULL AND produtos_frete_fin IS NULL)
  OR (produtos_frete_ini <= CURDATE() AND produtos_frete_fin IS NULL)
  OR(produtos_frete_ini IS NULL AND produtos_frete_fin <= CURDATE())
  OR (produtos_frete_ini >= CURDATE() AND produtos_frete_fin <= CURDATE())";
  $result =   $conn->sql($sql);
  if(mysql_num_rows($result) > 0)
    $frete_gratis = "<p><img src='".DIR_IMAGENS."frete_gratis.gif' alt='Frete grátis' title='Frete Grátis' /></p>";


  //Listar Comentários
  $sql = " SELECT * FROM comentarios co
	INNER JOIN produtos prod ON co.produtos_codigo = prod.produtos_codigo
  WHERE co.produtos_codigo = '".mysql_real_escape_string($produtos_codigo)."'
  AND comentarios_status = 'S' AND comentarios_texto IS NOT NULL";
  $result = $conn->sql($sql);
  $totComentarios =  mysql_num_rows($result);
  
  while($comment = mysql_fetch_array($result))
  {
    $star_user = "";
	  if(!empty($comment["comentarios_nota"]))
	  {
      for($i=1;$i<=5;$i++)
       $star_user .= " <input type='radio' class='star' name='comentarios_user_".$comment["comentarios_id"]."' value='$i' ".($i == $comment["comentarios_nota"]?"checked='checked'":"")."   disabled='disabled' />\n";
   }

	  $listaComentarios .= "<p><strong>".$comment["comentarios_nome"]."</strong> - ".$comment["comentarios_cidade"].",".$comment["comentarios_estado"].",".fct_conversorData($comment["comentarios_data"],1)."<br />";
    $listaComentarios .= $star_user."<br /><br />";
    $listaComentarios .= $comment["comentarios_texto"]."</p>";
  }

  //Cadastra a visualização do produtos
  $sql = "UPDATE produtos SET produtos_visto = produtos_visto+1 
  WHERE produtos_codigo='".mysql_real_escape_string($produtos_codigo)."'";
  $result = $conn->sql($sql);
  
  //Seleciona as imagens do proudto
  $sql = "SELECT produtos_imagem FROM produtos_imagens 
  WHERE produtos_codigo = '".mysql_real_escape_string($produtos_codigo)."'";
  $result = $conn->sql($sql);
  $countImgs = mysql_num_rows($result);
  
  if($countImgs > 0){
    $listaImagens = "<ul>\n";
	for($i =0;$i<$countImgs;$i++)
    {

      $img   = mysql_fetch_object($result);
      $thumb = substr($img->produtos_imagem,0,strlen($img->produtos_imagem)-4).".thumb".substr($img->produtos_imagem,-4);
      $listaImagens .= "<li><a href='".DIR_PRODUTOS.$img->produtos_imagem."'  rel='lightbox[roadtrip]' title='".$produtos_nome."'><img src='".DIR_PRODUTOS.$thumb."' title='".$produtos_nome."' class='thumb' /></a></li>\n";
    }
    $listaImagens .= "</ul>\n";
  }
  else{
   $listaImagens = "<img src='".DIR_IMAGENS."no_image.jpg' alt='Imagem não disponível' title='Imagem não disponível' />";

  }

   //Ratings - Verificar se o usuário já votou neste produto
  $comentarios_ip  = $_SERVER['REMOTE_ADDR'];
  $sql = "SELECT comentarios_nota FROM comentarios 
  WHERE produtos_codigo = '".mysql_real_escape_string($produtos_codigo)."' AND comentarios_ip = '".$comentarios_ip."'";
  $result = $conn->sql($sql);
  if(mysql_num_rows($result) > 0)
  {
    $votado = "disabled='disabled'";
    $nota   = mysql_result($result,0,0);
  }

  for($indx=1;$indx<=5;$indx++)
   $star .= "\n <input type='radio' class='star' name='comentarios_nota' value='$indx' ".($indx == $nota?"checked='checked'":"")."  $votado />\n"; 
 
 require_once("topo.php");
 require_once("login_topo.php");
 require_once("busca.php");
 require_once("categorias.php");
 //require_once("parceiros.php");
?>
<div id="conteudo">
<? require_once("comentar_produto.php"); ?>
<? require_once("calcula_prazo.php"); ?>
 <input type='hidden' name='produtos_codigo' value='<?=$produtos_codigo ?>' />
 <span class="seguro"><img src="banco_imagens/cadeado.gif" alt="" /> Ambiente 100% seguro</span>
 <div class='breadCrumb'><?= breadCrumb($cat_id) ?></div> <br /><br />
  <h1 class="produto_info"><?=$produto->produtos_nome ?></h1>
   <h2 class="produto_info"><?=$produto->fornecedores_nome ?></h2>

	<div class="img_produto">
    <?= $listaImagens; ?>
  </div>
  <?php if($produto->produtos_status == 'S') { ?>
   <div class='produto_precos'>
     <?= $produtos_preco?>
     <?= $promocoes_preco ?>
     <?php echo $frete_gratis; ?>
     <!--p><a href='#' id='btn_prazo'>Calcular prazo de entrega</a></p-->
   </div>
   <div class="comprar">
   <a href="meu_carrinho.php?acao=adicionar&amp;produtos_codigo=<?=$produtos_codigo ?>"><img src="banco_imagens/btn_comprar.gif" alt="Comprar" border="0" /></a>
    <div class="bandeiras">
      <?= lista_pagamentos() ?>
    </div>
   </div> 
    <?php } else {?>
    <div class="comprar">
     <p>Produto Indisponível</p>
     <p>Avise-me quando o produto estiver disponível</p>
     <form>
        <p><label for='email'>E-mail:
        <span class='form'><input type='text' name='email' id='email' />
        <input type='submit' name='btn_enviar' value='OK' /></span></label></p>
     </form>
    </div>

    <?php } ?>

  <div class="produto_info">
     <?= htmlspecialchars_decode($produto->produtos_descricao) ?>
  </div>
  <div  class="coment">
  <div id="reply">&nbsp;</div>
     <form  class='rating'  action="<?=htmlspecialchars($pageAtual) ?>" method="post">
      <?= $star ?><br />
     </form>
     <h2>Coment&aacute;rios(<?=$totComentarios ?>)</h2>

      <?=$listaComentarios ?>
    <span class="comentar"><a href="#" id="btn_comentario"><img src="banco_imagens/btn_coment.gif" alt="Escrever comentÃ¡rio" border="0" /></a></span>
  </div>
</div>
<? require_once("rodape.php"); ?>
