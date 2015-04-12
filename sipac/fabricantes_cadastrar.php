<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 11/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: fabricantes_cadastrar.php		                  '
---------------------------------------------------------*/
 $form      = "frm_fornecedor";
 require_once("lib/configs.php");
 $titulo 		= $rotinaClass->menu_rotinas_titulo("");
 $link  		= "fabricantes_listar.php";
 
 if(isset($_POST["btn_salvar"]))
 {
  $fornecedores_nome   	     = $_POST["fornecedores_nome"];

  $sql = "INSERT INTO fornecedores SET
  fornecedores_nome = '$fornecedores_nome',
  data_adicionado = NOW(),
   data_modificado = NOW()";
  $result = $conn->sql($sql);
  $fornecedores_id = $conn->id();
  $mensagem_log .= " Fabricante cadastrado com sucesso($fornecedores_id).";
  createLog('',$pageAtual,'',$mensagem_log);
  header("location: $link");
 }
 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/fabricantes.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?=DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
   <table class="TableLista">
    <tr>
     <td class='legenda'><label for="fornecedores_nome">Nome:</label></td>
     <td><input name="fornecedores_nome" type="text" size="50" /></td>
    </tr>
    <tr class='BarraPag'>
      <td colspan="2"><input name="btn_salvar" type="submit" value="salvar" /></td>
     </tr>
    </table>
  </form>
</div>
<? require_once("rodape.php") ?>
