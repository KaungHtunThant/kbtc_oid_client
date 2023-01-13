<?php

function empRead(){
	$url = 'http://localhost/kbtc_oid_server/backend.php';
	$data = array(
		'url' => $url,
		'empRead' => True
	);

	$options = array(
	    'http' => array(
	        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        'method'  => 'POST',
	        'content' => http_build_query($data)
	    )
	);

	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	if ($result === FALSE) {
		$_SESSION['ReadMessage'] = $json->ReadMessage;
	}

	// var_dump($result);
	//Decode Json to Objects
	$json = json_decode($result);
	// var_dump($json);
	// echo $json->row0->empID;
	$_SESSION['ReadMessage'] = $json->ReadMessage;
	return $json;

}

function empReadDetails($empID){
	$url = 'http://localhost/kbtc_oid_server/backend.php';
	$data = array(
		'url' => $url,
		'empReadDetails' => True,
		'empID' => $empID
	);

	$options = array(
	    'http' => array(
	        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        'method'  => 'POST',
	        'content' => http_build_query($data)
	    )
	);

	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	if ($result === FALSE) {
		$_SESSION['ReadMessage'] = $json->ReadMessage;
	}

	// var_dump($result);
	//Decode Json to Objects
	$json = json_decode($result);
	// var_dump($json);
	// echo $json->row0->empID;
	$_SESSION['ReadMessage'] = $json->ReadMessage;
	return $json;

}
?>