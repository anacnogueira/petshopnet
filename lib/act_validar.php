<?
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Criação 05/11/2007                                     '
   Última Modificação: __/__/____                         '
   Página: act_validar.php  				                      '
---------------------------------------------------------*/
 require_once("constantes.php");
 require_once("conexaomysql.php");
 require_once("funcoes.php");
 session_start();
 $passo 		 = $_POST["passo"];
 $conn 			 = new ConexaoMysql();
 switch($passo)
 {
   case "cpf":
    fct_validaCPF();
    break;
   case "email":
    fct_validaEmail();
    break;
   case "senha":
   fct_validaSenha();
   break;
  case "nota":
   fct_gravarNota();
  break;
 }
 
 function  fct_validaCPF()
 {
	 global $conn;
	 $clientes_cpf = $_POST["clientes_cpf"];
	 $cpfOld       = $_POST["cpfOld"];
	 
   $SQL = "SELECT clientes_cpf FROM clientes WHERE clientes_cpf='$clientes_cpf'";
   if(!empty($cpfOld))
    $SQL .= " AND clientes_cpf <>'$cpfOld'";
   $result = $conn->sql($SQL);
	 echo mysql_num_rows($result);
 }
 
 function  fct_validaEmail()
 {
	 global $conn;
	 $clientes_email = $_POST["clientes_email"];
	 $emailOld       = $_POST["emailOld"];
	 
   $SQL = "SELECT clientes_email FROM clientes WHERE clientes_email='$clientes_email'";
   if(!empty($emailOld))
    $SQL .= " AND clientes_email <>'$emailOld'";
   $result = $conn->sql($SQL);
	 echo mysql_num_rows($result);

 }
 
 function fct_validaSenha()
 {
  global $conn;
  $senha_atual = $_POST["senha_atual"];
  $SQL = "SELECT clientes_senha FROM clientes WHERE clientes_id='".$_SESSION["xxClientesIDxx"]."' AND clientes_senha='".sha1($senha_atual)."'";
	$result = $conn->sql($SQL);
  echo mysql_num_rows($result);
 }

?>


