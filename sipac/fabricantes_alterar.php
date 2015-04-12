<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 11/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: fabricantes_alterar.php		                    '
---------------------------------------------------------*/
 $form        		= "frm_fornecedor";
 require_once("lib/configs.php");
 $titulo 					= $rotinaClass->menu_rotinas_titulo("");
 $link   					= "fabricantes_listar.php";

 $sels = $_REQUEST["sels"];
 
 if(is_array($sels)) $sels = $sels[0];
 
 if(isset($_POST["btn_salvar"]))
 {
  $fornecedores_nome = $_POST["fornecedores_nome"];

  $sql = "UPDATE fornecedores SET
  fornecedores_nome ='$fornecedores_nome',
  data_modificado = NOW()
  WHERE fornecedores_id='$sels'";
  $result = $conn->sql($sql);

  $mensagem_log .= " Fabricante alterado com sucesso($sels).";
  createLog('',$pageAtual,'',$mensagem_log);
  header("location: $link");
 }
 else
 {
  $sql = "SELECT * FROM fornecedores WHERE fornecedores_id = '$sels'";
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
<script type='text/javascript' src='js/fabricantes.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?=DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
   <table class="TableLista">
    <tr>
     <td class='legenda'><label for="fornecedores_nome">Nome:</label></td>
     <td><input name="fornecedores_nome" type="text" size="50" value="<?=$fornecedores_nome?>" /></td>
    </tr>
    <tr class='BarraPag'>
      <td colspan="2">
			<input name="sels" type="hidden" value="<?=$sels?>" />
			<input name="btn_salvar" type="submit" value="salvar" />
			</td>
     </tr>
    </table>
  </form>
</div>
<? require_once("rodape.php") ?>
