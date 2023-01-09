<?php
include 'phpqrcode/qrlib.php';

function qrgen($id, $cat){
	$location = 'assets/qrcodes/'.$cat.'/'.$id.'.png';
	$text = 'https://localhost/kbtc_oid_client/'.$cat.'/'.$id;
	echo $text;
	QRcode::png($text, $location);
}

// qrgen('31');

?>