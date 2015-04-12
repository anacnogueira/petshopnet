<html>
    <head>
        <title>Localização de endereço através do CEP usando jQuery e PHP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	      <script src="js/getEndereco.js" type="text/javascript"></script>
    </head>
    <body>
        Cep: <input type="text" maxlength="8" value="" id="cep"/><input type="button" id="getEndereco" value="Pesquisar"/><br/>
        <p id="loadingCep"></p>
        Cidade: <input type="text" readonly="readonly" id="cidade"/><br/>
        Estado: <input type="text" readonly="readonly" id="estado"/>
    </body>
</html>
