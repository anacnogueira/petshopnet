<?php
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 18/06/2010                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: todos_produtos.php                              '
---------------------------------------------------------*/
  $allowRotina  = "nao";
  $allowSession = "nao";
  require_once("configs.php"); 

  //3. Ativa��o de produtos
 $sql = "UPDATE produtos SET produtos_status = 'S' WHERE produtos_data_disponivel <= CURDATE()";
 $result = $conn->sql($sql);
 $atualizado = mysql_affected_rows();
 if($atualizado > 0){ 
   $mensagem_log = "Mensagem autom�tica - Ativados " .$atualizado. " produtos";
   createLog('','','TO DOS',$mensagem_log);
 } 
?>  