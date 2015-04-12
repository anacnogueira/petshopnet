<?php
  require_once("lib/configs.php");
  require_once("lib/calculaFrete_string.php");
  
  $erro = "";
  $cep_destino =  $_POST["cep_destino"];
    
  if(isset($_POST["btn_envia_prazo"]) or isset($_POST["btn_envia_prazo_x"])){
    //Validação de erros
    if(empty($cep_destino) || !is_numeric($cep_destino))
      $erro = "php - Informe o CEP corretamente php<br />";



    if(!empty($erro)){
      echo $erro;
      exit();
    }
    else{
	  //Pega peso e verifica se é frete grátis
	  

     // $frete = calcula_frete($cep_destino,$peso_frete,$frete_gratis);
     // if($frete["Erro"]  <> 0) { //Erro retornado, exibir
      //  echo "Erro ".$frete["Erro"] . ": ". $frete["MsgErro"];
      //}
      //else {
        echo "<p>Prazo de entrega: ".$frete["PrazoEntrega"]." dias úteis</p>";
        echo "<p>Valor frete: R$".$frete["Valor"]."</p>";
        echo "<p><a href='calcula_prazo.php>Voltar</a></p>";
      //}
    }
  }  
?>
<div id='div_prazo' class="div_float">
  <div id="prazo_handle"> <a href="#" class="close"><img src="<?= DIR_IMAGENS ?>btn_fechar.gif" alt='Fechar' title='Fechar' /></a> </div>
  <h1>Calcular prazo de entrega</h1>

  <form id='frm_prazo' action='#' method='post'>
	<p class='alert'>Campos com * s&atilde;o de preenchimento obrigat&oacute;rio</p>
    <p>
       <label for="cep_destino">CEP: <span class="alert">*</span>
       <span class='form'><input name="cep_destino" id="cep_destino" type="text" size="30" value="" /></span></label>
     </p>
    <input type='hidden' name='produtos_codigo' value='<?=$produtos_codigo ?>' />
	<p style='clear:both;margin-top:80px'><input name="btn_envia_prazo" type="image" src="banco_imagens/btn_enviar.gif" class="noBorder btn" value="Enviar" /></p>
  </form>  
</div>