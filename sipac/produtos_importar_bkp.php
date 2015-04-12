<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 30/11/2009                                     '
   Última Modificação: 10/10/2009                         '
   Página: produtos_importar.php		                      '
---------------------------------------------------------*/
 $form        = "frm_produto";
 require_once("lib/configs.php");
 require_once("lib/Excel/reader.php");

 $titulo 			= $rotinaClass->menu_rotinas_titulo("");
 $link   			= "produtos_listar.php";
 if(isset($_POST["btn_salvar"]))
 {
   $arquivo      = $_FILES["arquivo"];

   $ext           = substr($arquivo["name"],-4);
   $novo_arquivo = DIR_PLANILHAS.substr($arquivo["name"],0,-4)."-".date("d-m-Y").$ext;

   //1. Copia o arquivo para a pasta planilhas
   if(!empty($arquivo["tmp_name"])){
     if(!copy($arquivo["tmp_name"],$novo_arquivo)) {
      $mensagem_log = "Não foi possível copiar o arquivo ". $arquivo["error"];
   }
     else
      $mensagem_log = "Arquivo copiado com sucesso ".$arquivo["name"]."-".date("d-m-Y");
   }
   else
   {
     echo "<p>O Arquivo excedeu o tamanho permitido de 50MB, favor enviar arquivo menor</p>";
     exit;
   }
   
   //Descompacta o arquivo zipado
    $zip = new ZipArchive;
    if ($zip->open($novo_arquivo) === TRUE)
    {
      $zip->extractTo(DIR_PLANILHAS);
      $file = $zip->getNameIndex(0);
      $zip->close();

    }
    else
    {
      echo 'failed';
      exit;
    }
    exit;
    echo "Exportação concluída";
    
    //Verifica se o arquivo exixte e o le
    if(file_exists(DIR_PLANILHAS.$file))
    {
       $data = new Spreadsheet_Excel_Reader();
       $data->setOutputEncoding('CPa25a');
       error_reporting(E_ALL ^ E_NOTICE);
       $data->read(DIR_PLANILHAS.$file);
       
       //3. Monta tabela da lista de produtos
       $lista_produtos  = "<p>Importação concluída, Produtos Carregados</p>";
       $lista_produtos .= "<table class='TableLista'>\n";
       $lista_produtos .= "  <tr class='cabecalho'>";
       $lista_produtos .= "    <td>Código</td>\n";
       $lista_produtos .= "    <td>Nome</td>\n";
       $lista_produtos .= "    <td>Preço</td>\n";
       $lista_produtos .= "   <td>Qtde</td>\n";
       $lista_produtos .= "  </tr>\n";
      
       for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++)
       {
         $produtos_modelo     = $data->sheets[0]['cells'][$i][1];
         $produtos_nome       = htmlspecialchars($data->sheets[0]['cells'][$i][2],ENT_QUOTES);
         $produtos_preco      = $data->sheets[0]['cells'][$i][6];
         $produtos_quantidade = $data->sheets[0]['cells'][$i][15];

         $lista_produtos .= "  <tr class='listaItem'>";
         $lista_produtos .= "    <td>".$produtos_modelo."</td>\n";
         $lista_produtos .= "    <td>".$produtos_nome."</td>\n";
         $lista_produtos .= "    <td>".number_format($produtos_preco,2,",","")."</td>\n";
         $lista_produtos .=  "   <td>".$produtos_quantidade."</td>\n";
         $lista_produtos .= " </tr>\n";

         //4. Insere/Altera produtos da tabela
         if(!empty($produtos_nome))
        {
          $sql = "REPLACE INTO produtos SET
          produtos_modelo = '".$produtos_modelo."',
          produtos_nome = '".$produtos_nome."',
          produtos_preco = '".$produtos_preco."',
          produtos_quantidade = '".$produtos_quantidade."'";
          $result = $conn->sql($sql);
          $mensagem_log .=  " <br />Produtos Importados com sucesso ".$novo_arquivo;
        }
       }
       $lista_produtos .= "</table>\n";

      //5. Apagar arquivo
      unlink(DIR_PLANILHAS.$file);

      $mensagem_log = " <br /> Arquivo excluído com sucesso ".DIR_PLANILHAS.$file;
      createLog('',$pageAtual,'',$mensagem_log);
    }
 }
 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post" enctype="multipart/form-data">
	 <strong>Selecione o arquivo</strong>
      <input name="arquivo" type="file" />
     <input name="btn_salvar" type="submit" value="Enviar" />
     <?if(!isset($lista_produtos)) { ?>
      <p><strong>Obs: </strong><br />
         O arquivo deve estar em formato .zip <br />
         O arquivo interno deve estar em formato .xls<br />
         O processamento pode demorar alguns minutos, não feche o browser até o fim do processo</p>
     <? } ?>
      <?= $lista_produtos ?>
  </form><br />
</div>
<? require_once("rodape.php") ?>
