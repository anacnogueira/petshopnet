<?
  $teste = "/fechar_pedido.php";
  echo preg_replace("/\?.*/","",preg_replace("/\/.*\//","",ltrim($teste,"//")));

?>
