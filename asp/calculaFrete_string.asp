<!--
'-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#
' Kit de Integração Correios
' Versão: 3.0
' Arquivo: calculaFrete_string.asp
' Função: Calculo de frete junto aos Correios, retorno por string
'-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#
-->
<%
'Define os valores para o cálculo do frete
cepOrigem = Request("cepOrigem")
cepDestino = Request("cepDestino")
pesoFrete = Request("pesoFrete")
volumeFrete = ""
codigoFrete = Request("codigoFrete")

' Monta os parâmetros de entrada do Web Service
entrada = "<?xml version=""1.0"" encoding=""utf-8""?>"
entrada = entrada & "<soap12:Envelope xmlns:xsi=""http://www.w3.org/2001/XMLSchema-instance"" xmlns:xsd=""http://www.w3.org/2001/XMLSchema"" xmlns:soap12=""http://www.w3.org/2003/05/soap-envelope"">"
entrada = entrada & "<soap12:Body>"
entrada = entrada & "   <Correios xmlns=""http://tempuri.org/"">"
entrada = entrada & "      <cepOrigem>" & cepOrigem & "</cepOrigem>"
entrada = entrada & "      <cepDestino>" & cepDestino & "</cepDestino>"
entrada = entrada & "      <peso>" & pesoFrete & "</peso>"
entrada = entrada & "      <volume>" & volumeFrete & "</volume>"
entrada = entrada & "      <codigo>" & codigoFrete & "</codigo>"
entrada = entrada & "    </Correios>"
entrada = entrada & "  </soap12:Body>"
entrada = entrada & " </soap12:Envelope>"
 
' Endereço do Web Service
wsCorreios = "https://comercio.locaweb.com.br/Correios/frete.asmx"

set objXmlDom = CreateObject("Microsoft.XMLDOM")
set objXmlHttp = CreateObject("Microsoft.XMLHTTP")
 
' Efetua a conexão ao Web Service
objXmlHttp.open "POST", wsCorreios, false
objXmlHttp.setRequestHeader "Man", POST & " " & wsCorreios & " HTTP/1.1"
objXmlHttp.setRequestHeader "MessageType", "CALL"
objXmlHttp.setRequestHeader "Content-Type", "application/soap+xml; charset=utf-8"
objXmlHttp.send(entrada)

' Resgata o valor calculado
retorno = objXmlHttp.responsetext
 
' Verifica se o processo da consulta foi feito com sucesso
If objXmlHttp.Status = 200 Then

    ' Trata o retorno do processo
    objXmlDom.async = False
    objXmlDom.LoadXML(retorno)
    retornoFrete = objXmlDom.selectSingleNode("soap:Envelope/soap:Body/CorreiosResponse/CorreiosResult").text

    If IsNumeric(retornoFrete) Then
        ' Exibe os dados de retorno
        Response.write "Valor calculado: R$ " & retornoFrete
    Else
        ' Exibe a mensagem de erro
        Response.write "Erro: " & retornoFrete
    End If

Else

    ' Exibe a mensagem de erro
    Response.write "Erro: " & objXmlHttp.Status
 
End If
 
set objXmlHttp = nothing
set objXmlDom = Nothing
%>
