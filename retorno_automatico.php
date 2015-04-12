<?php
  $title = "Pedido em Processamento";
  require_once("lib/configs.php");
  require_once("lib/funcoes.php");
  require_once("lib/class.carrinho.php");

  header('Content-Type: text/html; charset=ISO-8859-1');
  define('TOKEN', '39AFD7DEDD194264A5987160F9FB32C6');

  function pgs_log($msg){
    $msg = date('[d/m/Y H:i:s] ') . $msg . "\n";
    file_put_contents ('pagseguro.log', $msg,FILE_APPEND);
  }

  class PagSeguroNpi {
     
	  private $timeout = 20; // Timeout em segundos

	  public function notificationPost() {
		  $postdata = 'Comando=validar&Token='.TOKEN;
		  foreach ($_POST as $key => $value) {
			$valued    = $this->clearStr($value);
			$postdata .= "&$key=$valued";
		}
		return $this->verify($postdata);
	}

	private function clearStr($str) {
		if (!get_magic_quotes_gpc()) {
			$str = addslashes($str);
		}
		return $str;
	}

	private function verify($data) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "https://pagseguro.uol.com.br/pagseguro-ws/checkout/NPI.jhtml");
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_TIMEOUT, $this->timeout);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$result = trim(curl_exec($curl));
		curl_close($curl);
		return $result;
	}

}

$carrinho = new carrinho();

if (count($_POST) > 0) {
   pgs_log("POST recebido, indica que é a requisição do NPI");
	// POST recebido, indica que é a requisição do NPI.
	$npi = new PagSeguroNpi();
	$result = $npi->notificationPost();
  pgs_log($result);
  
	$transacaoID = isset($_POST['TransacaoID']) ? $_POST['TransacaoID'] : '';

	if ($result == "VERIFICADO") {
		pgs_log("O post foi validado pelo PagSeguro");
	}
  else if ($result == "FALSO") {
		pgs_log("O post não foi validado pelo PagSeguro.");
    pgs_log(print_r($_POST,true));
       
        //Gravar informações no banco, se não existir
    $sql = "SELECT * FROM transacoes WHERE referencia ='".$_POST["Referencia"]."'";
    $rs = $conn->sql($sql);
    $update = mysql_num_rows($rs) == 0 ? 'no' : 'yes';
    $query = "
      transacao_id ='".$_POST["TransacaoID"]."',
      tipo_frete   = '".$_POST["TipoFrete"]."',
      valor_frete  ='".str_replace(",",".",$_POST["ValorFrete"])."',
      extras='".str_replace(",",".",$_POST["Extras"])."',
      anotacao='".$_POST["Anotacao"]."',
      data_transacao ='".fct_conversorData($_POST["DataTransacao"],3)."',
      tipo_pagamento  ='".$_POST["TipoPagamento"]."',
      status_transacao ='".$_POST["StatusTransacao"]."',
      cliente_nome    ='".$_POST["CliNome"]."',
      cliente_email  ='".$_POST["CliEmail"]."',
      cliente_endereco ='".$_POST["CliEndereco"]."',
      cliente_numero ='".$_POST["CliNumero"]."',
      cliente_complemento ='".$_POST["CliComplemento"]."',
      cliente_bairro ='".$_POST["CliBairro"]."',
      cliente_cidade  ='".$_POST["CliCidade"]."',
      cliente_estado ='".$_POST["CliEstado"]."',
      cliente_cep ='".$_POST["CliCEP"]."',
      cliente_telefone ='".$_POST["CliTelefone"]."',
      pedido_itens ='".$_POST["NumItens"]."'";
    $sql = "INSERT INTO transacoes SET
    referencia ='".$_POST["Referencia"]."',".
    $query. " ON DUPLICATE KEY UPDATE ". $query;
    
    $conn->sql($sql);
    $trans_id = $conn->id();
    pgs_log($sql);
    
    //Só Gravar Produtos se não for atualização    
    if($update == 'no'){
      for($i = 1;$i<=$_POST["NumItens"];$i++ ) {
        $sql = "INSERT INTO transacoes_produtos SET
        trans_id ='".$trans_id."',
        produto_codigo ='".$_POST["ProdID_".$i]."',
        produto_valor ='".str_replace(",",".",$_POST["ProdValor_".$i])."',
        produto_qtde='".$_POST["ProdQuantidade_".$i]."'";
        pgs_log($sql);
        $conn->sql($sql);
      }

  
      //Enviar e-mail com informações do pedido
      $from =  'no-reply@'.str_replace("http://www.","",URL);
      $to   =  'rfbertozzi@uol.com.br';
      $cc   =  'rfbertozzi@gmail.com';
      $bcc  =  'anacnogueira@gmail.com';
      $subject = '[PetShopNet] Pedido - PagSeguro - Trans. Id '.$_POST["TransacaoID"];

      $msg  = "<h3>Dados do Pedido</h3>";
      $msg .= "<p>Transaçao ID: ".$_POST["TransacaoID"]."</p>";
      $msg .= "<p>Tipo Frete:".$_POST["TipoFrete"]."</p>";
      $msg .= "<p>Valor Frete:".$_POST["ValorFrete"]."</p>";
      $msg .= "<p>Extras: ".$_POST["Extras"]."</p>";
      $msg .= "<p>Anotação: ".$_POST["Anotacao"]."</p>";
      $msg .= "<p>Data Transacao: ".$_POST["DataTransacao"]."</p>";
      $msg .= "<p>Pagamento: ".$_POST["TipoPagamento"]."</p>";
      $msg .= "<p>Status: ".$_POST["StatusTransacao"]."</p>";

      $msg .= "<h3>Dados do cliente</h3>";
      $msg .= "<p>Nome: ".$_POST["CliNome"]."</p>";
      $msg .= "<p>E-mail: ".$_POST["CliEmail"]."</p>";
      $msg .= "<p>Endereco: ".$_POST["CliEndereco"].",Nº ".$_POST["CliNumero"]."</p>";
      $msg .= "<p>Complemento: ".$_POST["CliComplemento"]."</p>";
      $msg .= "<p>Bairro: ".$_POST["CliBairro"]."</p>";
      $msg .= "<p>Cidade:".$_POST["CliCidade"]."</p>";
      $msg .= "<p>Estado: ".$_POST["CliEstado"]."</p>";
      $msg .= "<p>CEP: ".$_POST["CliCEP"]."</p>";
      $msg .= "<p>Telefone: ".$_POST["CliTelefone"]."</p>";

      $msg .= "<h3>Dados dos Produtos";
      $totItens =  $_POST["NumItens"];
      $msg .= "<p>Total Itens: ".$totItens."</p>";

      $msg .= "<table width='100%'>";
      $msg .= "<tr>";
      $msg .= "  <th>Código Produto</th>";
      $msg .= "  <th>Descrição</th>";
      $msg .= "  <th>Valor Unit</th>";
      $msg .= "  <th>Quantidade</th>";
      $msg .= "  <th>Subtotal</th>";
      $msg .= "</tr>";
      for($i=1;$i<=$totItens;$i++){
        $subtotal =  $_POST["ProdValor_".$i] * $_POST["ProdQuantidade_".$id];
        $total += $subtotal;
        $msg .= "<tr>";
        $msg .= "  <td>".$_POST["ProdID_".$i]."</td>";
        $msg .= "  <td>".$_POST["ProdDescricao_".$i]."</td>";
        $msg .= "  <td>".$_POST["ProdValor_".$i]."</td>";
        $msg .= "  <td>".$_POST["ProdQuantidade_".$id]."</td>";
        $msg .= "  <td>".$subtotal."</td>";
        $msg .= "</tr>";
      }
      $msg .= "<tr>";
      $msg .= " <td colspan='4' align='right'>Frete:</td>";
      $msg .=  " <td>".$_POST["ValorFrete"]."</td>";
      $msg .=  "</tr>";
      $msg .= "<tr>";
      $msg .= " <td colspan='4' align='right'>Total:</td>";
      $msg .=  " <td>".$total + $_POST["ValorFrete"]."</td>";
      $msg .=  "</tr>";

      fct_EnvioMail_locaweb($to,$from,$cc,$bcc,$subject,$msg);
    }
	}
  else {
		pgs_log("Erro na integração com o PagSeguro");
	}

} else {
	// POST não recebido, indica que a requisição é o retorno do Checkout PagSeguro.
	// No término do checkout o usuário é redirecionado para este bloco.
  pgs_log("POST não recebido, indica que a requisição é o retorno do Checkout PagSeguro");
}

  require_once("topo.php");
  require_once("login_topo.php");
	require_once("busca.php");
	require_once("categorias.php");
	//require_once("parceiros.php");
?>
  <div id="conteudo">
    <h1>Pedido em processamento</h1>
    <p>Recebemos seu pedido e estamos aguardando pela
    confirma&ccedil;&atilde;o do pagamento. Obrigado por comprar conosco.</p>
  </div>
<? require_once("rodape.php"); ?>