<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 05/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: grupos_excluir.php		                        '
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

  //Excluir autorizações relacionados aos módulos
  $sql    = "DELETE FROM autorizacoes WHERE grupos_id IN($arraSels)";
  $result = $conn->sql($sql);
  
 $mensagem_log = "Grupo(s) excluído(s) com sucesso($arraSels).";
 createLog('',$pageAtual,'',$mensagem_log);
 $conn->fechar();
 header("location: $link");
?>
