<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 27/12/2007                                     '
   Última Modificação: 16/10/2009                         '
   Página: newsletters_excluir.php                        '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $link     =  "newsletters_listar.php";
 $sels     = $_REQUEST["sels"];

 if(is_array($sels))
 {
 	if($sels[0] == 'on')
  	array_shift($sels);

  $arraSels =implode(",",$sels);
 }
  
  
 $SQL = "DELETE FROM newsletters WHERE newsletters_id IN($arraSels)";
 $result = $conn->sql($SQL);

$mensagem_log = "Newsletter(s) excluída(s) com sucesso($arraSels).";
createLog('',$pageAtual,'',$mensagem_log);
$conn->fechar();
header("location: $link");
?>
