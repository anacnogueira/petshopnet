<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: 05/10/2007                         '
   Pagina: lib/sessao.php                                 '
---------------------------------------------------------*/
session_start();
$return = $_SERVER['SCRIPT_NAME'];
//$return = $_SERVER['REQUEST_URI'];
//Verificar sessão
if(!isset($_SESSION[EMPRESA]["email"]) and !isset($_SESSION[EMPRESA]["codUser"]))
{

 header("location: login.php?return=".$return);

//Limitar timeout
 session_cache_limiter('private');
 $cache_limiter = session_cache_limiter(60);

 // Define o limite de tempo do cache em 60 minutos /
 session_cache_expire(60);
 $cache_expire = session_cache_expire();
 header("location:login.php");
}
?>
