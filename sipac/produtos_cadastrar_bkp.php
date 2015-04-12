<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 10/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: produtos_cadastrar.php		                      '
---------------------------------------------------------*/


 $form        = "frm_produto";
 require_once("lib/configs.php");
 $titulo 			= $rotinaClass->menu_rotinas_titulo("");
 $link   			= "produtos_listar.php";

 $sql_fabricante  = "SELECT fornecedores_id,fornecedores_nome FROM fornecedores";
 $sql_taxa        = "SELECT taxas_preco, taxas_nome FROM taxas";
 $sql_atributos   = "SELECT produtos_opcoes_id, produtos_opcoes_nome FROM produtos_opcoes";

if(isset($_POST["btn_salvar"]))
 {
  $produtos_status   			    = $_POST["produtos_status"];
  $produtos_data_disponivel   = fct_conversorData($_POST["produtos_data_disponivel"],2);
  $fornecedores_id            = $_POST["fornecedores_id"];
  $produtos_nome              = $_POST["produtos_nome"];
  $taxas_id                   = $_POST["taxas_id"];
  $produtos_preco_liquido     = str_replace(",",".",$_POST["produtos_preco_liquido"]);
  $produtos_preco_bruto       = str_replace(",",".",$_POST["produtos_preco_bruto"]);
  $produtos_descricao         = nl2br($_POST["produtos_descricao"]);
  $produtos_quantidade        = $_POST["produtos_quantidade"];
  $produtos_modelo            = $_POST["produtos_modelo"];
  $produtos_imagemTemp        = $_FILES["produtos_imagem"]["tmp_name"];
  $produtos_imagemName        = $_FILES["produtos_imagem"]["name"];
  $produtos_peso              = str_replace(",",".",$_POST["produtos_peso"]);
  $categorias_id              = $_POST["categorias_id"];
  $varcAllAtributo            = $_POST["varcAllAtributo"];
  $produtos_destaque          = $_POST["produtos_destaque"];
  
  if(empty($produtos_destaque))
   $produtos_destaque = 0;
   
  $sql = "INSERT INTO produtos(
     produtos_nome,
     produtos_descricao,
     produtos_quantidade,
     produtos_modelo,
     produtos_preco_liquido,
     produtos_preco_bruto,
     produtos_data_adicionado,
     produtos_data_modificado,
     ".(!empty($produtos_data_disponivel)?",produtos_data_disponivel":'')."
     produtos_peso,
     produtos_status,
     fornecedores_id,
     produtos_destaque
     ) VALUES(
     '$produtos_nome',
     '$produtos_descricao',
     '$produtos_quantidade',
     '$produtos_modelo',
     '$produtos_preco_liquido',
     '$produtos_preco_bruto',
      NOW(),
      NOW(),
     '".(!empty($produtos_data_disponivel)?",".$produtos_data_disponivel:'')."'
     '$produtos_peso',
     '$produtos_status',
     '$fornecedores_id',
     '$produtos_destaque'
     )";
    $result = $conn->sql($sql);
    $produtos_id = $conn->id();
  //2. Inserir Imagem do Produto
  if(!isset($produtos_imagemName) or !$produtos_imagemName)
  {
	 $produtos_imagem="";
	 $mensagem_log = "Variavel de imagem vazia.";
  }
  else
  {
		$arraNome 		   = explode(" ",$produtos_nome);
		$ext 						 = substr($produtos_imagemName,-4);
		$name            = retira_acentos($arraNome[0])."_".$produtos_id;
		$produtos_imagem = $name.$ext;
		$quality         = 95;
		$size  					 = 50;

	  if(!copy($produtos_imagemTemp,DIR_PRODUTOS.$produtos_imagem))
    {
      $mensagem_log = "Aconteceu um erro durante o envio da imagem<br />";
    }
    else
    {
			//Atualiza o produto para inserir a imagem
			$sql = "UPDATE produtos SET produtos_imagem='$produtos_imagem' WHERE produtos_id='$produtos_id'";
			$result = $conn->sql($sql);
			$mensagem_log = "Foto enviada com sucesso<br />";
			//Criar thumb da imagem
      $dh = opendir((DIR_PRODUTOS));
			while (false !== ($filename = readdir($dh)))
			{
        if($filename == $produtos_imagem)
   			{
         if (strtoupper($ext) == ".JPG")
        	$extFunc = "Jpeg";
    		elseif (strtoupper($ext) == ".GIF")
        	$extFunc = "Gif";
    		elseif (strtoupper($ext) == ".PNG")
       		$extFunc = "Png";
    		else
     		{
      		$mensagem_log .= "extensão $ext não suportada para criar a miniatura<br />";
        }
        $CriarImagemDe = "ImageCreateFrom" . $extFunc;
    		$img = $CriarImagemDe(DIR_PRODUTOS . $produtos_imagem);

        $wi = ImageSX($img);
    		$he = ImageSY($img);
    		$x = ($wi / 100) * $size;
				$y = ($he / 100) * $size;
    		$img_nova = imagecreatetruecolor($x,$y);
    		imagecopyresampled($img_nova, $img, 0, 0, 0, 0, $x, $y, $wi, $he);

    		$Image = "Image" . $extFunc;
    		$Image($img_nova, DIR_PRODUTOS . $name .".thumb". $ext, $quality);

    		//Destruimos o cache da imagem para liberar uma nova thumb
    		ImageDestroy($img_nova);
    		ImageDestroY($img);
   			}
      }
      $mensagem_log .=  "Minitura gerada com sucesso!";
			//Fim do thumb
    }
  }

  //3. Inserir categorias do Produto
  foreach($categorias_id as $categoria_id)
  {
   $sql = "INSERT INTO produtos_categoria(produtos_id,categorias_id) VALUES ('$produtos_id','$categoria_id')";
   $result = $conn->sql($sql);
  }

  $mensagem_log .= " - Produto cadastrado com sucesso($produtos_id).";
  createLog('',$pageAtual,'',$mensagem_log);
  header("location: $link");

 }
 /* --- Categorias --*/
 // Selecionar categorias
 $sql_cat = "SELECT categorias_id, categorias_descricao FROM categorias WHERE parent_id=0 ORDER BY categorias_descricao ASC";
 $result = $conn->sql($sql_cat);
 while($linha = mysql_fetch_array($result))
 {
  $sql_subcat = "SELECT categorias_id, categorias_descricao FROM categorias WHERE parent_id='".$linha["categorias_id"]."' ORDER BY categorias_descricao ASC";
  $result2 = $conn->sql($sql_subcat);
  $listaCategorias .= "<li><input name='categorias_id[]' type='checkbox' class='checkbox' value='".$linha["categorias_id"]."' /> <strong>".htmlspecialchars($linha["categorias_descricao"])."</strong>";
  if(mysql_num_rows($result2) >0)
  {
    $listaCategorias .= "<ul>\n";
    while($linha2 = mysql_fetch_array($result2))
    {
       $listaCategorias .= "<li><input name='categorias_id[]' class='checkbox' type='checkbox' value='".$linha2["categorias_id"]."' /> ".htmlspecialchars($linha2["categorias_descricao"])."</li>\n";
    }
    $listaCategorias .= "</ul>\n";
   }
   $listaCategorias .= "</li>\n";
 }
 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/ajax.js'></script>
<script type='text/javascript' src='js/produtos.js'></script>
<script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
<script type='text/javascript' src='js/jquery.price_format.1.3.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?=DIR_BTNS ?>/btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageName ?>" method="post" enctype="multipart/form-data">
	 <strong>Informações do produto</strong>
	 <table class="TableLista">
   <tr>
     <td class='legenda' width="120"><label for="produtos_status">Status:</label></td>
     <td>
     <input name="produtos_status" type="radio" value="S" class='checkbox' checked="checked" /> Em estoque
     <input name="produtos_status" type="radio" value="N" class='checkbox' /> Fora de estoque
     </td>
    </tr>
     <tr>
      <td class='legenda'><label for="produtos_data_disponivel">Disponível em:</label></td>
      <td>
        <input name="produtos_data_disponivel" type="text" size="10" maxlength="10"  class="data" />
        <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="produtos_data_disponivel" />
        (dd/mm/aaaa)
     </td>
    </tr>
    <tr>
    	<td class="legenda"><label for="fornecedores_id">Fabricante:</label></td>
    	<td><?=fct_MontarLista($sql_fabricante,'',"fornecedores_id")?></td>
    </tr>
		<tr>
     <td class='legenda'><label for="produtos_nome">Nome do produto:</label></td>
     <td>
     <input name="produtos_nome" type="text" size="50" maxlength="100" />
      </td>
    </tr>
     <tr>
    	<td class="legenda"><label for="produtos_preco_liquido">Valor compra:</label></td>
    	<td>
			<input name="produtos_preco_liquido" type="text" size="5" maxlength="5" class="valor" />

			</td>
    </tr>
    <tr>
    	<td class="legenda"><label for="produtos_preco_bruto">Valor venda:</label></td>
    	<td><input name="produtos_preco_bruto" type="text" size="5" maxlength="5" class="valor" /></td>
    </tr>
    <tr>
     <td class='legenda'><label for="produtos_descricao">Descrição:</label></td>
     <td>
		 <textarea name="produtos_descricao" cols="57" rows="5"></textarea>
     </td>
    </tr>
    <tr>
    	<td class="legenda"><label for="produtos_quantidade">Qtde em estoque:</label></td>
    	<td><input name="produtos_quantidade" type="text" size="5" class="onlyNumbers" /></td>
    </tr>
    <tr>
    	<td class="legenda"><label for="produtos_modelo">Modelo/ Código:</label></td>
    	<td><input name="produtos_modelo" type="text" size="50" /></td>
    </tr>
    <tr>
    	<td class="legenda"><label for="produtos_imagem">Imagem do produto:</label></td>
    	<td><input name="produtos_imagem" type="file" size="50" /></td>
    </tr>
    <tr>
    	<td class="legenda"><label for="produtos_peso">Peso(Kg):</label></td>
    	<td><input name="produtos_peso" type="text" size="5" /></td>
    </tr>
   </table>
   <strong>Categorias</strong>
   <table class="TableLista">
     <tr>
      <td>
        <ul>
          <li><input name='produtos_destaque' class='checkbox' type='checkbox' value='1' /> <strong>Página Inicial</strong></li>
       	  <?= $listaCategorias ?>
        </ul>
       </td>
     </tr>
   </table>
   <br />
  <table class="TableLista">
     <tr class='BarraPag'>
      <td colspan="2" align="right">
        <input name="btn_salvar" type="submit" value="salvar" />
        <input name="varcAllAtributo" type="hidden" value="" />
       </td>
     </tr>
    </table>
  </form>
</div>
<? require_once("rodape.php") ?>
