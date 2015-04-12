<?php
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Criação 18/06/2010                                     '
   Última Modificação: __/__/____                         '
   Página: todos_banners.php                              '
---------------------------------------------------------*/
  $allowRotina  = "nao";
  $allowSession = "nao";
  require_once("configs.php"); 

 //5. Ativação/Desativação de banners
  //5.1 - Ativação
  $sql = "UPDATE banners SET
  data_mudanca_status = NOW(),  
  banners_status='S'  
  WHERE data_agendada <= CURDATE() 
  AND (expira_data > CURDATE() OR expira_data IS NULL)
  AND banners_status='N'";
  $result = $conn->sql($sql);
  $atualizado = mysql_affected_rows();
  if($atualizado > 0){ 
    $mensagem_log = "Mensagem automática - Ativados " .$atualizado. " banners";
    createLog('','','TO DOS',$mensagem_log);
  }

  //5.2 - Desativação  
  $sql = "UPDATE banners SET 
  data_mudanca_status =	NOW(),
  banners_status='N'  
  WHERE expira_data <= CURDATE()
  AND banners_status='S'";
  $result = $conn->sql($sql);
  $atualizado = mysql_affected_rows();
  if($atualizado > 0){ 
    $mensagem_log = "Mensagem automática - Desativados " .$atualizado. " banners";
    createLog('','','TO DOS',$mensagem_log);
  } 
?>