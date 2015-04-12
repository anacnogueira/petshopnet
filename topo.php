<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PetShopNet - <?= $title ?></title>
<meta name="description" content="Produtos e acessórios para animais dom´sdicos" />
<meta name="keywords" content="pet shop, petshop, cachorro, gato, aves, acessorios cachorro,frontline spray, petshop Jacareí, petshop Guararema" />
 <meta name="author" content="Ana Claudia Nogueira - www.anaclaudia.com.br" />
<link href="templates/style.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
<script type='text/javascript' src='js/funcoes.js'></script>
<?=$head; ?>
<!--[if lte IE 7]>
<link href="templates/style_ie.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30318298-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
 <div id="geral">
  <div id="header">
    <!-- Menu Topo -->
    <? require_once("menu_topo.php") ?>
    <div class="menu_usuario">
      <ul>
        <li><img src='banco_imagens/ipata.gif' alt='' /><span><a href="cadastro.php?return=cadastro_final.php">Cadastre-se</a></span></li>
        <li><img src='banco_imagens/ipata.gif' alt='' /><span><a href="ver_pedidos.php">Meus Pedidos</a></span></li>
        <li><img src='banco_imagens/ipata.gif' alt='' /><span><a href="meu_cadastro.php">Meu Cadastro</a></span></li>
        <li style='border:none'><img src='banco_imagens/ipata.gif' alt='' /><span><a href="meu_carrinho.php">Meu Carrinho</a></span></li>
      </ul>
    </div>
    <? require_once("lib/banner.php") ?>
    <span><a href="index.php"><img src="banco_imagens/logo.gif" alt="PetShopNet" class="logo" border="0" /></a></span>
  </div>