<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 04/09/2007                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: logout.php			                                '
---------------------------------------------------------*/

 $allowRotina = "nao";
 require_once("lib/configs.php");
 $conn 			 = new ConexaoMysql();
 $url = "login.php";
 if(isset($_REQUEST["return"]) and !empty($_REQUEST["return"]))
  $url .= "?return=".$_REQUEST["return"];

 $mensagem_log = "O usu�rio saiu do sistema.";
 createLog('','','Logout',$mensagem_log);
 session_unset();
 session_destroy();
 header("location:$url");
?>
