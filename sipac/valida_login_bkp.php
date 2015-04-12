<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: 05/10/2007                         '
   Pagina: valida_login.php                               '
---------------------------------------------------------*/
  $allowSession = "nao";
  $allowRotina  = "nao";
  require_once("lib/configs.php");

  $email = "";
  $senha = "";
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $_SESSION["email"] = $email;

  if(!empty($_REQUEST["return"]))
   $return = "?return=".$_REQUEST["return"];
  
  if(empty($email) and !empty($senha))
  {
    $_SESSION["erro"] = "<div id='erro'><strong>ERRO:</strong> Prencha o email.</div>";
    $url = "login.php$return";
  }
  else if(!empty($email) and empty($senha))
  {
    $_SESSION["erro"] = "<div id='erro'><strong>ERRO:</strong> Prencha a senha.</div>";
    $url = "login.php$return";
  }
  else if(empty($email) and empty($senha))
  {
    $_SESSION["erro"] = "<div id='erro'><strong>ERRO:</strong> Prencha e-mail e senha.</div>";
    $url = "login.php$return";
  }
  else
  {
   $SQL = "SELECT users_id, users_email, users_senha, users_nome,
   users_autorizacao_especial, grupos_id, users_primeiro_login
   FROM users
   WHERE users_email='$email' AND users_senha='".sha1($senha)."'";
   $result = $conn->sql($SQL);
   $recordCount = mysql_num_rows($result);
   //echo $SQL;
   if($recordCount == 0)
   {
    $url = "login.php$return";

    
    $_SESSION["erro"] =" <div id='erro'><strong>ERRO:</strong> E-mail e/ou senha incorreto(s).</div>";
    createLog('','','Login',$_SESSION["msg"]);
    
   }
   else if($recordCount == 1)
   {
    $primeiro_login = mysql_result($result,0,"users_primeiro_login");

		//Matar essas sessões
		unset($_SESSION["erro"]);
		unset($_SESSION["email"]);


    //Iniciar Sessoes
    $_SESSION[EMPRESA]["email"]       = $email;
    $_SESSION[EMPRESA]["codUser"]     = mysql_result($result,0,"users_id");
    $_SESSION[EMPRESA]["nomeUsuario"] = mysql_result($result,0,"users_nome");
    $_SESSION[EMPRESA]["codGrupo"] 	 = mysql_result($result,0,"grupos_id");
    $_SESSION[EMPRESA]["autorizacao"] = mysql_result($result,0,"users_autorizacao_especial");
    
    if($primeiro_login == 1)
    {
      $url = "senha_alterar.php";
      // if(!empty($_REQUEST["return"]))
          $url .= "?return=".$_REQUEST["return"];
		}
	  else
    {
		 //Cadastra o numero da sessao
		 $SQL = "SELECT MAX(users_sessoes_num)+1 FROM users_sessoes  WHERE users_id='".$_SESSION[EMPRESA]["codUser"]."'";
     $result = $conn->sql($SQL);
     $users_sessoes_num = mysql_result($result,0,0);
     if(empty($users_sessoes_num))
       $users_sessoes_num = 1;

		 $SQL = "REPLACE users_sessoes(users_id,users_sessoes_num) VALUES('".$_SESSION[EMPRESA]["codUser"]."',$users_sessoes_num)";
		 $result = $conn->sql($SQL);
		 $_SESSION[EMPRESA]["session_id"] = $users_sessoes_num;
     if(!empty($_REQUEST["return"]))
       $url = $_REQUEST["return"];
     else
       $url = "index.php";
       
     //Último login
     $SQL = "SELECT
		 					CONCAT(logs_historico_data,' ',logs_historico_hora) as log_data
						FROM logs_historico
						WHERE users_id='".$_SESSION[EMPRESA]["codUser"] ."'
						AND logs_historico_operacao = 'Login'
						ORDER BY log_data DESC LIMIT 1";
		$result = $conn->sql($SQL);
		while($linha = mysql_fetch_array($result))
		  $_SESSION[EMPRESA]["lastLogin"] = left(fct_conversorData($linha[0],4),16);
		  
		 //Criar log do Login
		 createLog('','','Login','Login efetuado com sucesso.');
		}
	 }
  }
  header("location: $url");

function trataDados($object)
{
  $object = trim(strtolower($object));
  $arraStringReplace = array("select","replace","insert","delete","drop","xp_",",","\\","\*","\"");
  for($indx=0;$indx< count($arraStringReplace);$indx++)
  {
   $rExp = $arraStringReplace[$indx];
   $object = str_replace($rExp,"",$object);
  }
  return $object;
}
  ?>
