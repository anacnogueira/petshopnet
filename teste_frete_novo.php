<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Teste de frete e prazo de entrega dos Correios</title>
  <style type="text/css">
   span.label{
     width: 190px;
     float: left;
   }
   fieldset{
     background: #eee;
   }
     div{
       padding: 5px;
     }

  </style>
</head>

<body>
  <form name="frm_frete" action="frete2.php" method="post" id="frm_frete">
    <fieldset>
      <legend>Calculo de frete</legend>
    <div>
     <span class='label'>Código:</span>
     <span><input type="text" name="codigo" value="" /></span>
    </div>
    <div>
     <span class='label'>Senha:</span>
     <span><input type="password" name="senha" value="" /></span>
    </div>
    <div>
     <span class='label'>Serviços</span>
     <span><input type="text" name="servicos" value="" /></span>
    </div>
    <div>
     <span class='label'>Cep Origem:</span>
     <span><input type="text" name="cep_origem" value="" /></span>
    </div>
    <div>
     <span class='label'>CEP Destino:</span>
     <span><input type="text" name="cep_destino" value="" /></span>
    </div>
    <div>
     <span class='label'>Peso:</span>
     <span><input type="text" name="peso" value="" /></span>
    </div>
    <div>
     <span class='label'>Format</span>
     <span>
        <select name="formato" size="1">
            <option value="1">Caixa</option>
            <option value="2">Rolo/Prima</option>
        </select>
     </span>
    </div>
    <div>
     <span class='label'>Comprimento:</span>
     <span><input type="text" name="comprimento" value="" /></span>
    </div>
    <div>
     <span class='label'>Altura:</span>
     <span><input type="text" name="altura" value="" /></span>
    </div>
    <div>
     <span class='label'>Diâmetro:</span>
     <span><input type="text" name="diametro" value="" /></span>
    </div>
     <div>
     <span class='label'>Mão Própria:</span>
     <span>
        <select name="naopropria" size="1">
          <option value="S">Sim</option>
          <option value="N">Não</option>
        </select>
     </span>
    </div>
     <div>
     <span class='label'>Valor declarado:</span>
     <span><input type="text" name="valordeclarado" value="" /></span>
    </div>
     <div>
     <span class='label'>Aviso de Recebimento:</span>
     <span>
       <select name="avisorecebimento" size="1">
        <option value="S">Sim</option>
        <option value="N">Não</option>
       </select>
     </span>
    </div>
    <div>
      <span><input type="submit" name="btn" value="Consulta" id="submit1" /></span>
    </div>
   </fieldset>
  </form>
</body>
</html>