<?
   $title = "Cadastre-se";
   require_once("lib/configs.php");
   
 	if(isset($_POST["btn_salvar"]) or isset($_POST["btn_salvar_x"]))
 {
    $campo   = format_array($_POST);
    $return  = $_POST["return"];

    //1. Validação de campos
   if(empty($campo["nome"]))
    $erro = "Preencha seu primeiro nome <br />";
   if(empty($campo["sobrenome"]))
    $erro .= "Preencha seu sobrenome <br />";
   $campo['sexo'] = ($campo['sexo']== 'm'? 'm': 'f');
   if(!validateField(array($campo["cpf"]),'cpf',11))
    $erro .= "Preencha o CPF corretamente <br />";
   //Verifica se o CPF já esta cadastrado no banco
   $sql = "SELECT clientes_cpf FROM clientes WHERE clientes_cpf='".$campo["cpf"]."'";
   $result = $conn->sql($sql);
   if(mysql_num_rows($result) > 0)
    $erro.= "CPF já cadastrado <br />";
   if(!validateField(array($campo["data_nascimento"]),'date',10))
    $erro .= "Preencha data de nascimento corretamente <br />";
   if(!validateField(array($campo["email"]),'email'))
    $erro .= "Preencha o e-mail corretamente <br />";
   //Verifica se o e-mail já está cadastrado no banco
   $sql = "SELECT clientes_email FROM clientes WHERE clientes_email='". $campo["email"]."'";
   $result = $conn->sql($sql);
   if(mysql_num_rows($result) > 0)
    $erro .= "E-mail já cadastrado <br />";
   if(empty($campo["senha"]))
    $erro .= "Preencha a senha<br />" ;
   if(!empty($campo['senha']) && (strlen($campo["senha"]) <6 || strlen($campo["senha"]) > 15))
    $erro .= "A senha deve deve conter entre 6 e 15 caracteres <br />";
   if(empty($campo["senha2"]))
    $erro .= "Preencha a confirmação da senha <br />";
   if((!empty($campo["senha"]) && !empty($campo["senha2"])) && !validateField(array($campo["senha"],$campo["senha2"]),'password'))
    $erro .= "A confirmação da senha não confere com a senha <br />";
   if(empty($campo["telefone"]))
    $erro .= "Preencha o telefone <br />";
   if(empty($campo["logradouro"]))
    $erro .= "Preencha o endereço <br />";
   if(empty($campo["numero"]))
    $erro .= "Preencha o número da casa <br />";
   if(empty($campo["bairro"]))
    $erro .= "Preencha o bairro <br />";
   if(!validateField(array($campo["cep"]),'numeric',8))
    $erro .= "Preencha o CEP corretamente<br />";
   if(empty($campo["cidade"]))
    $erro .= "Preencha sua cidade <br />";
    if(empty($campo["uf"]))
    $erro .= "Selecione seu estado <br />";

   $campo["newsletter"] = (empty($campo["newsletter"]) ? 0 : $campo["newsletter"]);

   if(empty($erro)) {
	 //2. Cadastrar dados do cliente
	$sql = "INSERT INTO clientes SET
     clientes_nome       = '".mysql_real_escape_string($campo['nome'])."',
    clientes_sobrenome  = '".mysql_real_escape_string($campo['sobrenome'])."',
    clientes_sexo       = '".mysql_real_escape_string($campo['sexo'])."',
    clientes_rg         = '".mysql_real_escape_string($campo['rg'])."',
    clientes_cpf        = '".mysql_real_escape_string($campo['cpf'])."',
    clientes_nascimento = '".fct_conversorData($campo['data_nascimento'],2)."',
    clientes_email      = '".mysql_real_escape_string($campo['email'])."',
    clientes_telefone   = '".mysql_real_escape_string($campo['telefone'])."',
    clientes_celular    = '".mysql_real_escape_string($campo['celular'])."',
    clientes_senha      = '".mysql_real_escape_string(sha1($campo['senha']))."',
    clientes_newsletter = '".mysql_real_escape_string($campo['newsletter'])."'";
    $result = $conn->sql($sql);
    $campo['id'] = $conn->id();

    //3. Cadastrar dados de endereço do cliente
    $sql = "INSERT INTO clientes_end SET
    clientes_id			 = '".mysql_real_escape_string($campo['id'])."',
    clientes_end_nome    = '".mysql_real_escape_string($campo['nome'])." ".mysql_real_escape_string($campo['sobrenome'])."',
    clientes_logradouro  = '".mysql_real_escape_string($campo['logradouro'])."',
    clientes_numero 	 = '".mysql_real_escape_string($campo['numero'])."',
    clientes_complemento = '".mysql_real_escape_string($campo['complemento'])."',
    clientes_bairro 	 = '".mysql_real_escape_string($campo['bairro'])."',
    clientes_cidade 	 = '".mysql_real_escape_string($campo['cidade'])."',
    clientes_uf 		 = '".mysql_real_escape_string($campo['uf'])."',
    clientes_cep 		 = '".mysql_real_escape_string($campo['cep'])."',
    clientes_pais        = 'Brasil',
    clientes_pri 		 = 1";
    $result = $conn->sql($sql);

    //4. Cadastra data do cadastro do cliente
    $sql = "INSERT INTO clientes_historico SET
    clientes_id = '".$campo['id']."',
    clientes_historico_data_conta_criada = NOW()";
    $result = $conn->sql($sql);

    $from    ='no-reply@'.str_replace("http://www.","",URL);
    $to      = $campo['email'];
    $subject = "Confirmação de cadastro - ".EMPRESA;
    $msg     = "<h1>Confirmação de cadastro</h1>";
    $msg    .= "<em>".$campo['nome']."</em><br />";
    $msg    .= "<p>Segue abaixo seu e-mail e senha. Para sua conveniência, guarde-os em um lugar seguro. Eles são as chaves para você acessar seus dados e realizar suas compras.</p>";
    $msg    .= "<strong>E-mail: </strong>".$campo['email']."<br />";
    $msg    .= "<strong>Senha: </strong>".$campo['senha']."<br />";
    fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg);

    if($return == "cadastro_final.php")
     header("location: cadastro_final.php");
    else
    {
      $action =   "valida_login.php";
      
      //Se o javascript estiver ativo
      $script = "<script type='text/javascript'>\n";
      $script .= "form = document.getElementById('frm_cadastro')\n";
      $script .= "form.action = '".$action."'\n";
      $script .= "form.submit();\n";
      $script .= "</script>\n";
    }
  }
}
  require_once("topo.php");
  require_once("login_topo.php");
	require_once("busca.php");
	//require_once("categorias.php");
	//require_once("parceiros.php");
?>
<!-- Cadastro -->
<div id="conteudo" class='interna'>
 <script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
 <script type='text/javascript' src='js/jquery.numeric.js'></script>
 <script type='text/javascript' src='js/cadastro.js'></script>
 <h1>Cadastre-se</h1>
 <form id="frm_cadastro" action="<?= (!empty($action) ? $action : $pageAtual) ?>" method="post">
 <p class='alert'><?= !empty($erro) ? $erro : "Campos com * são de preenchimento obrigatório" ?></p>
 <h2>Dados Pessoais</h2>
 <div class='bordaForm'>
 <p>
   <label for="clientes_nome">Nome:<span class="alert">*</span>
   <span class='form'><input name="clientes_nome" id="clientes_nome" type="text" size="40" value="<?=$campo["nome"] ?>" /></span></label>
 </p>
 <p>
   <label for="clientes_sobrenome">Sobrenome:<span class="alert">*</span>
   <span class='form'><input name="clientes_sobrenome" id="clientes_sobrenome" type="text" size="40" value="<?=$campo["sobrenome"] ?>" /></span></label>
 </p>
 <p>
    <label>Sexo:
    <span class='form'><input type="radio" name="clientes_sexo" value="m" class="noBorder" <? if(empty($campo["sexo"]) or $campo["sexo"] == 'm'): ?> checked="checked" <? endif; ?> /> Masculino
    <input type="radio" name="clientes_sexo" value="f" class="noBorder" <? if($campo["sexo"] == 'f'): ?> checked='checked' <? endif; ?> /> Feminino</span></label>
 </p>
 <p>
    <label for="clientes_cpf">C.P.F:<span class="alert">*</span>
    <span class='form'><input name="clientes_cpf" id="clientes_cpf" type="text" size="11" maxlength="11" class="onlyNumbers" value="<?=$campo['cpf'] ?>" />
    <span class="descCampo"> somente números</span></span></label>
 </p>
 <p>
     <label for="clientes_rg">R.G:
     <span class='form'><input name="clientes_rg" id="clientes_rg" type="text" size="20" class="onlyNumbers" value="<?= $campo['rg'] ?>" />&nbsp;&nbsp;
     <span class="descCampo">somente números</span></span></label>
 </p>
 <p>
	 	<label for="clientes_data_nascimento">Data de nascimento: <span class="alert">*</span>
    <span class='form'><input name="clientes_data_nascimento" id="clientes_data_nascimento" type="text" size="10" maxlength="10" class='data' value="<?=$campo['data_nascimento'] ?>" />
    <span class="descCampo"> dd/mm/aaaa</span></span></label>
	  </p>
 </div>
 <h2>Identificação</h2>
 <div class='bordaForm'>
  <p>
     <label for="clientes_email">E-mail: <span class="alert">*</span>
     <span class='form'><input name="clientes_email" id="clientes_email" type="text" size="40" value="<?=$campo['email'] ?>" /></span></label>
  </p>
  <p>
    <label for="clientes_senha">Senha: <span class="alert">*</span>
    <span class='form'><input name="clientes_senha" id="clientes_senha" type="password" size="15" maxlength="15" value="<?=$campo['senha'] ?>" />
    <span class="descCampo">Minimo 6 e máximo 15</span></span></label>
  </p>
  <p>
     <label for="clientes_senha2">Confirmar senha: <span class="alert">*</span>
     <span class='form'><input name="clientes_senha2" id="clientes_senha2" type="password" size="15" maxlength="15" value="<?=$campo['senha2'] ?>" /></span></label>
  </p>
 </div>

 <h2>Contato</h2>
 <div class='bordaForm'>
   <p>
      <label for="clientes_telefone">Telefone: <span class="alert">*</span>
      <span class='form'><input name="clientes_telefone" id="clientes_telefone" type="text" size="20" class='telefone' value="<?=$campo['telefone']?>" />
      <span class="descCampo"> (99)9999-9999</span></span></label>
   </p>
   <p>
      <label for="clientes_celular">Celular:
      <span class='form'><input name="clientes_celular" id="clientes_celular"  type="text" size="20" class='telefone' value="<?= $campo['celular']?>" />
      <span class="descCampo"> (99)9999-9999</span></span></label>
   </p>
 </div>
  <h2>Endereço</h2>
 <div class='bordaForm'>
   <p>
     <label for="clientes_logradouro">Endereço: <span class="alert">*</span>
     <span class='form'><input name="clientes_logradouro" id="clientes_logradouro" type="text" size="26" value="<?=$campo['logradouro'] ?>" />
      N°<span class="alert">*</span><input name="clientes_numero" type="text" size="4" value="<?=$campo['numero'] ?>" /></span>
     </label>
   </p>
   <p>
      <label for="clientes_complemento">Complemento:
      <span class='form'><input name="clientes_complemento" id="clientes_complemento" type="text" size="40" value="<?=$campo['complemento'] ?>" /></span></label>
   </p>
   <p>
      <label for="clientes_bairro">Bairro: <span class="alert">*</span>
      <span class='form'><input name="clientes_bairro" id="clientes_bairro" type="text" size="40" value="<?= $campo['bairro'] ?>" /></span></label>
   </p>
   <p>
      <label for="clientes_cep">CEP: <span class="alert">*</span>
      <span class='form'><input name="clientes_cep" id="clientes_cep" type="text" size="8" maxlength="8" class="onlyNumbers" value="<?=$campo['cep'] ?>" />
      <span class="descCampo"> somente números</span></span></label>
   </p>
   <p>
      <label for="clientes_cidade">Cidade: <span class="alert">*</span>
      <span class='form'><input name="clientes_cidade" id="clientes_cidade" type="text" size="40" value="<?=$campo['cidade'] ?>"/></span></label>
   </p>
   <p>
      <label for="clientes_uf">Estado: <span class="alert">*</span>
      <span class='form'><select name="clientes_uf" id="clientes_uf">
        <?= fct_array_foreach(estados2(),$campo['uf']); ?>
     </select></span></label>
   </p>
 </div>
  <h2>Opções</h2>
  <div class='bordaForm'>
   <p><input type="checkbox" name="clientes_newsletter" value="1" class="noBorder" <? if($ampo['newsletter'] == 1): ?> checked='checekd' <? endif; ?> /> Desejo receber e-mails de PetShopNet</p>
	</div>
	<input name="conf_cpf" type="hidden" value="0" />
  <input name="conf_email" type="hidden" value="0" />
  <input name="return" type="hidden" value="<?=$_REQUEST["return"] ?>" />
  <br /><input name="btn_salvar" type="image" src="banco_imagens/btn_enviar.gif" class="noBorder btn" value="Enviar" />
 </form>
  <?=$script ?>
</div>
<? require_once("rodape.php"); ?>
