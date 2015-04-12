<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 05/09/2007                                     '
   Última Modificação: 24/03/2009                         '
   Página: submodulos_cadastrar.php     	                      '
---------------------------------------------------------*/
$form        = "frm_submodulo";
 require_once("lib/configs.php");
 require_once("../fckeditor/fckeditor.php");

 $titulo 		= $rotinaClass->menu_rotinas_titulo("");
 $link  		= "submodulos_listar.php";

 $SQL_modulo = "SELECT modulos_id,modulos_nome FROM modulos";
 if(isset($_POST["btn_salvar"]))
 {
   $submodulos_nome   	 = $_POST["submodulos_nome"];
   $submodulos_descricao = $_POST["submodulos_descricao"];
   $submodulos_pagina    = $_POST["submodulos_pagina"];
   $modulos_id   			   = $_POST["modulos_id"];
   $submodulos_ordem     = $_POST["submodulos_ordem"];

   if(strpos($submodulos_pagina, ".php") === false)
    $submodulos_pagina .= ".php";

   $sql = "INSERT INTO submodulos SET
   submodulos_nome      = '$submodulos_nome',
   submodulos_descricao = '$submodulos_descricao',
   submodulos_pagina    = '$submodulos_pagina',
   modulos_id           = '$modulos_id',
   submodulos_ordem     = '$submodulos_ordem'";
   $result = $conn->sql($sql);
   $sels   = $conn->id();

   $mensagem_log = "Submódulo cadastrado com sucesso($sels).";
   createLog('',$pageAtual,'',$mensagem_log);

   header("location: $link");
 }

 //Ultima ordem de submódulo + 1
 $sql = "SELECT COUNT(submodulos_ordem)+1 FROM submodulos";
 $result = $conn->sql($sql);
 if(mysql_num_rows($result) > 0)
  $submodulos_ordem = mysql_result($result,0,0);

 require_once("topo.php");
 require_once("menu_lateral.php");
?>
 <div id="conteudo">
  <script type='text/javascript' src='js/submodulos.js'></script>
  <div class='titulo'><?= $titulo ?></div>
  <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
  <form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
    <table class="TableLista">
      <tr>
        <td class='legenda'><label for="submodulos_nome">Submódulo:</label></td>
        <td><input name="submodulos_nome" type="text" size="50" /></td>
      </tr>
      <tr>
     <td class='legenda'><label for="modulos_id">Módulo:</label></td>
     <td><?= fct_MontarLista($SQL_modulo,'',"modulos_id") ?></td>
    </tr>
    <tr>
     <td class='legenda'><label for="submodulos_pagina">Página:</label></td>
     <td><input name="submodulos_pagina" type="text" size="50" /></td>
    </tr>
    <tr>
     <td class='legenda'><label for="submodulos_ordem">Ordem:</label></td>
     <td><input name="submodulos_ordem" type="text" size="2" maxlength="2" class="onlyNumbers" /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
          <?
          $sBasePath = "../fckeditor/";
          $oFCKeditor1 = new FCKeditor('submodulos_descricao');
          $oFCKeditor1->Width = '610px';
          $oFCKeditor1->Height = '300px';
          $oFCKeditor1->BasePath	= $sBasePath ;
          $oFCKeditor1->ToolbarSet	= 'Customize' ;
          $oFCKeditor1->Value	=  '';
          $oFCKeditor1->Create() ;
        ?>
        </td>
      </tr>
      <tr class='BarraPag'>
        <td colspan="2"><input name="btn_salvar" type="submit" value="salvar" /></td>
      </tr>
    </table>
  </form>
 </div>
<? require_once("rodape.php") ?>
