<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: 15/10/2009                         '
   Página: clientes_cadastrar.php  	                      '
---------------------------------------------------------*/
 $form        = "frm_cliente";
 require_once("lib/configs.php");
 $titulo 	    = $rotinaClass->menu_rotinas_titulo("");
 $link 		    = "clientes_listar.php";
 $sels        = $_REQUEST["sels"];
 
 if(is_array($sels)) $sels = $sels[0];
 
 if(isset($_POST["btn_salvar"]))
 {
  $clientes_nome   		    = $_POST["clientes_nome"];
  $clientes_sobrenome     = $_POST["clientes_sobrenome"];
  $clientes_sexo   		    = $_POST["clientes_sexo"];
  $clientes_cpf           = $_POST["clientes_cpf"];
  $clientes_rg   		      = $_POST["clientes_rg"];
  $clientes_nascimento    = fct_conversorData($_POST["clientes_data_nascimento"],2);
  $clientes_mes   		    = $_POST["clientes_mes"];
  $clientes_ano           = $_POST["clientes_ano"];
  $clientes_email   	    = $_POST["clientes_email"];
  $clientes_senha         = $_POST["clientes_senha"];
  $clientes_telefone   		= $_POST["clientes_telefone"];
  $clientes_celular   		= $_POST["clientes_celular"];
  $clientes_logradouro    = $_POST["clientes_logradouro"];
  $clientes_numero   	    = $_POST["clientes_numero"];
  $clientes_complemento   = $_POST["clientes_complemento"];
  $clientes_bairro   	    = $_POST["clientes_bairro"];
  $clientes_cep           = $_POST["clientes_cep"];
  $clientes_cidade   	    = $_POST["clientes_cidade"];
  $clientes_uf            = $_POST["clientes_uf"];
  $clientes_newsletter   	= $_POST["clientes_newsletter"];


  //1. Alterar dados do cliente
   $sql = "UPDATE clientes SET
   clientes_nome          = '$clientes_nome',
   clientes_sobrenome     = '$clientes_sobrenome',
   clientes_sexo          = '$clientes_sexo',
   clientes_rg            =  '$clientes_rg',
   clientes_cpf           = '$clientes_cpf',
   clientes_nascimento    = '$clientes_nascimento',
   clientes_email         = '$clientes_email',
   clientes_telefone      = '$clientes_telefone',
   clientes_celular       = '$clientes_celular',
   clientes_senha         = '".sha1($clientes_senha)."',
   clientes_newsletter    = '$clientes_newsletter'
   WHERE clientes_id='$sels'";
   $result = $conn->sql($sql);

    
  //2. Alterar dados de endereço do cliente
  $sql = "UPDATE clientes_end SET
  clientes_logradouro   = '$clientes_logradouro',
  clientes_numero       = '$clientes_numero',
  clientes_complemento  = '$clientes_complemento',
  clientes_bairro       = '$clientes_bairro',
  clientes_cidade       = '$clientes_cidade',
  clientes_uf           = '$clientes_uf',
  clientes_pais         = 'Brasil',
  clientes_cep          = '$clientes_cep'
  WHERE clientes_id='$sels'";
  $result = $conn->sql($sql);
  
  //3. Altera data de modificação do cliente
  $sql = "UPDATE clientes_historico SET
  clientes_historico_conta_ultima_modificacao = NOW()
  WHERE clientes_id='$sels'";
  $result = $conn->sql($sql);
  
  $mensagem_log = "Cliente Alterado com sucesso($sels).";
  createLog('',$pageAtual,'',$mensagem_log);

  //Seo usuário alterou a senha
  if(!empty($clientes_senha))
  {

     $from    ='no-reply@'.str_replace("http://www.","",URL);
     $to      = $clientes_email;
     $toName  = $clientes_nome;     
     $subject = "Confirmação de alteração de senha - ".EMPRESA;
     $msg     = "<h1>Confirmação de alteração</h1>";
     $msg    .= "<em>$clientes_nome</em><br />";
     $msg .= "<p>Segue abaixo seu e-mail e senha. Para sua conveniência,
     guarde-os em um lugar seguro. Eles são as chaves para você acessar seus dados e realizar suas compras.</p>";
     $msg .= "<strong>E-mail: </strong>$clientes_email<br />";
     $msg .= "<strong>Senha: </strong>$clientes_senha<br />";
     fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg);
  }

  header("location: $link");
 }
 else
 {
   $sql  = "SELECT * FROM clientes cli
          INNER JOIN clientes_end ce ON ce.clientes_id = cli.clientes_id 
          WHERE cli.clientes_id = '$sels' AND ce.clientes_pri = 1";
          //echo $SQL;
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
   
 }
 require_once("topo.php");
 require_once("menu_lateral.php");

 ?>
<div id="conteudo">
 <script type='text/javascript' src='js/clientes.js'></script>
 <script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
 <div class='titulo'><?= $titulo ?></div>
<a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageName ?>" method="post" >
  <div class="required">* Obrigatório</div>
   <strong>Pessoal</strong>
   <table class="TableLista">
    <tr>
     <td width="110" class='legenda'><label for="clientes_nome">Nome:</label></td>
     <td><input name="clientes_nome" type="text" size="50"  value="<?=$clientes_nome ?>" /> <span class="required">*</span></td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_sobrenome">Sobrenome:</label></td>
     <td><input name="clientes_sobrenome" type="text" size="50" value="<?=$clientes_sobrenome ?>"/> <span class="required">*</span></td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_sexo">Sexo:</label></td>
     <td>
      <input type="radio" name="clientes_sexo" value="m" <? if($clientes_sexo == "m") {?>checked="checked" <?}?> /> Masculino
      <input type="radio" name="clientes_sexo" value="f" <? if($clientes_sexo == "f") {?>checked="checked" <?}?> /> Feminino
      </td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_cpf">C.P.F:</label></td>
     <td><input name="clientes_cpf" type="text" size="11" value="<?=$clientes_cpf ?>" class="onlyNumber" />
      <span class="required">*</span>
     <span class="descCampo"> somente números</span></td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_rg">R.G:</label></td>
     <td><input name="clientes_rg" type="text" size="20" value="<?=$clientes_rg ?>" class="onlyNumber" />&nbsp;&nbsp;
     <span class="descCampo">somente números</span></td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_data_nascimento">Data de nascimento:</label></td>
     <td>
      <input name="clientes_data_nascimento" type="text" size="10" maxlength="10" value="<?=fct_conversorData($clientes_nascimento,1) ?>" class="data" />     
       <span class="required">*</span>
      <span class="descCampo">(dd/mm/aaaa)</span>
      </td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_email">E-mail:</label></td>
     <td><input name="clientes_email" type="text" size="50" value="<?=$clientes_email ?>" /> <span class="required">*</span></td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_senha">Senha:</label></td>
     <td><input name="clientes_senha" type="password" size="15" maxlength="15" />

     <span class="descCampo">Minímo 6 caracters e máximo 15 caracteres</span>
     </td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_senha2">Confirmar senha:</label></td>
     <td><input name="clientes_senha2" type="password" size="15" maxlength="15" /></td>
    </tr>
   </table>
   <strong>Contato</strong>
   <table class="TableLista">
   <tr>
     <td width="110" class='legenda'><label for="clientes_telefone">Telefone:</label></td>
     <td><input name="clientes_telefone" type="text" size="20" value="<?=$clientes_telefone ?>" class="telefone" /> <span class="required">*</span></td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_celular">Celular:</label></td>
     <td><input name="clientes_celular" type="text" size="20" value="<?=$clientes_celular ?>" class="telefone" /></td>
    </tr>
   </table>
   <strong>Endereço</strong>
   <table class="TableLista">
   <tr>
     <td width="110" class='legenda'><label for="clientes_logradouro">Endereço:</label></td>
     <td>
      <input name="clientes_logradouro" type="text" size="50" value="<?=$clientes_logradouro ?>" /> <span class="required">*</span>
      <label for="clientes_numero">N°</label>
      <input name="clientes_numero" type="text" size="5" value="<?=$clientes_numero ?>"/>  <span class="required">*</span>
      </td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_complemento">Complemento:</label></td>
     <td><input name="clientes_complemento" type="text" size="50" value="<?=$clientes_complemento ?>"/></td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_bairro">Bairro:</label></td>
     <td><input name="clientes_bairro" type="text" size="50" value="<?=$clientes_bairro ?>" /> <span class="required">*</span></td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_cep">CEP:</label></td>
     <td>
        <input name="clientes_cep" type="text" size="8" maxlength="8" value="<?=$clientes_cep ?>" class="onlyNumbers" /> 
        <span class="required">*</span>
         <span class="descCampo"> somente números</span>
     </td>        
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_cidade">Cidade:</label></td>
     <td><input name="clientes_cidade" type="text" size="50" value="<?=$clientes_cidade ?>" /> <span class="required">*</span></td>
    </tr>
    <tr>
     <td class='legenda'><label for="clientes_uf">Estado:</label></td>
     <td>
     <select name="clientes_uf">
     <?= fct_Array2_MontarLista(Estados(),$clientes_uf); ?>
     </select>
      <span class="required">*</span>
     </td>
    </tr>
   </table>
   <strong>Opções</strong>
   <table class="TableLista">
   <tr>
     <td  width="110" class='legenda'><input type="checkbox" name="clientes_newsletter" value="1" <? if($clientes_newsletter == 1) {?>checked="checked" <?}?> /></td>
     <td><label for="clientes_newsletter">Desejo receber e-mails de <?= EMPRESA ?></label></td>
    </tr>
   </table> <br />
    <table class="TableLista">
     <tr class='BarraPag'>
      <td colspan="2">
        <input name="altera" type="hidden" value="1" />
        <input name="sels"   type="hidden" value="<?=$sels ?>" />
        <input name="cpfOld"   type="hidden" value="<?=$clientes_cpf ?>" />
        <input name="emailOld"   type="hidden" value="<?=$clientes_email ?>" />
        <input name="btn_salvar" type="submit" value="salvar" />
      </td>
     </tr>
    </table>
  </form>

</div>
<? require_once("rodape.php") ?>
