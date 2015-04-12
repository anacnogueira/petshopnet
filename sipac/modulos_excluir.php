<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 05/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: modulos_excluir.php		                        '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $link = "modulos_listar.php";
 $sels = $_REQUEST["sels"];
 
 if(is_array($sels))
 {
 	if($Sels[0] == 'on')
  	array_shift($sels);
  	
  $arraSels = implode(",",$sels);
  }


  //Excluir módulos
  $sql    = "DELETE FROM modulos WHERE modulos_id IN($arraSels)";
  $result = $conn->sql($sql);

  //Excluir autorizações relacionados aos módulos
  $sql = "DELETE FROM autorizacoes WHERE modulos_id IN($arraSels)";
  $result = $conn->sql($sql);
  
 $mensagem_log = "Módulos(s) excluído(s) com sucesso($arraSels).";
 createLog('',$pageAtual,'',$mensagem_log);
 $conn->fechar();
 header("location: $link");
?>
