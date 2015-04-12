<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: menu_laterral.php			                        '
---------------------------------------------------------*/

//1. Verificar se o usuário tem permissão especial
 $sql = "SELECT users_autorizacao_especial FROM users
 WHERE users_id = '".$_SESSION[EMPRESA]["codUser"]."'";
 $result = $conn->sql($sql);
 if(mysql_num_rows($result) > 0)
 {
   $special = mysql_result($result,0,0);
   if($special == 1)
   {
    $campo_tipo = "users_id";
    $codMenu 		= $_SESSION[EMPRESA]["codUser"];
   }
   else
   {
    $campo_tipo = "grupos_id";
    $codMenu 		= $_SESSION[EMPRESA]["codGrupo"];
  }
 }

//1. Módulos do usuário
   $sql = "SELECT
   modulos.modulos_id, modulos_nome, tipo_autorizacao
   FROM modulos
	 INNER JOIN autorizacoes ON autorizacoes.modulos_id = modulos.modulos_id
	 WHERE $campo_tipo='".$codMenu."'
    AND (tipo_autorizacao=1 OR tipo_autorizacao=2)
    ORDER BY modulos_ordem ASC";
  $result = $conn->sql($sql);
?>
<div id="menu_lateral">
<ul>
 <?
   while($linha = mysql_fetch_array($result))
   {
     echo " <li class='menu_modulo'>".$linha["modulos_nome"]."\r\n";
		//Submódulos
    $sql2 = "SELECT DISTINCT submodulos.submodulos_id, submodulos_nome, submodulos_pagina
    FROM submodulos
    LEFT JOIN autorizacoes ON  autorizacoes.submodulos_id = submodulos.submodulos_id
    WHERE submodulos.modulos_id = '".$linha["modulos_id"]."'
    AND  $campo_tipo='".$codMenu."'";
    if($linha["tipo_autorizacao"] == 2)
    {
      $sql2 .=" AND (tipo_autorizacao=1 OR tipo_autorizacao=2)
      AND $campo_tipo='".$codMenu."'";
    }
    $sql2 .= " ORDER BY submodulos_ordem ASC";
    $result2 = $conn->sql($sql2);
    $recordCount = mysql_num_rows($result2);

    if($recordCount > 0)
    {
      echo "   \n<ul>\n";
			$j = 0;
			for($j=0;$j<$recordCount;$j++)
			{
				$linha2 =  mysql_fetch_array($result2);
				if($j == ($recordCount-1))
					echo "     <li class='menu_sub_last'><a href='".$linha2["submodulos_pagina"]."'>".$linha2["submodulos_nome"]."</a></li>\n";
				else
				 echo "     <li class='menu_sub'><a href='".$linha2["submodulos_pagina"]."'>".$linha2["submodulos_nome"]."</a></li>\n";
			}
      echo "   </ul>\n";
     }
     echo "  </li>\n";
   }
   echo " </ul>\n";
?>
</div>
