<?
  /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 18/12/2007                                     '
   Última Modificação: 16/10/2009                         '
   Página: backup_resturar_local.php                      '
---------------------------------------------------------*/
 $form        = "frm_backup";
 require_once("lib/configs.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("");
 $link   = "backup_listar.php";

 $arquivoTemp        = $_FILES["arquivo"]["tmp_name"];
 $arquivoName        = $_FILES["arquivo"]["name"];
 $ext                = substr($arquivoName,-3);

 $backcup_file = "db_".$conn->banco."_".date('dmY').".sql";
 
 if(isset($_POST["btn_restaurar"]))
 {
   if(strtolower($ext) != "sql") // Não pode ser baixado
   {
      echo "<script>
      alert('Extensão não permitida - $ext');
      window.location = '".$link."';
      </script>";
      exit;
    }

    else
    {

      if(!copy($arquivoTemp,BACKUP_DIR.$backcup_file))
        $mensagem_log = "Aconteceu um erro durante o envio do arquivo<br />";
        
    $restore_file = BACKUP_DIR.$backcup_file;
    if(file_exists($restore_file))
    {
      $extension = substr($backcup_file, -3);
      if($extension !="sql")
      {
         echo "Não aceito";
         exit;
      }
      $restore_from = $restore_file;
      $remove_raw = false;

      if (isset($restore_from) && file_exists($restore_from) && (filesize($restore_from) > 15000))
	  {
        $fd = fopen($restore_from, 'rb');
        $restore_query = fread($fd, filesize($restore_from));
        fclose($fd);
      }
      require_once("backup_restaurar.php");
      @unlink($restore_file);
      $mensagem_log = "Arquivo de backup local restaurado com sucesso.($backcup_file).";
 		  createLog('',$pageAtual,'',$mensagem_log);
 		  echo "<script>
 					window.location = '".$link."';
 				</script>";
     }
   }
}
 require_once("topo.php");
 require_once("menu_lateral.php");
?>
  <div id="conteudo">
  <script type='text/javascript' src='js/backup.js'></script>
  <div class='titulo'><?= $titulo ?></div>
   <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 	<form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post" enctype="multipart/form-data">
 	  <div class="TableLista">
 	    <p>
          <label for="arquivo">Arquivo:
          <span class='form'><input name="arquivo" type="file" size="50" /></span></label>
        </p>
		<p> Não interrompa ou feche a janela  durante o processo de restauração. Ele pode levar alguns minutos</p>
 	    <p> Quanto maior o arquivo de backup, maior será a demora no processamento!</p>
        <p>O arquivo deve ser necessariamente um arquivo texto de extensão sql.</p>
 	    <div class='BarraPag'><input name="btn_restaurar" type="submit" value="Restaurar" /></div> 	     	
		 
 	  </div>
  </form>
 </div>
 <? require_once("rodape.php") ?>
