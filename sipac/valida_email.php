<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 25/03/2009                                     '
   Última Modificação: 05/10/2007                         '
   Pagina: valida_email.php                               '
---------------------------------------------------------*/
  $allowRotina = "nao";
  require_once("lib/configs.php");

  $email           = $_REQUEST["email"];
  $emailOld  = $_REQUEST["emailOld"];

  if(!empty($email))
  {
   $SQL = "SELECT users_email FROM users
   WHERE users_email='$email'";
   If(!empty($emailOld))
    $SQL .= " AND users_email != '$emailOld'";
   $result = $conn->sql($SQL);
   $recordCount = mysql_num_rows($result);
    echo $recordCount;

   $conn->fechar();
  }
  else
   echo "E-mail vazio";
?>
