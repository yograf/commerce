<?php

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
      watchdog('commerce_globalone', 'cURL error: @error', array('@error' => $error), WATCHDOG_ERROR);
      return FALSE;
    }
    curl_close($ch);
    return $this->XMLToArray($result);
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
