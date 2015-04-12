<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 09/04/2009                                     '
   Última Modificação: __/__/____                         '
   Página: alterar_status.php		                        '
---------------------------------------------------------*/
 require_once("lib/configs.php");

 $id     = $_REQUEST["id"];
 $status = $_REQUEST["status"];
 $table  = $_REQUEST["table"];
 $link = $table."_listar.php";

 $sql = "UPDATE $table SET ".$table."_status = '$status' WHERE $table"."_id = '$id'";
 $result = $conn->sql($sql);
 $mensagem_log = "Status de ".substr_replace($table,"",-1,1)." alterado com sucesso($id).";
 createLog('',$pageAtual,'',$mensagem_log);
 $conn->fechar();
 header("location: $link");
?>
