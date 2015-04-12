<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: 05/10/2007                         '
   Pagina: lib/sessao.php                                 '
---------------------------------------------------------*/

//$return =  preg_replace("/\?.*/","",preg_replace("/\/.*\//","",$_SERVER["REQUEST_URI"]));
//$return = $_SERVER["REQUEST_URI"];
$return   = preg_replace("/\?.*/","",preg_replace("/.*\\//","",ltrim($_SERVER["REQUEST_URI"],"//")));
$return .= isset($_REQUEST["PHPSESSID"]) ? "?PHPSESSID=" . $_REQUEST["PHPSESSID"] : "";

//Verificar sessão
if((!isset($_SESSION["xxEmailxx"]) && empty($_SESSION["xxEmailxx"])) && (!isset($_SESSION["xxClientesIDxx"]) && empty($_SESSION["xxClientesIDxx"])))
{
 if($_SERVER['REMOTE_ADDR'] !='127.0.0.1') // Acesso Local
  $ssl = "https://ssl899.websiteseguro.com/".USER."/";

 header("location:".$ssl."login.php?return=".$return);
    
 //Limitar timeout
 session_cache_limiter('private');
 $cache_limiter = session_cache_limiter(60);

 // Define o limite de tempo do cache em 60 minutos /
 session_cache_expire(60);
 $cache_expire = session_cache_expire();

 }
 
?>
