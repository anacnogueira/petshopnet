<?php
/*--------------------------------------------------------'
 	 Criado por Ana Claudia Nogueira                        '
   Criação 18/06/2010                                     '
   Última Modificação: __/__/____                         '
   Página: todos_imagens.php                              '
---------------------------------------------------------*/
  $allowRotina  = "nao";
  $allowSession = "nao";
  require_once("configs.php"); 
  
  //2. Apagar imagens não verificadas com datas antigas
    //2.1 Excluir as imagens viuvas na pasta 
    if($folder=opendir("../".DIR_PRODUTOS))
    {
      $cont     = 1;
      $excluido = 0;
      while(($arquivo=readdir($folder)) !== false or $arquivo == "Thumbs.db")
      {
          if($arquivo == "." or $arquivo == "..") continue;
          if($arquivo != "Thumbs.db")
          {
              if(strpos($arquivo,".thumb") === false){
                $sql = "SELECT produtos_imagem FROM produtos_imagens WHERE produtos_imagem = '". $arquivo. "'";
                $result = $conn->sql($sql);
                //echo $sql ." - ". mysql_num_rows($result)."<br />";
                
                if(mysql_num_rows($result) == 0 ) { // Imagem viúva, apaga
                  //Apaga imagem grande
                  if(file_exists("../".DIR_PRODUTOS.$arquivo)){
                    unlink("../".DIR_PRODUTOS.$arquivo);
                    $excluido++;   
                  }
                  
                  //Apaga thumb
                  $ext = substr($arquivo,-4);
                  $name = left($arquivo,(strlen($arquivo)-strlen($ext)));
                  $thumb = $name.".thumb".$ext;   
                  if(file_exists("../".DIR_PRODUTOS.$thumb)){
                    unlink("../".DIR_PRODUTOS.$thumb);
                    $excluido++;   
                  }                  
                }                
              }  
            $cont++;  
          }
      }
      closedir($folder);
    }
   if($excluido > 0){ 
        $mensagem_log = "Mensagem automática - Excluídas " .$excluido. " imagens viúvas na pasta de imagens";
        createLog('','','TO DOS',$mensagem_log);
    }  
   
  // 2.2 Excluir as imagens não verificadas na pasta
  $sql = "SELECT produtos_imagem FROM produtos_imagens WHERE data < CURDATE() AND verified = 'N'";
  $result = $conn->sql($sql);
  $excluido = 0;
  while($arq = mysql_fetch_array($result)){
    //Apaga imagem grande
    if(file_exists("../".DIR_PRODUTOS.$arq["produtos_imagem"])){
      unlink("../".DIR_PRODUTOS.$arq["produtos_imagem"]);
      $excluido++;
    }
    //Apaga thumb
    $ext = substr($arq["produtos_imagem"],-4);
    $name = left($arq["produtos_imagem"],(strlen($arq["produtos_imagem"])-strlen($ext)));
    $thumb = $name.".thumb".$ext;   
    if(file_exists("../".DIR_PRODUTOS.$thumb)){
      unlink("../".DIR_PRODUTOS.$thumb);
      $excluido++;   
    }       
  }
  if($excluido > 0){ 
    $mensagem_log = "Mensagem automática - Excluídas " .$excluido. " imagens não verificadas na pasta de imagens";
    createLog('','','TO DOS',$mensagem_log);
  }
    
  // 2.3 Excluir as imagens não verificadas na tabela
 $sql = "DELETE FROM produtos_imagens WHERE data < CURDATE() AND verified = 'N'";
 $result = $conn->sql($sql);
 $excluido = mysql_affected_rows();
 if($excluido > 0){ 
  $mensagem_log = "Mensagem automática - Excluídos " .$excluido. " registros na tabela de imagens";
  createLog('','','TO DOS',$mensagem_log);
  }
?>  