<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 12/09/2007                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: categorias_excluir.php		                      '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $parent_id = $_REQUEST["parent_id"];
 $sels      = $_REQUEST["sels"];
 $link      = "categorias_listar.php";

 if(is_array($sels))
 {
 	if($sels[0] == 'on')
  	array_shift($sels);

  $arraSels = implode(",",$sels);

  $sql = "DELETE FROM categorias WHERE categorias_id IN($arraSels)";
  $result = $conn->sql($sql);
 }
$mensagem_log = "Categorias(s) exclu�da(s) com sucesso($arraSels).";
createLog('',$pageAtual,'',$mensagem_log);
$conn->fechar();
header("location: $link");
?>
