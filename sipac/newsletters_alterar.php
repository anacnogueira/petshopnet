<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 27/12/2007                                     '
   Última Modificação: 16/10/2009                         '
   Página: newsletters_alterar.php                        '
---------------------------------------------------------*/
 $form        = "frm_news";
 require_once("lib/configs.php");
 require_once("../fckeditor/fckeditor.php");
 
 $titulo 	  = $rotinaClass->menu_rotinas_titulo("");
 $link   	  = "newsletters_listar.php";
 $sels        = $_REQUEST["sels"];
 
 if(is_array($sels)) $sels = $sels[0];
 
 if(isset($_POST["btn_salvar"]))
 {
   $newsletters_titulo   	= $_POST["newsletters_titulo"];
   $newsletters_modulo   	= $_POST["newsletters_modulo"];
   $newsletters_conteudo    = $_POST["newsletters_conteudo"];

   $sql = "UPDATE newsletters SET
   newsletters_titulo   = '$newsletters_titulo',
   newsletters_conteudo = '$newsletters_conteudo',
   newsletters_modulo   = '$newsletters_modulo'
   WHERE newsletters_id = '$sels'";
   $result = $conn->sql($sql);

   $mensagem_log = "Newsletter alterada com sucesso($Sels).";
   createLog('',$pageAtual,'',$mensagem_log);
   header("location: $link");
 }
 else
 {
   $sql = "SELECT * FROM newsletters WHERE newsletters_id = '$sels'";
   $result = $conn->sql($sql);
   $totCampos = mysql_num_fields($result);

    while($dados = mysql_fetch_array($result))
    {
     for($i = 0;$i < $totCampos;$i++)
     {
      $meta   = mysql_fetch_field($result, $i);
      $campo  =  $meta->name;
      $$campo = $dados[$i];
     }
   }
 }
 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/newsletters.js'></script>
 <div class='titulo'><?= $titulo ?></div>
  <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post" enctype="multipart/form-data">
	 <strong>Informações da Newsletter</strong>
	 <table class="TableLista">
	   <tr>
         <td class='legenda' width="120"><label for="newsletters_modulo">Módulo:</label></td>
         <td>
            <select name="newsletters_modulo">
              <option value="newsletter" <? if($newsletters_modulo == "newsletter") {?> selected="selected" <? } ?>>Newsletter</option>
              <option value="email_notificacao" <? if($newsletters_modulo == "email_notificacao") {?> selected="selected" <? } ?>>Notificação de Produto</option>
            </select>
         </td>
       </tr>
      <tr>
         <td class='legenda' width="120"><label for="newsletters_titulo">Título:</label></td>
         <td><input name="newsletters_titulo" type="text" size="50" value="<?=$newsletters_titulo ?>" /></td>
     </tr>
     <tr>
	    <td class="legenda"><label for="newsletters_conteudo">Conteúdo:</label></td>
	    <td>
       <?
         $sBasePath = "../fckeditor/";
         $oFCKeditor1 = new FCKeditor('newsletters_conteudo');
         $oFCKeditor1->Width = '610px';
         $oFCKeditor1->Height = '300px';
         $oFCKeditor1->BasePath	= $sBasePath ;
         $oFCKeditor1->ToolbarSet	= 'Customize' ;
         $oFCKeditor1->Value	=  $newsletters_conteudo;
         $oFCKeditor1->Create() ;
      ?>
      </td>
     </tr>
     <tr class='BarraPag'>
        <td colspan="2">
          <input name="btn_salvar" type="submit" value="salvar" />
          <input name="sels" type="hidden" value="<?=$sels ?>" />
       </td>
     </tr>
    </table>
  </form><br />
</div>
<? require_once("rodape.php") ?>
