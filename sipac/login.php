<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 19/03/2007                                     '
   Última Modificação: 05/10/2007                         '
   Pagina: login.php                                      '
---------------------------------------------------------*/
   $allowSession = "nao";
   $allowRotina  = "nao";
  require_once("lib/configs.php");
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIPAC 2.1 - Login</title>
<link href='templates/login.css' rel='stylesheet' type='text/css' />
<script src='js/jquery-1.3.2.min.js' type='text/javascript'></script>
<script src='js/jquery.numeric.js' type='text/javascript'></script>
<script src='js/funcoes.js' type='text/javascript'></script>
<script src='js/valida_login.js' type='text/javascript'></script>
</head>
<body>

<!-- Topo -->
  <? require_once("topo_site.php") ?>
  <div id="lopo">
    <span>Licenciado para <img src="<?=LOGO ?>" alt="<?=EMPRESA ?>" /></span>
  </div>

<div id='geral'>
 <div id='sipac'>
    <img src="banco_imagens/logo.gif" id="logo" style="" title="SIPAC" /><br />
    <h1>Sistema Integrado de Painel de Controle</h1>
 </div>

  <div id="conteudo">
    <form id="frm_login" method="post" action="valida_login.php">
      <label for="email">Login/E-mail: </label><br />
      <input type="text" name="email" value="<?=$_SESSION["email"] ?>" size="30" /> <br />
      <label for="senha">Senha:</label><br />
      <input name="senha" type="password"  size="30" /> <br />
      <a href="lembrete_senha.php">Perdeu a senha?</a><br /><br />
      <input name="return" type="hidden" value="<?= $_GET["return"]?>" />
      <input type="submit" name="processar" value="Entrar"  class='btn' />
     </form>

   </div>

<? require_once("rodape.php") ?>
</div>
</body>
</html>
