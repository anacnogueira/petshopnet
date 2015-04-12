<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 05/09/2007                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: rotinas_excluir.php		                        '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $link = "rotinas_listar.php";
 $Sels = $_REQUEST["Sels"];
 
 if(is_array($Sels))
 {
 	if($Sels[0] == 'on')
  	array_shift($Sels);
  	
  $arraSels = implode(",",$Sels);
  }

 //Excluir Rotinas
 $sql    = "DELETE FROM rotinas WHERE rotinas_id IN($arraSels)";
 $result = $conn->sql($sql);

 //Excluir autoriza��es relacionados as rotinas
 $sql    = "DELETE FROM autorizacoes WHERE rotinas_id IN($arraSels)";
 $result = $conn->sql($sql);
  
$mensagem_log = "Rotinas(s) exclu�do(s) com sucesso($arraSels).";
createLog('',$pageAtual,'',$mensagem_log);
$conn->fechar();
header("location: $link");
?>
