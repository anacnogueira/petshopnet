<?
/*--------------------------------------------------------'
   PetShopNet - Arquivo de configura��o                   '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 15/02/2007                                     '
   �ltima Modifica��o: __/__/____                         '
   P�gina: lib/configs.php                   							'
---------------------------------------------------------*/
  session_start();
  date_default_timezone_set("America/Sao_Paulo");
  require_once("constantes.php");
  require_once("conexaomysql.php");
  require_once("funcoes.php");

  antiSQLInjection();
  $conn 			 = new ConexaoMysql();
	$pageAtual   = $_SERVER['REQUEST_URI'];
	require_once("whos_online.php");
?>
