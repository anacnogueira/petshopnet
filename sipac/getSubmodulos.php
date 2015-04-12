<?
  $allowSession = "nao";
  $allowRotina  = "nao";
  require_once("lib/configs.php");
  
  $modulos_id = $_REQUEST["modulos_id"];
  $sql = "SELECT submodulos_id, submodulos_nome FROM submodulos
  WHERE modulos_id = '$modulos_id'";
  $result = $conn->sql($sql);
  $rsCount = mysql_num_rows($result);
  $i = 1;
  if(mysql_num_rows($result) > 0) {
?>
  [
    {"value":"0","caption":"Selecione"},
<?php  while($dados = mysql_fetch_array($result)) { ?>
     {"value":"<?=$dados["submodulos_id"] ?>","caption":"<?=html_entity_decode($dados["submodulos_nome"]) ?>"}<?php echo ($i != $rsCount ? "," : "")  ?>
<?php
    $i++;
  } ?>
   ]
<? } ?>