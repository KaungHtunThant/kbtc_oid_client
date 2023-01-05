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
						<li class="breadcrumb-item" aria-current="page">Dashboard</li>
						<li class="breadcrumb-item active" aria-current="page">Employee Records</li>
					</ol>
				</nav>
		  		<div class="row">
		  			<div class="col container p-5 mx-5 card">
		  				<form action="backend.php" class="row g-3 needs-validation" novalidate method="GET">
		  					<h3>New Employee Form</h3>
		  					<hr>
		  					<input type="hidden" name="userID" value="<?php echo "sessionID"; ?>">
		  					<input type="hidden" name="category" value="employee">
							<div class="col-md-4">
								<div class="form-outline">
								  	<input type="text" class="form-control" id="validationCustom01" value="Mark" name="cardID" required />
								  	<label for="validationCustom01" class="form-label">Card ID</label>
									<div class="valid-feedback">Valid!</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-outline">
							  		<input type="text" class="form-control" id="validationCustom02" value="Otto" name="name" required />
							  		<label for="validationCustom02" class="form-label">Name</label>
							  		<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group form-outline">
							  		<input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="nrc" required />
							  		<label for="validationCustomUsername" class="form-label">NRC</label>
							  		<div class="invalid-feedback">Please choose a username.</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-outline">
							  		<input type="text" class="form-control" id="validationCustom03" name="position" required />
							  		<label for="validationCustom03" class="form-label">Position</label>
							  		<div class="invalid-feedback">Please provide a valid city.</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-outline">
							  		<input type="text" class="form-control" id="validationCustom04" name="dept" required />
							  		<label for="validationCustom04" class="form-label">Department</label>
							  		<div class="invalid-feedback">Please provide a valid zip.</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-outline">
							  		<input type="text" class="form-control" id="validationCustom05" name="joinDate" required />
							  		<label for="validationCustom05" class="form-label">Join Date</label>
							  	<div class="invalid-feedback">Please provide a valid zip.</div>
								</div>
							</div>
							<div class="col-12">
								<button class="btn btn-primary" name="empCreate" type="submit">Submit form</button>
							</div>
						</form>
		  			</div>
		  		</div>
		  	</div>
		</main>
		<!--Main layout-->

		<!-- MDB -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
	</body>
</html>