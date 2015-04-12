<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 12/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: categorias_cadastrar.php		                    '
---------------------------------------------------------*/
 $form        = "frm_categoria";
 require_once("lib/configs.php");
 $parent_id   = $_REQUEST["sels"];
 if(is_array($parent_id)) $parent_id = $parent_id[0];

 $titulo      = empty($parent_id)? $rotinaClass->menu_rotinas_titulo("") : "Produtos &raquo Categorias &raquo; Cadastrar Subcategoria";
 $link        = "categorias_listar.php";

 if(isset($_POST["btn_salvar"]))
 {

  $categorias_descricao    = $_POST["categorias_descricao"];
  $categorias_ordem        = $_POST["categorias_ordem"];


   $sql = "INSERT INTO categorias SET
   categorias_descricao = '$categorias_descricao',
   parent_id = '".(!empty($parent_id) ? $parent_id : 0)."',
   categorias_ordem =  '$categorias_ordem',
   data_adicionado = NOW(),
   data_modificado = NOW()";
   $result = $conn->sql($sql);
   $categorias_id = $conn->id();

   $mensagem_log = "Subcategoria cadastrada com sucesso($categorias_id).";
   createLog('',$pageAtual,'',$mensagem_log);
   header("location: $link");
 }

 //Selecionar ordem em categoria raiz
 $sql = "SELECT COUNT(*)+1 FROM categorias WHERE parent_id = '$parent_id'";
 $result = $conn->sql($sql);

 if(mysql_num_rows($result) > 0) $categorias_ordem = mysql_result($result,0,0);

 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/categorias.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
   <table class="TableLista">
     <tr>
     <td class='legenda'><label for="categorias_descricao">Nome:</label></td>
     <td><input name="categorias_descricao" type="text" size="50" /></td>
    </tr>
    <tr>
     <td class='legenda'><label for="categorias_ordem">Ordem:</label></td>
     <td><input name="categorias_ordem" type="text" size="3" value="<?=$categorias_ordem ?>" /></td>
    </tr>
    <tr class='BarraPag'>
       <td colspan="2">
        <input name="btn_salvar" type="submit" value="salvar" />
        <input name="sels" type="hidden" value="<?= $parent_id; ?>" />
	    </td>
    </tr>
   </table>
  </form>
</div>
<? require_once("rodape.php") ?>
