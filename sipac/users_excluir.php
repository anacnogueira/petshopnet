<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 05/09/2007                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: users_excluir.php		                        '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $link = "users_listar.php";
 $Sels = $_REQUEST["Sels"];
 
 if(is_array($Sels))
 {
 	if($Sels[0] == 'on')
  	array_shift($Sels);
  	
  $arraSels = implode(",",$Sels);
  }

 //Excluir usu�rios
 $sql    = "DELETE FROM users WHERE users_id IN($arraSels)";
 $result = $conn->sql($sql);

 //Excluir autoriza��es relacionados aos users
 $sql    = "DELETE FROM autorizacoes WHERE users_id IN($arraSels)";
 $result = $conn->sql($sql);
  
 $mensagem_log = "Usu�rios(s) exclu�do(s) com sucesso($arraSels).";
 createLog('',$pageAtual,'',$mensagem_log);
 $conn->fechar();
 header("location: $link");
?>
