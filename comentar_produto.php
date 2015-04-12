<?
  //require_once("lib/configs.php");
  
  $campo = format_array($_POST);
  
  if(isset($_POST["btn_enviar_coment"]))
  {

    $sql = "INSERT INTO comentarios SET
    produtos_codigo	= '".mysql_real_escape_string($campo["produtos_codigo"])."',
	comentarios_nome   = '".mysql_real_escape_string($campo["comentarios_nome"])."',
    comentarios_email  = '".mysql_real_escape_string($campo["comentarios_email"])."',
    comentarios_cidade = '".mysql_real_escape_string($campo["comentarios_cidade"])."',
    comentarios_estado = '".mysql_real_escape_string($campo["comentarios_estado"])."',
    comentarios_titulo = '".mysql_real_escape_string($campo["comentarios_titulo"])."',
    comentarios_texto  = '".mysql_real_escape_string($campo["comentarios_texto"])."',
	comentarios_status = 'N',
    comentarios_data   = NOW(),
	comentarios_ip     = '".$_SERVER['REMOTE_ADDR']."',
    comentarios_nota   = '".(!empty($campo["comentarios_nota"])? mysql_real_escape_string($campo["comentarios_nota"]) : 0)."'";
    $result = $conn->sql($sql);
    
    echo "Comentário Enviado - Aguardando Aprovação";
    exit;
  }

  if(isset($_SESSION["xxClientesIDxx"]))
  {
    //Seo cliente estiver logado, colocar os dados dele no form
    $sql = "SELECT clientes_nome,clientes_email,clientes_cidade,clientes_uf
    FROM clientes cli
    INNER JOIN  clientes_end ce ON ce.clientes_id = cli.clientes_id
    WHERE cli.clientes_id = '".$_SESSION["xxClientesIDxx"]."' AND clientes_pri=1";
    $result = $conn->sql($sql);
    $cliente = mysql_fetch_object($result);

  }
?>

<div id="div_comentario" class="div_float">
 <div id="comentario_handle"> <a href="#" class="close"><img src="<?= DIR_IMAGENS ?>btn_fechar.gif" alt='Fechar' title='Fechar' /></a> </div>
 <h1>Escrever Coment&aacute;rio</h1> 
  <form id="frm_comentario" action="#" method="post">
 	<p class='alert'>Campos com * s&atilde;o de preenchimento obrigat&oacute;rio</p>
	 <p>
       <label for="comentarios_nota">Nota:
       <span class='form'><?= str_replace("class='star'","class='star no_ajax'",$star) ?></span></label>
     </p>
     
	  <p>
       <label for="comentarios_nome">Nome: <span class="alert">*</span>
       <span class='form'><input name="comentarios_nome" type="text" size="30" value="<?=$cliente->clientes_nome ?>" /></span></label>
     </p>
     <p>
       <label for="comentarios_email">E-mail: <span class="alert">*</span>
        <span class='form'><input name="comentarios_email" type="text" size="30" value="<?=$cliente->clientes_email ?>" /></span></label>
     </p>
     <p>
      <label for="comentarios_cidade">Cidade: <span class="alert">*</span>
      <span class='form'><input name="comentarios_cidade" type="text" size="30" value="<?=$cliente->clientes_cidade ?>"/></span></label>
	  <p>
	   <label for="comentarios_estado">Estado: <span class="alert">*</span>
	   <span class='form'><select name="comentarios_estado">
        <?= fct_array_foreach(estados2(),''); ?>
       </select></span></label>
	  </p>
	<p>
	  <label for="comentarios_titulo">T&iacute;tulo
	  <span class='form'><input name="comentarios_titulo" type="text" size="45" /></span></label>
	</p>	
	<p>
	  <label for="comentarios_texto">Coment&aacute;rio: <span class="alert">*</span>
	  <span class='form'><textarea name="comentarios_texto" rows="10" cols="41"></textarea></span></label>
	</p>

  <p style='clear:both;margin-top:180px'><input name="btn_enviar_coment" type="submit" src="banco_imagens/btn_enviar.gif" class="noBorder btn" value="Enviar" /></p>
   <input name="produtos_codigo" type="hidden" value="<?=$produtos_codigo ?>" />
   <input name="comentarios_nota_valor" type="hidden" value="<?=$nota ?>" />

  </form>
</div>