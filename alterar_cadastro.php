<?
  $title = "Alterar Cadastro";
	require_once("lib/configs.php");
  $clientes_id = $_SESSION["xxClientesIDxx"];

 if(isset($_POST["btn_salvar"]) or isset($_POST["btn_salvar_x"]))
 {
  $campo = format_array($_POST);
  //Validação de campos
  if(empty($campo["nome"]))
   $erro = "Preencha seu primeiro nome <br />";
  if(empty($campo["sobrenome"]))
    $erro .= "Preencha seu sobrenome <br />";
  $campo['sexo'] = ($campo['sexo']== 'm'? 'm': 'f');
  if(!validateField(array($campo["cpf"]),'cpf',11))
    $erro .= "Preencha o CPF corretamente <br />";
  //Verifica se o CPF já esta cadastrado no banco
  $sql = "SELECT clientes_cpf FROM clientes WHERE clientes_cpf='".$campo["cpf"]."'
  AND clientes_cpf !='".$campo['cpfOld']."'";
  $result = $conn->sql($sql);
  if(mysql_num_rows($result) > 0)
   $erro.= "CPF já cadastrado <br />";
  if(!validateField(array($campo["data_nascimento"]),'date',10))
    $erro .= "Preencha data de nascimento corretamente <br />";
  if(!validateField(array($campo["email"]),'email'))
    $erro .= "Preencha o e-mail corretamente <br />";
  //Verifica se o e-mail já está cadastrado no banco
  $sql = "SELECT clientes_email FROM clientes WHERE clientes_email='". $campo["email"]."'
  AND clientes_email != '".$campo["emailOld"]."'";
  $result = $conn->sql($sql);
  if(mysql_num_rows($result) > 0)
   $erro .= "E-mail já cadastrado <br />";
  if(empty($campo['telefone']))
   $erro .= "Preecha o telefone";

  if(empty($erro)) {
    $sql = "UPDATE clientes SET
    clientes_nome          = '".mysql_real_escape_string($campo['nome'])."',
    clientes_sobrenome     = '".mysql_real_escape_string($campo['sobrenome'])."',
    clientes_sexo          = '".mysql_real_escape_string($campo['sexo'])."',
    clientes_rg            = '".mysql_real_escape_string($campo['rg'])."',
    clientes_cpf           = '".mysql_real_escape_string($campo['cpf'])."',
    clientes_nascimento    = '".fct_conversorData($campo['data_nascimento'],2)."',
    clientes_email         = '".mysql_real_escape_string($campo['email'])."',
    clientes_telefone      = '".mysql_real_escape_string($campo['telefone'])."',
    clientes_celular       = '".mysql_real_escape_string($campo['celular'])."'
    WHERE clientes_id='".$clientes_id."'";
    $result = $conn->sql($sql);

    //Guardar Alterações no Histórico
    $sql = "UPDATE clientes_historico SET
    clientes_historico_conta_ultima_modificacao = NOW()
    WHERE clientes_id='".$_SESSION["xxClientesIDxx"]."'";
    $result = $conn->sql($sql);

    $_SESSION["msg_operacao"] = "Dados alterados com sucesso.";
    header("location: meu_cadastro.php");
  }
 }
 else
 {
   $sql = "SELECT clientes_nome, clientes_sobrenome, clientes_sexo, clientes_rg, clientes_cpf,
   clientes_nascimento,clientes_email, clientes_telefone, clientes_celular
   FROM  clientes
   WHERE clientes.clientes_id = '$clientes_id'";
   $result = $conn->sql($sql);
   $totCampos = mysql_num_fields($result);

   while($dados = mysql_fetch_array($result))
   {
    for($i = 0;$i < $totCampos;$i++)
    {
     $meta   = mysql_fetch_field($result, $i);
     $campo[str_replace("clientes_","",$meta->name)]  =  $dados[$i];
    }
   }
 }

  require_once("topo.php");
  require_once("lib/sessao.php");
  require_once("login_topo.php");
  require_once("busca.php");
  //require_once("categorias.php");
 //require_once("parceiros.php");
?>
<!-- Alterar Cadastro -->
<script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
<script type='text/javascript' src='js/jquery.numeric.js'></script>
<script type='text/javascript' src='js/cadastro.js'></script>
<div id="conteudo" class="interna">
<span class='back'><a href="meu_cadastro.php"><img src="banco_imagens/btn_voltar.gif" alt="Voltar" border="0" /></a></span>
 <h1><?=$title ?></h1>

 		<form id="frm_cadastro" action="<?= $pageAtual ?>" method="post">
    <p class='alert'><?= !empty($erro) ? $erro : "Campos com * são de preenchimento obrigatório" ?></p>
    <h2>Dados Pessoais</h2>
      <div class='bordaForm'>
     <p>
       <label for="clientes_nome">Nome:<span class="alert">*</span>
       <span class='form'><input name="clientes_nome" type="text" size="40" value="<?=$campo['nome'] ?>" /></span></label>
     </p>
     <p>
       <label for="clientes_sobrenome">Sobrenome:<span class="alert">*</span>
       <span class='form'><input name="clientes_sobrenome" type="text" size="40" value="<?=$campo['sobrenome'] ?>" /></span></label>
     </p>
     <p>
       <label for="clientes_sexo">Sexo:
       <span class='form'><input type="radio" name="clientes_sexo" value="m"  class="noBorder" <? if($campo['sexo'] == "m") {?>checked="checked" <?}?> />Masculino
       <input type="radio" name="clientes_sexo" value="f" class="noBorder" <? if($campo['sexo'] == "f") {?>checked="checked" <?}?> />Feminino </span></label>
     </p>
     <p>
       <label for="clientes_cpf">C.P.F:<span class="alert">*</span>
       <span class='form'><input name="clientes_cpf" type="text" size="11" value="<?=$campo['cpf'] ?>" class="onlyNumbers" />
       <span class="descCampo"> somente números</span></span></label>
     </p>
     <p>
       <label for="clientes_rg">R.G:
       <span class='form'><input name="clientes_rg" type="text" size="20" value="<?=$campo['rg'] ?>" class="onlyNumbers" />&nbsp;&nbsp;
       <span class="descCampo">somente números</span></span></label>
     </p>
     <p>
       <label for="data_nascimento">Data de nascimento:<span class="alert">*</span>
       <span class='form'><input name="clientes_data_nascimento" type="text" size="10" maxlength="10" value="<?= fct_conversorData($campo['data_nascimento'],1)?>" class='data' />
       <span class="descCampo">(dd/mm/aaaa)</span></span></label>
     </p>
    </div>
    <h2>Identificação</h2>
    <div class='bordaForm'>
     <p>
       <label for="clientes_email">E-mail:<span class="alert">*</span>
       <span class='form'><input name="clientes_email" type="text" size="40" value="<?=$campo['email'] ?>" /></span></label>
     </p>
   </div>
   <h2>Contato</h2>
   <div class='bordaForm'>
     <p>
       <label for="clientes_telefone">Telefone:<span class="alert">*</span>
       <span class='form'><input name="clientes_telefone" type="text" size="20" value="<?=$campo['telefone'] ?>" class='telefone' /></span></label>
     </p>
     <p>
       <label for="clientes_celular">Celular:
       <span class='form'><input name="clientes_celular" type="text" size="20" value="<?=$campo['celular'] ?>" class='telefone' /></span></label>
     </p>
   </div>
   <input name="cpfOld"   type="hidden" value="<?=$campo['cpf'] ?>" />
   <input name="emailOld"   type="hidden" value="<?=$campo['email'] ?>" />
   <br /><input name="btn_salvar" type="image" src="banco_imagens/btn_enviar.gif" class="noBorder btn" value="Enviar" />
 </form>
</div>
<? require_once("rodape.php"); ?>

