<?php
   /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 07/10/2010                                     '
   Última Modificação: __/__/____                         '
   Página: auto_completar.php		                        '
---------------------------------------------------------*/
 $allowRotina  = "nao";
 require_once("configs.php");
  
 $conn 			 = new ConexaoMysql();
 
 $keyword = strtolower($_POST["keyword"]);
 $campo = $_POST["campo"];
 
 if(!empty($keyword) && !empty($campo)){
   $sql = "SELECT fornecedores_nome FROM fornecedores
   WHERE fornecedores_nome LIKE LOWER('".mysql_real_escape_string($keyword)."%')
   ORDER BY fornecedores_nome ASC";
   //echo $sql;
   $result = $conn->sql($sql);
   while($dados = mysql_fetch_array($result)){
     if (!get_magic_quotes_gpc()){
      $foundarr[] = stripslashes ($dados['fornecedores_nome']);
     } else {
      $foundarr[] = $dados['fornecedores_nome'];
     }
   }
   if(count($foundarr) > 0){
   ?>
     <div>
     <?php
       for($i =0;$i<count($foundarr);$i++){
     ?>
       <div class="listaItem" onmouseover="javascript:jQuery(this).addClass('listaItem_Over')"
       onmouseout="javascript:jQuery(this).removeClass('listaItem_Over')"
       onclick="found('<?=$campo ?>','<?= $foundarr[$i]; ?>');"><?= $foundarr[$i]; ?></div>
     <?
       }
     ?>

     </div>
   <?php
   }
 }
 

?>

