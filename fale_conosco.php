<?
  $title = "Fale Conosco";
  require_once("lib/configs.php");
	
  if(isset($_REQUEST["btn_enviar"]) or isset($_POST["btn_enviar_x"]))
	{
    $campo = format_array($_POST);

   if(empty($campo['nome_completo']))
    $erro = "Preencha seu nome completo<br />";
   if(!validateField(array($campo["email"]),'email'))
    $erro .= "Preencha o e-mail corretamente <br />";
   if(empty($campo["assunto"]))
    $erro .="Preencha o assunto da mensagem <br />";
   if(empty($campo["mensagem"]))
    $erro .= "Preencha a mensagem <br />";
    
   if(empty($erro))
   {
    $to      = "atendimento@petshopnet.com.br";
    $cc      = "anacnogueira@gmail.com, rfbertozzi@uol.com.br";
    $from    = "no-reply@petshopnet.com.br";
    $subject = "Mensagem de contato - " . $campo["assunto"];
    $msg    	= "<br /><strong>Nome:</strong> ".$campo["nome_completo"]. "<br />";
    if(!empty($campo["telefone"]))
    $msg    	.= "<strong>Telefone:</strong> ".$campo["telefone"]. "<br />";

    $msg 	 .= "<strong>E-mail:</strong> " . $campo["email"] . "<br />";
	  $msg 	 .= "<strong>Assunto:</strong> ".$campo["assunto"] . "<br />";
    $msg    .= "<strong>Mensagem:</strong> " . $campo["mensagem"];
    if(fct_EnvioMail_locaweb($to,$from,$cc,$bcc,$subject,$msg))
     header("location: fale_conosco_final.php");
    else
      $erro .= "<p class='alert'>Não foi possível enviar o e-mail para o destinatário. POr favor, tente mais tarde.</p>";
   }
  }
  
  require_once("topo.php");
  require_once("login_topo.php");
	require_once("busca.php");
	//require_once("categorias.php");
	//require_once("parceiros.php");
?>
<!-- Fale Conosco -->
<div id="conteudo" class='interna'>
 <h1>Fale Conosco</h1>
 <script type='text/javascript' src='js/fale_conosco.js'></script>
 <script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
 <p>Para entrar em contato com o PetShopNet, preencha os campos abaixo e em breve entraremos em contato com você.</p>
 <p class='alert'><?= !empty($erro) ? $erro : "Campos com * são de preenchimento obrigatório" ?></p>
 <form id="frm_contato" action="fale_conosco.php" method="post" style='width: 290px'>
	 <label for="nome_completo">Nome:</label> <span class='alert'>*</span><br />
	 <input name="nome_completo" id="nome_completo" type="text" size="30" value="<?=$campo['nome_completo'] ?>" /> <br /><br />
   <label for="telefone">Telefone:</label><br />
	 <input name="telefone" id="telefone" type="text" size="14" class='telefone' value="<?=$campo["telefone"] ?>" /><br /><br />
   <label for="email">E-mail:</label> <span class='alert'>*</span><br />
	 <input name="email" id="email" type="text" size="30" value="<?=$campo["email"] ?>" /><br /><br />
	 <label for="assunto">Assunto:</label><span class='alert'>*</span><br />
	 <input name="assunto" id="assunto" type="text" size="30" value="<?=$campo["assunto"] ?>" /><br /><br />
	 <label for="mensagem">Mensagem:</label> <span class='alert'>*</span><br />
	 <textarea name="mensagem" id="mensagem" cols="33" rows="5"><?=$campo["mensagem"] ?></textarea><br /><br />
	 <input type="image" name="btn_enviar" src="banco_imagens/btn_enviar.gif" class="noBorder btn" value="Enviar" />
	 </form><br /> <br /><br />
</div>


<? require_once("rodape.php"); ?>

