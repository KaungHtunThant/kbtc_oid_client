<?php
	session_start();
	$_SESSION['currentPage'] = "studrecs";
?>
<!DOCTYPE html>
<html>
	<?php include "includes/head.php"; ?>
	<body>
		<?php include "includes/header.php";?>

		<!--Main layout-->
		<main style="margin-top: 65px;">
		  	<div class="container pt-4">
		  		<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" aria-current="page"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Student Records</li>
					</ol>
				</nav>
				<!-- Return Message -->
				<div class="container">
			  		<?php
			  			if (isset($_SESSION['Message'])) {
			  				echo $_SESSION['Message'];
			  				unset($_SESSION['Message']);
			  			}
			  		?>
			  	</div>
			  	<!-- Contents -->
		  		<div class="row px-5">
		  			<div class="col-md-12 px-5 py-3 card">
		  				<!-- <div class="container"> -->
					  		<?php
					  			// if (isset($_SESSION['ReadMessage'])) {
					  			// 	echo $_SESSION['ReadMessage'];
					  			// 	unset($_SESSION['ReadMessage']);
					  			// }
					  		?>
					  	<!-- </div> -->
					  	<h4 class="mt-3">Student Records</h4>
					  	<hr>
					  	<div class="row">
					  		<div class="col-7 col-md-4">
					  			<a class="btn btn-primary" data-toggle="modal" data-target="#empCreate">Add New Student</a>
					  		</div>
					  		<div class="col-5 col-md-8"></div>
					  	</div>
					  	<!-- Form Modal -->
						<div class="modal" id="empCreate">
                            <div class="modal-dialog">
                                <div class="modal-content ">
                                	<form action="postfunctions.php" class="needs-validation" method="POST">
	                                    <!-- Modal Header -->
	                                    <div class="modal-header">
	                                        <h4 class="modal-title mx-auto">New Student Form</h4>
	                                    </div>
                                        <!-- Modal body -->
                                        <div class="modal-body px-5">
                                        	<div class="row">
                                        		<!-- <div class="col-12 text-center">
                                        			<img src="assets/logo.png" alt="logo"/>
                                        		</div> -->
							  					<input type="hidden" name="userID" value="<?php echo "sessionID"; ?>">
							  					<input type="hidden" name="category" value="student">
												<div class="col-12 mb-3">
													<div class="form-outline">
													  	<input type="text" class="form-control" id="validationCustom01" placeholder="Enter Student's ID" name="studID" required />
													  	<label for="validationCustom01" class="form-label">Student ID</label>
														<div class="valid-feedback">Valid ID</div>
														<div class="invalid-feedback">Enter a valid ID</div>
													</div>
												</div>
												<div class="col-12 mb-3">
													<div class="form-outline">
												  		<input type="text" class="form-control" id="validationCustom02" placeholder="Enter Student's Name" name="studName" required />
												  		<label for="validationCustom02" class="form-label">Student Name</label>
												  		<div class="valid-feedback">Valid Name</div>
												  		<div class="invalid-feedback">Enter a valid Name</div>
													</div>
												</div>
												<div class="col-12 mb-3">
													<div class="form-outline">
												  		<input type="text" class="form-control" id="validationCustom04" placeholder="Otto Oreo" name="studBatch" required />
												  		<label for="validationCustom04" class="form-label">Batch</label>
												  		<div class="valid-feedback">Valid Batch</div>
												  		<div class="invalid-feedback">Enter a valid Batch</div>
													</div>
												</div>
												<div class="col-12 mb-3">
													<div class="form-outline">
												  		<input type="text" class="form-control" id="validationCustom03" aria-describedby="inputGroupPrepend" name="studClass" required />
												  		<label for="validationCustom03" class="form-label">Class</label>
												  		<div class="valid-feedback">Valid Class</div>
												  		<div class="invalid-feedback">Enter a valid Class</div>
													</div>
												</div>
												<div class="col-12 mb-3">
													<div class="form-outline">
												  		<input type="text" class="form-control" id="validationCustom05" placeholder="Otto Oreo" name="studguardianName" required />
												  		<label for="validationCustom05" class="form-label">Guardian Name</label>
												  		<div class="valid-feedback">Valid Guardian Name</div>
												  		<div class="invalid-feedback">Enter a valid Guardian Name</div>
													</div>
												</div>
												<div class="col-12 mb-3">
													<div class="form-outline">
												  		<input type="text" class="form-control" id="validationCustom06" placeholder="Enter Date of Birth" name="studdateofBirth" required />
												  		<label for="validationCustom06" class="form-label">Date of Birth</label>
												  		<div class="valid-feedback">Valid Date of Birth</div>
												  		<div class="invalid-feedback">Enter a valid Date of Birth</div>
													</div>
												</div>
												<div class="col-12 mb-3">
													<div class="form-outline">
												  		<input type="text" class="form-control" id="validationCustom07" aria-describedby="inputGroupPrepend" name="studemergencyPhone1" required />
												  		<label for="validationCustom07" class="form-label">Emergency Call 1</label>
												  		<div class="valid-feedback">Valid Phone No.</div>
												  		<div class="invalid-feedback">Enter a valid phone no.</div>
													</div>
												</div>
												<div class="col-12 mb-3">
													<div class="form-outline">
												  		<input type="text" class="form-control" id="validationCustom08" aria-describedby="inputGroupPrepend" name="studemergencyPhone2" required />
												  		<label for="validationCustom08" class="form-label">Emergency Call 2</label>
												  		<div class="valid-feedback">Valid Phone No.</div>
												  		<div class="invalid-feedback">Enter a valid phone no.</div>
													</div>
												</div>
												<div class="col-12 mb-3">
													<div class="form-outline">
												  		<input type="text" class="form-control" id="validationCustom09" aria-describedby="inputGroupPrepend" name="studschoolEmergency" required />
												  		<label for="validationCustom09" class="form-label">School Emergency Call</label>
												  		<div class="valid-feedback">Valid Phone No.</div>
												  		<div class="invalid-feedback">Enter a valid phone no.</div>
													</div>
												</div>
											</div>
                                        </div>
                                            <!-- Modal footer -->
                                        <div class="modal-footer px-5">
                                        	<button class="btn btn-primary" name="empCreate" type="submit">Submit form</button>
                                            <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					  	<br>
					  	<!-- Student Table -->
				  		<table class="table table-sm table-striped table-bordered table-light text-center w-100 table-responsive">
			  				<thead>
			  					<tr>
			  						<th>Student ID</th>
			  						<th>Student Name</th>
			  						<th>Batch</th>
									<th>Class</th>
			  						<th>QR Code</th>
			  					</tr>
			  				</thead>
				  			<?php
				  				include 'functions.php'; //include Functions
				  				//Pagenation
				  				// if(isset($_SESSION['empPagenation'])){
				  				// 	$empPagenation = $_SESSION['empPagenation'];
				  				// }
				  				// else{
				  				// 	$empPagenation = 0;
				  				// 	unset($_SESSION['empPagenation']);
				  				// }
				  				$rows = empRead(); //get objects
				  				$i = 0;	//iteration
				  				while($i<$rows->ReadCount){
				  					$tmp = 'row'.$i++;
				  			?>
				  			<tr>
				  				<td><?php echo $rows->{$tmp}->studentID; ?></td>
				  				<td><?php echo $rows->{$tmp}->studentName; ?></td>
				  				<td><?php echo $rows->{$tmp}->Batch; ?></td>
				  				<td><?php echo $rows->{$tmp}->Class; ?></td>

				  				<td>
									<a class="btn btn-primary" data-toggle="modal" data-target="#ShowQR<?php echo $rows->{$tmp}->empID; ?>" >Show</a>
									<a class="btn btn-primary" href="emprecs/staff.php?empID=<?php echo $rows->{$tmp}->empID; ?>&&empKey=<?php echo $rows->{$tmp}->empKey; ?>" >Detail</a>
				  				</td>
					  			<!-- Modal -->
								<div class="modal" id="ShowQR<?php echo $rows->{$tmp}->studentID; ?>">
	                                <div class="modal-dialog">
	                                    <div class="modal-content ">

	                                        <!-- Modal Header -->
	                                        <div class="modal-header">
	                                            <h4 class="modal-title"><?php echo $rows->{$tmp}->studentName; ?>'s QR Code</h4>
	                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
	                                        </div>
	                                        <form action="postfunctions.php" method="post">
	                                            <!-- Modal body -->
	                                            <div class="modal-body text-center">
	                                                <img src="assets/qrcodes/employee/<?php echo $rows->{$tmp}->studentID; ?>.png" alt="Qrcode">
	                                            </div>
	                                                <!-- Modal footer -->
	                                            <div class="modal-footer">
	                                                <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
	                                            </div>
	                                        </form>
	                                    </div>
	                                </div>
	                            </div>
				  			</tr>
				  			<?php
				  				}
				  				echo "<script>console.log('made it here');</script>";
				  			?>
				  		</table>
				  		<nav aria-label="Page navigation">
							<ul class="pagination">
								<li class="page-item"><a class="page-link" href="#">Previous</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav>
				  	</div>
		  		</div>
		  	</div>
		</main>
		<!--Main layout-->
		<?php
			include 'includes/footer.php';
		?>
	</body>
</html>