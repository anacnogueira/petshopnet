<?php
/*-------------------------------------------------------------------------------
A classe navbar de Copyright Joao Prado Maia (jpm@phpbrasil.com) e tradução de  '
Thomas Gonzalez Miranda (thomasgm@hotmail.com) baixada do site www.phpbrasil.com'
em 06/05/2002 foi modificada para melhor entendimento do seu funcionamento e    '
aperfeiçoada deste que apareceram alguns "bugs", sendo transformada como classe '
Mult_Pag (Multiplas paginas).                                                   '
As informações acima foram retiradas da versão 1.3 da classe navbar do arquivo  '
navbar.zip.                                                                     '
Adaptação realizada por Marco A. D. Freitas (madf@splicenet.com.br) entre       '
06 e 09/05/2002.                                                                '
-------------------------------------------------------------------------------*/

// classe que multiplica paginas

class Mult_Pag {

  // Valores padrão para a navegação dos links
  var $num_pesq_pag;

  var $str_anterior     = "<img src='banco_imagens/arrow_left.gif' border='0' alt='' />";
  var $str_anterior_off = "<img src='banco_imagens/arrow_leftoff.gif' border='0' alt='' />";
  var $str_proxima      = "<img src='banco_imagens/arrow_right.gif' border='0' alt='' />";
  var $str_proxima_off  = "<img src='banco_imagens/arrow_rightoff.gif' border='0' alt='' />";
  // Variáveis usadas internamente
  var $nome_arq;
  var $total_reg;
  var $pagina;

/*------------------------------------------------------
    Metodo construtor. Isto é somente usado para setar '
    o número atual de colunas e outros métodos que     '
    podem ser re-usados mais tarde.                    '
------------------------------------------------------*/
  function Mult_Pag ()
  {
    $pagina = $_REQUEST["pagina"];
    $this->pagina = $pagina ? $pagina : 0;
  }

/*
     O próximo método roda o que é necessário para as queries.
     É preciso rodá-lo para que ele pegue o total
     de colunas retornadas, e em segundo para pegar o total de
     links limitados.

         $sql parâmetro:
           . o parâmetro atual da query que será executada

         $conexao parâmetro:
           . a ligação da conexão do banco de dados

         $tipo parâmetro:
           . "mysql" - usa funções php mysql
           . "pgsql" - usa funções pgsql php
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
     Este método cria uma string que irá ser adicionada à
     url dos links de navegação. Isto é especialmente importante
     para criar links dinâmicos, então se você quiser adicionar
     opções adicionais à estas queries, a classe de navegação
     irá adicionar automaticamente aos links de navegação
     dinâmicos.
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
     Este método cria uma ligação de todos os links da barra de
     navegação. Isto é útil, pois é totalmente independete do layout
     ou design da página. Este método retorna a ligação dos links
     chamados no script php, sendo assim, você pode criar links de
     navegação com o conteúdo atual da página.

         $opcao parâmetro:
          . "todos" - retorna todos os links de navegação
          . "numeracao" - retorna apenas páginas com links numerados
          . "strings" - retornar somente os links 'Próxima' e/ou 'Anterior'

         $mostra_string parâmetro:
          . "nao" - mostra 'Próxima' ou 'Anterior' apenas quando for necessários
          . "sim" - mostra 'Próxima' ou 'Anterior' de qualqur maneira
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
    /*$array[++$indice] = "&nbsp;&nbsp;Ir para a página
      <input id='pagina' size='1' maxlength='3' value='".$atual."' type='text'>
	    <input value='ok' onclick='fctTrocaPagina(this.form,".$num_mult_pag.")' type='button'>";
    */
    $array[++$indice] = "Página ".($this->pagina+1)." de $num_mult_pag";
    return $array;
  }

  /*
     Este método é uma extensão do método Construir_Links() para
     que possa ser ajustado o limite 'n' de número de links na página.
     Isto é muito útil para grandes bancos de dados que desejam não
     ocupar todo o espaço da tela para mostrar toda a lista de links
     paginados.

         $array parâmetro:
          . retorna o array de Construir_Links()

         $atual parâmetro:
          . a variável da 'pagina' atual das páginas paginadas. ex: pagina=1

         $tamanho_desejado parâmetro:
          . o número desejado de links à serem exibidos
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
