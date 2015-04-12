<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 20/10/2009                                     '
   Última Modificação: __/__/____                         '
   Página: formas_pagamento_excluir.php		                '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $link = "formas_pagamento_listar.php";
 $sels = $_REQUEST["sels"];

 if(is_array($sels))
 {
 	if($sels[0] == 'on')
  	array_shift($sels);

  $arraSels =implode(",",$sels);
  }

//1.Selecionar imagem para excluir
   $sql = "SELECT 	formas_pagamento_img FROM formas_pagamento WHERE formas_pagamento_id IN($arraSels)";
   $result = $conn->sql($sql);
//2. Exclui a(s) imagem(s)
 while($linha = mysql_fetch_array($result))
 {
   
   if(file_exists(DIR_PAGAMENTOS.$linha["formas_pagamento_img"]))
     unlink(DIR_PAGAMENTOS.$linha["formas_pagamento_img"]);    
  }

//3. Exclui o(s) produto
$sql = "DELETE FROM formas_pagamento WHERE formas_pagamento_id IN($arraSels)";
$result = $conn->sql($sql);

$mensagem_log = "Forma(s) de pagamento excluído(s) com sucesso($arraSels).";
createLog('',$pageAtual,'',$mensagem_log);
$conn->fechar();
header("location: $link");
?>
