<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 06/09/2007                                     '
   Última Modificação: 19/03/2009                         '
   Página: lib/configs.php                       							'
---------------------------------------------------------*/
  ini_set("register_globals","Off");
  ini_set("display_errors",1);
  date_default_timezone_set("America/Sao_Paulo");
  session_start();
  $pageAtual = preg_replace("/\?.*/","",preg_replace("/\/.*\//","",$_SERVER['REQUEST_URI']));
  header("Content-Type: text/html; charset=ISO-8859-1",true);

  require_once("constantes.php");
  if($allowSession != "nao")
   require_once("sessao.php");

  require_once("conexaomysql.php");
  require_once("funcoes.php");
  if($allowRotina != "nao")
  {
   require_once("class.rotinas.php");
   $rotinaClass = new Rotina($pageAtual,$form);
  }

  antiSQLInjection();
  $conn      = new ConexaoMysql();

?>
