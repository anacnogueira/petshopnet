<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 05/09/2007                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: submodulos_excluir.php		                        '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $link = "submodulos_listar.php";
 $sels = $_REQUEST["sels"];
 
 if(is_array($sels))
 {
 	if($Sels[0] == 'on')
  	array_shift($sels);
  	
  $arraSels = implode(",",$sels);
  }

  //Excluir subm�dulos
  $sql    = "DELETE FROM submodulos WHERE submodulos_id IN($arraSels)";
  $result = $conn->sql($sql);

 //Excluir autoriza��es relacionados aos subm�dulos
 $sql    = "DELETE FROM autorizacoes WHERE submodulos_id IN($arraSels)";
 $result = $conn->sql($sql);
 
 $mensagem_log = "Subm�dulos(s) exclu�do(s) com sucesso($arraSels).";
 createLog('',$pageAtual,'',$mensagem_log);
 $conn->fechar();
 header("location: $link");
?>
