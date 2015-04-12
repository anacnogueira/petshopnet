<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 01/02/2007                                     '
   Última Modificação: 16/10/2009                         '
   Página: email_enviar.php                               '
---------------------------------------------------------*/
 $form        = "frm_mail";
 require_once("lib/configs.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("Enviar");

$from             ='no-reply@'.str_replace("http://","",URL);
 $subject         = $_POST["subject"];
 $msg2            = $_POST["msg"];
 $clientes_id     = $_POST["clientes_id"];
 $cont            = 0;
 
 if(isset($_POST["btn_enviar"]))
 {
   $arraEmail = array();
   $sql = "SELECT clientes_id,clientes_nome,clientes_email FROM clientes";
   //Verificar numero
   if(!is_numeric($clientes_id))
   {
    if($clientes_id == "News")
     $sql .= " WHERE clientes_newsletter = '1'";
   }
   else if(is_numeric($clientes_id))
     $sql .= " WHERE clientes_id = '$clientes_id'";

   $result = $conn->sql($sql);
   while($email = mysql_fetch_array($result))
   {
     $arraEmail[$email["clientes_id"]]["nome"] = $email["clientes_nome"];
     $arraEmail[$email["clientes_id"]]["email"] = $email["clientes_email"];
   }
    foreach($arraEmail as $mail_cliente)
    {
      $nome    = $mail_cliente["nome"];
      $to      = $mail_cliente["email"];
      $msg     = "<p>$nome,</p>";
      $msg    .= $msg2;
       
      $cont = $cont + 1;
      if ($cont == 300) // Se houver mais de 300 e-mail para enviar, dar um atraso de 500 segundos no envio do e-mail
      {
        flush();
        sleep (500);
        $cont = 0;
      }
      fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg);
    }
   $script = "<script>
   alert('E-mail enviado com sucesso');
   </script>";

 }

  $listaCliente = array("","Selecione","All","Todos Clientes","News","Todos Assinantes de Newsletters");
 //Retornar nome e e-mail de clientes selecionados
 $sql = "SELECT  clientes_id,CONCAT(clientes_nome,' ',clientes_sobrenome) as clientes_nomecompleto, clientes_email
 FROM clientes";
 $result = $conn->sql($sql);
 while($linha = mysql_fetch_array($result))
 {
   $listaCliente[] = $linha[0];
   $listaCliente[] = $linha[1] ." (".$linha[2].")<br />\n";
 }

 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
 <?=$script ?>
<div id="conteudo">
 <script type='text/javascript' src='js/email.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
   <table class="TableLista">
    <tr>
     <td class='legenda'>Clientes:</td>
     <td>
        <select name="clientes_id">
          <?=fct_Array2_MontarLista($listaCliente,$clientes_id)?>
        </select>
      </td>
    </tr>
    <tr>
     <td class='legenda'>Assunto:</td>
     <td><input type="text" name="subject" size="50" value="<?=$subject ?>" /></td>
    </tr>
    <tr style="vertical-align:top">
     <td class='legenda'>Mensagem:</td>
     <td>
      <textarea name="msg" cols="57" rows="10"><?=$msg2 ?></textarea>
     </td>
    </tr>
   </table>
   <br />
   <table class="TableLista">
    <tr class='BarraPag'>
     <td colspan="2">
      <input name="btn_enviar" type="submit" value="Enviar" />
     </td>
     </tr>
    </table>
     </form>

</div>
<? require_once("rodape.php") ?>
