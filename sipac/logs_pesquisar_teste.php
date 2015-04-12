<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: 24/03/2009                         '
   Página: users_cadastrar.php     	                      '
---------------------------------------------------------*/
  $allowRotina = "nao";
  $form        = "frm_user";
  require_once("lib/configs.php");

 require_once("topo.php");
 require_once("menu_lateral.php");
?>
 <div id="conteudo">
  <script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
  <script type='text/javascript' src='js/logs_teste.js'></script>
  <div class='titulo'><?= $titulo ?></div>
  <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
  <form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
    <table class="TableLista">
      <tr>
        <td class='legenda'><label for="data">Data:</label></td>
        <td><input name="data"  type="text" size="10" maxlength="10" /></td>
      </tr>

    </table>
  </form>
 </div>

