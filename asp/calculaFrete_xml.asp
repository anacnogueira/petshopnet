<%
'-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#
' Kit de Integra��o Correios
' Vers�o: 3.0
' Arquivo: calculaFrete_xml.asp
' Fun��o: Calculo de frete junto aos Correios, retorno por XML
'-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#

'Define os valores para o c�lculo do frete
cepOrigem = Request("cepOrigem")
cepDestino = Request("cepDestino")
pesoFrete = Request("pesoFrete")
volumeFrete = ""
codigoFrete = Request("codigoFrete")

'Response.Write "CEP Origem: " & cepOrigem & "<br />"
'Response.Write "CEP Destino: " & Request("cepDestino") & "<br />"

' Monta os par�metros de entrada do Web Service
entrada = "<?xml version=""1.0"" encoding=""utf-8""?>"
entrada = entrada & "<soap12:Envelope xmlns:xsi=""http://www.w3.org/2001/XMLSchema-instance"" xmlns:xsd=""http://www.w3.org/2001/XMLSchema"" xmlns:soap12=""http://www.w3.org/2003/05/soap-envelope"">"
entrada = entrada & "<soap12:Body>"
entrada = entrada & "   <CorreiosXml xmlns=""http://tempuri.org/"">"
entrada = entrada & "      <cepOrigem>" & cepOrigem & "</cepOrigem>"
entrada = entrada & "      <cepDestino>" & cepDestino & "</cepDestino>"
entrada = entrada & "      <peso>" & pesoFrete & "</peso>"
entrada = entrada & "      <volume>" & volumeFrete & "</volume>"
entrada = entrada & "      <codigo>" & codigoFrete & "</codigo>"
entrada = entrada & "    </CorreiosXml>"
entrada = entrada & "  </soap12:Body>"
entrada = entrada & " </soap12:Envelope>"
 
' Endere�o do Web Service
wsCorreios = "https://comercio.locaweb.com.br/Correios/frete.asmx"

set objXmlDom = CreateObject("Microsoft.XMLDOM")
set objXmlHttp = CreateObject("Microsoft.XMLHTTP")
 
' Efetua a conex�o ao Web Service
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
    xmlRetornoFrete = objXmlDom.selectSingleNode("soap:Envelope/soap:Body/CorreiosXmlResponse/CorreiosXmlResult").text

    set objXmlDom = Nothing
    set objXmlDom = CreateObject("Microsoft.XMLDOM")

    ' Trata o retorno de retorno da consulta
    objXmlDom.async = False
    objXmlDom.LoadXML(xmlRetornoFrete)
    
    ' Resgata os dados iniciais do retorno da consulta
    nodeRetorno = objXmlDom.selectSingleNode("CalculoFrete/retorno").text

    ' Verifica se a consulta foi feita com sucesso
    If nodeRetorno = "OK" Then

        ' Resgata a op��o e o valor de frete
        nodeCodigo = objXmlDom.selectSingleNode("CalculoFrete/codigo").text
        nodeValor = objXmlDom.selectSingleNode("CalculoFrete/valor").text

        ' Exibe os dados de retorno
        'Response.write "Op��o de frete: " & nodeCodigo & "<br>"
        Response.write nodeValor

    Else

        ' Resgata a descri��o do erro
        nodeDescricao = objXmlDom.selectSingleNode("CalculoFrete/descricao").text
        
        ' Exibe a mensagem de erro
        Response.write "Erro: " & nodeDescricao

    End If

Else

    ' Exibe a mensagem de erro
    Response.write "Erro: " & objXmlHttp.Status
 
End If
 
set objXmlHttp = nothing
set objXmlDom = Nothing
%>
