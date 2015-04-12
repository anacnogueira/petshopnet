<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 06/04/2009                                     '
   Última Modificação: __/__/____                         '
   Página: ajuda.php			                        '
---------------------------------------------------------*/
 $allowRotina = "nao";
 require_once("lib/configs.php");
 //1. Verificar se o usuário tem permissão especial
 $sql = "SELECT users_autorizacao_especial FROM users
 WHERE users_id = '".$_SESSION[EMPRESA]["codUser"]."'";
 $result = $conn->sql($sql);
 if(mysql_num_rows($result) > 0)
 {
   $special = mysql_result($result,0,0);
   if($special == 1)
   {
    $campo_tipo = "users_id";
    $codMenu 		= $_SESSION[EMPRESA]["codUser"];
   }
   else
   {
    $campo_tipo = "grupos_id";
    $codMenu 		= $_SESSION[EMPRESA]["codGrupo"];
  }
 }
//1. Módulos do usuário
 $sql = "SELECT modulos.modulos_id, modulos_nome, modulos_descricao,tipo_autorizacao
 FROM modulos
 INNER JOIN autorizacoes ON autorizacoes.modulos_id = modulos.modulos_id
 WHERE $campo_tipo='".$codMenu."'
 AND (tipo_autorizacao=1 OR tipo_autorizacao=2)
 ORDER BY modulos_ordem ASC";
 $rs1 = $conn->sql($sql);
 $x = 1;
 if(mysql_num_rows($rs1) > 0)
 {
  $lista .= "<ul>\n";
  while($mod = mysql_fetch_array($rs1))
  {
    $lista .= " <li><a href='#mod".$mod["modulos_id"]."'>".$x." - ".$mod["modulos_nome"]."</a>";
    $y = 1;
    $conteudo .= " <h1><a name='mod".$mod["modulos_id"]."'>".$x." - ".$mod["modulos_nome"]."</a></h1>";
    $conteudo .= " <div>".htmlspecialchars_decode($mod["modulos_descricao"])."</div>";
    $conteudo .= "<p><a href='#top' class='link'><img src='".DIR_BTNS."top.png' alt='' /> Voltar para o topo</a></p>\n";
    $conteudo .= "<br />\n";

    $sql = "SELECT DISTINCT submodulos.submodulos_id, submodulos_nome, submodulos_descricao,
    submodulos_pagina, tipo_autorizacao
    FROM submodulos
    LEFT JOIN autorizacoes ON  autorizacoes.submodulos_id = submodulos.submodulos_id
    WHERE submodulos.modulos_id = '".$mod["modulos_id"]."'
    AND  $campo_tipo='".$codMenu."'";
    if($mod["tipo_autorizacao"] == 2)
      $sql .=" AND (tipo_autorizacao=1 OR tipo_autorizacao=2) AND $campo_tipo='".$codMenu."'";

    $sql .= " ORDER BY submodulos_ordem ASC";
    $rs2 = $conn->sql($sql);
    if(mysql_num_rows($rs2) > 0)
    {
     $lista .= "  \n<ul>\n";
     while($sub = mysql_fetch_array($rs2))
     {
       $lista .= "   <li><a href='#sub".$sub["submodulos_id"]."'>".$x.".".$y." - ".$sub["submodulos_nome"]."</a>";
       $z = 1;
       $conteudo .= " <h2><a name='sub".$sub["submodulos_id"]."'>".$x.".".$y." - ".$sub["submodulos_nome"]."</a></h2>";
       $conteudo .= " <div>".htmlspecialchars_decode($sub["submodulos_descricao"])."</div>";
       $conteudo .= "<p><a href='#top' class='link'><img src='".DIR_BTNS."top.png' alt='' /> Voltar para o topo</a></p>\n";
       $conteudo .= "<br />\n";

       $sql = "SELECT rot.rotinas_id,rot.rotinas_nome, rot.rotinas_descricao
       FROM rotinas rot
       INNER JOIN autorizacoes aut ON aut.rotinas_id = rot.rotinas_id
       WHERE rot.submodulos_id = '".$sub["submodulos_id"]."'
       AND $campo_tipo='".$codMenu."'";
       $rs3 = $conn->sql($sql);
       if(mysql_num_rows($rs3) > 0)
       {
         $lista .= "\n<ul>\n";
         while($rot = mysql_fetch_array($rs3))
         {
           $lista .= "<li><a href='#rot".$rot["rotinas_id"]."'>".$x.".".$y.".".$z."- ".$rot["rotinas_nome"]."</a></li>\n";
           $z++;
           $conteudo .= " <h3><a name='rot".$rot["rotinas_id"]."'>".$x.".".$y.".".$z." - ".$rot["rotinas_nome"]."</a></h3>";
           $conteudo .= " <div>".htmlspecialchars_decode($rot["rotinas_descricao"])."</div>";
           $conteudo .= "<p><a href='#top' class='link'><img src='".DIR_BTNS."top.png' alt='' /> Voltar para o topo</a></p>\n";
           $conteudo .= "<br />\n";
         }
         $lista .= "</ul>\n";
       }
       $lista .= "</li>\n";
       $y++;
     }
     $lista .= "  </ul>\n";
    }
    $lista .= "</li>\n";
    $x++;
  }
  $lista .= "</ul>\n";
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::SIPAC - Ajuda::</title>
<link href='templates/sipac.css' rel='stylesheet' type='text/css' />
<!--[if IE]>
  <link href="templates/sipac_ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script src='js/jquery-1.3.2.min.js' type='text/javascript'></script>
<script src='js/jquery.numeric.js' type='text/javascript'></script>
<script type='text/javascript' src='js/funcoes.js'></script>
</head>
<body>
<div class='ajuda'>
 <h1>Ajuda</h1>
  <h4><a name='top'>Sumário</a></h4>
  <ul><li><a href='#sobre'>Sobre o SIPAC</a></li></ul>
  <?= $lista ?>
  <div id="content_ajuda">
   <a name='sobre'></a>
    <h1>Sobre o SIPAC</h1>
     <!-- Texto Provisório -->
     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
   <br />
   <?= $conteudo ?>
  </div>
</div>
<? require_once("rodape.php") ?>

