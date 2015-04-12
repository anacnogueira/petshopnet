<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 05/09/2007                                     '
   Última Modificação: 24/03/2009                         '
   Página: rotinas_cadastrar.php     	                      '
---------------------------------------------------------*/
$form        = "frm_rotina";
 require_once("lib/configs.php");
 $titulo 		= $rotinaClass->menu_rotinas_titulo("");
 $link  		= "rotinas_listar.php";

 $SQL_modulo = "SELECT modulos_id,modulos_nome FROM modulos";
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

   $sql = "INSERT INTO rotinas SET
   rotinas_nome       = '$rotinas_nome',
   submodulos_id      = '$submodulos_id',
   rotinas_ordem      = '$rotinas_ordem',
   rotinas_pagina     = '$rotinas_pagina',
   rotinas_janela     = '$rotinas_janela',
   rotinas_quantidade = '$rotinas_quantidade',
   rotinas_visivel    = '$rotinas_visivel',
   rotinas_descricao  = '$rotinas_descricao',
   btn_imagem         = '$btn_imagem'";
   $result = $conn->sql($sql);
   $sels   = $conn->id();

   $mensagem_log = "Rotina cadastrada com sucesso($sels).";
   createLog('',$pageAtual,'',$mensagem_log);

   header("location: $link");
 }
 require_once("topo.php");
 require_once("menu_lateral.php");
?>
 <div id="conteudo">
 <script type="text/javascript" src="js/jquery.selects.js"></script>
  <script type='text/javascript' src='js/rotinas.js'></script>
  <div class='titulo'><?= $titulo ?></div>
  <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
  <form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
    <table class="TableLista">
      <tr>
        <td class='legenda'><label for="rotinas_nome">Rotina:</label></td>
        <td><input name="rotinas_nome" type="text" size="50" value="<?=$rotinas_nome?>" /></td>
      </tr>
     <tr>
     <td class='legenda'><label for="modulos_id">Módulo:</label></td>
     <td>
      <select name="modulos_id" id='modulos_id' class="log">
        <?=fct_MontarLista2($SQL_modulo,$modulos_id) ?>
      </select>
     </td>
    </tr>
    <tr>
     <td class="legenda"><label for="submodulos_id">Submódulo:</label></td>
     <td>
      <select name="submodulos_id" id='submodulos_id' disabled="disabled" class="log">
        <option value="0">&nbsp;</option>
      </select>
     </td>
    </tr>
    <tr>
      <td class="legenda"><label for="rotinas_ordem">Ordem:</label></td>
      <td><input name="rotinas_ordem" type="text" size="2" maxlength="2" class="onlyNumbers" /></td>
    </tr>
    <tr>
     <td class='legenda'><label for="rotinas_pagina">Página:</label></td>
     <td><input name="rotinas_pagina" type="text" size="50" value="<?=$rotinas_pagina?>" /></td>
    </tr>
    <tr>
      <td class='legenda'>Abrir em outra janela:</td>
      <td>
       <input name='rotinas_janela' type='radio' value='s' class='checkbox' <? if($rotinas_janela == 's') {?> checked="checked"<? } ?> />Sim
       <input name='rotinas_janela' type='radio' value='n' class='checkbox' <? if($rotinas_janela == 'n' or empty($rotinas_janela)) { ?> checked="checked" <? } ?> />Não
      </td>
     </tr>
    <tr>
      <td class='legenda'><label for="rotinas_quantidade">Quantidade de registros:</label></td>
      <td>
        <?
          $arraQtde = array("Nenhum","1 registro","1 ou mais");
          for($i = 0 ;$i <count($arraQtde); $i++) {
        ?>
        &nbsp;<input name='rotinas_quantidade' type='radio' value='<?=$i?>' class='checkbox' <?= $i==0?"checked='checked'":"" ?> /> <?=$arraQtde[$i] ?>
        <? } ?>
			</td>
     </tr>
     <tr>
      <td class='legenda'><label for="rotinas_visivel">Visível:</label></td>
      <td>
        <input name='rotinas_visivel' type='radio' value='s' class='checkbox' <? if($rotinas_visivel == 's' or empty($rotinas_visivel)) {?> checked="checked"<? } ?> /> Sim
        <input name='rotinas_visivel' type='radio' value='n' class='checkbox' <? if($rotinas_visivel == 'n') { ?> checked="checked" <? } ?> /> Não
      </td>
     </tr>
     <tr>
    <td class='legenda'><label for="btn_imagem">Imagem botão</label></td>
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
              echo "<td style='width:33%'><input name='btn_imagem' type='radio' value='".$arquivos2."' />
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
<? require_once("rodape.php") ?>
