<?
  $title       = "Escolha o endereço de entrega";
  require_once("lib/configs.php");
  require_once("lib/sessao.php");

  $acao                  = $_POST["acao"];
  $clientes_end_id       = $_POST["clientes_end_id"];
  $clientes_end_nome     = $_POST["clientes_end_nome"];
  $clientes_logradouro   = $_POST["clientes_logradouro"];
  $clientes_numero       = $_POST["clientes_numero"];
  $clientes_complemento  = $_POST["clientes_complemento"];
  $clientes_bairro       = $_POST["clientes_bairro"];
  $clientes_cep          = $_POST["clientes_cep"];
  $clientes_cidade       = $_POST["clientes_cidade"];
  $clientes_uf           = $_POST["clientes_uf"];
  $clientes_pri          = (!empty($_POST["clientes_pri"])?$_POST["clientes_pri"]:0);

  if(empty($acao) or $acao == "cadastrar")
  {
    $h1 = "Cadastrar Novo";
    $acao = "cadastrar";
  }
  else
   $h1 = "Alterar";
    //echo $acao;
   switch($acao)
   {
     case "cadastrar":
      //Selecionar os endereços
      $sql = "SELECT clientes_end_id,clientes_end_nome,clientes_logradouro, clientes_numero, clientes_complemento,clientes_cep,
      clientes_bairro,clientes_cidade, clientes_uf, clientes_pais
      FROM clientes_end WHERE clientes_id ='".$_SESSION["xxClientesIDxx"]."'";
      $result = $conn->sql($sql);
      $cols = 2;
      $x    = 1;

      $lista = "<table border='0' cellspacing='0' style='width:100%'>\n";
      while($end = mysql_fetch_object($result))
      {
        if($x==1)
         $lista .= "  <tr>\n";

         $lista .= "    <td>".$end ->clientes_end_nome."<br/>\n".
         $end->clientes_logradouro.", ".$end->clientes_numero." ".$end->clientes_complemento." ".$end->clientes_bairro."<br />
         CEP: ".$end->clientes_cep." - ".$end->clientes_cidade." - ".$end->clientes_uf." - ". $end->clientes_pais.
         "<br /><div class='btns_end'>&nbsp;<a href='fechar_pedido.php?clientes_end_id=".$end->clientes_end_id."&amp;acao=alterar'><img src='banco_imagens/btn_editar_end.gif' alt='Editar' border='0' /></a>
         &nbsp;<a href='fechar_pedido_pagto.php?clientes_end_id=".$end->clientes_end_id."'><img src='banco_imagens/btn_usar_end.gif' alt='Usar Este Endereço' border='0' /></a></div>
         <br /><br /></td>\n";

         if($x == $cols)
         {
           $lista .= "  </tr>\n";
           $x = 0;
         }
         $x++;

         if($x != $cols and $x != 1)
         {
           $lista .= "    <td>&nbsp;</td>";
           $lista .= "  </tr>";
           $x = 0;
         }
      }
      $lista .= "</table>\n";
     break;
     
     case "cadastrar2":
      //Cadastra e vai para fechar_pedido_pagto
      $sql = "INSERT INTO clientes_end SET
      clientes_id          = '". $_SESSION["xxClientesIDxx"]."',
      clientes_end_nome    = '".mysql_real_escape_string($clientes_end_nome)."',
      clientes_logradouro  = '".mysql_real_escape_string($clientes_logradouro)."',
      clientes_numero      = '".mysql_real_escape_string($clientes_numero)."',
      clientes_complemento = '".mysql_real_escape_string($clientes_complemento)."',
      clientes_bairro      = '".mysql_real_escape_string($clientes_bairro)."',
      clientes_cep         = '".mysql_real_escape_string($clientes_cep)."',
      clientes_cidade      = '".mysql_real_escape_string($clientes_cidade)."',
      clientes_uf          = '".mysql_real_escape_string($clientes_uf)."',
      clientes_pri         = '".mysql_real_escape_string($clientes_pri)."'";
      $result = $conn->sql($sql);
      $clientes_end_id = $conn->id();

      //Atualizar endereço principal
      if($clientes_pri == 1)
      {
         $sql = "UPDATE clientes_end SET clientes_pri=0 
         WHERE clientes_end_id != '".mysql_real_escape_string($clientes_end_id)."' AND clientes_id = '".$_SESSION["xxClientesIDxx"]."'";
         $result = $conn->sql($sql);
      }
      header("location: fechar_pedido_pagto.php?clientes_end_id=$clientes_end_id");
     break;

     case "alterar":
     $sql = "SELECT * FROM clientes_end 
     WHERE clientes_id = '".$_SESSION["xxClientesIDxx"]."' AND clientes_end_id ='".mysql_real_escape_string($clientes_end_id)."'";
     $result = $conn->sql($sql);
     $totCampos = mysql_num_fields($result);

     while($dados = mysql_fetch_array($result))
     {
       for($i = 0;$i < $totCampos;$i++)
       {
          $meta   = mysql_fetch_field($result, $i);
          $campo  =  $meta->name;
          $$campo = $dados[$i];
       }
     }
     break;
     
     case "alterar2":

     $sql = "UPDATE clientes_end SET
     clientes_end_nome     = '".mysql_real_escape_string($clientes_end_nome)."',
     clientes_logradouro   = '".mysql_real_escape_string($clientes_logradouro)."',
     clientes_numero       = '".mysql_real_escape_string($clientes_numero)."',
     clientes_complemento  = '".mysql_real_escape_string($clientes_complemento)."',
     clientes_bairro       = '".mysql_real_escape_string($clientes_bairro)."',
     clientes_cep          = '".mysql_real_escape_string($clientes_cep)."',
     clientes_cidade       = '".mysql_real_escape_string($clientes_cidade)."',
     clientes_uf           = '".mysql_real_escape_string($clientes_uf)."'
     WHERE clientes_end_id = '".mysql_real_escape_string($clientes_end_id)."' AND clientes_id = '".$_SESSION["xxClientesIDxx"]."'";
     $result = $conn->sql($sql);

     header("location: fechar_pedido.php?acao=cadastrar");

   }
   
   if(isset($_GET["PHPSESSID"]))
    $_SESSION["sessao"] = $_GET["PHPSESSID"];
    
    
  require_once("topo.php");
  require_once("login_topo.php");
  require_once("busca.php");
  //require_once("categorias.php");
  //require_once("parceiros.php");
?>
<!-- Fechar Pedido -->
 <script type='text/javascript' src='js/jquery.numeric.js'></script>
 <script type='text/javascript' src='js/cadastro.js'></script>
<div id="conteudo" class="interna">
<span class='back'><a href="#" onclick="history.go(-1)"><img src="banco_imagens/btn_voltar.gif" alt="Voltar" border="0" /></a></span>
 <?= progressoCompra($pageAtual) ?>
  <form id="frm_cadastro" action="fechar_pedido.php?acao=<?=$acao ?>2" method="post">
    <input name="clientes_end_id" type="hidden" value="<?=$clientes_end_id ?>" />
    <input name="cep_destino" type="hidden" value="<?=$cep_destino ?>" />

   <?
     if ($acao == "cadastrar")
     {
        echo "<h1>$title</h1>\n";
        echo $lista;
     }
   ?>

   <h1><?= $h1 ?> endereço de entrega </h1><br />
    <div class="alert">Campos com * são de preenchimento obrigatório</div>
    <div class='bordaForm'>
      <p>
        <label for="clientes_end_nome">Nome:
        <span class='form'><input name="clientes_end_nome" type="text" size="40"  value="<?=$clientes_end_nome ?>" /></span></label>
      </p>
      <p>
        <label for="clientes_logradouro">Endereço:<span class="alert">*</span>
        <span class='form'><input name="clientes_logradouro" type="text" size="26" value="<?=$clientes_logradouro ?>" />
         N°<span class="alert">*</span>
         <input name="clientes_numero" type="text" size="4" value="<?=$clientes_numero ?>" /></span></label>
     </p>
     <p>
        <label for="clientes_complemento">Complemento:
        <span class='form'><input name="clientes_complemento" type="text" size="40"  value="<?=$clientes_complemento ?>" /></span></label>
     </p>
     <p>
       <label for="clientes_bairro">Bairro:<span class="alert">*</span>
       <span class='form'><input name="clientes_bairro" type="text" size="40"  value="<?=$clientes_bairro ?>" /></span></label>
     </p>
     <p>
       <label for="clientes_cep">CEP:<span class="alert">*</span>
       <span class='form'><input name="clientes_cep" type="text" size="8" maxlength="8"  value="<?=$clientes_cep ?>" class="onlyNumbers" />
       <span class="descCampo"> somente números</span></span></label>
     </p>
     <p>
       <label for="clientes_cidade">Cidade:<span class="alert">*</span>
       <span class='form'><input name="clientes_cidade" type="text" size="40" value="<?=$clientes_cidade ?>" /></span></label>
     </p>
     <p>
       <label for="clientes_uf">Estado:<span class="alert">*</span>
       <span class='form'><select name="clientes_uf">
       <?= fct_array_foreach(estados2(),$clientes_uf); ?>
       </select></span></label>
      </p>
     <p>
       <label for="clientes_pri"><input name="clientes_pri" type="checkbox"  class="noBorder" value="1" <? if($clientes_pri == "1") {?>checked="checked" <?}?> />
       <span class='form'>Principal</span></label></p>
     </div><br />
     <input name="btn_salvar" type="image" src="banco_imagens/btn_enviar.gif" class="noBorder btn" value="Enviar" />
 </form>
</div>
<? require_once("rodape.php"); ?>

