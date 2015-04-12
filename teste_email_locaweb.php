<?
  require_once("lib/funcoes.php");
  $from = "no-reply@petshopnet.com.br";
  $to   = "atendimento@petshopnet.com.br";
  $bcc  = "anacnogueira@bol.com.br";
  $subject = "Teste de e-mail Locaweb";
  $msg = "Teste de envio de e-mail seguindo padrões da locaweb NOVA 2";


  fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg);

?>

