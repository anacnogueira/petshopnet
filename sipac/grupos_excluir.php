<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 05/09/2007                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: grupos_excluir.php		                        '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $link = "grupos_listar.php";
 $Sels = $_REQUEST["Sels"];
 
 if(is_array($Sels))
 {
 	if($Sels[0] == 'on')
  	array_shift($Sels);
  	
  $arraSels = implode(",",$Sels);
  }

  $sql    = "DELETE FROM grupos WHERE grupos_id IN($arraSels)";
  $result = $conn->sql($sql);

  //Excluir autoriza��es relacionados aos m�dulos
  $sql    = "DELETE FROM autorizacoes WHERE grupos_id IN($arraSels)";
  $result = $conn->sql($sql);
  
 $mensagem_log = "Grupo(s) exclu�do(s) com sucesso($arraSels).";
 createLog('',$pageAtual,'',$mensagem_log);
 $conn->fechar();
 header("location: $link");
?>
