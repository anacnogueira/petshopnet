<?
class Rotina extends ConexaoMysql
{
 var $campo;
 var $codCampo;
 var $codSubmodulo;
 var $submodulos_pagina;
 var $result;

 function Rotina($submodulos_pagina,$form)
 {

   ConexaoMysql::conexao();
   $this->submodulos_pagina = $submodulos_pagina;
   $this->form   = $form;
   $this->consulta_rotinas();
   $this->verifica_permissao();
 }

 function consulta_rotinas()
 {
  //Verificar campo e código para pesquisa de Rotina
  if($_SESSION[EMPRESA]["autorizacao"] == 1)
  {
    $this->campo = "users_id";
    $this->codcampo = $_SESSION[EMPRESA]["codUser"];
  }
  else
  {
    $this->campo = "grupos_id";
    $this->codcampo = $_SESSION[EMPRESA]["codGrupo"];
  }
  //Listar Rotinas
  $sql= "SELECT submodulos_id FROM submodulos WHERE submodulos_pagina='".$this->submodulos_pagina."'" ;
  $result = ConexaoMysql::sql($sql);
  if(mysql_num_rows($result)>  0)
  $this->codSubmodulo = mysql_result($result,0,"submodulos_id");

   $sql="SELECT DISTINCT autorizacoes_id, submodulos_nome, submodulos_pagina,
   rotinas_quantidade, btn_imagem ,rotinas_nome,rotinas_pagina, rotinas_janela
   FROM rotinas
   INNER JOIN submodulos ON rotinas.submodulos_id = submodulos.submodulos_id
   INNER JOIN modulos ON submodulos.modulos_id = modulos.modulos_id
   INNER JOIN autorizacoes
   ON autorizacoes.modulos_id = modulos.modulos_id
   OR autorizacoes.submodulos_id = submodulos.submodulos_id
   OR autorizacoes.rotinas_id = rotinas.rotinas_id
   WHERE rotinas_visivel='s' AND(tipo_autorizacao IS null) AND submodulos.submodulos_id='".$this->codSubmodulo.
   "' AND ".$this->campo."='".$this->codcampo."'
   ORDER BY rotinas_ordem ASC;";
   $this->sql = $sql;
   }

 function menu_rotinas_superior()
 {
  $result = ConexaoMysql::sql($this->sql);
  $totalRotinas =  mysql_num_rows($result);

  if($totalRotinas > 0)
  {

    echo "<div class='Tab'>\n";
    echo "<ul>";
    while($linha = mysql_fetch_array($result))
    {
     if(!empty($linha["btn_imagem"]))
      $rotina = "<img src='".DIR_BTNS."/".$linha["btn_imagem"]."' title='".$linha["rotinas_nome"]."' border='0' />";
     else
      $rotina = $linha["rotinas_nome"];

     echo "<li><a href='".$linha["rotinas_pagina"]."?qtde=".$linha["rotinas_quantidade"].($linha["rotinas_janela"] == 'S'?"&target=blank":"")."' class ='executaRotina link'>".$rotina."</a></li>\n";
   }
   echo "   </ul>";
   echo " </div>\n";
  }
 }

 function menu_rotinas_cabecalho()
 {
   $result = ConexaoMysql::sql($this->sql);
   while($linha = mysql_fetch_array($result))
   {
    if($linha["rotinas_quantidade"] != 0)
      echo  "<td class='rotina'>&nbsp;</td>\n";
   }
 }

 function menu_rotinas_interno($cod)
 {
  $result = ConexaoMysql::sql($this->sql);

  while($linha = mysql_fetch_array($result))
  {
   if($linha["rotinas_quantidade"] != 0)
   {

   if(!empty($linha["btn_imagem"]))
      $rotina = "<img src='".DIR_BTNS."/".$linha["btn_imagem"]."' alt='".$linha["rotina"]."' title='".$linha["rotina"]."' border='0' />";
     else
      $rotina = $linha["rotinas_nome"];

    $lista .= "<td class='rotina'><a href='".$linha["rotinas_pagina"]."?qtde=".$linha["rotinas_quantidade"]."' class='checkar executaRotina'>".$rotina."</a></td>\n";
   }
  }

  return $lista;
 }
 function menu_rotinas_titulo($rotina)
 {
   $sql = "SELECT submodulos_nome, modulos_nome,rotinas_nome
   FROM submodulos
   INNER JOIN modulos ON submodulos.modulos_id = modulos.modulos_id
   LEFT JOIN rotinas ON rotinas.submodulos_id = submodulos.submodulos_id
   WHERE ";
   if($rotina == '')
    $sql .=  " rotinas.rotinas_pagina ='".$this->submodulos_pagina."' ";
   else
    $sql .= " submodulos.submodulos_pagina='".$this->submodulos_pagina."'";
   $sql .="  ORDER BY rotinas_ordem";
   $result = ConexaoMysql::sql($sql);
   if(mysql_num_rows($result) >0)
   {
    $modulo    = mysql_result($result,0,"modulos_nome");
    $submodulo = mysql_result($result,0,"submodulos_nome");
    if($rotina == '')
      $rotina    = mysql_result($result,0,"rotinas_nome");
   }
  return "$modulo &raquo; $submodulo &raquo; $rotina";
 }

 function cod_modulo()
 {
   $sql = "SELECT submodulos_id FROM submodulos WHERE submodulos_pagina='".$this->submodulos_pagina."'";
   $result = ConexaoMysql::sql($sql);
   if(mysql_num_rows($result)>0)
    $c_submodulo = mysql_result($result,0,"submodulos_id");

   return $c_submodulo;
 }

 function verifica_permissao()
 {

  //Verifica se a submodulos_pagina é um submodulo ou rotina
  $sql = "SELECT submodulos_pagina FROM submodulos WHERE submodulos_pagina='".$this->submodulos_pagina."'";
  $result = ConexaoMysql::sql($sql);

  if(mysql_num_rows($result) == 1)
  {
   //Verifica permissão de submódulos
   $sql = "SELECT submodulos_pagina FROM autorizacoes
   INNER JOIN submodulos ON autorizacoes.submodulos_id = submodulos.submodulos_id
   WHERE ".$this->campo."= '".$this->codcampo."' AND submodulos_pagina='".$this->submodulos_pagina."' AND (tipo_autorizacao =1 OR tipo_autorizacao = 2)";
  }
  else
  {
    //Verifica permissão de rotina
    $sql = "SELECT rotinas_pagina FROM autorizacoes
    INNER JOIN rotinas ON autorizacoes.rotinas_id= rotinas.rotinas_id
    WHERE ".$this->campo."= '".$this->codcampo."' AND rotinas_pagina='".$this->submodulos_pagina."'";
  }
  //echo $sql;
  $result = ConexaoMysql::sql($sql);
  if(mysql_num_rows($result) == 0)
  {
    echo "<script type='text/javascript'>";
    echo " alert('Você não tem permissão para acessar esta página');";
    echo " history.go(-1);";
    echo "</script>";
    exit();
  }
 }
}
?>
