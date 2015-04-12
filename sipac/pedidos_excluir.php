<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 17/10/2007                                     '
   Última Modificação: 15/10/2009                         '
   Página: pedidos_excluir.php		                        '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $link = "pedidos_listar.php";
 $sels = $_REQUEST["sels"];

 if(is_array($sels))
 {
 	if($sels[0] == 'on')
  	array_shift($sels);

  $arraSels = implode(",",$sels);
  }

  //Exclui o pedido
  $sql = "DELETE FROM pedidos WHERE pedidos_id IN($arraSels)";
  $result = $conn->sql($sql);

  //Exclui or produtos do pedido
  $sql = "DELETE FROM pedidos_produtos WHERE pedidos_id IN($arraSels)";
  $result = $conn->sql($sql);
  
 //Exclui o historico do pedido
 $sql = "DELETE FROM pedidos_status_historico WHERE pedidos_id IN($arraSels)";
 $result = $conn->sql($sql);
	 
 $mensagem_log = "Pedido(s) excluído(s) com sucesso($arraSels).";
 createLog('',$pageAtual,'',$mensagem_log);
 $conn->fechar();
 header("location: $link");
?>
