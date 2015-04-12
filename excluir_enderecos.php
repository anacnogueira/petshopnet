<?
  require_once("lib/configs.php");

  $clientes_id     = $_SESSION["xxClientesIDxx"];
  $clientes_end_id = $_REQUEST["id"];
  $SQL = "DELETE FROM clientes_end WHERE clientes_end_id='$clientes_end_id' AND clientes_id='$clientes_id'";
  $result = $conn->sql($SQL);
  $_SESSION["msg_operacao_end"] = "Endereço excluído com sucesso.";
  //echo "<script> window.location = 'catalogo_enderecos.php'; </script>";
  header("location: catalogo_enderecos.php");
?>

