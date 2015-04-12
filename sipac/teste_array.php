<?
 $allowRotina = "nao";
 $titulo      = "Organizador";
 require_once("lib/configs.php");
  $modulo = array();
 $SQL = "SELECT modulos_nome,modulos_id FROM modulos";
 $rs1 = $conn->sql($SQL);

 while($mod = mysql_fetch_array($rs1))
 {
   $modulo[][] = array($mod[0]);
   $SQL = "SELECT submodulos_nome,submodulos_id FROM submodulos WHERE modulos_id='".$mod[1]."'";
   $rs2 = $conn->sql($SQL);
   $x++;
   while($sub = mysql_fetch_array($rs2))
   {
     $modulo[][] = array($sub[0]);
     $SQL = "SELECT rotinas_nome,rotinas_id FROM rotinas WHERE rotinas_id='".$sub[1]."'";
     $rs3 = $conn->sql($SQL);
     $y++;
     while($rot = mysql_fetch_array($rs3))
     {
       $modulo[][][] = array($rot[0]);
       $y++;
     }
   }
 }
 
 print_r($modulo);
?>

