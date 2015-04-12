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

  //1. Contar quantidades de carrinhos abandonados no dia anterior
 $sql = "SELECT
 DATE_FORMAT(date,'%d/%m/%Y')  as data,
 DATE_FORMAT(date,'%h:%i')  as hora
 FROM carrinho
 WHERE date > DATE_SUB(CURDATE(),INTERVAL 1 DAY)
 ORDER BY carrinho_id";
 $result = mysql_query($sql);
 $total = mysql_num_rows($result);
 $data_anterior = date('d/m/Y',(time()  - (24*3600)));
 if($total > 0){


   $mensagem_log  = "Mensagem automática - " . $total . " carrinhos abandonados em ". $data_anterior;
   $mensagem_mail .= "<h1>Carrinhos abandonados</h1>";
   $mensagem_mail .= "<table border='1'>";
   $mensagem_mail .= "<tr>";
   $mensagem_mail .= " <td>Data</td>";
   $mensagem_mail .= " <td>Hora</td>";
   $mensagem_mail .= "</tr>";
   while($data = mysql_fetch_array($result)){
     $mensagem_mail .= "<tr>";
     $mensagem_mail .= " <td>".$data["data"]."</td>";
     $mensagem_mail .= " <td>".$data["hora"]."</td>";
     $mensagem_mail .= "</tr>";

   }
   $mensagem_mail .= "</table>";
 } else {
   $mensagem_log =  "Nenhum carrinho abandonado em ". $data_anterior;
 }
 //Enviar resultado por e-mail
 $from    ='no-reply@'.str_replace("/","",str_replace("http://www.","",URL));
 $to      = "anacnogueira@gmail.com";
 $subject = "[".EMPRESA . "] - Relatório de carrinhos abandonados ". $data_anterior;
 fct_EnvioMail_locaweb($to,$from,$cc,$bcc,$subject,$mensagem_log . $mensagem_mail);
 //Gravar mensagem de log
   createLog('','','TO DOS',$mensagem_log);

?>