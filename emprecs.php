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
				<div class="container">
			  		<?php
			  			if (isset($_SESSION['Message'])) {
			  				echo $_SESSION['Message'];
			  				unset($_SESSION['Message']);
			  			}
			  		?>
			  	</div>
		  		<div class="row px-5">
		  			<div class="col-md-12 p-5 card">
		  				<form action="backend.php" class="row g-3 needs-validation" method="POST">
		  					<h3>New Employee Form</h3>
		  					<hr>
		  					<input type="hidden" name="userID" value="<?php echo "sessionID"; ?>">
		  					<input type="hidden" name="category" value="employee">
							<div class="col-md-4">
								<div class="form-outline">
								  	<input type="text" class="form-control" id="validationCustom01" value="Mark" name="empID" required />
								  	<label for="validationCustom01" class="form-label">Employee ID</label>
									<div class="valid-feedback">Valid ID</div>
									<div class="invalid-feedback">Enter a valid ID</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-outline">
							  		<input type="text" class="form-control" id="validationCustom02" value="Otto" name="empName" required />
							  		<label for="validationCustom02" class="form-label">Name</label>
							  		<div class="valid-feedback">Valid Name</div>
							  		<div class="invalid-feedback">Enter a valid Name</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group form-outline">
							  		<input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="empNRC" required />
							  		<label for="validationCustomUsername" class="form-label">NRC</label>
							  		<div class="valid-feedback">Valid NRC</div>
							  		<div class="invalid-feedback">Enter a valid NRC</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-outline">
							  		<input type="number" class="form-control" id="validationCustom03" name="empPositionID" required />
							  		<label for="validationCustom03" class="form-label">Position</label>
							  		<div class="invalid-feedback">Please provide a valid city.</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-outline">
							  		<input type="text" class="form-control" id="validationCustom04" name="empDeptID" required />
							  		<label for="validationCustom04" class="form-label">Department</label>
							  		<div class="invalid-feedback">Please provide a valid zip.</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-outline">
							  		<input type="text" class="form-control" id="validationCustom05" name="empJoinDate" required />
							  		<label for="validationCustom05" class="form-label">Join Date</label>
							  	<div class="invalid-feedback">Please provide a valid zip.</div>
								</div>
							</div>
							<div class="col-12">
								<button class="btn btn-primary" name="empCreate" type="submit">Submit form</button>
							</div>
						</form>
		  			</div>
		  			<div class="col-md-12 px-5 py-3 mt-3 card">
		  				<!-- <div class="container"> -->
					  		<?php
					  			// if (isset($_SESSION['ReadMessage'])) {
					  			// 	echo $_SESSION['ReadMessage'];
					  			// 	unset($_SESSION['ReadMessage']);
					  			// }
					  		?>
					  	<!-- </div> -->
					  	<h4 class="mt-3">Employee Records</h4>
					  	<br>
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
				  				include 'backend2.php';
				  				$rows = empRead();
				  				$i = 0;
				  				while($i<$rows->ReadCount){
				  					$tmp = 'row'.$i++;
				  			?>
				  			<tr>
				  				<td><?php echo $rows->{$tmp}->empID; ?></td>
				  				<td><?php echo $rows->{$tmp}->empName; ?></td>
				  				<td><?php echo $rows->{$tmp}->empJoinDate; ?></td>
				  				<td><img src="assets/qrcode.png" alt="Qrcode"></td>
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
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav>
				  	</div>
		  		</div>
		  	</div>
		</main>
		<!--Main layout-->

		<!-- MDB -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
	</body>
</html>