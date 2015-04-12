<?
  /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 14/10/2009                                     '
   Última Modificação: __/__/____                         '
   Página: comentarios_cadastrar.php                     '
---------------------------------------------------------*/
 $form        = "frm_comentario";
 require_once("lib/configs.php");
 
 $titulo = $rotinaClass->menu_rotinas_titulo("");
 $link   = "comentarios_listar.php";

 $SQL_produto  = "SELECT produtos_codigo,produtos_nome FROM produtos";
 
 if(isset($_POST["btn_salvar"]))
 { 
  $produtos_codigo   	 = $_POST["produtos_codigo"];
  $comentarios_nota    = $_POST["comentarios_nota"];
  $comentarios_nome    = $_POST["comentarios_nome"];
  $comentarios_email   = $_POST["comentarios_email"];
  $comentarios_cidade  = $_POST["comentarios_cidade"];
  $comentarios_estado  = $_POST["comentarios_estado"];
  $comentarios_titulo  = $_POST["comentarios_titulo"];
  $comentarios_texto   = nl2br($_POST["comentarios_texto"]);
  $comentarios_status  = $_POST["comentarios_status"]; 
	
  $SQL = "INSERT INTO comentarios SET
     produtos_codigo = '$produtos_codigo',
     comentarios_nota = '$comentarios_nota',
     comentarios_nome = '$comentarios_nome',
     comentarios_email = '$comentarios_email',
     comentarios_cidade = '$comentarios_cidade',
     comentarios_estado = '$comentarios_estado',
     comentarios_titulo = '$comentarios_titulo',
     comentarios_status = '$comentarios_status',
     comentarios_texto =  '$comentarios_texto',
     comentarios_ip    = '".$_SERVER["REMOTE_ADDR"]."',
     comentarios_data = NOW()";
    $result = $conn->sql($SQL);
    $comentantarios_id = $conn->id();

    $mensagem_log .= " - Comentário cdastrado com sucesso($comentantarios_id).";
    createLog('',$pageAtual,'',$mensagem_log);
    header("location: $link");

 }
 //Exbir Estrelas 
 for($indx=1;$indx<=5;$indx++)
   $star .= " <input type='radio' class='star' name='comentarios_nota' value='$indx' />"; 

 $header  .= "<link href='templates/jquery.rating.css' rel='stylesheet' type='text/css' />\n";
 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type="text/javascript" src="js/jquery.rating.js"></script>
<script type="text/javascript" src="js/comentarios.js"></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
<form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
 <table class="TableLista">
   <tr>
     <td class='legenda' width="120"><label for="produtos_codigo">Produto:</label></td>
     <td><?= fct_MontarLista($SQL_produto,$produtos_codigo,'produtos_codigo') ?></td>
    </tr>
   <tr>
    <td class="legenda">Nota:</td>
    <td><?=$star ?></td>
   </tr>
   <tr>
     <td class='legenda'><label for="comentarios_nome">Nome:</label></td>
     <td><input name="comentarios_nome" type="text" size="50" /></td>
   </tr>
   <tr>
     <td class='legenda'><label for="comentarios_email">E-mail:</label></td>
     <td><input name="comentarios_email" type="text" size="50" /></td>
   </tr>
   <tr>
     <td class='legenda'><label for="comentarios_cidade">Cidade:</label></td>
     <td><input name="comentarios_cidade" type="text" size="50" /> Estado: <input name="comentarios_estado" size="2" maxlength="2" /></td>
   </tr>
   <tr>
     <td class='legenda'><label for="comentarios_titulo">Título:</label></td>
     <td><input name="comentarios_titulo" type="text" size="50" /></td>
   </tr>
   <tr>
     <td class='legenda'><label for="comentarios_texto">Comentário:</label></td>
     <td><textarea name="comentarios_texto" cols='57' rows='5'></textarea></td>
   </tr>
   <tr>
     <td class='legenda'><label for="comentarios_status">Status:</label></td>
     <td>
	    <input name="comentarios_status" type="radio" value="S" checked="checked" /> Ativo
	    <input name="comentarios_status" type="radio" value="N" /> Inativo
	</td>
   </tr>
   <tr class='BarraPag'>
     <td colspan="2"><input name="btn_salvar" type="submit" value="salvar" /></td>
   </tr>	  
 </table>
</form>
</div>
<? require_once("rodape.php") ?>
