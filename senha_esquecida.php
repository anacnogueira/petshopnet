<?
  $title = "Esqueceu a senha";
  require_once("lib/configs.php");

	if(isset($_POST["btn_enviar"]) or isset($_POST["btn_enviar_x"]))
 {
   $email = $_POST["email"];
  if(empty($email))
   $erro = "Preencha o campo e-mail";

  else
  {
    //Verifica se o e-mail est� cadastrado no BD
    $SQL = "SELECT clientes_email,clientes_nome FROM clientes 
    WHERE clientes_email='".mysql_real_escape_string($email)."'";
    $result = $conn->sql($SQL);
    if(mysql_num_rows($result) == 0)
     $erro = "Seu e-mail n�o est� cadastrado.\n";
    else
    {
      $nome = mysql_result($result,0,"clientes_nome");
      //E-mail encontrado: Altera a senha e manda para o usu�rio
   		$senhaNova = gera_passwd();
   		$SQL = "UPDATE clientes SET clientes_senha= '".sha1($senhaNova)."'
        WHERE clientes_email='".mysql_real_escape_string($email)."'";
   		$result = $conn->sql($SQL);

		$from ='not-reply@petshopnet.com.br';
     	$fromName = 'PetShopNet';
        $to = $email;
     	$toName =  $nome;
     	$subject = "Envio de senha - PetShopNet";
     	$msg  ="<h3>Envio de senha - PetShopNet</h3>";
     	$msg  .= "<em>$nome</em><br />";
     	$msg .= "Segue as informa��es do seu novo login:<br />";
     	$msg .= "<strong>E-mail: </strong>$email<br />";
     	$msg .= "<strong>Senha: </strong>$senhaNova<br />";
     	if(fct_EnvioMail($from,$fromName,$to,$toName,$subject,$msg)) {
         $erro = "Uma nova senha foi enviada para o seu e-mail.<br />\n";
         $erro .= "<a href='login.php'>Voltar para p�gina de Login</a>";
       }
       else
        $erro = "N�o foi poss�vel enviar o e-mail para o destinat�rio. POr favor, tente mais tarde.";
    }
  }
}
 require_once("topo.php");
 require_once("login_topo.php");
 require_once("busca.php");
 //require_once("categorias.php");
 //require_once("parceiros.php");
?>
<!-- Esqueceu a senha -->
<div id="conteudo" class="interna">
 <?= $script ?>
 <h1 class="Restrito">Esqueceu a senha?</h1>
 <form id="frm_lem_senha" method="post" action="<?=$pageName ?>">
 <div class='bordaForm'>
   <p>Informe o e-mail cadastrado abaixo:</p>
  <input name="email" type="text" size="50" value="<?=$email ?>" />
 </div>
  <br /><input name="btn_enviar" type="image" src="banco_imagens/btn_enviar.gif" class="noBorder btn" value="Enviar" />
  <p> Se voc� utiliza filtro Anti-Spam, configure-o para receber e-mails de not-reply@petshopnet.com.br. </p>
  </form>
  <div class="erro"><?= $erro ?></div>
</div>
<? require_once("rodape.php"); ?>
