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
  $email  = $_REQUEST["email"];
  $senha  = $_REQUEST["senha"];
  $return = $_REQUEST["return"];
  
  if(!empty($email) and !empty($senha))
  {
   $sql = "SELECT users_id, users_email, users_senha, users_nome,
   users_autorizacao_especial, grupos_id, users_primeiro_login
   FROM users
   WHERE users_email='".mysql_real_escape_string($email)."' 
   AND users_senha='".mysql_real_escape_string(sha1($senha))."'";
   $result = $conn->sql($sql);
   $recordCount = mysql_num_rows($result);
   //echo $SQL;
   if($recordCount == 0)
   {
    $msg = "E-mail e/ou senha incorreto(s).";
    $url = "";
   }
   else if($recordCount == 1)
   {
    $primeiro_login = mysql_result($result,0,"users_primeiro_login");


    //Iniciar Sessoes
    $_SESSION[EMPRESA]["email"]       = $email;
    $_SESSION[EMPRESA]["codUser"]     = mysql_result($result,0,"users_id");
    $_SESSION[EMPRESA]["nomeUsuario"] = mysql_result($result,0,"users_nome");
    $_SESSION[EMPRESA]["codGrupo"] 	 = mysql_result($result,0,"grupos_id");
    $_SESSION[EMPRESA]["autorizacao"] = mysql_result($result,0,"users_autorizacao_especial");
    
    if($primeiro_login == 1)
    {
      $url = "senha_alterar.php";
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
		 $msg = 'Login efetuado.';
		}
	 }

  }
  else
    $msg =  "Variaveis vazias";

  echo $msg .",". $url ;
  createLog('','','Login',$msg);
  
  $conn->fechar();
  ?>
