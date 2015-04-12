<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 15/10/2009                                     '
   Última Modificação: __/__/____                         '
   Página: clientes_visualizar.php                        '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("");
 $link   = "clientes_listar.php";
 $sels   = $_REQUEST["sels"];
 
 if(is_array($sels)) $sels = $sels[0];

   $sql  = "SELECT * FROM clientes cli
   INNER JOIN clientes_end ce ON ce.clientes_id = cli.clientes_id
   WHERE cli.clientes_id = '$sels AND ce.clientes_pri = 1'";
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

   //Sexo
   $clientes_sexo  = $clientes_sexo == "m"?"Masculino":"Feminino";
 
 //Newsletter
 $clientes_newsletter =  $clientes_newsletter== 1?"Sim":"Não";

 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
 <script type='text/javascript' src='js/clientes.js'></script>
 <div class='titulo'><?= $titulo ?></div>
<a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
  <strong>Pessoal</strong>
   <table class="TableLista">
    <tr>
     <td width="110" class='legenda'>Nome:</td>
     <td><?=$clientes_nome ?></td>
    </tr>
    <tr>
     <td class='legenda'>Sobrenome:</td>
     <td><?=$clientes_sobrenome ?></td>
    </tr>
    <tr>
     <td class='legenda'>Sexo:</td>
     <td><?=$clientes_sexo?></td>
    </tr>
    <tr>
     <td class='legenda'>C.P.F:</td>
     <td><?=$clientes_cpf ?></td>
    </tr>
    <tr>
     <td class='legenda'>R.G:</td>
     <td><?=$clientes_rg ?></td>
    </tr>
    <tr>
     <td class='legenda'>Data de nascimento:</td>
     <td><?=fct_ConversorData($clientes_nascimento,1) ?></td>
    </tr>
    <tr>
     <td class='legenda'>E-mail:</td>
     <td><?=$clientes_email ?></td>
    </tr>   
   </table>
   <strong>Contato</strong>
   <table class="TableLista">
   <tr>
     <td width="110" class='legenda'>Telefone:</td>
     <td><?=$clientes_telefone ?></td>
    </tr>
    <tr>
     <td class='legenda'>Celular:</td>
     <td><?=$clientes_celular ?></td>
    </tr>
   </table>
   <strong>Endereço</strong>
   <table class="TableLista">
   <tr>
     <td width="110" class='legenda'>Endereço:</td>
     <td><?=$clientes_logradouro ?> N° <?=$clientes_numero ?></td>
    </tr>
    <tr>
     <td class='legenda'>Complemento:</td>
     <td><?=$clientes_complemento ?></td>
    </tr>
    <tr>
     <td class='legenda'>Bairro:</td>
     <td><?=$clientes_bairro ?></td>
    </tr>
    <tr>
     <td class='legenda'>CEP:</td>
     <td><?=$clientes_cep ?></td>
    </tr>
    <tr>
     <td class='legenda'>Cidade:</td>
     <td><?=$clientes_cidade ?></td>
    </tr>
    <tr>
     <td class='legenda'>Estado:</td>
     <td><?=$clientes_uf ?></td>
    </tr>
   </table>
   <strong>Opções</strong>
   <table class="TableLista">
   <tr>
     <td width="250" class='legenda'>Deseja receber e-mails de <?= EMPRESA ?>:</td>
     <td><?=$clientes_newsletter ?></td>
    </tr>
   </table>
   <br /><br />
</div>
<? require_once("rodape.php") ?>
