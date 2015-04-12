<?
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: 05/10/2007                         '
   Pagina: valida_login.php                               '
---------------------------------------------------------*/
	session_start();
	require_once("lib/configs.php");

  $email = "";
  $senha = "";
  $email = $_POST["clientes_email"];
  $senha = $_POST["clientes_senha"];
  $_SESSION["email"] = $email;

  if(empty($email) and !empty($senha))
   $_SESSION["msg"] = "Prencha o email.";

  else if(!empty($email) and empty($senha))
   $_SESSION["msg"] = "Prencha a senha.";

  else if(empty($email) and empty($senha))
   $_SESSION["msg"] = "Prencha e-mail e senha.";

  else
   $_SESSION["msg"] = "";
  
  if(!empty($_SESSION["msg"]))
    $url = "login.php?return=" . $_REQUEST["return"];
  else
  {
   $sql = "SELECT DISTINCT clientes_id, clientes_email,clientes_senha, clientes_nome
   FROM  clientes  WHERE clientes_email='".mysql_real_escape_string($email)."' 
   AND clientes_senha='".mysql_real_escape_string(sha1($senha))."'";

   $result = $conn->sql($sql);
   $recordCount = mysql_num_rows($result);

   if($recordCount == 0)
   {
    $url = "login.php?return=".$_REQUEST['return'];
    $_SESSION["msg"] ="E-mail e/ou senha incorreto(s).";
   }
   else if($recordCount == 1)
   {
		//Matar essas sessões
		unset($_SESSION["msg"]);
		unset($_SESSION["email"]);
    unset($_SESSION["return"]);
    
    //Iniciar Sessoes
    $_SESSION["xxEmailxx"]        = $email;
    $_SESSION["xxClientesIDxx"]   = mysql_result($result,0,"clientes_id");
    $_SESSION["xxClientesNomexx"] = mysql_result($result,0,"clientes_nome");

		 //Cadastra o numero da sessao
	 $SQL = "SELECT MAX(clientes_historico_numero_logons)+1 FROM clientes_historico  
     WHERE clientes_id='".$_SESSION["xxClientesIDxx"]."'";
     $result = $conn->sql($SQL);
     $users_sessoes_num = mysql_result($result,0,0);
     if(empty($users_sessoes_num))
       $users_sessoes_num = 1;

		 $SQL = "UPDATE clientes_historico SET
     clientes_historico_data_ultimo_logon = NOW(),
     clientes_historico_numero_logons = '$users_sessoes_num'
      WHERE clientes_id='".$_SESSION["xxClientesIDxx"]."'";

		 $result = $conn->sql($SQL);
		 $_SESSION["session_id"] = $users_sessoes_num;
     if(!empty($_REQUEST["return"]))
       $url = $_REQUEST["return"];
     else
       $url = "index.php";
	 }
  }

  header("location:". $url);
?>
