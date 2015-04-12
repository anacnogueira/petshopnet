<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 20/12/2011                                     '
   Última Modificação: __/__/____                         '
   Página: alterar_status2.php		                        '
---------------------------------------------------------*/
 require_once("lib/configs.php");

 $table        = $_REQUEST["table"];
 $field_id     = $_REQUEST["field_id"];
 $id           = $_REQUEST["id"];
 $field_status = $_REQUEST["field_status"];
 $status       = $_REQUEST["status"];

 $link = $table."_listar.php";

 $sql = "UPDATE ".$table." SET ".$field_status." = '".$status."' WHERE ".$field_id." = '".$id."'";
 $result = $conn->sql($sql);
 $mensagem_log = "Status de ".substr_replace($table,"",-1,1)." alterado com sucesso($id).";
 createLog('',$pageAtual,'',$mensagem_log);
 $conn->fechar();
 header("location: $link");
?>
