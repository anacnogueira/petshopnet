<?
  //header("Content-Type: text/html; charset=ISO-8859-1",true);
   session_start();
  require_once("constantes.php");
  require_once("conexaomysql.php");
  require_once("funcoes.php");

  $conn 	   = new ConexaoMysql();
    
  $produtos_codigo   = $_POST["produtos_codigo"];
  $comentarios_nota  = $_POST["comentarios_nota"];
  $comentarios_ip    = $_POST['REMOTE_ADDR'];

  //Verificar se o usuário já votou
  $sql = "SELECT comentarios_nota FROM comentarios WHERE produtos_codigo = '$produtos_codigod'
  AND comentarios_ip = '$comentarios_ip'";
  $result = $conn->sql($sql);
  if(mysql_num_rows($result) != 0) //usuÃ¡rio jÃ¡ votou, nÃ£o pode votar mais
   echo "Você já votou neste produto.";
  else
  {
   $sql = "INSERT INTO comentarios  SET
    produtos_codigo = '$produtos_codigo',
    comentarios_nota = '$comentarios_nota',
    comentarios_ip = '$comentarios_ip',
    comentarios_data  = NOW()";
   $result = $conn->sql($sql);
   
   echo "Nota computada com sucesso.";
  }
?>
