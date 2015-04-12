<?php
  $allowRotina  = "nao";
  require_once("configs.php");
  
  $acao = $_POST['acao'];
  $txt = "";
  if(!empty($acao)){
    switch($acao){
      case 'upload': 
        $produtos_codigo  = $_POST["produtos_codigo"];
        //1. Nomeia a imagem
        //1.1 Verifica se ja existem imagens cadastradas para esse produto
        //Para gerar uma chave
        $sql     = "SELECT COUNT(*)+1 FROM produtos_imagens
        WHERE produtos_codigo = '".$produtos_codigo."'";
        $result2 = $conn->sql($sql);
        $number  = mysql_result($result2,0,0);

        $ext            = substr(strtolower($_FILES['myfile']['name']),-4);
   	  	$name           = "prod_".$produtos_codigo."_".$number;
        $uploadfile     = "../".DIR_PRODUTOS .$name.$ext;
        
        //2. Copia imagem grande para a pasta
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
          $txt = $name.$ext;
          //Salva o arquivo no banco
          $sql = "INSERT INTO produtos_imagens SET
          produtos_codigo='".$produtos_codigo."',
          produtos_imagem='".$txt."',
          data = NOW(),
          verified = 'N'";
          $conn->sql($sql);
        } else {
          // WARNING! DO NOT USE "FALSE" STRING AS A RESPONSE!
          // Otherwise onSubmit event will not be fired
          $txt = "error";
        }  
          //3. Gera thumbnail
          $quality         = 95;
          $size  		       = 100;
        
          $extFunc = "";
          if (strtoupper($ext) == ".JPG")
            $extFunc = "Jpeg";
          elseif (strtoupper($ext) == ".GIF")
            $extFunc = "Gif";
          elseif (strtoupper($ext) == ".PNG")
            $extFunc = "Png";
          else
            echo "erro";
          if(!empty($extFunc)){
            $CriarImagemDe = "ImageCreateFrom" . $extFunc;
            
            $img = $CriarImagemDe($uploadfile);
             
            $wi       = ImageSX($img);
            $he       = ImageSY($img);
            $x        =  ($wi * $size)/ $he;
            $y        =   $size;
            $img_nova = imagecreatetruecolor($x,$y);
            imagecopyresampled($img_nova, $img, 0, 0, 0, 0, $x, $y, $wi, $he);

            $Image = "Image" . $extFunc;
            $thumb = "../". DIR_PRODUTOS . $name .".thumb". $ext;
            $Image($img_nova, $thumb, $quality);

            //Destruimos o cache da imagem para liberar uma nova thumb
            ImageDestroy($img_nova);
            ImageDestroY($img);
          
            $txt .= ",".$thumb;
          }
          
        echo $txt;
      break;
	  
      case 'exclui':
        
        $arquivo = $_REQUEST["arquivo"];
        //1. Apaga imagem grande
        if(file_exists("../".DIR_PRODUTOS . $arquivo)){
          unlink("../".DIR_PRODUTOS . $arquivo);
          echo "Apagou";
        }
        else
         echo "Não existe";
         
        //2.Apaga a thumb
        $ext = substr($arquivo,-4);
        $name = left($arquivo,(strlen($arquivo)-strlen($ext)));
        $thumb = $name.".thumb".$ext;
        if(file_exists("../".DIR_PRODUTOS . $thumb)){
          unlink("../".DIR_PRODUTOS . $thumb);
        }
        
        //3. Apaga da tabela temporaria e da tabela produtos_imagens(se houver)
        $sql = "DELETE FROM produtos_imagens WHERE produtos_imagem = '" . $arquivo . "'";
        $conn->sql($sql);       
        break;	
      default:
        echo 'error';
			break;
    } // Fim switch
  } // Fim if
?>