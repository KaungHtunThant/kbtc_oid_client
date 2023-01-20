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
                            <h4 class="w-100 text-light bg-info p-3"><b>Student Webview</b></h4> 
                            <div class="container p-5">
                                <div class="row">
                                    
                                    <div class="col-md-8">
                                        <img src="assets/qrcodes/employee/img_avatar.png" alt="Avatar" style="width:60%">
                                        <p>ID: <?php echo $test->row0->empID; ?></p>
                                        <p>Name: <?php echo $test->row0->empName; ?></p>
                                        <p>Department: <?php echo $test->row0->empDeptID; ?></p></p>
                                        <p>Position: <?php echo $test->row0->empPositionID; ?></p></p>
                                        <p>NRC: <?php echo $test->row0->empNRC; ?></p>
                                        <p>Join Date: <?php echo $test->row0->empJoinDate; ?></p>
                                        <p>Coporate Phone No: 09-28392932</p>

                                        <!-- <p>Student ID: UNI-1225</p>
                                        <p>Student Name: Zack</p>
                                        <p>Class: 3-A</p>
                                        <p>Batch: 4</p>
                                        <p>Guardian Name: U Soe</p>
                                        <p>Emergency Call 1: 09-39921985</p>
                                        <p>Emergency Call 2: 09-23949203</p>
                                        <p>School Emergency: 09-54883290</p> -->

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
