<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 15/02/2008                                     '
   Última Modificação: __/__/____                         '
   Página: parceiros_excluir.php		                        '
---------------------------------------------------------*/
 require_once("lib/configs.php");
 $link        = "parceiros_listar.php";
 $sels        = $_REQUEST["sels"];

 if(is_array($sels))
 {
 	if($sels[0] == 'on')
  	array_shift($sels);

  $arraSels =implode(",",$sels);
 }

//1.Selecionar Foto para excluir
   $SQL = "SELECT parceiros_imagem FROM parceiros WHERE parceiros_id IN($arraSels)";
   $result = $conn->sql($SQL);
//2. Exclui a(s) imagem(s)
 while($linha = mysql_fetch_array($result))
 {
   if(!empty($linha["parceiros_imagem"]) and file_exists(DIR_PARCEIROS.$linha["parceiros_imagem"]))
    unlink(DIR_PARCEIROS.$linha["parceiros_imagem"]);
 }

//3. Exclui o(s) parceiro(s)
$SQL = "DELETE FROM parceiros WHERE parceiros_id IN($arraSels)";
$result = $conn->sql($SQL);

//4. Categorias do(s) parceiro(s)
$SQL = "DELETE FROM parceiros_categorias WHERE parceiros_id IN($arraSels)";
$result = $conn->sql($SQL);

$mensagem_log = "Parceiro(s) excluído(s) com sucesso($arraSels).";
createLog('',$pageAtual,'',$mensagem_log);
$conn->fechar();
header("location: $link");
?>
