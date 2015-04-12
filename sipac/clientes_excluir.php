<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 04/10/2007                                     '
   �ltima Modifica��o: 15/10/2009                         '
   P�gina: comentarios_excluir.php		                    '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $link = "clientes_listar.php";
 $sels = $_REQUEST["sels"];
 
 if(is_array($sels))
 {
 	if($sels[0] == 'on')
  	array_shift($sels);

  $arraSels = implode(",",$sels);
 }
 //1. Exclui os dados pessoais do cliente
 $sql = "DELETE FROM clientes WHERE clientes_id IN($arraSels)";
 $result = $conn->sql($sql);

 //2. Exclui o endere�o do cliente
 $sql = "DELETE FROM clientes_end WHERE clientes_id IN($arraSels)";
 $result = $conn->sql($sql);

 //3. Exclui o hist�rico do cliente
 $sql = "DELETE FROM clientes_historico WHERE clientes_id IN($arraSels)";
 $result = $conn->sql($sql);

 $mensagem_log = "Clientes(s) exclu�do(s) com sucesso($arraSels).";
 createLog('',$pageAtual,'',$mensagem_log);
 $conn->fechar();
 header("location: $link");
?>
