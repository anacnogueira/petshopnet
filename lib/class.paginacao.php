<?php
/*-------------------------------------------------------------------------------
A classe navbar de Copyright Joao Prado Maia (jpm@phpbrasil.com) e tradu��o de  '
Thomas Gonzalez Miranda (thomasgm@hotmail.com) baixada do site www.phpbrasil.com'
em 06/05/2002 foi modificada para melhor entendimento do seu funcionamento e    '
aperfei�oada deste que apareceram alguns "bugs", sendo transformada como classe '
Mult_Pag (Multiplas paginas).                                                   '
As informa��es acima foram retiradas da vers�o 1.3 da classe navbar do arquivo  '
navbar.zip.                                                                     '
Adapta��o realizada por Marco A. D. Freitas (madf@splicenet.com.br) entre       '
06 e 09/05/2002.                                                                '
-------------------------------------------------------------------------------*/

// classe que multiplica paginas

class Mult_Pag {

  // Valores padr�o para a navega��o dos links
  var $num_pesq_pag;

  var $str_anterior     = "<img src='banco_imagens/arrow_left.gif' border='0' alt='' />";
  var $str_anterior_off = "<img src='banco_imagens/arrow_leftoff.gif' border='0' alt='' />";
  var $str_proxima      = "<img src='banco_imagens/arrow_right.gif' border='0' alt='' />";
  var $str_proxima_off  = "<img src='banco_imagens/arrow_rightoff.gif' border='0' alt='' />";
  // Vari�veis usadas internamente
  var $nome_arq;
  var $total_reg;
  var $pagina;

/*------------------------------------------------------
    Metodo construtor. Isto � somente usado para setar '
    o n�mero atual de colunas e outros m�todos que     '
    podem ser re-usados mais tarde.                    '
------------------------------------------------------*/
  function Mult_Pag ()
  {
    $pagina = $_REQUEST["pagina"];
    $this->pagina = $pagina ? $pagina : 0;
  }

/*
     O pr�ximo m�todo roda o que � necess�rio para as queries.
     � preciso rod�-lo para que ele pegue o total
     de colunas retornadas, e em segundo para pegar o total de
     links limitados.

         $sql par�metro:
           . o par�metro atual da query que ser� executada

         $conexao par�metro:
           . a liga��o da conex�o do banco de dados

         $tipo par�metro:
           . "mysql" - usa fun��es php mysql
           . "pgsql" - usa fun��es pgsql php
  */
  function Executar($sql, $velocidade, $tipo)
  {
    // variavel para o inicio das pesquisas

    $inicio_pesq = $this->pagina * $this->num_pesq_pag;

    if ($velocidade == "otimizada") {
      $total_sql = preg_replace("/SELECT (.*?) FROM /sei", "'SELECT COUNT(*) FROM '", $sql);
     } else {
      $total_sql = $sql;
    }

    // tipo da pesquisa
    if ($tipo == "mysql") {
        $resultado = mysql_query($total_sql);
      //$this->total_reg = mysql_result($resultado, 0, 0);
      $this->total_reg = mysql_num_rows($resultado);// total de registros da pesquisa inteira
      $sql .= " LIMIT $inicio_pesq, $this->num_pesq_pag";
      $resultado = mysql_query($sql); // pesquisa com limites por pagina
    }
    elseif ($tipo == "pgsql") {
      $resultado = pg_Exec($conexao, $total_sql);
      $this->total_reg = pg_Result($resultado, 0, 0); // total de registros da pesquisa inteira
      $sql .= " LIMIT $this->num_pesq_pag, $comeco";
      $resultado = pg_Exec($conexao, $sql);// pesquisa com limites por pagina
    }
    return $resultado;
  }

  /*
     Este m�todo cria uma string que ir� ser adicionada �
     url dos links de navega��o. Isto � especialmente importante
     para criar links din�micos, ent�o se voc� quiser adicionar
     op��es adicionais � estas queries, a classe de navega��o
     ir� adicionar automaticamente aos links de navega��o
     din�micos.
  */
  function Construir_Url()
  {
    // separa o link em 2 strings
    list($this->nome_arq, $voided) = @explode("?", $_SERVER['REQUEST_URI']);
    if ($_SERVER['REQUEST_METHOD'] == "GET")
      $cgi = $_GET;
    else
      $cgi = $_POST;
    reset($cgi); // posiciona no inicio do array

    // separa a coluna com o seu respectivo valor
    while (list($chave, $valor) = each($cgi))
      if ($chave != "pagina" and $valor!='')
        $query_string .= "&" . $chave . "=" . $valor;

     return $query_string;
  }

  /*
     Este m�todo cria uma liga��o de todos os links da barra de
     navega��o. Isto � �til, pois � totalmente independete do layout
     ou design da p�gina. Este m�todo retorna a liga��o dos links
     chamados no script php, sendo assim, voc� pode criar links de
     navega��o com o conte�do atual da p�gina.

         $opcao par�metro:
          . "todos" - retorna todos os links de navega��o
          . "numeracao" - retorna apenas p�ginas com links numerados
          . "strings" - retornar somente os links 'Pr�xima' e/ou 'Anterior'

         $mostra_string par�metro:
          . "nao" - mostra 'Pr�xima' ou 'Anterior' apenas quando for necess�rios
          . "sim" - mostra 'Pr�xima' ou 'Anterior' de qualqur maneira
  */
  function Construir_Links($opcao, $mostra_string)
  {
    $extra_vars = $this->Construir_Url();

    $arquivo = $this->nome_arq;
       //echo "total registro:".$this->total_reg;
    $num_mult_pag = ceil($this->total_reg / $this->num_pesq_pag); // numero de multiplas paginas
    $indice = -1; // indice do array final


    for ($atual = 0; $atual < $num_mult_pag; $atual++) {
      // escreve a string esquerda (Pagina Anterior)
      if ((($opcao == "todos") || ($opcao == "strings")) && ($atual == 0)) {
        if ($this->pagina != 0){
          $array[++$indice] = '<a class="Pag" href="' . $arquivo .'?pagina=' . ($this->pagina - 1) . $extra_vars . '">' . $this->str_anterior . '</a>';
        }
        elseif (($this->pagina == 0) && ($mostra_string == "sim"))
          $array[++$indice] = $this->str_anterior_off;
      }

      // escreve a numeracao (1 2 3 ...)
      if (($opcao == "todos") || ($opcao == "numeracao")) {
        if ($this->pagina == $atual)
          $array[++$indice] = ($atual > 0 ? "<b>".($atual + 1)."</b>" : "<b>". 1 ."</b>");
        else
          $array[++$indice] = '<a class="Pag" href="' . $arquivo . '?pagina=' . $atual . $extra_vars . '">' . ($atual + 1) . '</a>';
      }

      // escreve a string direita (Proxima Pagina)
      if ((($opcao == "todos") || ($opcao == "strings")) && ($atual == ($num_mult_pag - 1)))
      {
        if ($this->pagina != ($num_mult_pag - 1))
          $array[++$indice] = '<a class="Pag" href="' . $arquivo .'?pagina=' . ($this->pagina + 1) . $extra_vars . '">' . $this->str_proxima . '</a>';
        elseif (($this->pagina == ($num_mult_pag - 1)) && ($mostra_string == "sim"))
          $array[++$indice] = $this->str_proxima_off;
      }
    }
    /*$array[++$indice] = "&nbsp;&nbsp;Ir para a p�gina
      <input id='pagina' size='1' maxlength='3' value='".$atual."' type='text'>
	    <input value='ok' onclick='fctTrocaPagina(this.form,".$num_mult_pag.")' type='button'>";
    */
    $array[++$indice] = "P�gina ".($this->pagina+1)." de $num_mult_pag";
    return $array;
  }

  /*
     Este m�todo � uma extens�o do m�todo Construir_Links() para
     que possa ser ajustado o limite 'n' de n�mero de links na p�gina.
     Isto � muito �til para grandes bancos de dados que desejam n�o
     ocupar todo o espa�o da tela para mostrar toda a lista de links
     paginados.

         $array par�metro:
          . retorna o array de Construir_Links()

         $atual par�metro:
          . a vari�vel da 'pagina' atual das p�ginas paginadas. ex: pagina=1

         $tamanho_desejado par�metro:
          . o n�mero desejado de links � serem exibidos
  */
  function Mostrar_Parte($array, $atual, $tam_desejado)
  {
    $size = count($array);

    if (($size <= 2) || ($size < $tam_desejado)) {
      $temp = $array;
    }
    else {
      $temp = array();
      if (($atual + $tamanho_desejado) > $size) {
        $temp = array_slice($array, $size - $tam_desejado);
      } else {
        $temp = array_slice($array, $atual, $tam_desejado);
        if ($size >= $tamanho_desejado) {
          array_push($temp, $array[$size - 1]);
        }
      }
      if ($atual > 0) {
        array_unshift($temp, $array[0]);
      }
    }
    return $temp;
  }
}
?>
