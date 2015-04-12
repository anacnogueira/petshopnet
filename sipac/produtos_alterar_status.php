<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 05/10/2007                                     '
   Última Modificação: __/__/____                         '
   Página: produtos_alterar_status.php	                  '
---------------------------------------------------------*/
 $pageName     = basename(__FILE__);
 require_once("lib/configs.php");

 $link   			       = "produtos_listar.php";
 $produtos_status 	 = $_REQUEST["produtos_status"];
 $promocoes_id       = $_REQUEST["produtos_id"];

 $SQL = "UPDATE produtos SET produtos_status='$produtos_status' WHERE produtos_id='$produtos_id'";
 $result = $conn->sql($SQL);
 //echo $SQL;

 $mensagem_log = "Status de produto alterado com sucesso($produtos_id).";
 createLog('',$pageName,'',$mensagem_log);
 $conn->fechar();
 header("location: produtos_listar.php");
?>
