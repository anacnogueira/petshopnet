<?
  Class ConexaoMysql
  {
    #atributos da classe
    var $servidor = "";
    var $usuario 	= USER;
    var $senha 		= PASS;
    var $banco 		= BD;
    var $query		= "";
    var $link			= "";
    

    #Metodos da classe
    //Metodo Construtor
    function ConexaoMysql()
    {
     $this->conexao();
    }
    //M�todo de conexao com o banco
    function conexao()
    {
    $this->link = mysql_connect(SERVER,$this->usuario,$this->senha);
    if(!$this->link){
      die("Error na conex�o com servidor");
     }
    elseif(!mysql_select_db($this->banco,$this->link)){
      die("Error na conexao com banco de dados");
     }
    }
    //M�todo sql
    function sql($query)
    {
      $this->query = $query;
       if($result = mysql_query($this->query,$this->link) or die($this->query.mysql_error()))
      {
       return $result;
      } else {
       return 0;
      }
    }
    //M�todo que retorna o ultimo id de uma inser��o
    function id()
    {
       return mysql_insert_id($this->link);
    }
    //M�todo fechar conex�o
    function fechar()
    {
     return mysql_close($this->link);
    }
  }
?>
