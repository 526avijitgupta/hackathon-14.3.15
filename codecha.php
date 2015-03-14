<?php 
	$challenge, 'response' => $response, 'remoteip' => $remoteip, 'privatekey' => $privatekey ) ); } function recaptcha_check($challenge, $response, $remoteip, $privatekey) { return _codecha_request(RECAPTCHA_URL, array ( 'challenge' => $challenge, 'response' => $response, 'remoteip' => $remoteip, 'privatekey' => $privatekey ) ); } ?> 
?>