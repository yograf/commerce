<?php
class CommerceGlobalonePost {

  public $_paymentURL;
  public $_paymentParams;
  public $_xml;
  public $_terminal;
  public $_postHash;
  public $_postDateTime;
  public $_normalizedPaymentParams;
  public $_normalizedPaymentReponse;
  public $mode;
  public $_log = FALSE;

  public function __construct($terminal,$paymentParams) {
    $this->_terminal = $terminal;
    $this->mode = $terminal['mode'];
    $this->_paymentParams = $paymentParams;
    $this->_postDateTime = date('d-m-Y:H:i:s').':000';
  }

  public function sendPayment() {
    $curl = new CommerceGlobaloneCurl();
    $format = new CommerceGlobaloneFormat($this->_paymentParams,$this->_terminal,$this->createHash(),$this->_postDateTime);
    //$this->_normalizedPaymentParams = $format->getNormalizedPaymentParams();
    $XML = $format->getXML();
    if ($this->_log) {
      watchdog('dfd', $XML);
    } 
    dpm($XML);
    $resp = $curl->curlXmlRequest($this->_terminal['url'], $XML);
    dpm($resp);
    return;
    $resp['STATUS'] = $this->controlResponseHash($normalizedPaymentReponse);
    return $resp;

  }

  public function getXML(){
    return $this->_xml;
  }

  public function createHash() {

    $params = $this->_paymentParams;

    $stringToHash = '';
    $stringToHash .= $this->_terminal['terminal_id'];
    $stringToHash .= $params['ORDERID'];
    $stringToHash .= $params['AMOUNT'];
    // If multi-currency we should add currency to hash.
    if ($this->_terminal['currency'] == 'MCP') {
      $stringToHash .= $params['CURRENCY'];
    }
    $stringToHash .= $this->_postDateTime;
    $stringToHash .= $this->_terminal['secret'];
    $this->_postHash = md5($stringToHash);
    return md5($stringToHash);
  }


  public function buildResponseHash(){
    $reponse = $this->_normalizedPaymentReponse;
    $payment = $this->_paymentParams;
    $stringToHash = '';
    $stringToHash .= $this->_terminal;
    $stringToHash .= $reponse['UNIQUEREF'];
    $stringToHash .= $payment['AMOUNT'];
    $stringToHash .= $reponse['DATETIME'];
    $stringToHash .= $reponse['RESPONSECODE'];
    $stringToHash .= $reponse['RESPONSETEXT'];
    $stringToHash .= $this->_secret;
    $this->_responseHash = md5($stringToHash);
    return md5($stringToHash);
  }


  public function controlResponseHash($responseHash){
    if(isset($responseHash['ERRORSTRING'])) {
      return false;
    }
    else {
    $this->_normalizedPaymentReponse=$responseHash;
    return ($this->buildResponseHash() == $responseHash['HASH']);
    }
  }

  public function getNormalizedPaymentReponse(){
    return $this->_normalizedPaymentReponse;
  }
  public function getNormalizedPaymentParams(){
    return $this->_normalizedPaymentParams;
  }

}

class CommerceGlobaloneCurl{

  public function curlXmlRequest($url,$xml){

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);

    // Log any errors to the watchdog.
    if ($error = curl_error($ch)) {
      dpm($error);
      watchdog('commerce_globalone', 'cURL error: @error', array('@error' => $error), WATCHDOG_ERROR);
      return FALSE;
    }
    $output = curl_exec($ch);
    curl_close($ch);
    return $this->XMLToArray($output);
  }

  public function handleCurlError($errno, $message){

    switch ($errno) {
    case CURLE_COULDNT_CONNECT:
    case CURLE_COULDNT_RESOLVE_HOST:
    case CURLE_OPERATION_TIMEOUTED:
      $msg = "Could not connect to GlobalONE.  Please check your internet connection and try again.  If this problem persists, you should contact the site admin.";
      break;
    case CURLE_SSL_CACERT:
    default:
    $msg = "Error while communicating with GlobalONE.  Please check your internet connection and try again.  If this problem persists, you should contact the site admin.";
    }

    $msg .= "\n\n(Network error [errno $errno]: $message)";

    return $msg;
  }
  public function XMLToArray($xml,$main_heading = '') {

    $deXml = simplexml_load_string($xml);
    $deJson = json_encode($deXml);
    $xml_array = json_decode($deJson,TRUE);

    if (! empty($main_heading)):
      $returned = $xml_array[$main_heading];
    return $returned;
    else:
    return $xml_array;
endif;

  }
}
