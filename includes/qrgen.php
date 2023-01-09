<?php
include 'phpqrcode/qrlib.php';

//Function for generating QR
function qrgen($id, $cat){
	$location = 'assets/qrcodes/'.$cat.'/'.$id.'.png';
	$text = 'https://localhost/kbtc_oid_client/'.$cat.'?empID='.$id.'&&key=RandomString';
	echo $location;
	QRcode::png($text, $location);
}

// qrgen('31', 'employee');

?>