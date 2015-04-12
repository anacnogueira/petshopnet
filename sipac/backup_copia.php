<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 17/12/2007                                     '
   Última Modificação: 15/10/2009                         '
   Página: backup_copia.php			                          '
---------------------------------------------------------*/
 $form        = "frm_backup";
 require_once("lib/configs.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("");
 $link   = "backup_listar.php";
  
 $backcup_file = "db_".$conn->banco."_".date('dmY').".sql";
 if(isset($_POST["btn_copia"]))
 {
   $download = $_POST["download"];
   //Coloca as informações do Banco de dados no arquivo
 $schema = "#ADMIN - ".EMPRESA."\n
# ".URL."\n
# \n
# database : ".$conn->banco."\n
# database for ".EMPRESA." \n
# DataBase Server: ".$conn->servidor."\n
# Copyright (c)" . date('Y') . " ".EMPRESA."\n
# \n
# Backup Date: " . date(PHP_DATE_TIME_FORMAT) . "\n\n";
            

 //Monta as tabelas
 $SQL = "SHOW TABLES";
 $result = $conn->sql($SQL);
 while($tables = mysql_fetch_array($result))
 {
  list(,$table) = each($tables);
  $schema  .= "DROP TABLE IF EXISTS ".$table.";\n";
  $schema .= "CREATE TABLE ".$table." (  \n";
  $table_lista = array();
	$SQL = "SHOW FIELDS FROM ". $table;
	$result2 = $conn->sql($SQL);
	while($fields = mysql_fetch_array($result2))
	{
   $table_lista[] = $fields['Field'];
	 $schema .= "  ".$fields["Field"]. "   ".$fields["Type"];

	 if(strlen($fields["Default"]) > 0)
	 $schema .= " default '" . $fields['Default'] . "'";
	 
	 if($fields["Null"]  != "YES")
	  $schema .= " not null";
	  
	 if(isset($fields["Extra"]))
	  $schema .= "   ".$fields["Extra"];
	  
	  $schema .= ",\n";

	}
	$schema = @ereg_replace(",\n$", '', $schema);
	
	//Adiciona as chaves;
  $index = array();
	$SQL = "SHOW KEYS FROM ".$table;
	$result3 = $conn->sql($SQL);
	while($keys = mysql_fetch_array($result3))
	{
	 $kname = $keys["Key_name"];
	 if(!isset($index[$kname])){
	  $index[$kname] = array('unique' => !$keys['Non_unique'],
                                     'columns' => array());
	 }
	 $index[$kname]['columns'][] = $keys['Column_name'];
 }
	while(list($kname,$info) = each($index))
	{
	  $schema .= ','."\n";
	  $columns = implode($info['columns'],", ");
	  if($kname == 'PRIMARY')
	   $schema .= ' PRIMARY KEY ('. $columns . ')';
	  elseif($info['unique'])
	   $schema .= ' UNIQUE '.$kname.' ('. $columns.')';
	  else
	   $schema .= ' KEY '. $kname .' ('.$columns.')';
	}
	 $schema .= "\n".");\n\n";
	 
	 // dump the data;
	 $SQL = "SELECT ".implode(',', $table_lista). " FROM ".$table;
	 $result4 = $conn->sql($SQL);
	 while($rows = mysql_fetch_array($result4))
	 {
	    $schema .= " INSERT INTO ".$table." ( ".implode(',',$table_lista).") VALUES (";
        reset($table_lista);
        while (list(,$i) = each($table_lista)) {
        if (!isset($rows[$i])) 
		{
            $schema .= 'NULL, ';
         } 
		 elseif (tep_not_null($rows[$i])) 
		 {
                $row = addslashes($rows[$i]);                
				
				$row = @ereg_replace("\n#", "\n".'\#', $row);
      
                $schema .= '\'' . $row . '\', ';
              } else {
                $schema .= '\'\', ';
              }
            }

            $schema = @ereg_replace(', $', '', $schema) . ');' . "\n";
	 }
 }
 if($download == 1) // Cria arquivo para download
 {
   header('Content-type: application/x-octet-stream');
   header('Content-disposition: attachment; filename=' . $backcup_file);
   echo $schema;

 }
 else
 {
 	$fp = fopen(DIR_BACKUP.$backcup_file,'w');
 	fputs($fp, $schema);
    fclose($fp);
    echo "<script>
     window.location = '".$link."'
    </script>";
 }
 $mensagem_log = "Arquivo de backup criado($backcup_file).";
 createLog('',$pageName,'',$mensagem_log);
 exit;
}
 require_once("topo.php");
 require_once("menu_lateral.php");
?>
 <div id="conteudo">
  <div class='titulo'><?= $titulo ?></div>
   <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 	<form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
	  <strong>Novo Backup</strong>
	   <div class='TableLista'>
 	     <p>
 	      <label>&nbsp;
 	      <span class='form'>Não interrompa ou feche a janela  durante o processo de backup. Ele pode levar alguns minutos </span></label>
 	     </p> 	     
 	     <p>
 	      <label><input name="download" type="checkbox" value="1" />
 	      <span class='form'>Apenas download </span></label>
 	     </p>
 	     <div class='BarraPag'>
 	      <input name="btn_copia" type="submit" value="Fazer Cópia" />
 	     </div> 
 	</div>
	
  </form>
 </div>
 <? require_once("rodape.php") ?>
