<?
session_start();
session_unset();
session_destroy();

if($_SERVER['REMOTE_ADDR'] !='127.0.0.1') // Acesso Local
  $noSsl = "http://www.petshopnet.com.br/";
header("location:".$noSsl."index.php");
?>
