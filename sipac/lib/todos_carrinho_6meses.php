<?php
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Criação 18/06/2010                                     '
   Última Modificação: __/__/____                         '
   Página: todos_carrinho.php		                                  '
---------------------------------------------------------*/
  $allowRotina  = "nao";
  $allowSession = "nao";
  require_once("configs.php"); 

  //1. Limpar carrinho com datas antigas
  // carrinho de 6 meses atras
  $sql = "DELETE FROM carrinho WHERE date < DATE_SUB(CURDATE(),INTERVAL 6 MONTH)";
  $result = mysql_query($sql);
  $excluido = mysql_affected_rows();
  if($excluido > 0){
    $mensagem_log = "Mensagem automática - Excluídos" .$excluido. " registros no carrinho";
    createLog('','','TO DOS',$mensagem_log);
  }
?>
