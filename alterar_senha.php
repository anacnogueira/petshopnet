<?
 $title = "Alterar Senha";
 require_once("lib/configs.php");
	
 $clientes_id = $_SESSION["xxClientesIDxx"];
 if(isset($_POST["btn_salvar"]))
 {
    $campo = format_array($_POST);
    
    if(empty($campo["senha_atual"]))
     $erro = "Insira sua senha atual <br />";
     
    //Verifica se a senha informada é igual a cadatrada no banco
    $sql = "SELECT clientes_senha FROM clientes WHERE clientes_id='".$_SESSION["xxClientesIDxx"]."'
     AND clientes_senha='".mysql_real_escape_string(sha1($campo['senha_atual']))."'";
	$result = $conn->sql($sql);
      
    if(!empty($campo["senha_atual"]) && mysql_num_rows($result) == 0)
     $erro .= "A senha informada não confere com a senha cadastrada <br />";
    if(empty($campo['senha_nova']))
     $erro  .= "Insira a nova senha <br />";
    if(strlen($campo['senha_nova']) < 6)
     $erro .= "A senha deve deve conter 6 ou mais caracteres<br />";
    if(empty($campo['senha_nova2']))
     $erro .= "Insira a confirmação da nova senha<br />";
    if((!empty($campo["senha_nova"]) && !empty($campo["senha_nova2"])) && !validateField(array($campo["senha_nova"],$campo["senha_nova2"]),'password'))
      $erro .= "A confirmação da senha não confere com a senha <br />";

   if(empty($erro)){
	  //Alterar a senha
    $sql = "UPDATE clientes SET clientes_senha='".mysql_real_escape_string(sha1($campo['senha_nova']))."' WHERE clientes_id='$clientes_id'";
	  $result = $conn->sql($sql);

	   //Enviar e-mail com confirmação de alteração da Senha
	$from    ='no-reply@'.str_replace("http://www.","",URL);
    $to      = $campo['email'];
    $subject = "Confirmação de alteração de cadastro - ".EMPRESA;
    $msg     = "<h1>Confirmação de alteração de senha</h1>";
    $msg    .= "<em>".$campo['nome']."</em><br />";
    $msg    .= "<p>Segue abaixo seu e-mail e senha. Para sua conveniência, guarde-os em um lugar seguro. Eles são as chaves para você acessar seus dados e realizar suas compras.</p>";
    $msg    .= "<strong>E-mail: </strong>".$campo['email']."<br />";
    $msg    .= "<strong>Senha: </strong>".$campo['senha_nova']."<br />";
    fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg);

    //Guardar Alterações no Histórico
    $sql = "UPDATE clientes_historico SET clientes_historico_conta_ultima_modificacao = NOW()
    WHERE clientes_id='".$_SESSION["xxClientesIDxx"]."'";

	   $result = $conn->sql($sql);
     $_SESSION["msg_operacao"] = "Senha alterada com sucesso.";
     header("location: meu_cadastro.php");
  }
 }
 require_once("topo.php");
 require_once("lib/sessao.php");
 require_once("login_topo.php");
 require_once("busca.php");
 //require_once("categorias.php");
 //require_once("parceiros.php");
?>
<!-- Alterar Senha -->
<div id="conteudo" class="interna">
  <span class='back'><a href="meu_cadastro.php"><img src="banco_imagens/btn_voltar.gif" alt="Voltar" border="0" /></a></span>
  <script type='text/javascript' src='js/xmlHTTP.js'></script>
	<script type='text/javascript' src='js/clientes_senha.js'></script>
  <h1><?=$title ?></h1>
  <form id="frm_senha" action="<?= $pageAtual ?>" method="post">
   <p class='alert'><?= !empty($erro) ? $erro : "Campos com * são de preenchimento obrigatório" ?></p>
 	 <div class='bordaForm'>
    <p>
      <label for="senha_atual">Senha atual:<span class="alert">*</span>
      <span class='form'><input name="senha_atual" type="password" size="15" maxlength="15" value="<?=$campo["senha_atual"] ?>" /></span></label>
    </p>
    <p>
      <label for="senha_nova">Nova senha:<span class="alert">*</span>
      <span class='form'><input name="senha_nova" type="password" size="15" maxlength="15" value="<?=$campo["senha_nova"] ?>" />
     	<span class="descCampo">Minimo 6 e máximo 15</span></span></label>
    </p>
    <p>
      <label for="senha_nova2">Confirmar nova senha:<span class="alert">*</span>
      <span class='form'><input name="senha_nova2" type="password" size="15" maxlength="15" value="<?= $campo["senha_nova2"] ?>" /></span></label>
    </p>
    </div>
    <br /><input name="btn_salvar" type="image" src="banco_imagens/btn_enviar.gif" class="noBorder btn" value="Enviar" />
      <input name="nome" type='hidden' value="<?= $_SESSION["xxClientesNomexx"] ?>" />
      <input name="email" type='hidden' value="<?= $_SESSION["xxEmailxx"] ?>" />
     </form>
</div>
<? require_once("rodape.php"); ?>
