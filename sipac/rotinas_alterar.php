<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 05/09/2007                                     '
   �ltima Modifica��o: 24/03/2009                         '
   P�gina: rotinas_alterar.php     	                      '
---------------------------------------------------------*/
 $form        = "frm_rotina";
 require_once("lib/configs.php");
 $titulo 		= $rotinaClass->menu_rotinas_titulo("");
 $link  		= "rotinas_listar.php";
 $sels      = $_REQUEST["Sels"];
 
 if(is_array($sels)) $sels = $sels[0];
 
 $SQL_modulo    = "SELECT modulos_id,modulos_nome FROM modulos";
 $SQL_submodulo = "SELECT submodulos_id,submodulos_nome FROM submodulos";
 
 if(isset($_POST["btn_salvar"]))
 {
   $rotinas_nome       = $_POST["rotinas_nome"];
   $modulos_id         = $_POST["modulos_id"];
   $submodulos_id      = $_POST["submodulos_id"];
   $rotinas_ordem      = $_POST["rotinas_ordem"];
   $rotinas_pagina     = $_POST["rotinas_pagina"];
   $rotinas_janela     = $_POST["rotinas_janela"];
   $rotinas_quantidade = $_POST["rotinas_quantidade"];
   $rotinas_visivel    = $_POST["rotinas_visivel"];
   $rotinas_descricao  = $_POST["rotinas_descricao"];
   $btn_imagem         = $_POST["btn_imagem"];
   if(strpos($rotinas_pagina, ".php") === false)
    $rotinas_pagina .= ".php";

   $sql = "UPDATE rotinas SET
   rotinas_nome       = '$rotinas_nome',
   submodulos_id      = '$submodulos_id',
   rotinas_ordem      = '$rotinas_ordem',
   rotinas_pagina     = '$rotinas_pagina',
   rotinas_janela     = '$rotinas_janela',
   rotinas_quantidade = '$rotinas_quantidade',
   rotinas_visivel    = '$rotinas_visivel',
   rotinas_descricao  = '$rotinas_descricao',
   btn_imagem         = '$btn_imagem'
   WHERE rotinas_id = '$sels'";
   $result = $conn->sql($sql);

   $mensagem_log = "Rotina alterada com sucesso($sels).";
   createLog('',$pageAtual,'',$mensagem_log);

   header("location: $link");
 }
 else
 {
   $sql = "SELECT rotinas_nome,rotinas.submodulos_id,rotinas_pagina,rotinas_quantidade,
   rotinas_visivel,rotinas_descricao, btn_imagem,modulos_id,rotinas_ordem,rotinas_janela
   FROM rotinas
   INNER JOIN submodulos ON submodulos.submodulos_id = rotinas.submodulos_id
   WHERE rotinas_id = '$sels'";
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
 <script language="JavaScript" type="text/javascript" src="editor/richtext.js"></script>
 <script type="text/javascript" src="js/jquery.selects.js"></script>
  <script type='text/javascript' src='js/rotinas.js'></script>
  <div class='titulo'><?= $titulo ?></div>
  <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
  <form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
    <input name="Sels" type="hidden" value="<?=$sels ?>" />
    <table class="TableLista">
      <tr>
        <td class='legenda'><label for="rotinas_nome">Rotina:</label></td>
        <td><input name="rotinas_nome" type="text" size="50" value="<?=$rotinas_nome?>" /></td>
      </tr>
     <tr>
     <td class='legenda'><label for="modulos_id">M�dulo:</label></td>
     <td>
      <select name="modulos_id" id='modulos_id' clas="log">
        <?=fct_MontarLista($SQL_modulo,$modulos_id,"") ?>
      </select>
     </td>
    </tr>
    <tr>
     <td class="legenda"><label for="submodulos_id">Subm�dulo:</label></td>
     <td>
      <select name="submodulos_id" id='submodulos_id' class="log">
         <?=fct_MontarLista2($SQL_submodulo,$submodulos_id) ?>
      </select>
     </td>
    </tr>
    <tr>
      <td class='legenda'><label for="rotinas_ordem">Ordem:</label></td>
      <td><input name="rotinas_ordem" type="text" size="2" maxlength="2" value="<?=$rotinas_ordem ?>" /></td>
    </tr>
    <tr>
     <td class='legenda'><label for="rotinas_pagina">P�gina:</label></td>
     <td><input name="rotinas_pagina" type="text" size="50" value="<?=$rotinas_pagina?>" /></td>
    </tr>
    <tr>
      <td class='legenda'>Abrir em outra janela:</td>
      <td>
       <input name='rotinas_janela' type='radio' value='S' class='checkbox' <? if($rotinas_janela == 'S') {?> checked="checked"<? } ?> />Sim
        <input name='rotinas_janela' type='radio' value='N' class='checkbox' <? if($rotinas_janela == 'N' or empty($rotinas_janela)) { ?> checked="checked" <? } ?> />N�o
      </td>
     </tr>
    <tr>
      <td class='legenda'><label for="rotinas_quantidade">Quantidade de registros:</label></td>
      <td>
        <?
          $arraQtde = array("Nenhum","1 registro","1 ou mais");
          for($i = 0 ;$i <count($arraQtde); $i++) {
        ?>
        <? if($i != 0) { ?>&nbsp;<? } ?><input name='rotinas_quantidade' type='radio' value='<?=$i?>' class='checkbox' <?= $i==$rotinas_quantidade?"checked='checked'":"" ?> /> <?=$arraQtde[$i] ?>
        <? } ?>
			</td>
     </tr>
     <tr>
      <td class='legenda'><label for="rotinas_visivel">Vis�vel:</label></td>
      <td>
        <input name='rotinas_visivel' type='radio' value='s' class='checkbox' <? if($rotinas_visivel == 's' or empty($rotinas_visivel)) {?> checked="checked"<? } ?> /> Sim
        <input name='rotinas_visivel' type='radio' value='n' class='checkbox' <? if($rotinas_visivel == 'n') { ?> checked="checked" <? } ?> /> N�o
      </td>
     </tr>
     <tr>
    <td class='legenda'><label for="btn_imagem">Imagem bot�o</label></td>
    <td colspan='2'>
      <table style='width:50%'><tr>
      <?
        if($folder=opendir(DIR_BTNS))
        {
          $cont = 1;
          while(($arquivos2=readdir($folder)) !== false or $arquivos == "Thumbs.db")
          {
            if($arquivos2 == "." or $arquivos2 == "..") continue;

            if($arquivos2 != "Thumbs.db")
            {
              echo "<td style='width:33%'><input name='btn_imagem' type='radio' value='".$arquivos2."' ".($arquivos2 == $btn_imagem ?"checked='checked'":"")." />
              <img src='".DIR_BTNS.$arquivos2."' alt='".$arquivos2."' /></td>\n";

              if ($cont > 0 && $cont % 3 == 0)
              echo  "</tr><tr>";

              $cont++;
            }
         }
         closedir($folder);
       }
     ?>
    </tr></table>
   </td></tr>
     <tr>
        <td>&nbsp;</td>
        <td>
         <textarea name="rotinas_descricao" cols="100" rows="40"><?=htmlspecialchars_decode($rotinas_descricao) ?></textarea>
        </td>
      </tr>
      <tr class='BarraPag'>
        <td colspan="2"><input name="btn_salvar" type="submit" value="salvar" /></td>
      </tr>
    </table>
  </form>
 </div>

