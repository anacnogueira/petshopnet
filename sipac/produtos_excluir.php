<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 03/10/2007                                     '
   Última Modificação: __/__/____                         '
   Página: produtos_excluir.php		                        '
---------------------------------------------------------*/

 $pageName    = basename(__FILE__);
 require_once("lib/configs.php");
 $link = "produtos_listar.php";
 $sels = $_REQUEST["sels"];

 if(is_array($sels))
 {
 	if($sels[0] == 'on')
  	array_shift($sels);

  $arraSels = implode(",",$sels);
  }

//1.Selecionar Foto para excluir
   $sql = "SELECT produtos_imagem FROM produtos_imagens WHERE produtos_codigo IN(
   SELECT produtos_codigo FROM produtos WHERE produtos_id IN($arraSels))";
   $result = $conn->sql($sql);

//2. Exclui a(s) imagem(s)
 while($linha = mysql_fetch_array($result))
 {
   //Apagar imagem grande
   if(file_exists(DIR_PRODUTOS.$linha["produtos_imagem"]))
    unlink(DIR_PRODUTOS.$linha["produtos_imagem"]);

    //Apaga thumbanail
	$produtos_imagem_thumb = substr($linha["produtos_imagem"],0,strlen($linha["produtos_imagem"])-4).".thumb".substr($linha["produtos_imagem"],-4);
    if(file_exists(DIR_PRODUTOS.$produtos_imagem_thumb))
     unlink(DIR_PRODUTOS.$produtos_imagem_thumb);
 }

 //4. Exclui as imagens do banco de dados
 $sql = "DELETE FROM produtos_imagens WHERE produtos_codigo IN(
 SELECT produtos_codigo FROM produtos WHERE produtos_id IN($arraSels))";
 $result = $conn->sql($sql);
  
 //3. Exclui o(s) produto
 $SQL = "DELETE FROM produtos WHERE produtos_id IN($arraSels)";
 $result = $conn->sql($SQL);
    
 //4. Exclui as categorias do(s) produto(s)
 $SQL = "DELETE FROM produtos_categoria WHERE produtos_codigo IN(
 SELECT produtos_codigo FROM produtos WHERE produtos_id IN($arraSels))";
 $result = $conn->sql($SQL);
   
 //5.Exclui promoções(s)
 $SQL = "DELETE FROM promocoes WHERE produtos_codigo IN(
 SELECT produtos_codigo FROM produtos WHERE produtos_id IN($arraSels))";
 $result = $conn->sql($SQL);

 //6. Exclui produtos_relacionamentos
 $SQL = "DELETE FROM produtos_relacionamentos WHERE produtos_codigo IN(
 SELECT produtos_codigo FROM produtos WHERE produtos_id IN($arraSels))";
 $result = $conn->sql($SQL);

 //7. exclui frete grátis
 $SQL = "DELETE FROM produtos_frete WHERE produtos_codigo IN(
 SELECT produtos_codigo FROM produtos WHERE produtos_id IN($arraSels))";
 $result = $conn->sql($SQL);


 //Excluir notificações
 $mensagem_log = "produtos(s) excluído(s) com sucesso($arraSels).";
 createLog('',$pageAtual,'',$mensagem_log);
 $conn->fechar();
 header("location: $link");
?>
