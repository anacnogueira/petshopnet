<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 19/03/2007                                     '
   �ltima Modifica��o: __/__/____                         '
   Pagina: enviar_senha.php                                      '
---------------------------------------------------------*/
  $allowSession = "nao";
  $allowRotina  = "nao";
  require_once("lib/configs.php");

  $email = $_REQUEST["email"];

  if(!empty($email))
  {
   $SQL = "SELECT users_email,users_nome FROM users WHERE users_email='$email'";
   $result = $conn->sql($SQL);
   if(mysql_num_rows($result) == 0)
    echo mysql_num_rows($result);
   else
   {
    $nome = mysql_result($result,0,"users_nome");
    //E-mail encontrado: Altera a senha e manda para o usu�rio
    $senhaNova = gera_passwd();
    $SQL = "UPDATE users SET users_senha= '".sha1($senhaNova)."' WHERE users_email='$email'";
    $result = $conn->sql($SQL);
    if($_SERVER['REMOTE_ADDR'] =='127.0.0.1') // Acesso Local
       echo $senhaNova;
		else
    {
      $from    ='no-reply@'.str_replace("/","",str_replace("http://www.","",URL));
      $to      = $email;
      $subject = "Envio de senha - SIPAC/".EMPRESA;
      $msg     ="<h1>Envio de senha</h1>";
      $msg    .= "<em>$nome</em><br />";
      $msg    .= "Segue as informa��es do seu novo login:<br />";
      $msg    .= "<strong>E-mail: </strong>$email<br />";
      $msg    .= "<strong>Senha: </strong>$senhaNova<br />";
      fct_EnvioMail_locaweb($to,$from,$cc,$bcc,$subject,$msg);
      echo 1;
    }
   }
  }
 ?>
