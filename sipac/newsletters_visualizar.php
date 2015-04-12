<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 27/12/2007                                     '
   Última Modificação: 16/10/2009                         '
   Página: newsletters_visualizar.php                     '
---------------------------------------------------------*/
 $form        = "frm_news";
 require_once("lib/configs.php");
 $titulo 	 = $rotinaClass->menu_rotinas_titulo("");
 $link   	 = "newsletters_listar.php";
 $sels       = $_REQUEST["sels"];
 
 if(is_array($sels)) $sels = $sels[0];

  $sql = "SELECT newsletters_titulo,newsletters_conteudo FROM newsletters WHERE newsletters_id='$sels'";
  $result = $conn->sql($sql);
  
  while($linha = mysql_fetch_array($result))
  {
   $assunto   = $linha["newsletters_titulo"];
   $conteudo = $linha["newsletters_conteudo"];
  }
 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
  <p><strong>Assunto: </strong><?=$assunto ?></p><br />
  <?= html_entity_decode($conteudo) ?>
</div>
<? require_once("rodape.php") ?>
