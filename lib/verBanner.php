<?
 /* Cadatrar clique do Banner Dinãmico (JavaScript)
 Criado  em 24/01/2008 por Ana Claudia
 */
  require_once("constantes.php");
  require_once("conexaomysql.php");
  $conn 			 = new ConexaoMysql();
  $banners_id  = $_REQUEST["banners_id"];
  $url         = $_REQUEST["url"];
	if(strpos($url,"http://") === false)
	  $url = "http://". $url;
	  
  //Cadatrar clique
  $SQL = "UPDATE banners_historico SET banners_clicado = banners_clicado + 1 WHERE banners_id = '$banners_id'";
  $result = $conn->sql($SQL);
  
  //Redirecionar
  header("location: $url");

?>
