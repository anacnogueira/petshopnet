<?php
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 18/06/2010                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: todos_carrinho.php		                                  '
---------------------------------------------------------*/
  $allowRotina  = "nao";
  $allowSession = "nao";
  require_once("configs.php"); 

  //1. Limpar carrinho com datas antigas
  $sql = "DELETE FROM carrinho WHERE date < DATE_SUB(CURDATE(),INTERVAL 1 DAY)"; // carrinho de 2 dias atras
  $result = mysql_query($sql);
  $excluido = mysql_affected_rows();
  if($excluido > 0){
    $mensagem_log = "Mensagem autom�tica - Exclu�dos" .$excluido. " registros no carrinho";
    createLog('','','TO DOS',$mensagem_log);
  }
?>
