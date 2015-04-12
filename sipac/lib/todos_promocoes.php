<?php
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Criação 18/06/2010                                     '
   Última Modificação: __/__/____                         '
   Página: todos_promocoes.php                            '
---------------------------------------------------------*/
  $allowRotina  = "nao";
  $allowSession = "nao";
  require_once("configs.php"); 
    
  //4. Ativação/Desativação de promoções 
  //4.1 - Ativação
  $sql = "UPDATE promocoes SET 
  data_status_mudanca =	NOW(),
  promocoes_status='S'  
  WHERE data_ini <= CURDATE() AND data_fin > CURDATE() 
  AND promocoes_status='N'";
  $result = $conn->sql($sql);
  $atualizado = mysql_affected_rows();
  if($atualizado > 0){ 
    $mensagem_log = "Mensagem automática - Ativadas " .$atualizado. " promoções";
    createLog('','','TO DOS',$mensagem_log);
  }
 
  //4.2 - Desativação 
  $sql = "UPDATE promocoes SET 
  data_status_mudanca =	NOW(),
  promocoes_status='N'  
  WHERE data_fin <= CURDATE()
  AND promocoes_status='S'";
  $result = $conn->sql($sql);
  $atualizado = mysql_affected_rows();
  if($atualizado > 0){ 
    $mensagem_log = "Mensagem automática - Desativadas ".$atualizado." promoções";
    createLog('','','TO DOS',$mensagem_log);
  }
?>  