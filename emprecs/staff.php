<?php
	include "../functions.php";
	$test;
	if(isset($_GET['empID'])){
		$empID = htmlspecialchars($_GET['empID']);
		$test=empReadDetails($empID);
		?>
			<img src="../assets/qrcodes/employee/<?php echo $empID; ?>.png">
		<?php
	}
	else{
		echo "Redirect to Home";
	}
	
?>