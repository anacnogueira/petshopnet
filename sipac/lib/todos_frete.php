<?php
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 18/06/2010                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: todos_frete.php                              '
---------------------------------------------------------*/
  $allowRotina  = "nao";
  $allowSession = "nao";
  require_once("configs.php"); 
  
  //6.  Ativa��o/Desataiva��o de frete gr�tis
  //6.1 - Ativa��o
  $sql = "UPDATE produtos_frete SET 
  produtos_frete_gratis='S'  
  WHERE produtos_frete_ini <= CURDATE() AND produtos_frete_fin > CURDATE()
  AND produtos_frete_gratis='N'";
  $result = $conn->sql($sql);
  $atualizado = mysql_affected_rows();
  if($atualizado > 0){ 
    $mensagem_log = "Mensagem autom�tica - Ativados " .$atualizado. " produtos com frete gr�tis";
    createLog('','','TO DOS',$mensagem_log);
  } 

  //6.2 - Desativa��o  
  $sql = "UPDATE produtos_frete SET 
  produtos_frete_gratis='N'  
  WHERE produtos_frete_fin <= CURDATE()
  AND produtos_frete_gratis='S'";
  $result = $conn->sql($sql);
  $atualizado = mysql_affected_rows();
  if($atualizado > 0){ 
    $mensagem_log = "Mensagem autom�tica - Desativados " .$atualizado. " produtos com frete gr�tis";
    createLog('','','TO DOS',$mensagem_log);
  }   
?>  