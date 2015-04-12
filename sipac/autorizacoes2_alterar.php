<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: 24/03/2009                         '
   Página: users_cadastrar.php     	                      '
---------------------------------------------------------*/
 $allowRotina = "nao";
 require_once("lib/configs.php");

 $tipo       = $_REQUEST["tipo"];
 $sels       = $_REQUEST["sels"];
 $modulos    = explode(",",$_REQUEST["modulos"]);
 $submodulos = explode(",",$_REQUEST["submodulos"]);
 $rotinas    = $_REQUEST["rotinas"];
 
 $campo = $tipo."s_id";
 
 //Excluir todos os dados do usuario ou entidades
 $sql = "DELETE FROM autorizacoes WHERE $campo=$sels";
 $result = $conn->sql($sql);
 
 //Insere as autorizações dos módulos
 foreach($modulos as $mod)
 {
   $tipo_aut = (!empty($_REQUEST["aut_tipo_mod".$mod])?$_REQUEST["aut_tipo_mod".$mod]:0);
   $sql = "INSERT INTO autorizacoes SET
   $campo = '$sels',
   modulos_id = '$mod',
   tipo_autorizacao = '$tipo_aut'";
   $result = $conn->sql($sql);
 }
 
 //Insere as autorizações dos submódulos
 foreach($submodulos as $sub)
 {
   $tipo_aut = (!empty($_REQUEST["aut_tipo_sub".$sub])?$_REQUEST["aut_tipo_sub".$sub]:0);
   $sql = "INSERT INTO autorizacoes SET
   $campo        = '$sels',
   submodulos_id ='$sub',
   tipo_autorizacao = '$tipo_aut'";
   $result = $conn->sql($sql);
 }
 
 if(!empty($rotinas))
 {
  //Insere as autorizações das rotinas
  foreach($rotinas as $rot)
  {
    $sql = "INSERT INTO autorizacoes SET
    $campo = '$sels',
    rotinas_id = '$rot'";
    $result = $conn->sql($sql);
  }
 }
 
 //Flag de Autorização especial para usuário
 if($tipo == "user")
 {
  $sql = "UPDATE users SET users_autorizacao_especial = 1  WHERE users_id =$sels";
  $result = $conn->sql($sql);
 }
 
 //Voltar para a lista de origem
 $url = $tipo."s_listar.php";
 $mensagem_log = " Autorização do $tipo Alterada com sucesso($sels)";
 createLog('','autorizacoes_alterar.php','Alterar Autorizacao',$mensagem_log);

 header("location: $url");
?>
