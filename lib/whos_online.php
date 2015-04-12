<?
 function whos_online()
 {
   global $conn;
   if(isset($_SESSION["xxClientesIDxx"]))
   {
    $clientes_id = $_SESSION["xxClientesIDxx"];

    $SQL = "SELECT
    clientes_nome
    clientes_sobrenome
    FROM clientes
    WHERE clientes_id = '$clientes_id'";
    $result = $conn->sql($SQL);
    while($cliente = mysql_fetch_array($result))
     $nome_completo = $cliente["clientes_nome"]." ".$cliente["clientes_sobrenome"];

   }
   else
   {
     $clientes_id = 0;
     $nome_completo = "Convidado";
   }
   $session_id        = session_id();
   $ip_address        = $_SERVER['REMOTE_ADDR'];
   $ultima_pagina_url = $_SERVER['SCRIPT_NAME'];
   $hora_atual        = time();
   $xx_min_atras      = ($hora_atual - 900);
   
   //Removers entradasr que expiraram
   $SQL = "DELETE FROM usuarios_online WHERE hora_ultimo_click < '$xx_min_atras'";
   $result = $conn->sql($SQL);
   
   $SQL = "SELECT COUNT(*) as count FROM usuarios_online WHERE sessao_id = '".$session_id."'";
  $result = $conn->sql($SQL);
  while($who = mysql_fetch_array($result))
	{
     if($who["count"] > 0)
     {
      $SQL2 = "UPDATE usuarios_online SET
      clientes_id       = '$clientes_id',
      nome_completo     = '$nome_completo',
      ip_address        = '$ip_address',
      hora_ultimo_click = '$hora_atual',
      ultima_pagina_url = '$ultima_pagina_url'
     WHERE sessao_id='$session_id'";
     }
     else
     {
       $SQL2 = "INSERT INTO usuarios_online(
        clientes_id,
        nome_completo,
        ip_address,
        hora_ultimo_click,
        ultima_pagina_url,
        sessao_id,
        hora_entrada
        ) VALUES (
       '$clientes_id',
       '$nome_completo',
       '$ip_address',
       '$hora_atual',
       '$ultima_pagina_url',
       '$session_id',
       '$hora_atual'
       )";
     }

     //echo $SQL;
     $result2 = $conn->sql($SQL2);

	}
 }
 
 whos_online();
?>
