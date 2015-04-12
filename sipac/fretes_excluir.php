<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 20/12/2011                                     '
   Última Modificação: __/__/____                         '
   Página: fretes_excluir.php		                      '
---------------------------------------------------------*/
require_once("lib/configs.php");

 $sels = $_REQUEST["sels"];
 if(is_array($sels))
 {
  if($sels[0] == 'on')
    array_shift($sels);

  $arraSels = implode(",",$sels);
  }

   $SQL = "DELETE FROM fretes WHERE frete_id IN($arraSels)";
   $result = $conn->sql($SQL);

$mensagem_log = "Regra(s) de frete excluída(s) com sucesso($arraSels).";
createLog('',$pageAtual,'',$mensagem_log);
$conn->fechar();
header("location: fretes_listar.php");
?>
