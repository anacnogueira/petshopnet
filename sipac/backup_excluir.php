<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Cria��o 18/12/2007                                     '
   �ltima Modifica��o: 16/10/2009                         '
   P�gina: backup_excluir.php		                          '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $link = "backup_listar.php";
 $sels = $_REQUEST["sels"];

 $arraSels  = implode(",",$sels);
 
 if(is_array($sels))
 {
  if($sels[0] == 'on')
  	array_shift($sels);
  	
  foreach($sels as $file)
  {
   if(file_exists(DIR_BACKUP.$file))
    unlink(DIR_BACKUP.$file);
  }
}

$mensagem_log = "Arquivo(s) de backup (s) exclu�do(s) com sucesso($arraSels).";
createLog('',$pageAtual,'',$mensagem_log);
$conn->fechar();
header("location: $link");
?>
