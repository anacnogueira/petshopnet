<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/10/2007                                     '
   Última Modificação: __/__/____                         '
   Página: promocoes_excluir.php		                      '
---------------------------------------------------------*/
require_once("lib/configs.php");

 $sels = $_REQUEST["sels"];
 if(is_array($sels))
 {
  if($sels[0] == 'on')
    array_shift($sels);

  $arraSels = implode(",",$sels);
  }

   $SQL = "DELETE FROM promocoes WHERE promocoes_id IN($arraSels)";
   $result = $conn->sql($SQL);

$mensagem_log = "Promoções de produtos excluído(s) com sucesso($arraSels).";
createLog('',$pageAtual,'',$mensagem_log);
$conn->fechar();
header("location: promocoes_listar.php");
?>
