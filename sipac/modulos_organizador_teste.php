<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: modulos_listar.php		                        '
---------------------------------------------------------*/
 $allowRotina = "nao";
 $form        = "frm_modulo";
 $titulo      = "Organizador";
 require_once("lib/configs.php");
 if(isset($_REQUEST["btn_salvar"]))
 {
   $arraMod = $_REQUEST["modulos"];
   foreach($arraMod as $key1=>$mod)
   {
     $sql = "UPDATE modulos SET modulos_ordem = ".($key1+1)." WHERE modulos_id = '$mod'";
     $rs1 =  $conn->sql($sql);
     $arraSub = $_REQUEST["submodulos_".$mod];
     foreach($arraSub as $key2=>$sub)
     {
      $sql = "UPDATE submodulos SET submodulos_ordem = ".($key2+1)." WHERE submodulos_id = '$sub'";
      $rs2 =  $conn->sql($sql);
      $arraRot = $_REQUEST["rotinas_".$sub];
      foreach($arraRot as $key3=>$rot)
      {
        $sql = "UPDATE rotinas SET rotinas_ordem = ".($key3+1)." WHERE rotinas_id = '$rot'";
        $rs3 =  $conn->sql($sql);
      }
     }
   }
   $script  = "<script>";
   $script .= "alert('Ordem dos elementos alterados com sucesso!')";
   $script .= "</script>";
 }
 //Módulos
 $sql    = "SELECT modulos_id,modulos_nome,modulos_ordem FROM modulos ORDER BY modulos_ordem";
 $result1 = $conn->sql($sql);
 if(mysql_num_rows($result1) > 0)
 {
   $lista = "<ol id='parent'>\n";

   while($mod = mysql_fetch_array($result1))
   {
    $lista .= "<li>".$mod["modulos_ordem"].". ".$mod["modulos_nome"];
    $lista .= " <input type='hidden' name='modulos[]' value='".$mod["modulos_id"]."' />";
    /*$sql   = "SELECT submodulos_id,submodulos_nome,submodulos_ordem
    FROM submodulos WHERE modulos_id = '".$mod["modulos_id"]."'
    ORDER BY submodulos_ordem";
    $result2 = $conn->sql($sql);
    if(mysql_num_rows($result2) > 0)
    {
      $lista .= "\n<ol id='mod".$mod["modulos_id"]."'>\n";

      while($sub = mysql_fetch_array($result2))
      {
       $lista .= "<li >".$sub["submodulos_ordem"].". ".$sub["submodulos_nome"];
       $lista  .= " <input type='hidden' name='submodulos_".$mod["modulos_id"]."[]' value='".$sub["submodulos_id"]."' />";
       $sql = "SELECT rotinas_id,rotinas_nome,rotinas_ordem
       FROM rotinas WHERE submodulos_id = '".$sub["submodulos_id"]."'
       ORDER BY rotinas_ordem";
       $result3 = $conn->sql($sql);
       if(mysql_num_rows($result3) > 0)
       {
        $lista .= "\n<ol id='".$sub["submodulos_id"]."'>\n";

        while($rot = mysql_fetch_array($result3))
        {
          $lista .= "<li>".$rot["rotinas_ordem"].". ".$rot["rotinas_nome"];
          $lista .= " <input type='hidden' name='rotinas_".$sub["submodulos_id"]."[]' value='".$rot["rotinas_id"]."' />";
          $lista  .= "</li>\n";
        }
        $lista .= "</ol>\n";
       }
       $lista .= "</li>\n";
      }
      $lista .= "</ol>\n";
    }         */
    $lista .= "</li>\n";

   }
   $lista .= "</ol>\n";
 }
 require_once("topo.php");
 require_once("menu_lateral.php");

 ?>
<div id="conteudo">
   <?= $script ?>
    <script type="text/javascript" src="js/ui.mouse.js"></script>
    <script type="text/javascript" src="js/ui.draggable.js"></script>
    <script type="text/javascript" src="js/ui.draggable.ext.js"></script>
    <script type='text/javascript' src='js/organizador.js'></script>
 	<div class='titulo'><?= $titulo ?></div>
 	<form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
   <div id='organizador' style='border:1px solid black'>
     <?=$lista ?>
   </div>
   <input name='btn_salvar' type='submit' value='Salvar' />
 </form>
</div>
<? require_once("rodape.php") ?>

