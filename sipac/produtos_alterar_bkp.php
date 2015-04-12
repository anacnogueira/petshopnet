<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 10/09/2007                                     '
   Última Modificação: 10/10/2009                         '
   Página: produtos_cadastrar.php		                      '
---------------------------------------------------------*/
 $header   = "<script src='../lightbox/js/prototype.js' type='text/javascript'></script>\n";
 $header  .= "<script src='../lightbox/js/scriptaculous.js?load=effects,builder' type='text/javascript'></script>\n";
 $header  .= "<script src='../lightbox/js/lightbox.js' type='text/javascript' ></script>\n";
 $header  .= "<link href='../lightbox/css/lightbox.css' rel='stylesheet'  type='text/css' media='screen' />\n";

 $form        = "frm_produto";
 require_once("lib/configs.php");
 require_once("../fckeditor/fckeditor.php");
 $titulo 			= $rotinaClass->menu_rotinas_titulo("");
 $link   			= "produtos_listar.php";
 $sels        = $_REQUEST["sels"];

 if(is_array($sels)) $sels = $sels[0];

 // COMEÇO //
if(isset($_POST["btn_salvar"]))
{
  //Informações do produto
  $produtos_status   		      = $_POST["produtos_status"];
  $produtos_data_disponivel   = fct_conversorData($_POST["produtos_data_disponivel"],2);
  $produtos_nome              = $_POST["produtos_nome"];
  $fornecedores_id            = $_POST["fornecedores_id"];
  $fornecedores_nome          = $_POST["fornecedores_nome"];
  $produtos_preco             = str_replace(",",".",$_POST["produtos_preco"]);
  $produtos_descricao         = htmlspecialchars_decode($_POST["produtos_descricao"]);
  $produtos_especificacao     = $_POST["produtos_especificacao"];
  $produtos_quantidade        = $_POST["produtos_quantidade"];
  $produtos_modelo            = $_POST["produtos_modelo"];
  $produtos_peso              = str_replace(",",".",$_POST["produtos_peso"]);

  //Fornecedores (caso cadastrado novo)
  if(!empty($fornecedores_nome) and $fornecedores_nome != "Cadastrar novo..."){
    $sql = "INSERT INTO fornecedores SET fornecedores_nome = '$fornecedores_nome'";
    $result = $conn->sql($sql);
    $fornecedores_id = $conn->id();
  }
  
  //Imagens
  $_FILES["produtos_imagem"]['name'] = array_unique($_FILES["produtos_imagem"]["name"]);
  $produtos_imagem               = $_FILES["produtos_imagem"];
  $produtos_imagem_old           = $_POST["produtos_imagem_old"];

  //Categorias
  $categorias_id              = $_POST["categorias_id"];
  $produtos_destaque          = $_POST["produtos_destaque"];

  //Palavra Chave
  $palavras_chave             = explode(",",trim(trim($_POST["palavras_chave"],",")));

   //Promoções
  $promocoes_preco            = $_POST["promocoes_preco"];
  $expira_data                = fct_conversorData($_POST["expira_data"],2);
  $promocoes_status           = $_POST["promocoes_status"];

  //Frete
  $produtos_frete_gratis      = $_POST["produtos_frete_gratis"];
  $produtos_frete_ini         = fct_conversorData($_POST["produtos_frete_ini"],2);
  $produtos_frete_fin         = fct_conversorData($_POST["produtos_frete_fin"],2);


  if(empty($produtos_destaque)) $produtos_destaque = 0;
  if(empty($produtos_frete_gratis)) $produtos_frete_gratis = "N";

  //1. Inserir Produto
  $sql = "UPDATE produtos SET
  produtos_nome            = '$produtos_nome',
  fornecedores_id                = '$fornecedores_id',
  produtos_descricao       = '$produtos_descricao',
  produtos_quantidade      = '$produtos_quantidade',
  produtos_modelo          = '$produtos_modelo',
 	produtos_preco            = '$produtos_preco',
  produtos_data_modificado = NOW(),
  produtos_data_disponivel = '$produtos_data_disponivel',
  produtos_peso            = '$produtos_peso',
  produtos_status          = '$produtos_status',
  produtos_destaque        = '$produtos_destaque'
  WHERE produtos_id='$sels'";
  $result = $conn->sql($sql);

  //2. Imagens
  $sql     = "SELECT produtos_imagem FROM produtos_imagens WHERE produtos_id = '$sels'";
  if(!empty($produtos_imagem_old))
  {
    $arraImagens = implode("','",$produtos_imagem_old);
    $sql .= " AND produtos_imagem NOT IN('$arraImagens')";
  }
  
  $result  = $conn->sql($sql);
  while($img = mysql_fetch_array($result))
  {
  	$thumb_old        = substr($img["produtos_imagem"],0,strlen($img["produtos_imagem"])-4).".thumb".substr($img["produtos_imagem"],-4);

    //2.2 Exclui as imagens da pasta
  	if(file_exists(DIR_PRODUTOS.$img["produtos_imagem"]))
	    unlink(DIR_PRODUTOS.$img["produtos_imagem"]);

    if(file_exists(DIR_PRODUTOS.$thumb_old))
	   unlink(DIR_PRODUTOS.$thumb_old);

    //Excluir as imagens da tabela
     $sql = "DELETE FROM produtos_imagens WHERE produtos_id = '$sels' AND produtos_imagem='".$img["produtos_imagem"]."'";
     $conn->sql($sql);
  }

  //2.3 Inserir Imagens do Produto
  if(is_array($produtos_imagem))
  {
   	  foreach ($produtos_imagem['name'] as $key => $imagem)
   	  {
       	if(!isset($produtos_imagem["name"][$key]) or !$produtos_imagem["name"][$key])
  		{
   	  	   $imagem_arquivo = "";
	       $mensagem_log    = "Variavel de imagem vazia.";
   	  	}

   	  	else
   	  	{
   	  	   $ext             = substr($produtos_imagem["name"][$key],-4);
   	  	   $name            = retira_acentos(left($produtos_nome,30))."_".$key."_".$sels;
   	  	   $imagem_arquivo = $name.$ext;
   	  	   $quality         = 95;
	         $size  		      = 150;


	       if(!copy($produtos_imagem["tmp_name"][$key],DIR_PRODUTOS.$imagem_arquivo))
	        $mensagem_log = "Aconteceu um erro durante o envio da imagem<br />";

	       else
		   {
		   	 //Insere as imagens na tabela imagens_produto
		   	 $sql = "INSERT INTO produtos_imagens SET produtos_imagem='$imagem_arquivo',produtos_id='$sels'";
		   	 $result = $conn->sql($sql);
		   	 $mensagem_log = "Foto $key enviada com sucesso <br />";

		   	 //Inicio criar Thumb
		   	 $extFunc = "";
			 $dh = opendir((DIR_PRODUTOS));
			 while (false !== ($filename = readdir($dh)))
			 {
        		if($filename == $imagem_arquivo)
   				{
         		 if (strtoupper($ext) == ".JPG")
        		  $extFunc = "Jpeg";
    			 elseif (strtoupper($ext) == ".GIF")
        	      $extFunc = "Gif";
    		     elseif (strtoupper($ext) == ".PNG")
       		      $extFunc = "Png";
    		    else
     		     $mensagem_log .= "extensão $ext não suportada para criar a miniatura $key<br />";
               }

			   if(!empty($extFunc))
			   {
                 $CriarImagemDe = "ImageCreateFrom" . $extFunc;

    		     $img = $CriarImagemDe(DIR_PRODUTOS . $imagem_arquivo);

                 $wi = ImageSX($img);
    		     $he = ImageSY($img);
    		     $x =  ($wi * $size)/ $he;
			     $y =   $size;
    		     $img_nova = imagecreatetruecolor($x,$y);
    		     imagecopyresampled($img_nova, $img, 0, 0, 0, 0, $x, $y, $wi, $he);

    		     $Image = "Image" . $extFunc;
    		     $Image($img_nova, DIR_PRODUTOS . $name .".thumb". $ext, $quality);

    		     //Destruimos o cache da imagem para liberar uma nova thumb
    		     ImageDestroy($img_nova);
    		     ImageDestroY($img);
    		   }
   			 }
           }
           $mensagem_log .=  "Minitura gerada com sucesso!";
		   //Fim criar Thumb

		 }
   	  }
   }

  //3. Excluir categorias antigas e inserir categorias novas do Produto
  $SQL = "DELETE FROM produtos_categoria WHERE produtos_id='$sels'";
  $result = $conn->sql($SQL);
  if(!empty($categorias_id)){
    foreach($categorias_id as $categoria_id)
    {
     $sql = "INSERT INTO produtos_categoria(produtos_id,categorias_id) VALUES ('$sels','$categoria_id')";
   $result = $conn->sql($sql);
   }
  }
  //4. Cadastrar palavras chave
  if(is_array($palavras_chave))
  {

   $sql = "DELETE FROM produtos_relacionamentos WHERE produtos_id='$sels'";
   $result = $conn->sql($sql);

   foreach($palavras_chave as $palavra)
   {
  	  $sql = "INSERT INTO produtos_relacionamentos SET produtos_id='$sels',palavra_chave='$palavra'";
  	  $conn->sql($sql);
    }
  }

  //5. Promoção
  if(!empty($promocoes_preco))
  {
  	if(strpos($promocoes_preco, "%") !== false)
    {
       $promocoes_preco = (rtrim($promocoes_preco,"%"))/100;
	     $novo_preco      = $produtos_preco - ($produtos_preco * $promocoes_preco);
    }
	else
     $novo_preco = $promocoes_preco;

  	 $novo_preco =  str_replace(",",".",$novo_preco);

  	 $sql = "UPDATE promocoes SET
     promocoes_preco = '$novo_preco',
     promocoes_ultima_modificacao = NOW(),
     promocoes_status = '".$promocoes_status."'";
     if(empty($expira_data))
      $sql .= ",expira_data = NULL";
     else
      $sql .= ",expira_data = '$expira_data'";

     $sql.="  WHERE promocoes_id = '$sels'";
     $result = $conn->sql($sql);
  }

  //6. Frete
  $sql = "UPDATE produtos_frete SET
  produtos_frete_gratis = '$produtos_frete_gratis'";
  if(!empty($produtos_frete_ini))
   $sql .= ", produtos_frete_ini = '$produtos_frete_ini'";
  else
   $sql .= ", produtos_frete_ini = NULL";
  if(!empty($produtos_frete_fin))
   $sql .= ", produtos_frete_fin = '$produtos_frete_fin'";
  else
   $sql .= ", produtos_frete_fin = NULL";

  $sql .= " WHERE produtos_id = '$sels'";
  $result = $conn->sql($sql);

  $mensagem_log .= " - Produto alterado com sucesso($sels).";
  createLog('',$pageAtual,'',$mensagem_log);
  header("location: $link");

 } // FIM //
 else
 {
  $sql = "SELECT * FROM
  produtos prod
  LEFT JOIN promocoes promo ON promo.produtos_id = prod.produtos_id
  LEFT JOIN produtos_frete pf ON pf.produtos_id = prod.produtos_id
  WHERE prod.produtos_id = '$sels'";
  //echo $sql;

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
 /* --- Categorias --*/
function listaCategorias($parent_id,$space)
{
   global $conn,$sels;

   $sql = "SELECT * FROM categorias WHERE parent_id = $parent_id  ORDER BY categorias_ordem";
   $result = $conn->sql($sql);
   if(mysql_num_rows($result))
   {
      while($linha = mysql_fetch_array($result))
      {

         $sql = "SELECT categorias_id FROM produtos_categoria WHERE categorias_id = '".$linha["categorias_id"]."' AND produtos_id='".$sels."'";
         $result2 = $conn->sql($sql);
         $linha2 = mysql_fetch_array($result2);
         echo "<li><input name='categorias_id[]' type='checkbox' value='".$linha["categorias_id"]."' ".($linha["categorias_id"] == $linha2["categorias_id"] ? "checked='checked'" : "")." />". $space . htmlspecialchars($linha["categorias_descricao"])."</li>\n";

         listaCategorias($linha["categorias_id"],'&nbsp; '.$space);
      }
   }
}

 //Palavras chave
 $sql    = "SELECT GROUP_CONCAT(palavra_chave) palavra_chave FROM produtos_relacionamentos WHERE produtos_id = '$sels'";
 $result = $conn->sql($sql);
 $palavras_chave = mysql_num_rows($result) > 0?mysql_result($result,0,0):null;

 //Imagens
 $sql = "SELECT produtos_imagem FROM produtos_imagens WHERE produtos_id = '$sels'";
 $result = $conn->sql($sql);
 if(mysql_num_rows($result) > 0)
 {
   $cont = 1;
   $listaImagens  =  "<table class='tbl_imagens'>\n";
   $listaImagens .=  "<tr>\n";
   while($linha3 = mysql_fetch_array($result))
   {
   	  $produtos_imagem_thumb = substr($linha3["produtos_imagem"],0,strlen($linha3["produtos_imagem"])-4).".thumb".substr($linha3["produtos_imagem"],-4);
	    $listaImagens .=  " <td> <a href='".DIR_PRODUTOS.$linha3["produtos_imagem"]."' rel='lightbox[roadtrip]' title='".$linha3["produtos_imagem"]."'><img src='".DIR_PRODUTOS.$produtos_imagem_thumb."' alt='".$linha3["produtos_imagem"]."' /></a><br /> <img src='".DIR_BTNS."btn_excluir2.png'  alt='Excluir' title='Excluir' />\n";
   	  $listaImagens .= "<input name='produtos_imagem_old[]' type='hidden' value='".$linha3["produtos_imagem"]."' /></td>\n";

		 if ($cont > 0 && $cont % 3 == 0)
       $listaImagens .=  " </tr><tr>\n";

	  $cont++;
   }
   $listaImagens .=  "</table>\n";

  }

 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/produtos.js'></script>
<script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
<script type='text/javascript' src='js/jquery.price_format.1.3.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageName ?>" method="post" enctype="multipart/form-data">
   <div class="required">* Obrigatório</div>
   <strong>Informações do produto</strong>
	 <table class="TableLista">
   <tr>
     <td class='legenda' width="120"><label for="produtos_status">Status:</label></td>
     <td>
        <input name="produtos_status" type="radio" value="S" class='checkbox' <?= $produtos_status=='S'?"checked='checked'":'' ?>/> Em estoque
        <input name="produtos_status" type="radio" value="N" class='checkbox' <?= $produtos_status=='N'?"checked='checked'":'' ?>/> Fora de estoque
     </td>
    </tr>
     <tr>
      <td class='legenda'><label for="produtos_data_disponivel">Disponível em:</label></td>
      <td>
        <input name="produtos_data_disponivel" type="text" size="10" maxlength="10"  value="<?= fct_conversorData($produtos_data_disponivel,1) ?>" class="data" />
         <span class="required">*</span> <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="produtos_data_disponivel" />
		 (dd/mm/aaaa)
     </td>
    </tr>
    <tr>
     <td class='legenda'><label for="produtos_nome">Nome do produto:</label></td>
     <td>
     <input name="produtos_nome" type="text" size="50" maxlength="100" value="<?=$produtos_nome?>" /> <span class="required">*</span>
      </td>
    </tr>
    <tr>
      <td class="legenda"><label for="fornecedores_id">Fabricante:</label>
      <td>
       <?
         $sql = "SELECT fornecedores_id,fornecedores_nome FROM fornecedores ORDER BY fornecedores_nome";
         echo fct_MontarLista($sql,$fornecedores_id,'fornecedores_id');
       ?> ou  <input name="fornecedores_nome" type="text" value="Cadastrar novo..." /> <span class="required">*</span>
      </td>
    </tr>
    <tr>
    	<td class="legenda"><label for="produtos_preco_liquido">Valor:</label></td>
    	<td><input name="produtos_preco" type="text" size="10" value="<?=str_replace(".",",",$produtos_preco) ?>" class="valor" /> <span class="required">*</span></td>
    </tr>
    <tr>
     <td class='legenda'><label for="produtos_descricao">Descrição:</label></td>
     <td>
        <?
          $sBasePath = "../fckeditor/";
          $oFCKeditor1 = new FCKeditor('produtos_descricao');
          $oFCKeditor1->BasePath	= $sBasePath ;
          $oFCKeditor1->ToolbarSet	= 'Basic' ;
          $oFCKeditor1->Value	=  $produtos_descricao;
          $oFCKeditor1->Create() ;
        ?>
     </td>
    </tr>
    <tr>
    	<td class="legenda"><label for="produtos_quantidade">Qtde em estoque:</label></td>
    	<td><input name="produtos_quantidade" type="text" size="5" value="<?=$produtos_quantidade?>" class="onlyNumber" /> <span class="required">*</span></td>
    </tr>
    <tr>
    	<td class="legenda"><label for="produtos_modelo">Modelo/ Código:</label></td>
    	<td><input name="produtos_modelo" type="text" size="50" value="<?=$produtos_modelo ?>" /> <span class="required">*</span></td>
    </tr>
    <tr valign="top">
    	<td class="legenda" colspan="2">
		  <fieldset>
		   <legend>Imagens</legend>
		     <?= $listaImagens ?>
		  </fieldset></td>
	</tr>
	<tr>
	 <td>&nbsp;</td>
	 <td><input name="produtos_imagem[1]" type="file" size="50" /> <input name="adicionar_imagem" type="button" value=" + " /></td>
	</tr>

    <tr>
    	<td class="legenda"><label for="produtos_peso">Peso(Kg):</label></td>
    	<td><input name="produtos_peso" type="text" size="5" value="<?= str_replace(".",",",$produtos_peso) ?>" class="valor" /> <span class="required">*</span></td>
    </tr>
   </table><br />

   <strong>Promoção</strong>
   <table class="TableLista">
    <tr>
     <td class='legenda' width="120"><label for="promocoes_preco">Preço Especial:</label></td>
     <td><input name="promocoes_preco" type="text" size="10" value="<?=str_replace(".",",",$promocoes_preco) ?>"/></td>
    </tr>
    <tr>
     <td class='legenda'><label for="expira_data">Expira em:</label></td>
     <td>
       <input name="expira_data" type="text" size="10" maxlength="10" value="<?= fct_conversorData($expira_data,1) ?>" class="data" />
       <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="expira_data" />
       (dd/mm/aaaa)
     </td>
    </tr>
    <tr>
	 <td class="legenda"><label for="promocoes_status">Status:</label></td>
	 <td>
	  <input name="promocoes_status" type="radio" value="S" <?= ($promocoes_status == "S" ?" checked='checked'":"")?> /> Ativo
	  <input name="promocoes_status" type="radio" value="N" <?= ((empty($promocoes_status) or $promocoes_status == "N")?" checked='checked'":"") ?> /> Inativo
	 </td>
	</tr>

   </table>
   <h4>Notas Especiais:</h4>
    <ul>
      <li>Você pode entrar com porcentagens para deduzir no preço do produto, por exemplo: 20%</li>
      <li>Deixe o campo de expiração em branco caso a promoção não se expire.</li>
    </ul><br />

    <strong>Categorias <span class="required">*</span>  </strong>
   <table class="TableLista">
     <tr>
      <td>
       <ul>
        <li><input name='produtos_destaque' class='checkbox' type='checkbox' value='1' <? if($produtos_destaque == 1) echo "checked='checked'" ?> />
        <strong>Página Inicial</strong>
        </li>
          <?= listaCategorias(0," ");  ?>
       </ul>
     	</td>
     </tr>
   </table><br />
    <strong>Palavras Chave</strong>
  <table class="TableLista">
    <tr><td><input name="palavras_chave" type="text" size="50" value="<?= $palavras_chave ?>"/></td></tr>
	<tr><td>Separe as palavras por vírgula</td></tr>
  </table><br />
  <strong>Frete</strong>
  <table class="TableLista">
    <tr>
     <td class="legenda" width="120"><input name="produtos_frete_gratis" type="checkbox" value="S"  <?= $produtos_frete_gratis == "S"?"checked='checked'":"" ?>/></td>
     <td><label for="produtos_frete_gratis">Frete Grátis</label></td>
    </tr>
    <tr>
      <td class="legenda"><label for="produtos_frete_ini">Início:</label></td>
      <td>
        <input  name="produtos_frete_ini" type="text" size="10" maxlength="10" value="<?= fct_conversorData($produtos_frete_ini,1) ?>" class="data" />
        	<img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário"  class="calendar" id="produtos_frete_ini" />
        (dd/mm/aaaa)
      </td>
    </tr>
    <tr>
      <td class="legenda"><label for="produtos_frete_fin">Fim:</label></td>
      <td>
        <input  name="produtos_frete_fin" type="text" size="10" maxlength="10" value="<?= fct_conversorData($produtos_frete_fin,1) ?>" class="data" />
        	<img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário"  class="calendar" id="produtos_frete_fin" />
        (dd/mm/aaaa)
      </td>
    </tr>
  </table>
    <div class='BarraPag'><input name="btn_salvar" type="submit" value="salvar" /></div>
    <input name="sels" type="hidden" value="<?= $sels ?>" />
    <input name="produtos_modeloOld" type="hidden" value="<?=$produtos_modelo ?>" />

  </form><br />
</div>
<? require_once("rodape.php") ?>
