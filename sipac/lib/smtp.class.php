<?

// Autor Desconhecido

class Smtp
{
  var $conn;
  var $user;
  var $pass;
  var $debug;

  function Smtp($host)
  {
    $this->conn = fsockopen($host, 25, $errno, $errstr, 30);
    $this->Put("EHLO $host");
  }

  function Auth()
  {
    $this->Put("AUTH LOGIN");
    $this->Put(base64_encode($this->user));
    $this->Put(base64_encode($this->pass));
  }

  function Send($to, $from, $cc,$bcc,$subject, $msg,$headers)
  {
    $this->Auth();
    $this->Put("MAIL FROM: " . $from);

    $to = str_replace(";",",",$to);
    $arraTo = split(",",$to);
    foreach($arraTo as $to_item)
      $this->Put("RCPT TO: " . $to_item);

    if(!empty($cc))
    {
      $cc = str_replace(";",",",$cc);
      $arraCc = split(",",$cc);
      foreach($arraCc as $cc_item)
        $this->Put("RCPT CC: " . $cc_item);
    }

    if(!empty($bcc))
    {
      $bcc = str_replace(";",",",$bcc);
      $arraBcc = split(",",$bcc);
      foreach($arraBcc as $bcc_item)
        $this->Put("RCPT BCC: " . $bcc_item);
    }
    $this->Put("DATA");
    $this->Put($this->toHeader($to, $from, $cc,$bcc,$subject,$headers));
    $this->Put("\r\n");
    $this->Put($msg);
    $this->Put(".");
    $this->Close();
    if(isset($this->conn))
    {
      return true;
    }
    else
    {
      return false;
    }
  }
  function Put($value)
  {
    return fputs($this->conn, $value . "\r\n");
  }

  function toHeader($to, $from, $cc,$bcc,$subject,$headers)
  {
    $header = "Message-Id: <". date('YmdHis').".". md5(microtime()).".". strtoupper($from) ."> \r\n";
    $header .= "From: <" . $from . "> \r\n";
    $header .= "To: ".$to." \r\n";
    if(!empty($cc))
      $header .= "Cc: " . $cc ."\r\n";
    if(!empty($bcc))
    $header .= "Bcc: " . $bcc ."\r\n";

    $header .= "Subject: ".$subject." \r\n";
    $header .= "Date: ". date('D, d M Y H:i:s O') ." \r\n";
    //$header .= "X-MSMail-Priority: High \r\n";
    //$header .= "Content-Type: Text/HTML";
    $header .= $headers;
    return $header;
  }

  function Close()
  {
    $this->Put("QUIT");
    if($this->debug == true)
    {
      while (!feof ($this->conn))
      {
        fgets($this->conn) . "<br>\n";
      }
    }
    return fclose($this->conn);
  }
}
?>
