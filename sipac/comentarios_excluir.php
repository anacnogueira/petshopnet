<?
   /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 14/10/2009                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: comentarios_excluir.php                     '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $link = "comentarios_listar.php";
 $sels = $_REQUEST["sels"];
 
 if(is_array($sels))
 {
 	if($sels[0] == 'on')
  	array_shift($sels);
  	
  $arraSels = implode(",",$sels);
  }

$SQL = "DELETE FROM comentarios WHERE comentarios_id IN($arraSels)";
$result = $conn->sql($SQL);

$mensagem_log = "Coment�rios exclu�do(s) com sucesso($arraSels).";
createLog('',$pageAtual,'',$mensagem_log);
$conn->fechar();
header("location: $link");
?>
