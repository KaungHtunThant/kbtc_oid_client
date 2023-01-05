<?php
	if(isset($_POST["empCreate"])){
		$url = 'http://localhost/kbtc_oid_server/backend.php';
		$empID = htmlspecialchars($_POST['empID']);
		$empName = htmlspecialchars($_POST['empName']);
		$empNRC = htmlspecialchars($_POST['empNRC']);
		$empPositionID = htmlspecialchars($_POST['empPositionID']);
		$empDeptID = htmlspecialchars($_POST['empDeptID']);
		$empJoinDate = htmlspecialchars($_POST['empJoinDate']);
		$empKey = htmlspecialchars($_POST['empKey']);
		$empStatus = 1;

		$data = array('empCreate' => True, 'empID' => $empID, 'empName' => $empName);

		// use key 'http' even if you send the request to https://...
		$options = array(
		    'http' => array(
		        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		        'method'  => 'POST',
		        'content' => http_build_query($data)
		    )
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if ($result === FALSE) { /* Handle error */ }

		var_dump($result);
	}
?>