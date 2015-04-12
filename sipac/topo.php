<?php
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criaçãoo 19/03/2007                                     '
   Última Modificação: 02/09/2007                         '
   Página: topo.php							                          '
---------------------------------------------------------*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php if($pageAtual == "index.php") { ?>
<title>::SIPAC - P&aacute;gina Inicial::</title>
<?php } else{ ?>
<title>::SIPAC - <?= $titulo ?>::</title>
<?php } ?>
<link href='templates/sipac.css' rel='stylesheet' type='text/css' />
<!--[if lte IE 7.0]>
  <link href="templates/sipac_ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<?php echo $header; ?>
<script src='js/jquery-1.4.2.min.js' type='text/javascript'></script>
<script src='js/jquery.numeric.js' type='text/javascript'></script>
<script type='text/javascript' src='js/funcoes.js'></script>

</head>
<body>
<?php require_once("topo_site.php") ?>
<div id="topo">
 <span class='logo_empresa'> Licenciado para <img src="<?=LOGO ?>" alt="<?=EMPRESA ?>" /></span>
 <img src="banco_imagens/logo.gif" class="logo" style="" alt="SIPAC" />	<br />
 <div class="login">
 	<strong><?php echo $_SESSION[EMPRESA]["email"]; ?></strong><br />
	 &Uacute;ltimo login: <?php echo $_SESSION[EMPRESA]["lastLogin"]; ?><br />
	Acesso n&deg; <?php echo $_SESSION[EMPRESA]["session_id"]; ?>  | <span id='data'><?php data_hoje();  ?></span>
 </div>
 <div class='menuLogin'>
	<a href="index.php">Home</a>&nbsp;|
	<a href="dados_alterar.php">Alterar Dados</a>&nbsp;|
	<a href="senha_alterar.php">Alterar Senha</a>&nbsp;|
	<a href="logout.php">Sair</a>&nbsp;|
	<a href="ajuda.php" class="popup">Ajuda</a>
 </div>
</div>