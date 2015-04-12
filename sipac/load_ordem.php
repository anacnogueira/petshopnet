<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 05/04/2009                                     '
   Última Modificação: 05/10/2007                         '
   Pagina: load_ordem.php                               '
---------------------------------------------------------*/
  $allowRotina = "nao";
  require_once("lib/configs.php");

  $type = $_REQUEST["type"];
  $id   = $_REQUEST["id"];

  if(!empty($type) and !empty($id))
  {
   //Ultima ordem + 1
   $sql = "SELECT COUNT(".$type."_ordem)+1 FROM ". $type;
   $sql .= " WHERE ".($type=="submodulos"?"modulos":"submodulos")."_id = ".$id;
   $result = $conn->sql($sql);
   if(mysql_num_rows($result) > 0)
    echo mysql_result($result,0,0);
  }
  else
   echo "vazio";
?>
