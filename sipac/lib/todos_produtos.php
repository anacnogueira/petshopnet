<?php
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Criação 18/06/2010                                     '
   Última Modificação: __/__/____                         '
   Página: todos_produtos.php                              '
---------------------------------------------------------*/
  $allowRotina  = "nao";
  $allowSession = "nao";
  require_once("configs.php"); 

  //3. Ativação de produtos
 $sql = "UPDATE produtos SET produtos_status = 'S' WHERE produtos_data_disponivel <= CURDATE()";
 $result = $conn->sql($sql);
 $atualizado = mysql_affected_rows();
 if($atualizado > 0){ 
   $mensagem_log = "Mensagem automática - Ativados " .$atualizado. " produtos";
   createLog('','','TO DOS',$mensagem_log);
 } 
?>  