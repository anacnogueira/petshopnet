<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 10/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: produtos_cadastrar.php		                      '
---------------------------------------------------------*/
 $form        = "frm_parceiro";
 require_once("lib/configs.php");
 $titulo 			= $rotinaClass->menu_rotinas_titulo("");
 $link   			= "parceiros_listar.php";

 if(isset($_POST["btn_salvar"]))
 {
  $parceiros_razao_social   	 = $_REQUEST["parceiros_razao_social"];
  $parceiros_nome_fantasia   	 = $_REQUEST["parceiros_nome_fantasia"];
  $parceiros_cnpj   	         = $_REQUEST["parceiros_cnpj"];
  $parceiros_valor   	         = str_replace(",",".",$_REQUEST["parceiros_valor"]);
  $parceiros_imagem   	       = $_FILES["parceiros_imagem"];
  $parceiros_url   	           = $_REQUEST["parceiros_url"];
  $parceiros_status   	       = $_REQUEST["parceiros_status"];
  $parceiros_nome_responsavel  = $_REQUEST["parceiros_nome_responsavel"];
  $parceiros_email_responsavel = $_REQUEST["parceiros_email_responsavel"];
  $parceiros_tel_responsavel   = $_REQUEST["parceiros_tel_responsavel"];
  $parceiros_cel_responsavel   = $_REQUEST["parceiros_cel_responsavel"];
  $categorias_id               = $_REQUEST["categorias_id"];

  $SQL = "INSERT INTO parceiros SET
  parceiros_razao_social = '$parceiros_razao_social',
  parceiros_nome_fantasia = '$parceiros_nome_fantasia',
  parceiros_cnpj = '$parceiros_cnpj',
  parceiros_valor = '$parceiros_valor',
  parceiros_url = '$parceiros_url',
  parceiros_status = '$parceiros_status',
  parceiros_nome_responsavel = '$parceiros_nome_responsavel',
  parceiros_email_responsavel = '$parceiros_email_responsavel',
  parceiros_tel_responsavel = '$parceiros_tel_responsavel',
  parceiros_cel_responsavel = '$parceiros_cel_responsavel'";
  $result = $conn->sql($SQL);
  $parceiros_id = $conn->id();
  
  //2. Inserir Imagem do Parceiro
  if(!isset($parceiros_imagem["name"]) or !$parceiros_imagem["name"])
  {
	 $p_imagem="";
	 $mensagem_log = "Variavel de imagem vazia.";
  }
  else
  {
		$arraNome  = explode(" ",$parceiros_nome_fantasia);
		$ext 			 = substr($parceiros_imagem["name"],-4);
		$name      = retira_acentos($arraNome[0])."_".$parceiros_id;
		$p_imagem  = $name.$ext;


    if(!copy($parceiros_imagem["tmp_name"],"../".DIR_PARCEIROS.$p_imagem))
      $mensagem_log = "Aconteceu um erro durante o envio da imagem<br />";
    else
    {
			//Atualiza o parceiro para inserir a imagem
			$SQL = "UPDATE parceiros SET parceiros_imagem='$p_imagem' WHERE parceiros_id='$parceiros_id'";
			$result = $conn->sql($SQL);
			$mensagem_log = "Foto enviada com sucesso<br />";

     }
  }

  //3. Inserir categorias do Parceiro
  if(!empty($categorias_id))
  {
    foreach($categorias_id as $categoria_id)
    {
      $SQL = "INSERT INTO parceiros_categorias(parceiros_id,categorias_id) VALUES ('$parceiros_id','$categoria_id')";
      $result = $conn->sql($SQL);
    }
  }
  $mensagem_log .= " - Parceiro cadastrado com sucesso($parceiros_id).";
  createLog('',$pageAtual,'',$mensagem_log);
  header("location: $link");

 }
 /* --- Categorias --*/
 /*function listaCategorias($parent_id,$space)
{
   global $conn;

   $sql = "SELECT * FROM categorias WHERE parent_id = $parent_id  ORDER BY categorias_ordem";
   $result = $conn->sql($sql);
   if(mysql_num_rows($result))
   {
      while($linha = mysql_fetch_array($result))
      {

         echo "<li><input name='categorias_id[]' type='checkbox' value='".$linha["categorias_id"]."' />". $space .htmlspecialchars($linha["categorias_descricao"])."</li>\n";

         listaCategorias($linha["categorias_id"],'&nbsp; '.$space);
      }
   }
}*/
 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
<script type='text/javascript' src='js/jquery.price_format.1.3.js'></script>
<script type='text/javascript' src='js/parceiros.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post" enctype="multipart/form-data">
	 <strong>Informações do Parceiro</strong>
	 <table class="TableLista">
     <tr>
      <td class='legenda'><label for="parceiros_razao_social">Razão Social:</label></td>
      <td><input name="parceiros_razao_social" type="text" size="50" /></td>
    </tr>
    <tr>
    	<td class="legenda"><label for="parceiros_nome_fantasia">Nome fanatsia:</label></td>
    	<td><input name="parceiros_nome_fantasia" type="text" size="50" /></td>
    </tr>
		<tr>
     <td class='legenda'><label for="parceiros_cnpj">CNPJ:</label></td>
     <td>
     <input name="parceiros_cnpj" type="text" size="16" maxlength="16" />
      </td>
    </tr>
    <tr>
    	<td class="legenda"><label for="parceiros_valor">Valor:</label></td>
    	<td><input name="parceiros_valor" type="text" size="10" class="valor" /></td>
    </tr>
    <tr>
    	<td class="legenda"><label for="parceiros_imagem">Imagem:</label></td>
    	<td><input name="parceiros_imagem" type="file" size="50" /></td>
    </tr>
    <tr>
    	<td class="legenda"><label for="parceiros_url">URL:</label></td>
    	<td><input name="parceiros_url" type="text" size="50" value="http://" /></td>
     <tr>
     <td class='legenda' width="120"><label for="parceiros_status">Status:</label></td>
     <td>
     <input name="parceiros_status" type="radio" value="S" class='checkbox' checked="checked" /> Ativo
     <input name="parceiros_status" type="radio" value="N" class='checkbox' /> Inativo
     </td>
    </tr>
   </table>
   <strong>Informações do Responsável</strong><br />
   <table class="TableLista">
    <tr>
      <td class="legenda"><label for="parceiros_nome_responsavel">Nome:</label></td>
      <td><input name="parceiros_nome_responsavel" type="text" size="50" /></td>
    </tr>
    <tr>
      <td class="legenda"><label for="parceiros_email_responsavel">E-mail:</label></td>
      <td><input name="parceiros_email_responsavel" type="text" size="50" /></td>
    </tr>
    <tr>
      <td class="legenda"><label for="parceiros_tel_responsavel">Telefone:</label></td>
      <td><input name="parceiros_tel_responsavel" type="text" size="20" maxlength="20" class="telefone" /></td>
    </tr>
    <tr>
      <td class="legenda"><label for="parceiros_cel_responsavel">Celular:</label></td>
      <td><input name="parceiros_cel_responsavel" type="text" maxlength="20" class="telefone" /></td>
    </tr>
   </table>
   <strong>Categorias</strong>
   <table class="TableLista">
     <tr>
      <td>
        <ul>
          <li><input name='categorias_id[]' class='checkbox' type='checkbox' value='0' /><strong> Página Inicial</strong></li>
          <?= listaCategorias(0," &raquo;")  ?>
        </ul>
       </td>
     </tr>
   </table>
   <br />
  <table class="TableLista">
     <tr class='BarraPag'>
      <td colspan="2">
        <input name="btn_salvar" type="submit" value="salvar" />
       </td>
     </tr>
    </table>
  </form>
</div>
<? require_once("rodape.php") ?>
