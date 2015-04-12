<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 05/09/2007                                     '
   Última Modificação: 24/03/2009                         '
   Página: modulos_alterar.php     	                      '
---------------------------------------------------------*/
$form        = "frm_modulo";
 require_once("lib/configs.php");
 require_once("../fckeditor/fckeditor.php");

 $titulo 		= $rotinaClass->menu_rotinas_titulo("");
 $link  		= "modulos_listar.php";
 $sels       = $_REQUEST["sels"];

 if(is_array($sels)) $sels = $sels[0];
 if(isset($_POST["btn_salvar"]))
 {
   $modulos_nome   			= $_POST["modulos_nome"];
   $modulos_ordem  			= $_POST["modulos_ordem"];
   $modulos_descricao   = $_POST["modulos_descricao"];

   $sql = "UPDATE modulos SET
   modulos_nome  = '$modulos_nome',
   modulos_ordem = '$modulos_ordem',
   modulos_descricao = '".$modulos_descricao."'
    WHERE modulos_id = '$sels'";
   $result = $conn->sql($sql);
   $sels   = $conn->id();

   $mensagem_log = "Módulo alterado com sucesso($sels).";
   createLog('',$pageAtual,'',$mensagem_log);

   header("location: $link");
 }
 else
 {
   $sql = "SELECT modulos_nome,modulos_descricao,modulos_ordem FROM modulos WHERE modulos_id='$sels'";
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
  <script type='text/javascript' src='js/modulos.js'></script>
  <div class='titulo'><?= $titulo ?></div>
  <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
  <form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
    <input name="sels" type="hidden" value="<?=$sels ?>" />
    <table class="TableLista">
      <tr>
        <td class='legenda' style='width: 20%'><label for="modulos_nome">Nome:</label></td>
        <td><input name="modulos_nome" type="text" size="80" value="<?=$modulos_nome ?>" /></td>
      </tr>
       <tr>
        <td class='legenda'><label for="modulos_ordem">Ordem:</label.</td>
        <td><input type='text' name="modulos_ordem" value="<?=$modulos_ordem ?>" class='onlyNumbers' size='2' maxlength='2' /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
         <?
          $sBasePath = "../fckeditor/";
          $oFCKeditor1 = new FCKeditor('modulos_descricao');
          $oFCKeditor1->Width = '610px';
          $oFCKeditor1->Height = '300px';
          $oFCKeditor1->BasePath	= $sBasePath ;
          $oFCKeditor1->ToolbarSet	= 'Customize' ;
          $oFCKeditor1->Value	=  $modulos_descricao;
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
