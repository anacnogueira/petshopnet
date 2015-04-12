<?
  // Congif Boleto
  session_start();
  require_once("sessao.php");
  require_once("constantes.php");
  require_once("conexaomysql.php");
  require_once("funcoes.php");
  $conn 			 = new ConexaoMysql();

  //Código desenvolvido por Ana Claudia Nogueira
  //Dados da Loja
  $pid = $_GET["pedidos_id"];
  //Selecionar os dados do pedido
  $SQL = "SELECT ped.pedidos_id, pt.valor_total,
  CONCAT(cli.clientes_nome,' ',cli.clientes_sobrenome) as clientes_nome_completo,
  ce.clientes_logradouro, ce.clientes_numero, ce.clientes_cidade, ce.clientes_uf, ce.clientes_cep
  FROM pedidos ped
  INNER JOIN pedido_total pt ON pt.pedidos_id = ped.pedidos_id
  INNER JOIN clientes    cli ON cli.clientes_id = ped.clientes_id
  INNER JOIN clientes_end ce ON cli.clientes_id = ce.clientes_id
  WHERE ped.pedidos_id = '$pid' AND clientes_pri =1
  LIMIT 0,1";
  $result = $conn->sql($SQL);
  while($pedido = mysql_fetch_array($result))
  {
   $pedidos_id             = $pedido["pedidos_id"];
   $valor_total            = $pedido["valor_total"];
   $clientes_nome_completo = $pedido["clientes_nome_completo"];
   $clientes_logradouro    = $pedido["clientes_logradouro"];
   $clientes_numero        = $pedido["clientes_numero"];
   $clientes_cidade        = $pedido["clientes_cidade"];
   $clientes_uf            = $pedido["clientes_uf"];
   $clientes_cep           = $pedido["clientes_cep"];
  }
  
?>
