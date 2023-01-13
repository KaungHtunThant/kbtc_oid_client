<?php
	session_start();
	$_SESSION['currentPage'] = "emprecs";
?>
<!DOCTYPE html>
<html>
	<?php include "../includes/head.php"; ?>
	<body>
		<?php include "../includes/header.php";?>

		<!--Main layout-->
		<main style="margin-top: 65px;">
		<h2>Card</h2>
		<div class="card">
  <div class="container">
    <h4 class="w-100"><b>KBTC</b></h4> 
    <p>ID </p> <p>Kbtc-100</p>
    <p>Name: </p> <p>John</p>
    <p>Department: </p> <p>John</p>
    <p>Position: </p> <p>John</p>
    <p>NRC: </p> <p>John</p>
  </div>
</div>
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
		</main>
		<!--Main layout-->
		<?php
			include '../includes/footer.php';
		?>
	</body>
</html>
