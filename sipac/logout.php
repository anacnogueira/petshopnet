<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: logout.php			                                '
---------------------------------------------------------*/

 $allowRotina = "nao";
 require_once("lib/configs.php");
 $conn 			 = new ConexaoMysql();
 $url = "login.php";
 if(isset($_REQUEST["return"]) and !empty($_REQUEST["return"]))
  $url .= "?return=".$_REQUEST["return"];

 $mensagem_log = "O usuário saiu do sistema.";
 createLog('','','Logout',$mensagem_log);
 session_unset();
 session_destroy();
 header("location:$url");
?>
