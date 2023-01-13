<?php
	session_start();
	$_SESSION['currentPage'] = "emprecs";
?>
<!DOCTYPE html>
<html>
	<?php include "includes/head.php"; ?>
	<body>
		<?php include "includes/header.php";?>

		<!--Main layout-->
		<main style="margin-top: 65px;">
            <?php
                include "functions.php";
                $test;
                if(isset($_GET['empID'])){
                    $empID = htmlspecialchars($_GET['empID']);
                    $test=empReadDetails($empID);
                }
                else{
                    echo "Redirect to Home";
                }
                
            ?>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card mx-5 px-0"> 
                        <div class="container mx-0 px-0 ">
                            <h4 class="w-100 text-light bg-info p-3"><b>KBTC</b></h4> 
                            <div class="container p-5">
                                <div class="row">
                                    
                                    <div class="col-md-8">
                                        <img src="assets/qrcodes/employee/<?php echo $test->row0->empID; ?>.png" alt="Qrcode">
                                        <p>ID: <?php echo $test->row0->empID; ?></p>
                                        <p>Name: <?php echo $test->row0->empName; ?></p>
                                        <p>Department: <?php echo $test->row0->empDeptID; ?></p>
                                        <p>Position: <?php echo $test->row0->empPositionID; ?></p>
                                        <p>NRC: <?php echo $test->row0->empNRC; ?></p>
                                        <p>Phone No: <?php echo $test->row0->empPhone; ?></p>
                                        <p>Join Date: <?php echo $test->row0->empJoinDate; ?></p>
                                        <p>Emergency Phone: 09-12345678</p>

                                    </div>
                                    <div class="col-md-4">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
		</main>
		<!--Main layout-->
		<?php
			include 'includes/footer.php';
		?>
	</body>
</html>
