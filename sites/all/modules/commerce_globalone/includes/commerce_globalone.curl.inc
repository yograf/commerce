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
    dpm($error);
    watchdog('commerce_authnet', 'cURL error: @error', array('@error' => $error), WATCHDOG_ERROR);
    return FALSE;
  }
		$output = curl_exec($ch);
  dpm($output);
  curl_close($ch);

return ;



		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	//	curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
	//	curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml");
	//	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$output = curl_exec($ch);

    dpm($output, 'out');
		curl_close($ch);
		
		return $this->XMLToArray($output);
	}

	public function handleCurlError($errno, $message){
		
		switch ($errno) {
			case CURLE_COULDNT_CONNECT:
			case CURLE_COULDNT_RESOLVE_HOST:
			case CURLE_OPERATION_TIMEOUTED:
				$msg = "Could not connect to Pivotal.  Please check your internet connection and try again.  If this problem persists, you should contact the site admin.";
			break;
			case CURLE_SSL_CACERT:
			default:
				$msg = "Error while communicating with Pivotal.  Please check your internet connection and try again.  If this problem persists, you should contact the site admin.";
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
