<?php
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 18/06/2010                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: todos_logs.php                                 '
---------------------------------------------------------*/
  $allowRotina  = "nao";
  $allowSession = "nao";
  require_once("configs.php"); 
  
  //7. Apagar Logs com mais de 6 meses (Mensal)
  $sql = "DELETE FROM logs_historico 
  WHERE period_diff(date_format(NOW(),'%Y%m'),date_format(logs_historico_data,'%Y%m')) >= 6";
  $result = $conn->sql($sql);
  $excluido = mysql_affected_rows();
  if($excluido > 0){ 
    $mensagem_log = "Mensagem autom�tica - Exclu�dos " .$excluido. " mensagens de log.";
    createLog('','','TO DOS',$mensagem_log);
  }     
?>  