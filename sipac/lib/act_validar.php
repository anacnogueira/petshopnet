<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 05/11/2007                                     '
   Última Modificação: 18/06/2009                         '
   Página: act_validar.php  				                      '
---------------------------------------------------------*/
 $allowRotina  = "nao";
  require_once("configs.php");

 $conn 			 = new ConexaoMysql();
 $passo 		 = $_REQUEST["passo"];

 switch($passo)
 {
   case "cpf":
    fct_validaCPF();
    break;
   case "email":
    fct_validaEmail();
    break;
   case "codigo":
    fct_validaCodigo();
 }

 function  fct_validaCPF()
 {
	 global $conn;
	 $clientes_cpf = $_REQUEST["clientes_cpf"];
	 $cpfOld       = $_REQUEST["cpfOld"];

   $SQL = "SELECT clientes_cpf FROM clientes WHERE clientes_cpf='$clientes_cpf'";
   if(!empty($cpfOld))
    $SQL .= " AND clientes_cpf <>'$cpfOld'";
   $result = $conn->sql($SQL);
	 if(mysql_num_rows($result) == 0)
	 	echo 0; //CPF não existe, pode cadastrar outro
	 else
	 	echo 1;
 }

 function  fct_validaEmail()
 {
	 global $conn;
	 $clientes_email = $_REQUEST["clientes_email"];
	 $emailOld       = $_REQUEST["emailOld"];

   $SQL = "SELECT clientes_email FROM clientes WHERE clientes_email='$clientes_email'";
   if(!empty($emailOld))
    $SQL .= " AND clientes_email <>'$emailOld'";
   $result = $conn->sql($SQL);
	 if(mysql_num_rows($result) == 0)
	 	echo 0;
	 else
	 	echo 1;
 }

  function  fct_validaCodigo()
 {
	 global $conn;
	 $produtos_codigo    = $_REQUEST["produtos_codigo"];
	 $produtos_codigoOld = $_REQUEST["produtos_codigoOld"];

   $SQL = "SELECT produtos_codigo FROM produtos WHERE produtos_codigo='$produtos_codigo'";
   if(!empty($produtos_codigoOld))
    $SQL .= " AND produtos_codigo <>'$produtos_codigoOld'";
   $result = $conn->sql($SQL);
   if(mysql_num_rows($result) == 0)
	 	echo 0;
	 else
	 	echo 1;
 }
?>


