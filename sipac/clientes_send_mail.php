<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 10/10/2007                                     '
   Última Modificação: 15/10/2009                         '
   Página: clientes_send_mail.php                         '
---------------------------------------------------------*/

 $form        = "frm_email"; 
 require_once("lib/configs.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("");
 $link = "clientes_listar.php";


 $sels = $_REQUEST["sels"];
 if(is_array($sels))
 {
 	if($sels[0] == 'on')
  	array_shift($sels);

  $arraSels = implode(",",$sels);
 }
 else
  $arraSels = $sels;
  
  
 if(isset($_POST["btn_enviar"]))
 {
   $from      = 'no-reply@'.str_replace("http://","",URL);
   $subject   = $_POST["subject"];
   $msg       = $_POST["msg"];
   $cont      = 0;
   
   //Selecionar nome e e-mail dos clientes selecionados
   $sql = "SELECT clientes_nome, clientes_email FROM clientes WHERE clientes_id IN($arraSels)";
   $result = $conn->sql($sql);
   
   while($linha = mysql_fetch_array($result))
   {
    $nome  = $linha["clientes_nome"];
    $to    = $linha["clientes_email"];
    $msg2  = "<p>olá $nome</p>";
    $msg2 .= $msg;
    
    $cont = $cont + 1;
    if ($cont == 300) // Se houver mais de 300 clientes cadastrados, dar um atraso de 500 segundos no envio do e-mail
    {
      flush();
      sleep (500);
      $cont = 0;
    }
    fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg2);
   }
   
   echo "<script>
   alert('E-mail enviado com sucesso');
   window.location='$link'
   </script>";
 }
 else
 {
   //Retornar nome e e-mail de clientes selecionados
   $sql = "SELECT CONCAT(clientes_nome,' ',clientes_sobrenome) as clientes_nomecompleto, clientes_email
   FROM clientes WHERE clientes_id IN($arraSels)";
   $result = $conn->sql($sql);
   
   while($linha = mysql_fetch_array($result))
    $listaCliente .= $linha[0] ." (".$linha[1].")<br />\n";

 }

 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
 <script type='text/javascript' src='js/clientes.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
   <table class="TableLista">
    <tr>
     <td width="110" class='legenda'>Clientes:</td>
     <td><?=$listaCliente ?></td>
    </tr>
    <tr>
     <td class='legenda'>Assunto:</td>
     <td><input type="text" name="subject" size="50" /></td>
    </tr>
    <tr style="vertical-align:top">
     <td class='legenda'>Mensagem:</td>
     <td>
      <textarea name="msg" cols="57" rows="10"></textarea>
     </td>
    </tr>
   </table>
   <br />
   <table class="TableLista">
    <tr class='BarraPag'>
     <td colspan="2">
      <input name="sels" type="hidden" value="<?=$arraSels ?>" />
      <input name="btn_enviar" type="submit" value="Enviar" />
     </td>
     </tr>
    </table>
     </form>

</div>
<? require_once("rodape.php") ?>
