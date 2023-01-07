<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MDB - Home</title>
		<!-- Font Awesome -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
		<!-- MDB -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet"/>
		<!-- Custom Style -->
		<link rel="stylesheet" type="text/css" href="css/cus_style.css">
	</head>
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
		  			<div class="col container">
		  				<form action="https://178.128.118.167/employee/"  class="row g-3 needs-validation" novalidate>
							<div class="col-md-4">
								<div class="form-outline">
								  	<input type="text" class="form-control" id="validationCustom01" value="Mark" required />
								  	<label for="validationCustom01" class="form-label">Card ID</label>
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-outline">
							  		<input type="text" class="form-control" id="validationCustom02" value="Otto" required />
							  		<label for="validationCustom02" class="form-label">Name</label>
							  		<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group form-outline">
							  		<input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required />
							  <label for="validationCustomUsername" class="form-label">NRC</label>
							  <div class="invalid-feedback">Please choose a username.</div>
							</div>
							</div>
							<div class="col-md-6">
							<div class="form-outline">
							  <input type="text" class="form-control" id="validationCustom03" required />
							  <label for="validationCustom03" class="form-label">Position</label>
							  <div class="invalid-feedback">Please provide a valid city.</div>
							</div>
							</div>
							<div class="col-md-6">
							<div class="form-outline">
							  <input type="text" class="form-control" id="validationCustom05" required />
							  <label for="validationCustom05" class="form-label">Department</label>
							  <div class="invalid-feedback">Please provide a valid zip.</div>
							</div>
							</div>
							<div class="col-md-6">
							<div class="form-outline">
							  <input type="text" class="form-control" id="validationCustom05" required />
							  <label for="validationCustom05" class="form-label">Join Date</label>
							  <div class="invalid-feedback">Please provide a valid zip.</div>
							</div>
							</div>
							<div class="col-12">
							<button class="btn btn-primary" type="submit">Submit form</button>
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