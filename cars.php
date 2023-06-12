<?php

	include 'new_connection.php';

	if(isset($_POST['car_data'])){
      
      $car_name = $_POST['car_name'];
      $car_model = $_POST['car_model'];
      $owner_name = $_POST['owner_name'];
      $contact_no = $_POST['contact_no'];
      $email = $_POST['email'];
      $car_company = $_POST['car_company'];
	
		$query = "insert into `cars` (car_name, car_model, car_company, owner_name, contact_no, email) values('$car_name','$car_model','$car_company','$owner_name','$contact_no','$email') ";

		$result = mysqli_query($con, $query);

		if($result){
			header("location: display_cars.php");
		}
	}
 
 
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cars</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap');
</style>
<body style="font-family: 'poppins', sans-serif;">
	<section>
		<div class="container">
			<div class="mt-5 text-center">
				<h5>Add Cars</h5>
			</div>
			<div class="mt-5">
				<form method="POST">
					<div class="row">
						<div class="col-md-4 mt-3 form-group">
							<label>Car Name</label>
							<input type="text" name="car_name" class="form-control">
						</div>
						<div class="col-md-4 mt-3 form-group">
							<label>Car Model</label>
							<input type="text" name="car_model" class="form-control">	
						</div>
						<div class="col-md-4 mt-3 form-group">
							<label>Car Company</label>
							<input type="text" name="car_company" class="form-control">
						</div>
						<div class="col-md-4 mt-3 form-group">
							<label>Owner name</label>
							<input type="text" name="owner_name" class="form-control">
			            </div>
			            <div class="col-md-4 mt-3 form-group">
			            	<label>Contact No.</label>
			            	<input type="text" name="contact_no" class="form-control">
			            </div>
			            <div class="col-md-4 mt-3 form-group">
			            	<label>Email</label>
			            	<input type="text" name="email" class="form-control">
			            </div>
					</div>
					<div class="row mt-5">
						<div class="col-md-12 text-center">
							<button type="submit" class="btn btn-sm btn-warning" name="car_data">Submit</button>
						</div>
						
					</div>
					
				</form>
				
			</div>
			
		</div>

	</section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"/>
</body>
</html>