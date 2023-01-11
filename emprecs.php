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
		  	<div class="container pt-4">
		  		<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" aria-current="page"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Employee Records</li>
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
					  	<h4 class="mt-3">Employee Records</h4>
					  	<hr>
					  	<div class="row">
					  		<div class="col-7 col-md-4">
					  			<a class="btn btn-primary" data-toggle="modal" data-target="#empCreate">Add New Employee</a>
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
	                                        <h4 class="modal-title mx-auto">New Employee Form</h4>
	                                    </div>
                                        <!-- Modal body -->
                                        <div class="modal-body px-5">
                                        	<div class="row">
                                        		<!-- <div class="col-12 text-center">
                                        			<img src="assets/logo.png" alt="logo"/>
                                        		</div> -->
							  					<input type="hidden" name="userID" value="<?php echo "sessionID"; ?>">
							  					<input type="hidden" name="category" value="employee">
												<div class="col-12 mb-3">
													<div class="form-outline">
													  	<input type="text" class="form-control" id="validationCustom01" placeholder="eg.KBTC-123" name="empID" required />
													  	<label for="validationCustom01" class="form-label">Employee ID</label>
														<div class="valid-feedback">Valid ID</div>
														<div class="invalid-feedback">Enter a valid ID</div>
													</div>
												</div>
												<div class="col-12 mb-3">
													<div class="form-outline">
												  		<input type="text" class="form-control" id="validationCustom02" placeholder="Otto Oreo" name="empName" required />
												  		<label for="validationCustom02" class="form-label">Name</label>
												  		<div class="valid-feedback">Valid Name</div>
												  		<div class="invalid-feedback">Enter a valid Name</div>
													</div>
												</div>
												<div class="col-12 mb-3">
													<div class="form-outline">
												  		<input type="text" class="form-control" id="empJoinDate" aria-describedby="inputGroupPrepend" name="empJoinDate" required />
												  		<label for="empJoinDate" class="form-label">Join Date</label>
												  		<div class="valid-feedback">Valid Date</div>
												  		<div class="invalid-feedback">Enter a valid date</div>
													</div>
												</div>
												<div class="col-12 text-left">
													<label for="NRC1" class="form-label">NRC</label>
													<div class="row form-group">
														<div class="col-3 mb-3">
													  		<select name="NRC1" class="form-select" id="NRC1">
													  			<option>12/</option>
													  			<option>13/</option>
													  		</select>
														</div>
														<div class="col-3 mb-3 px-0">
													  		<select name="NRC2" class="form-select" id="NRC2">
													  			<option>AhSaNa</option>
													  			<option>Blah Blah Blah</option>
													  		</select>
														</div>
														<div class="col-2">
															<div class="form-outline">
														  		<input type="text" class="form-control" id="NRC3" aria-describedby="inputGroupPrepend" name="NRC3" value="(N)" disabled/>
															</div>
														</div>
														<div class="col-4 mb-3 pl-0">
															<div class="input-group form-outline">
														  		<input type="number" class="form-control" id="NRC4" aria-describedby="inputGroupPrepend" name="NRC4" placeholder="123456" required />
														  		<label for="validationCustomUsername" class="form-label">NRC No.</label>
														  		<div class="valid-feedback">Valid NRC</div>
														  		<div class="invalid-feedback">Enter a valid NRC</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 mb-3 text-left">
													<div class="form-outline float-left">
														<label for="empDeptID" class="form-label">Department</label>
														<select name="empDeptID" class="form-select" id="empDeptID">
												  			<option value="1">IT</option>
												  			<option value="2">HR</option>
												  		</select>
													</div>
												</div>
												<div class="col-12 mb-3 text-left">
													<div class="form-outline float-left">
														<label for="empPositionID" class="form-label float-left">Position</label>
														<select name="empPositionID" class="form-select" id="empPositionID">
												  			<option value="1">IT Associate</option>
												  			<option value="2">HR Associate</option>
												  		</select>
													</div>
												</div>
												<div class="col-12 mb-3">
													<div class="form-outline">
												  		<input type="text" class="form-control" id="empPhone" aria-describedby="inputGroupPrepend" name="empPhone" required />
												  		<label for="empPhone" class="form-label">Phone No.</label>
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
					  	<!-- Employees Table -->
				  		<table class="table table-sm table-striped table-bordered table-light text-center w-100 table-responsive">
			  				<thead>
			  					<tr>
			  						<th>EmpID</th>
			  						<th>EmpName</th>
			  						<th>EmpJoinDate</th>
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
				  				<td><?php echo $rows->{$tmp}->empID; ?></td>
				  				<td><?php echo $rows->{$tmp}->empName; ?></td>
				  				<td><?php echo $rows->{$tmp}->empJoinDate; ?></td>
				  				<td>
									<a class="btn btn-primary" data-toggle="modal" data-target="#ShowQR<?php echo $rows->{$tmp}->empID; ?>" >Show</a>
									<a class="btn btn-primary" href="emprecs/staff.php?empID=<?php echo $rows->{$tmp}->empID; ?>&&empKey=<?php echo $rows->{$tmp}->empKey; ?>" >Detail</a>
				  				</td>
					  			<!-- Modal -->
								<div class="modal" id="ShowQR<?php echo $rows->{$tmp}->empID; ?>">
	                                <div class="modal-dialog">
	                                    <div class="modal-content ">

	                                        <!-- Modal Header -->
	                                        <div class="modal-header">
	                                            <h4 class="modal-title"><?php echo $rows->{$tmp}->empName; ?>'s QR Code</h4>
	                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
	                                        </div>
	                                        <form action="postfunctions.php" method="post">
	                                            <!-- Modal body -->
	                                            <div class="modal-body text-center">
	                                                <img src="assets/qrcodes/employee/<?php echo $rows->{$tmp}->empID; ?>.png" alt="Qrcode">
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