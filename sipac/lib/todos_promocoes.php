<?php
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 18/06/2010                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: todos_promocoes.php                            '
---------------------------------------------------------*/
  $allowRotina  = "nao";
  $allowSession = "nao";
  require_once("configs.php"); 
    
  //4. Ativa��o/Desativa��o de promo��es 
  //4.1 - Ativa��o
  $sql = "UPDATE promocoes SET 
  data_status_mudanca =	NOW(),
  promocoes_status='S'  
  WHERE data_ini <= CURDATE() AND data_fin > CURDATE() 
  AND promocoes_status='N'";
  $result = $conn->sql($sql);
  $atualizado = mysql_affected_rows();
  if($atualizado > 0){ 
    $mensagem_log = "Mensagem autom�tica - Ativadas " .$atualizado. " promo��es";
    createLog('','','TO DOS',$mensagem_log);
  }
 
  //4.2 - Desativa��o 
  $sql = "UPDATE promocoes SET 
  data_status_mudanca =	NOW(),
  promocoes_status='N'  
  WHERE data_fin <= CURDATE()
  AND promocoes_status='S'";
  $result = $conn->sql($sql);
  $atualizado = mysql_affected_rows();
  if($atualizado > 0){ 
    $mensagem_log = "Mensagem autom�tica - Desativadas ".$atualizado." promo��es";
    createLog('','','TO DOS',$mensagem_log);
  }
?>  