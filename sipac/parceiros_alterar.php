<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 15/02/2008                                     '
   Última Modificação: 15/10/2009                         '
   Página: parceiros_alterar.php		                      '
---------------------------------------------------------*/
 $form        = "frm_parceiro";
 require_once("lib/configs.php");
 $titulo 			= $rotinaClass->menu_rotinas_titulo("");
 $link   			= "parceiros_listar.php";
 $sels        = $_REQUEST["sels"];

 if(is_array($sels)) $sels = $sels[0];

 if(isset($_POST["btn_salvar"]))
 {
  $parceiros_razao_social   	 = $_REQUEST["parceiros_razao_social"];
  $parceiros_nome_fantasia   	 = $_REQUEST["parceiros_nome_fantasia"];
  $parceiros_cnpj   	         = $_REQUEST["parceiros_cnpj"];
  $parceiros_valor   	         = str_replace(",",".",$_REQUEST["parceiros_valor"]);
  $parceiros_imagem   	       = $_FILES["parceiros_imagem"];
  $parceiros_imagemOld	       = $_REQUEST["parceiros_imagemOld"];
  $parceiros_url   	           = $_REQUEST["parceiros_url"];
  $parceiros_status   	       = $_REQUEST["parceiros_status"];
  $parceiros_nome_responsavel  = $_REQUEST["parceiros_nome_responsavel"];
  $parceiros_email_responsavel = $_REQUEST["parceiros_email_responsavel"];
  $parceiros_tel_responsavel   = $_REQUEST["parceiros_tel_responsavel"];
  $parceiros_cel_responsavel   = $_REQUEST["parceiros_cel_responsavel"];
  $categorias_id               = $_REQUEST["categorias_id"];

  $SQL = "UPDATE parceiros SET
  parceiros_razao_social = '$parceiros_razao_social',
  parceiros_nome_fantasia = '$parceiros_nome_fantasia',
  parceiros_cnpj = '$parceiros_cnpj',
  parceiros_valor = '$parceiros_valor',
  parceiros_url = '$parceiros_url',
  parceiros_status = '$parceiros_status',
  parceiros_nome_responsavel = '$parceiros_nome_responsavel',
  parceiros_email_responsavel = '$parceiros_email_responsavel',
  parceiros_tel_responsavel = '$parceiros_tel_responsavel',
  parceiros_cel_responsavel = '$parceiros_cel_responsavel'
  WHERE parceiros_id = '$sels'";
  $result = $conn->sql($SQL);

  //2. Inserir Imagem do Parceiro
  if(!isset($parceiros_imagem["name"]) or !$parceiros_imagem["name"])
  {
	 $p_imagem="";
	 $mensagem_log = "Variavel de imagem vazia.";
  }
  else
  {
    if(!empty($parceiros_imagemOld) and file_exits(DIR_PARCEIROS.$parceiros_imagemOld))
      unlink(DIR_PARCEIROS.$parceiros_imagemOld);
    $arraNome  = explode(" ",$parceiros_nome_fantasia);
		$ext 			 = substr($parceiros_imagem["name"],-4);
		$name      = retira_acentos($arraNome[0])."_".$sels;
		$p_imagem  = $name.$ext;


	  if(!copy($parceiros_imagem["tmp_name"],DIR_PARCEIROS.$p_imagem))
      $mensagem_log = "Aconteceu um erro durante o envio da imagem<br />";
    else
    {
			//Atualiza o parceiro para inserir a imagem
			$SQL = "UPDATE parceiros SET parceiros_imagem='$p_imagem' WHERE parceiros_id='$sels'";
			$result = $conn->sql($SQL);
			$mensagem_log = "Foto enviada com sucesso<br />";

     }
  }
   //3. Excluir categorias antigas e inserir categorias novas do Parceiro
  $SQL = "DELETE FROM parceiros_categorias WHERE parceiros_id='$sels'";
  $result = $conn->sql($SQL);

  //4. Inserir categorias do Parceiro
  if(!empty($categorias_id))
  {
    foreach($categorias_id as $categoria_id)
    {
      $SQL = "INSERT INTO parceiros_categorias(parceiros_id,categorias_id) VALUES ('$sels','$categoria_id')";
      $result = $conn->sql($SQL);
    }
  }
  $mensagem_log .= " - Parceiro alterado com sucesso($sels).";
  createLog('',$pageAtual,'',$mensagem_log);
  header("location: $link");

 }
 else
 {
  $SQL = "SELECT parceiros_razao_social,parceiros_nome_fantasia,parceiros_cnpj,
  parceiros_valor,parceiros_imagem,parceiros_url,parceiros_status,parceiros_nome_responsavel,
  parceiros_email_responsavel,parceiros_tel_responsavel,parceiros_cel_responsavel
  FROM parceiros WHERE parceiros_id = '$sels'";
  $result = $conn->sql($SQL);
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
 /* --- Categorias --*/
  // Selecionar categorias
  //Categoria 0 (página inicial)
  $SQL = "SELECT categorias_id FROM parceiros_categorias WHERE parceiros_id = '$parceiros_id' AND categorias_id = 0";
  $result = $conn->sql($SQL);
  if(mysql_num_rows($result) >0 )
    $cat_index = 0;

function listaCategorias($parent_id,$space)
{
   global $conn,$sels;

   $sql = "SELECT * FROM categorias WHERE parent_id = $parent_id  ORDER BY categorias_ordem";
   $result = $conn->sql($sql);
   if(mysql_num_rows($result))
   {
      while($linha = mysql_fetch_array($result))
      {

         $sql = "SELECT categorias_id FROM parceiros_categorias WHERE categorias_id = '".$linha["categorias_id"]."' AND parceiros_id='".$sels."'";
         $result2 = $conn->sql($sql);
         $linha2 = mysql_fetch_array($result2);
         echo "<li><input name='categorias_id[]' type='checkbox' value='".$linha["categorias_id"]."' ".($linha["categorias_id"] == $linha2["categorias_id"] ? "checked='checked'" : "")." />". $space . htmlspecialchars($linha["categorias_descricao"])."</li>\n";

         listaCategorias($linha["categorias_id"],'&nbsp; '.$space);
      }
   }
}
 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
<script type='text/javascript' src='js/jquery.price_format.1.3.js'></script>
<script type='text/javascript' src='js/parceiros.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post" onsubmit="return checkform(this)" enctype="multipart/form-data">
	 <strong>Informações do Parceiro</strong>
	 <table class="TableLista">
     <tr>
      <td class='legenda'><label for="parceiros_razao_social">Razão Social:</label></td>
      <td><input name="parceiros_razao_social" type="text" size="50" value="<?=$parceiros_razao_social ?>" /></td>
    </tr>
    <tr>
    	<td class="legenda"><label for="parceiros_nome_fantasia">Nome fanatsia:</label></td>
    	<td><input name="parceiros_nome_fantasia" type="text" size="50" value="<?=$parceiros_nome_fantasia ?>" /></td>
    </tr>
		<tr>
     <td class='legenda'><label for="parceiros_cnpj">CNPJ:</label></td>
     <td>
     <input name="parceiros_cnpj" type="text" size="16" maxlength="16" value="<?=$parceiros_cnpj ?>" />
      </td>
    </tr>
    <tr>
    	<td class="legenda"><label for="parceiros_valor">Valor:</label></td>
    	<td><input name="parceiros_valor" type="text" size="10" class="valor" value="<?= str_replace(".",",",$parceiros_valor) ?>" /></td>
    </tr>
    <tr>
    	<td class="legenda"><label for="parceiros_imagem">Imagem:</label></td>
    	<td><input name="parceiros_imagem" type="file" size="50" /><br />
      <img src="<?= DIR_PARCEIROS.$parceiros_imagem ?>" alt="<?=$parceiros_nome_fantasia ?>" /></td>
    </tr>
    <tr>
    	<td class="legenda"><label for="parceiros_url">URL:</label></td>
    	<td><input name="parceiros_url" type="text" size="50" value="<?=$parceiros_url ?>" /></td>
     <tr>
     <td class='legenda' width="120"><label for="parceiros_status">Status:</label></td>
     <td>
     <input name="parceiros_status" type="radio" value="S" class='checkbox' <?= $parceiros_status == "S" ? "checked='checked'" : '' ?> /> Ativo
     <input name="parceiros_status" type="radio" value="N" class='checkbox' <?= $parceiros_status == "N" ? "checked='checked'" : '' ?> /> Inativo
     </td>
    </tr>
   </table>
   <strong>Informações do Responsável</strong><br />
   <table class="TableLista">
    <tr>
      <td class="legenda"><label for="parceiros_nome_responsavel">Nome:</label></td>
      <td><input name="parceiros_nome_responsavel" type="text" size="50" value="<?=$parceiros_nome_responsavel ?>" /></td>
    </tr>
    <tr>
      <td class="legenda"><label for="parceiros_email_responsavel">E-mail:</label></td>
      <td><input name="parceiros_email_responsavel" type="text" size="50" value="<?=$parceiros_email_responsavel ?>" /></td>
    </tr>
    <tr>
      <td class="legenda"><label for="parceiros_tel_responsavel">Telefone:</label></td>
      <td><input name="parceiros_tel_responsavel" type="text" size="16" maxlength="16" class="telefone" value="<?=$parceiros_tel_responsavel ?>" /></td>
    </tr>
    <tr>
      <td class="legenda"><label for="parceiros_cel_responsavel">Celular:</label></td>
      <td><input name="parceiros_cel_responsavel" type="text" size="16" maxlength="16" class="telefone" value="<?=$parceiros_cel_responsavel ?>" /></td>
    </tr>
   </table>
   <strong>Categorias</strong>
   <table class="TableLista">
     <tr>
      <td>
        <ul>
          <li><input name='categorias_id[]' class='checkbox' type='checkbox' value='0' <?= $cat_index == 0?"checked='checked'":'' ?>/><strong> Página Inicial</strong></li>
          <?= listaCategorias(0," &raquo;");  ?>
        </ul>
       </td>
     </tr>
   </table>
   <br />
  <table class="TableLista">
     <tr class='BarraPag'>
      <td colspan="2">
        <input name="btn_salvar" type="submit" value="salvar" />
        <input name="sels" type="hidden" value="<?= $sels ?>" />
        <input name="parceiros_imagensOld" type="hidden" value="<?=$parceiros_imagem ?>" />
        <input name="alterar" type="hidden" value="alterar" />
       </td>
     </tr>
    </table>
  </form>
</div>
<? require_once("rodape.php") ?>
