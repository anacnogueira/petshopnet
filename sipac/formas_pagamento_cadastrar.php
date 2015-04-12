<?
  /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 20/10/2009                                     '
   Última Modificação: __/__/____                         '
   Página: formas_pagamento_cadastrar.php		                '
---------------------------------------------------------*/
  $form        = "frm_pagamento";
  require_once("lib/configs.php");
  $titulo 		= $rotinaClass->menu_rotinas_titulo("");
  $link  		= "formas_pagamento_listar.php";
  
  
 if(isset($_POST["btn_salvar"]))
 {
   $formas_pagamento_desc          = $_POST["formas_pagamento_desc"];
   $formas_pagamento_vezes         = $_POST["formas_pagamento_vezes"];
   $formas_pagamento_juros         = !empty($_POST["formas_pagamento_juros"]) ? $_POST["formas_pagamento_juros"] : 0;
   $formas_pagamento_vezes_juros   = !empty($_POST["formas_pagamento_vezes_juros"]) ? $_POST["formas_pagamento_vezes_juros"] : 0;
   $formas_pagamento_vezes_valor   = !empty($_POST["formas_pagamento_vezes_valor"]) ? $_POST["formas_pagamento_vezes_valor"] : 0;
   $formas_pagamento_img           = $_FILES["formas_pagamento_img"];
   $formas_pagamento_status        = $_POST["formas_pagamento_status"];


   $sql = "INSERT INTO formas_pagamento SET
   formas_pagamento_desc = '$formas_pagamento_desc',
   formas_pagamento_vezes = '$formas_pagamento_vezes',
   formas_pagamento_juros = '$formas_pagamento_juros',
   formas_pagamento_vezes_juros = '$formas_pagamento_vezes_juros',
   formas_pagamento_vezes_valor ='$formas_pagamento_vezes_valor',
   formas_pagamento_status = '$formas_pagamento_status'";
   $result = $conn->sql($sql);
   $sels   = $conn->id();
   
   
   //Cadastrar imagem, caso exista
   if(!isset($formas_pagamento_img["name"]) or !$formas_pagamento_img)
   {
	  $pagamento_imagem  = "";
	  $mensagem_log      = "Variavel de imagem vazia.";
  }
	
   else
   {
	  $ext 			   =  substr($formas_pagamento_img["name"],-4);
	 $name             = retira_acentos($formas_pagamento_desc)."_".$sels;
	 $pagamento_imagem = $name.$ext;

    
	if(!copy($formas_pagamento_img["tmp_name"],DIR_PAGAMENTOS.$pagamento_imagem))
       $mensagem_log = "Aconteceu um erro durante o envio da imagem<br />";
    
    else
    {
	  //Atualiza o produto para inserir a imagem
	  $SQL = "UPDATE formas_pagamento SET formas_pagamento_img='$pagamento_imagem' WHERE formas_pagamento_id='$sels'";
	  $result = $conn->sql($SQL);
	  $mensagem_log = "Imagem enviada com sucesso<br />";
	}    
   } 
   $mensagem_log = "Forma de pagamento cadastrado com sucesso($sels).";
   createLog('',$pageAtual,'',$mensagem_log);
   
   header("location: $link");
 }
 require_once("topo.php");
 require_once("menu_lateral.php");
?>
 <div id="conteudo">
  <script type='text/javascript' src='js/pagamentos.js'></script>
  <div class='titulo'><?= $titulo ?></div>
  <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
  <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post" enctype="multipart/form-data">
    <table class="TableLista">
      <tr>
        <td class='legenda' style='width:200px'><label for="formas_pagamento_desc">Descrição:</label></td>
        <td><input name="formas_pagamento_desc" type="text" size="50" /></td>
      </tr>
      <tr>
        <td class='legenda'><label for="formas_pagamento_vezes">N° de Vezes:</label></td>
        <td><input name="formas_pagamento_vezes" type="text" size="2" maxlength="2" class='onlyNumbers' /></td>
      </tr>
      <tr>
        <td class='legenda'><label for="formas_pagamento_juros">Juros:</label></td>
        <td><input name="formas_pagamento_juros" type="text" size="10" maxlength="10" /></td>
      </tr>
      <tr>
        <td class='legenda'><label for="formas_pagamento_vezes_juros">Juros a partir da parcela:</label></td>
        <td><input name="formas_pagamento_vezes_juros" type="text" size="2" maxlength="2" class='onlyNumbers' /></td>
      </tr> 
	  <tr>
        <td class='legenda'><label for="formas_pagamento_vezes_valor">Valor minimo para parcelamento:</label></td>
        <td><input name="formas_pagamento_vezes_valor" type="text" size="10" maxlength="10" /></td>
      </tr>  
      <tr>
        <td class='legenda'><label for="formas_pagamento_img">Img:</label></td>
        <td><input name="formas_pagamento_img" type="file" size="50" /></td>
      </tr>
      <tr>
        <td class='legenda'><label for="formas_pagamento_status">Status:</label></td>
        <td>
		  <input name="formas_pagamento_status" type="radio" value="S" class='checkbox' checked="checked" /> Ativo
          <input name="formas_pagamento_status" type="radio" value="N" class='checkbox' /> Inativo
		</td>
      </tr>
      <tr class='BarraPag'>
        <td colspan="2"><input name="btn_salvar" type="submit" value="salvar" /></td>
      </tr>
    </table>
  </form>
 </div>
 <? require_once("rodape.php") ?>
