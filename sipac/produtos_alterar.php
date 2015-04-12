<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 10/09/2007                                     '
   Última Modificação: 10/10/2009                         '
   Página: produtos_cadastrar.php		                      '
---------------------------------------------------------*/
 //$header   = "<script src='../lightbox/js/prototype.js' type='text/javascript'></script>\n";
 //$header  .= "<script src='../lightbox/js/scriptaculous.js?load=effects,builder' type='text/javascript'></script>\n";
 //$header  .= "<script src='../lightbox/js/lightbox.js' type='text/javascript' ></script>\n";
 //$header  .= "<link href='../lightbox/css/lightbox.css' rel='stylesheet'  type='text/css' media='screen' />\n";
 
 $form        = "frm_produto";
 require_once("lib/configs.php");
 require_once("../fckeditor/fckeditor.php");
 $titulo 			= $rotinaClass->menu_rotinas_titulo("");
 $link   			= "produtos_listar.php";
 $sels        = $_REQUEST["sels"];
 
 if(is_array($sels)) $sels = $sels[0];
 
 if(isset($_POST["btn_salvar"])){

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
  $produtos_codigo            = $_POST["produtos_codigo"];
  $produtos_peso              = str_replace(",",".",$_POST["produtos_peso"]);
  
  //Fornecedores (caso cadastrado novo)
  if(!empty($fornecedores_nome) and $fornecedores_nome != "Cadastrar novo..."){
    $sql = "INSERT INTO fornecedores SET fornecedores_nome = '$fornecedores_nome'";
    $result = $conn->sql($sql);
    $fornecedores_id = $conn->id();
  }
  
   //Imagens
  $produtos_imagem            = $_POST["produtos_imagem"];
  
  //Categorias
  $categorias_id              = $_POST["categorias_id"];
  $produtos_destaque          = $_POST["produtos_destaque"];
  
  //Palavra Chave
  $palavras_chave            = explode(",",trim($_POST["palavras_chave"]));

   //Promoções
  $promocoes_preco            = $_POST["promocoes_preco"];
  $data_ini                   = fct_conversorData($_POST["data_ini"],2);
  $data_fin                   = fct_conversorData($_POST["data_fin"],2);
  $promocoes_status           = $_POST["promocoes_status"];

  //Frete
  $produtos_frete_gratis      = $_POST["produtos_frete_gratis"];
  $produtos_frete_ini         = fct_conversorData($_POST["produtos_frete_ini"],2);
  $produtos_frete_fin         = fct_conversorData($_POST["produtos_frete_fin"],2);
  
  if(empty($produtos_destaque)) $produtos_destaque = 0;
  if(empty($produtos_frete_gratis)) $produtos_frete_gratis = "N";
  
  //1. Inserir Produto
  $sql = "UPDATE produtos SET
  produtos_nome            = '".mysql_real_escape_string($produtos_nome)."',
  fornecedores_id          = '".mysql_real_escape_string($fornecedores_id)."',
  produtos_descricao       = '".mysql_real_escape_string($produtos_descricao)."',
  produtos_quantidade      = '".mysql_real_escape_string($produtos_quantidade)."',
  produtos_preco           = '".mysql_real_escape_string($produtos_preco)."',
  produtos_data_modificado = NOW(),
  produtos_data_disponivel = '".mysql_real_escape_string($produtos_data_disponivel)."',
  produtos_peso            = '".mysql_real_escape_string($produtos_peso)."',
  produtos_status          = '".mysql_real_escape_string($produtos_status)."',
  produtos_destaque        = '".mysql_real_escape_string($produtos_destaque)."'
  WHERE produtos_id='$sels'";
  $result = $conn->sql($sql);
  
  //2. Imagens
   //2.1 Apagar as imagens antigas
   $sql = "DELETE FROM produtos_imagens WHERE produtos_codigo = '".$produtos_codigo."'";
   $conn->sql($sql);
   
   //2.2 Cadastra as imagens
   if(is_array($produtos_imagem)){
    //print_r($produtos_imagem);
    //exit;
    foreach($produtos_imagem as $imagem){
      $sql = "INSERT INTO produtos_imagens SET 
      produtos_codigo='".$produtos_codigo."',
      produtos_imagem='".$imagem."',
      data = NOW(),
      verified = 'S'";
      $conn->sql($sql);
    }
   }
   
  //3. Excluir categorias antigas e inserir categorias novas do Produto
  $sql = "DELETE FROM produtos_categoria WHERE produtos_codigo='".$produtos_codigo."'";
  $result = $conn->sql($sql);
  if(!empty($categorias_id)){
   foreach($categorias_id as $categoria_id)
   {
     $sql = "INSERT INTO produtos_categoria SET
     produtos_codigo = '".$produtos_codigo."',
     categorias_id   = '".$categoria_id."'";
     $result = $conn->sql($sql);
   }
  }
  
  //4. Cadastrar palavras chave
  $sql = "DELETE FROM produtos_relacionamentos
  WHERE produtos_codigo='".$produtos_codigo."'";
  $result = $conn->sql($sql);
  if(is_array($palavras_chave)) {
   foreach($palavras_chave as $palavra){
  	  $sql = "INSERT INTO produtos_relacionamentos SET
      produtos_codigo='".$produtos_codigo."',
      palavra_chave='".$palavra."'";
  	  $conn->sql($sql);
   }
  }

  //5. Promoção
  if(!empty($promocoes_preco)){
  	if(strpos($promocoes_preco, "%") !== false){
       $promocoes_preco = (rtrim($promocoes_preco,"%"))/100;
	     $novo_preco      = $produtos_preco - ($produtos_preco * $promocoes_preco);
    }
	  else
     $novo_preco = $promocoes_preco;

  	$novo_preco =  str_replace(",",".",$novo_preco);

  	$sql = "REPLACE promocoes SET
    promocoes_preco = '$novo_preco',
    promocoes_status = '".$promocoes_status."',
    produtos_codigo = '".$produtos_codigo."'";
    if(!empty($data_ini))
      $sql .= ", data_ini = '$data_ini'";
    else
      $sql .= ", data_ini = NULL";
    if(!empty($data_fin))
      $sql .= ", data_fin = '$data_fin'";
    else
      $sql .= ", data_fin = NULL";

    $result = $conn->sql($sql);
  }

  //6. Frete
  $sql = "REPLACE produtos_frete SET
  produtos_frete_gratis = '$produtos_frete_gratis',
  produtos_codigo = '".$produtos_codigo."'";
  if(!empty($produtos_frete_ini))
   $sql .= ", produtos_frete_ini = '$produtos_frete_ini'";
  else
   $sql .= ", produtos_frete_ini = NULL";
  if(!empty($produtos_frete_fin))
   $sql .= ", produtos_frete_fin = '$produtos_frete_fin'";
  else
   $sql .= ", produtos_frete_fin = NULL";


  $result = $conn->sql($sql);

  $mensagem_log .= " - Produto alterado com sucesso($produtos_codigo).";
  createLog('',$pageAtual,'',$mensagem_log);
  header("location: $link");
  
  //Fim alteração
 } 
 //Inicio da Visualização de dados
 else  {
  $sql = "SELECT prod.produtos_nome,prod.produtos_descricao,prod.produtos_quantidade,
  prod.produtos_codigo,prod.produtos_preco,prod.produtos_data_disponivel,prod.produtos_peso,
  prod.produtos_status,prod.fornecedores_id,prod.produtos_destaque, promo.promocoes_preco,
  promo.data_ini,promo.data_fin,promo.promocoes_status,pf.produtos_frete_gratis,pf.produtos_frete_ini,
  pf.produtos_frete_fin
  FROM produtos prod
  LEFT JOIN promocoes promo ON promo.produtos_codigo = prod.produtos_codigo
  LEFT JOIN produtos_frete pf ON pf.produtos_codigo = prod.produtos_codigo
  WHERE prod.produtos_id = '$sels'";
  //echo $sql;
  $result = $conn->sql($sql);
  $totCampos = mysql_num_fields($result);
  
  while($dados = mysql_fetch_array($result)) {
    for($i = 0;$i < $totCampos;$i++)
    {
     $meta   = mysql_fetch_field($result, $i);
     $campo  =  $meta->name;
     $$campo = $dados[$i];
    }
   }

  //Palavras chave
  $sql    = "SELECT GROUP_CONCAT(palavra_chave) palavra_chave FROM produtos_relacionamentos WHERE produtos_codigo = '$produtos_codigo'";
  $result = $conn->sql($sql);
  $palavras_chave = mysql_num_rows($result) > 0?mysql_result($result,0,0):null;
  
  //Imagens
 $sql = "SELECT produtos_imagem FROM produtos_imagens WHERE produtos_codigo = '$produtos_codigo' AND verified = 'S'";
 $result = $conn->sql($sql);
 if(mysql_num_rows($result) > 0)
 {
   while($linha3 = mysql_fetch_array($result))
   {
   	  $produtos_imagem_thumb = substr($linha3["produtos_imagem"],0,strlen($linha3["produtos_imagem"])-4).".thumb".substr($linha3["produtos_imagem"],-4);
	    $listaImagens .=  " <div><img src='".DIR_PRODUTOS.$produtos_imagem_thumb."' alt='".$linha3["produtos_imagem"]."' /><br />
      <input name='produtos_imagem[]' type='hidden' value='".$linha3["produtos_imagem"]."' style='width: 100px'/>
      <input type='button' class='submit' value='Excluir' onclick='delete_image(this)'/></div>";
		 
   }   
  }
 }
 
 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
<script type='text/javascript' src='js/jquery.price_format.1.3.js'></script>
<script type="text/javascript" src="js/jquery-ui-1.8.1.custom.min.js" ></script>
<script type="text/javascript" src="js/ajaxupload.js"></script>
<script type="text/javascript" src="js/anexa_arquivos.js"></script>
<script type='text/javascript' src='js/produtos.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageName ?>" method="post" enctype="multipart/form-data">
   <div class="required">* Obrigatório</div>
   <strong>Informações do produto</strong>
	 <table class="TableLista">
   <tr>
    	<td class="legenda"><label for="produtos_codigo">Código:</label></td>
    	<td><input name="produtos_codigo" type="text" size="20" value="<?=$produtos_codigo ?>" class="readonly" readonly="readonly" /></td>
    </tr>
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
    	<td class="legenda"><label for="image">Imagem:</label></td>
	    <td><input id="image" type="file" /></td>
    </tr>
    <tr>
      <td colspan="2"><div id="list_images"><?= $listaImagens ?></div></td> 
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
     <td class='legenda'><label for="data_ini">Início:</label></td>
     <td>
       <input name="data_ini" type="text" size="10" maxlength="10" value="<?= fct_conversorData($data_ini,1) ?>" class="data" />
       <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="data_ini" />
       (dd/mm/aaaa)
     </td>
    </tr>
    <tr>
     <td class='legenda'><label for="data_fin">Fim:</label></td>
     <td>
       <input name="data_fin" type="text" size="10" maxlength="10" value="<?= fct_conversorData($data_fin,1) ?>" class="data" />
       <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="data_fin" />
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
      <li>Deixe o campo de data final em branco caso a promoção não se expire.</li>
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
    <input name="produtos_codigoOld" type="hidden" value="<?=$produtos_codigo ?>" />

  </form><br />
</div>
<? require_once("rodape.php") ?>
