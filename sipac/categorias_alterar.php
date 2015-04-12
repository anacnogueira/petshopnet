<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 12/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: categorias_alterar.php                         '
---------------------------------------------------------*/
 $form        = "frm_categoria";
 require_once("lib/configs.php");
 $titulo      = $rotinaClass->menu_rotinas_titulo("");
 $link        = "categorias_listar.php";
 $sels = $_REQUEST["sels"];
 if(is_array($sels)) $sels = $sels[0];

 $categorias_descricao = $_POST["categorias_descricao"];
 $categorias_ordem     = $_POST["categorias_ordem"];

 if(isset($_POST["btn_salvar"]))
 {

   //Insere as imagens na pasta  de categorias
    $sql = "UPDATE categorias SET
    categorias_descricao  = '$categorias_descricao',
    categorias_ordem      = '$categorias_ordem',
    data_modificado       = NOW()
    WHERE categorias_id='$sels'";
    $result = $conn->sql($sql);
    $mensagem_log .= "Categoria alterada com sucesso($sels).";
    createLog('',$pageName,'',$mensagem_log);
    header("location: $link");
 }
 else
 {
   $sql = "SELECT * FROM categorias WHERE categorias_id = '$sels'";
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
 $sql_categoria = "SELECT categorias_id,categorias_descricao FROM categorias WHERE categorias_id <> '$sels'";
 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/categorias.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
   <table class="TableLista">
     <tr>
      <td class='legenda'><label for="categorias_descricao">Nome:</label></td>
      <td><input name="categorias_descricao" type="text" size="50" value="<?=$categorias_descricao ?>" /></td>
     </tr>
     <tr>
       <td class='legenda'><label for="categorias_ordem">Ordem:</label></td>
       <td><input name="categorias_ordem" type="text" size="3" value="<?=$categorias_ordem ?>" /></td>
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
