<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 11/01/2008                                     '
   Última Modificação: __/__/____                         '
   Página: constantes.php							                    '
---------------------------------------------------------*/

 define("EMPRESA","PetShopNet");
 define("NOME_FANTASIA","PetShopNet");
 define("RAZAO_SOCIAL","MARILIA PIMENTEL BERTOZZI JACAREI EPP");

 define("CNPJ", "01.055.273/0001-04");
 define("ENDERECO", "Rua Padre Eugênio, 780");
 define("BAIRRO","São João");
 define("CIDADE","Jacareí");
 define("UF","SP");
 define("TIPOFRETE","40096"); //Sedex
 define("CEP","12322-690");

 //Dados do site
 define ("URL","http://www.petshopnet.com.br");
 define('BACKUP_DIR',"backup/");
 define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s');

 //Banco de Dados
 //Local
 /* define("SERVER","localhost");
 define("USER","root");
 define("PASS","1234");
 define("BD","petshopnet");*/
  
  //Remoto
 define("SERVER","mysql01.petshopnet.com.br");
 define("USER","petshopnet2");
 define("PASS","rfb78fab78");
 define("BD","petshopnet2"); 

 //Diretórios utlizados para uploads
 define("DIR_IMAGENS","banco_imagens/");
 define("DIR_BANNERS","banco_imagens/banners/");
 define("DIR_PARCEIROS","banco_imagens/parceiros/");
 define("DIR_PRODUTOS","banco_imagens/produtos/");
 define("DIR_PAGAMENTOS","banco_imagens/pagamentos/");

 //Dados para envio de boleto
define(IDENTIFICACAO,"2129851");
define(MODULO,"BOLETOLOCAWEB");
define(AMBIENTE,"TESTE");
define(VENCTO,5);  //qtde de dias para o vencimento;
 
 //Frete  #
 define('CEP_ORIGEM',     '05303000');
 define('FRETE_PAC',        '41106');
 define('FRETE_SEDEX',      '40010');
 define('FRETE_SEDEX_10',   '40215');
 define('FRETE_SEDEX_HOJE', '40290');
 define('FRETE_E_SEDEX',    '81019');
 define('FRETE_MALOTE',     '44105');
 
 //MUP BRadesco
define("NUM_LOJA","004601114");
define("BANCO","237");
define("NUMEROAGENCIA","0391");
define("NUMEROCONTA","0022839");
define("ASSINATURA","74F58A0F6C0433F8325C0F32CE062E44D5DB283271C0C3D85E3FF4DBAA225232A3B6B2BBC904330B9EBE81512CABBE0AA67A591FE9370574D4C4972A845E1DE1C406CBBE696E2F6717EFBA96D4A1FA6B509015FFD1DC2E16E6FBA9DA5B2D1D4180764017F7628F31C6F949EC35FA3E3815BD1863024214E878015FBBCB1126D3");
?>
