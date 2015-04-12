<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 11/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: fabricantes_excluir.php	                      '
---------------------------------------------------------*/

 require_once("lib/configs.php");
 $link = "fabricantes_listar.php";
 $sels= $_REQUEST["sels"];

 if(is_array($sels))
 {
 	if($sels[0] == 'on')
  	array_shift($sels);

  $arraSels = implode(",",$sels);
  }

  $sql = "DELETE FROM fornecedores WHERE fornecedores_id IN($arraSels)";
  $result = $conn->sql($sql);

 $mensagem_log = "Fornecedores(s) excluído(s) com sucesso($arraSels).";
 createLog('',$pageAtual,'',$mensagem_log);
 $conn->fechar();
 header("location: $link");
?>
