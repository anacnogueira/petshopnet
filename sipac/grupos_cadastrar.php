<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 05/09/2007                                     '
   Última Modificação: 24/03/2009                         '
   Página: grupos_cadastrar.php     	                      '
---------------------------------------------------------*/
 $form        = "frm_grupo";
 require_once("lib/configs.php");
 $titulo 		= $rotinaClass->menu_rotinas_titulo("");
 $link  		= "grupos_listar.php";

 if(isset($_POST["btn_salvar"]))
 {
   $grupos_nome   			= $_POST["grupos_nome"];
   $grupos_descricao   = $_POST["grupos_descricao"];

   $sql = "INSERT INTO grupos SET
   grupos_nome = '$grupos_nome',
   grupos_descricao = '$grupos_descricao'";
   $result = $conn->sql($sql);
   $sels   = $conn->id();

   $mensagem_log = "Grupo cadastrado com sucesso($sels).";
   createLog('',$pageAtual,'',$mensagem_log);

   header("location: $link");
 }
 require_once("topo.php");
 require_once("menu_lateral.php");
?>
 <div id="conteudo">
  <script type='text/javascript' src='js/grupos.js'></script>
  <div class='titulo'><?= $titulo ?></div>
  <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
  <form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
    <table class="TableLista">
      <tr>
        <td class='legenda'><label for="grupos_nome">Nome:</label></td>
        <td><input name="grupos_nome" type="text" size="50" /></td>
      </tr>
      <tr>
        <td class='legenda'><label for="grupos_descricao">Descrição:</label></td>
        <td><textarea name="grupos_descricao" cols="57" rows="5"></textarea></td>
      </tr>
      <tr class='BarraPag'>
        <td colspan="2"><input name="btn_salvar" type="submit" value="salvar" /></td>
      </tr>
    </table>
  </form>
 </div>
<? require_once("rodape.php") ?>
