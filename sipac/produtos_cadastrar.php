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
 require_once("../fckeditor/fckeditor.php");

 $titulo 			= $rotinaClass->menu_rotinas_titulo("");
 $link   			= "produtos_listar.php";

if(isset($_POST["btn_salvar"]))
 {
   //Informações do produto
  $produtos_status   			    = $_POST["produtos_status"];
  $produtos_data_disponivel   = fct_conversorData($_POST["produtos_data_disponivel"],2);
  $produtos_nome              = $_POST["produtos_nome"];
  $fornecedores_id            = $_POST["fornecedores_id"];
  $fornecedores_nome          = $_POST["fornecedores_nome"];
  $produtos_preco             = str_replace(",",".",$_POST["produtos_preco"]);
  $produtos_descricao         = htmlspecialchars_decode(trim($_POST["produtos_descricao"]));
  $produtos_quantidade        = $_POST["produtos_quantidade"];
  $produtos_codigo            = $_POST["produtos_codigo"];
  $produtos_peso              = str_replace(",",".",$_POST["produtos_peso"]);

  //Fornecedores (caso cadastrado novo)
  if(!empty($fornecedores_nome) and $fornecedores_nome != "Cadastrar novo..."){
    $sql = "REPLACE INTO fornecedores SET fornecedores_nome = '$fornecedores_nome'";
    $result = $conn->sql($sql);
    $fornecedores_id = $conn->id();
  }


  //Categorias
  $categorias_id              = $_POST["categorias_id"];
  $produtos_destaque          = $_POST["produtos_destaque"];

  //Palavra Chave
  $palavras_chave             = explode(",",trim(trim($_POST["palavras_chave"],",")));

  //Promoções
  $promocoes_preco            = $_POST["promocoes_preco"];
  $data_ini                   = fct_conversorData($_POST["data_ini"],2);
  $data_fin                  = fct_conversorData($_POST["data_fin"],2);
  $promocoes_status           = $_POST["promocoes_status"];

  //Frete
  $produtos_frete_gratis      = $_POST["produtos_frete_gratis"];
  $produtos_frete_ini         = fct_conversorData($_POST["produtos_frete_ini"],2);
  $produtos_frete_fin         = fct_conversorData($_POST["produtos_frete_fin"],2);

  if(empty($produtos_destaque))  $produtos_destaque = 0;
  if(empty($produtos_frete_gratis)) $produtos_frete_gratis = "N";


  $sql = "INSERT INTO produtos SET
  produtos_nome            = '".mysql_real_escape_string($produtos_nome)."',
  fornecedores_id          = '".mysql_real_escape_string($fornecedores_id)."',
  produtos_descricao       = '".mysql_real_escape_string($produtos_descricao)."',
  produtos_quantidade      = '".mysql_real_escape_string($produtos_quantidade)."',
  produtos_codigo          = '".mysql_real_escape_string($produtos_codigo)."',
  produtos_preco           = '".mysql_real_escape_string($produtos_preco)."',
  produtos_data_adicionado = NOW(),
  produtos_data_modificado = NOW(),
  produtos_data_disponivel = '".mysql_real_escape_string($produtos_data_disponivel)."',
  produtos_peso            = '".mysql_real_escape_string($produtos_peso)."',
  produtos_status          = '".mysql_real_escape_string($produtos_status)."',
  produtos_destaque        = '".mysql_real_escape_string($produtos_destaque)."'";
  $result = $conn->sql($sql);
  $produtos_id = $conn->id();

  //2. Inserir categorias do Produto
  foreach($categorias_id as $categoria_id)
  {
   $SQL = "INSERT INTO produtos_categoria SET
   produtos_codigo = '".$produtos_codigo."',
   categorias_id   = '".$categoria_id."'";
   $result = $conn->sql($SQL);
  }

  //3. Cadastrar palavras chave
  if(is_array($palavras_chave))
  {
    foreach($palavras_chave as $palavra)
   {
  	  $sql = "INSERT INTO produtos_relacionamentos SET
      produtos_codigo = '".$produtos_codigo."',
      palavra_chave   = '".$palavra."'";
  	  $conn->sql($sql);
    }
  }

  //5.Promoção
  //Calcular valor do produto(se necessario)
  if(!empty($promocoes_preco))
  {
     if(strpos($promocoes_preco, "%") !== false)
     {
       $promocoes_preco = (rtrim($promocoes_preco,"%"))/100;
       $novo_preco = $produtos_preco - ($produtos_preco * $promocoes_preco);
     }
     else
      $novo_preco = $promocoes_preco;

     $novo_preco =  str_replace(",",".",$novo_preco);
   }
  	$sql = "REPLACE INTO promocoes SET
    produtos_codigo  = '".$produtos_codigo."',
    promocoes_status = '".$promocoes_status."'";
    if(!empty($novo_preco))
     $sql .= ", promocoes_preco = '$novo_preco'";
    if(!empty($data_ini))
     $sql .= ", data_ini = '$data_ini'";
    if(!empty($data_fin))
     $sql .= ", data_fin = '$data_fin'"; 
    $result=$conn->sql($sql);

  //6. Frete
  $sql = "REPLACE INTO produtos_frete SET
  produtos_frete_gratis = '$produtos_frete_gratis',
  produtos_codigo = '".$produtos_codigo."'";
  if(!empty($produtos_frete_ini))
   $sql .= ", produtos_frete_ini = '$produtos_frete_ini'";
  if(!empty($produtos_frete_fin))
   $sql .= ", produtos_frete_fin = '$produtos_frete_fin'";
  $result = $conn->sql($sql);

  $mensagem_log .= " - Produto cadastrado com sucesso($produtos_codigo).";
  createLog('',$pageAtual,'',$mensagem_log);
  header("location: $link");
 }

 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
<script type='text/javascript' src='js/jquery.price_format.1.3.js'></script>
<script type='text/javascript' src='js/produtos.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageName ?>" method="post" enctype="multipart/form-data">
   <div class="required">* Obrigatório</div>
  <strong>Informações do produto</strong>
   <table class="TableLista">
     <tr>
    	<td class="legenda"><label for="produtos_codigo">Código:</label></td>
    	<td><input name="produtos_codigo" type="text" size="20"  value="" /> <span class="required">*</span></td>
    </tr>
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
        <input name="produtos_data_disponivel" type="text" size="10" maxlength="10" class="data" /> <span class="required">*</span>
        <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="produtos_data_disponivel" />
        (dd/mm/aaaa)
     </td>
    </tr>
    <tr>
     <td class='legenda'><label for="produtos_nome">Nome do produto:</label></td>
     <td>
     <input name="produtos_nome" type="text" size="50" maxlength="100" /> <span class="required">*</span>
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
    	<td class="legenda"><label for="produtos_preco">Valor:</label></td>
    	<td><input name="produtos_preco" type="text" size="10" class="valor" /> <span class="required">*</span></td>
    </tr>
    <tr>
     <td class='legenda'><label for="produtos_descricao">Descrição:</label></td>
     <td>
		    <?
          $sBasePath = "../fckeditor/";
          $oFCKeditor1 = new FCKeditor('produtos_descricao');
          $oFCKeditor1->BasePath	= $sBasePath;
          $oFCKeditor1->ToolbarSet	= 'Basic';
          $oFCKeditor1->Value	= '';
          $oFCKeditor1->Create();
        ?>
     </td>
     <tr>
    	<td class="legenda"><label for="produtos_quantidade">Qtde em estoque:</label></td>
    	<td><input name="produtos_quantidade" type="text" size="5" class="onlyNumbers" /> <span class="required">*</span></td>
    </tr>   
    <tr>
    	<td class="legenda"><label for="produtos_peso">Peso(Kg):</label></td>
    	<td><input name="produtos_peso" type="text" size="5" class="valor" /> <span class="required">*</span></td>
    </tr>
   </table><br />

   <strong>Promoção</strong>
   <table class="TableLista">
    <tr>
     <td class='legenda' width="120"><label for="promocoes_preco">Preço Especial:</label></td>
     <td><input name="promocoes_preco" type="text" size="10" maxlength="10" /></td>
    </tr>
    <tr>
     <td class='legenda'><label for="data_ini">Início:</label></td>
     <td>
       <input name="data_ini" type="text" size="10" maxlength="10" class="data" />
       <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="data_ini" />
       (dd/mm/aaaa)
     </td>
    </tr>
     <tr>
     <td class='legenda'><label for="data_fin">Fim:</label></td>
     <td>
       <input name="data_fin" type="text" size="10" maxlength="10" class="data" />
       <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="data_fin" />
       (dd/mm/aaaa)
     </td>
    </tr>
    <tr>
	  <td class="legenda"><label for="promocoes_status">Status:</label></td>
	  <td>
	    <input  name="promocoes_status" type="radio" value="S"  />Ativo
	     <input name="promocoes_status" type="radio" value="N" checked="checked" />Inativo
	  </td>
	</tr>
   </table>
   <h4>Notas Especiais:</h4>
    <ul>
      <li>Você pode entrar com porcentagens para deduzir no preço do produto, por exemplo: 20%</li>
      <li>Deixe o campo de data final em branco caso a promoção não se expire.</li>
    </ul><br />

   <strong>Categorias <span class="required">*</span></strong>
   <table class="TableLista">
     <tr>
      <td>
        <ul>
          <li><input name='produtos_destaque' class='checkbox' type='checkbox' value='1' /> <strong>Página Inicial</strong></li>
           <?= listaCategorias(0," &raquo;")  ?>
        </ul>
       </td>
     </tr>
   </table><br />

 <strong>Palavras Chave</strong>
  <table class="TableLista">
    <tr><td><input name="palavras_chave" type="text" size="50" /></td></tr>
	<tr><td>Separe as palavras por vírgula</td></tr>
  </table><br />
  <strong>Frete</strong>
  <table class="TableLista">
    <tr>
     <td class="legenda" width="120"><input name="produtos_frete_gratis" type="checkbox" value="S"  /></td>
     <td><label for="produtos_frete_gratis">Frete Grátis</label></td>
    </tr>
    <tr>
      <td class="legenda"><label for="produtos_frete_ini">Início:</label></td>
      <td>
        <input  name="produtos_frete_ini" type="text" size="10" maxlength="10" class="data" />
        	<img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário"  class="calendar" id="produtos_frete_ini" />
        (dd/mm/aaaa)
      </td>
    </tr>
    <tr>
      <td class="legenda"><label for="produtos_frete_fin">Fim:</label></td>
      <td>
        <input  name="produtos_frete_fin" type="text" size="10" maxlength="10" class="data" />
        	<img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário"  class="calendar" id="produtos_frete_fin" />
        (dd/mm/aaaa)
      </td>
    </tr>
  </table>

  <div class="BarraPag"><input name="btn_salvar" type="submit" value="salvar" /></div>
  </form><br />
</div>
<? require_once("rodape.php") ?>
