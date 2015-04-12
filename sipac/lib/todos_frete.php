<?php
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Criação 18/06/2010                                     '
   Última Modificação: __/__/____                         '
   Página: todos_frete.php                              '
---------------------------------------------------------*/
  $allowRotina  = "nao";
  $allowSession = "nao";
  require_once("configs.php"); 
  
  //6.  Ativação/Desataivação de frete grátis
  //6.1 - Ativação
  $sql = "UPDATE produtos_frete SET 
  produtos_frete_gratis='S'  
  WHERE produtos_frete_ini <= CURDATE() AND produtos_frete_fin > CURDATE()
  AND produtos_frete_gratis='N'";
  $result = $conn->sql($sql);
  $atualizado = mysql_affected_rows();
  if($atualizado > 0){ 
    $mensagem_log = "Mensagem automática - Ativados " .$atualizado. " produtos com frete grátis";
    createLog('','','TO DOS',$mensagem_log);
  } 

  //6.2 - Desativação  
  $sql = "UPDATE produtos_frete SET 
  produtos_frete_gratis='N'  
  WHERE produtos_frete_fin <= CURDATE()
  AND produtos_frete_gratis='S'";
  $result = $conn->sql($sql);
  $atualizado = mysql_affected_rows();
  if($atualizado > 0){ 
    $mensagem_log = "Mensagem automática - Desativados " .$atualizado. " produtos com frete grátis";
    createLog('','','TO DOS',$mensagem_log);
  }   
?>  