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
    //Método de conexao com o banco
    function conexao()
    {
    $this->link = mysql_connect(SERVER,$this->usuario,$this->senha);
    if(!$this->link){
      die("Error na conexão com servidor");
     }
    elseif(!mysql_select_db($this->banco,$this->link)){
      die("Error na conexao com banco de dados");
     }
    }
    //Método sql
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
    //Método que retorna o ultimo id de uma inserção
    function id()
    {
       return mysql_insert_id($this->link);
    }
    //Método fechar conexão
    function fechar()
    {
     return mysql_close($this->link);
    }
  }
?>
