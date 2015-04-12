<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/10/2007                                     '
   Última Modificação: __/__/____                         '
   Página: promocoes_alterar.php                       '
---------------------------------------------------------*/
$form          = "frm_promocao";
 require_once("lib/configs.php");
 $titulo 		= $rotinaClass->menu_rotinas_titulo("");
 $link 			= "promocoes_listar.php";
 $sels	= $_REQUEST["sels"];

 if(is_array($sels)) $sels = $sels[0];

 $SQL_produto = "SELECT produtos_codigo,produtos_nome FROM produtos WHERE produtos_codigo NOT IN
 (SELECT produtos_codigo FROM promocoes WHERE produtos_codigo <> (
 SELECT produtos_codigo FROM promocoes WHERE produtos_codigo = '$sels')) ORDER BY produtos_nome";

 if(isset($_POST["btn_salvar"]))
 {
  $produtos_codigo   = $_POST["produtos_codigo"];
  $promocoes_preco   =  $_POST["promocoes_preco"];
  $data_ini          = fct_conversorData($_POST["data_ini"],2);
  $data_fin          = fct_conversorData($_POST["data_fin"],2);
  //Calcular valor do produto(se necessario)
  if(strpos($promocoes_novo_preco, "%") !== false)
  {

   $promocoes_preco = (rtrim($promocoes_preco,"%"))/100;

    //Seleciona o preço do produto
    $sql = "SELECT produtos_preco FROM produtos WHERE produtos_codigo='$produtos_codigo'";
    $result = $conn->sql($sql);
    $produtos_preco =  mysql_num_rows($result) > 0?mysql_result($result,0,0):0;
    $novo_preco     = $produtos_preco - ($produtos_preco * $promocoes_preco);
  }
  else
   $novo_preco = $promocoes_preco;

  $novo_preco =  str_replace(",",".",$novo_preco);

  $sql = "UPDATE promocoes SET
     promocoes_preco = '$novo_preco'";
  if(!empty($data_ini))
    $sql .= ",data_ini = '$data_ini'";
  else
    $sql .= ",data_ini = NULL";
  if(!empty($data_fin))
    $sql .= ",data_fin = '$data_fin'";
  else
    $sql .= ",data_fin = NULL";  

  $sql.="  WHERE promocoes_id = '$sels'";
  $result = $conn->sql($sql);
  $mensagem_log = "Promoção alterada com sucesso($sels).";
  createLog('',$pageAtual,'',$mensagem_log);
  header("location: $link");
 }
 else
 {
  $sql = "SELECT * FROM promocoes WHERE promocoes_id = '$sels'";
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
 <script type='text/javascript' src='js/promocoes.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageName ?>" method="post" onsubmit="return checkform(this)">
   <table class="TableLista">
    <tr>
     <td class='legenda'><label for="produtos_codigo">Produto:</label></td>
     <td><?= fct_MontarLista($SQL_produto,$produtos_codigo,"produtos_codigo") ?></td>
    </tr>
    <tr>
     <td class='legenda'><label for="promocoes_preco">Preço Especial:</label></td>
     <td><input name="promocoes_preco" type="text" size="30" value="<?=str_replace(".",",",$promocoes_preco)?>" /></td>
    </tr>
    <tr>
      <td class='legenda'><label for="data_ini">Início:</label></td>
      <td>
        <input name="data_ini" type="text" size="10" maxlength="10"  value="<?=fct_conversorData($data_ini,1) ?>" />
        <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="data_ini" />
        (dd/mm/aaaa)
      </td>
     </tr>
     <tr>
      <td class='legenda'><label for="data_fin">Fim:</label></td>
      <td>
        <input name="data_fin" type="text" size="10" maxlength="10"  value="<?=fct_conversorData($data_fin,1) ?>" />
        <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="data_fin" />
        (dd/mm/aaaa)
      </td>
     </tr>
     <tr class='BarraPag'>
      <td colspan="2">
		<input name="sels" type="hidden" value="<?=$sels?>" />
		<input name="btn_salvar" type="submit" value="salvar" />
	   </td>
     </tr>
    </table>
    <h4>Notas Especiais:</h4>
    <ul>
      <li>Você pode entrar com porcentagens para deduzir no preço do produto, por exemplo: 20%</li>
      <li>Deixe o campo de expiração em branco caso a promoção não se expire.</li>
    </ul>
  </form>
</div>
<? require_once("rodape.php") ?>
