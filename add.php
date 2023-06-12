<?php 

	include 'connection.php';

		if(isset($_POST['submit'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$mother_name = $_POST['mother_name'];
		$father_name = $_POST['father_name'];
		$class = $_POST['class'];

		$sql = "insert into `students` (first_name, last_name, email, mother_name, father_name, class) values('$first_name','$last_name','$email','$mother_name','$father_name','$class')";

		$result = mysqli_query($con, $sql);

		if($result){
				header("location: display_student.php");
				echo "Data Inserted Successfully";
		}else{
			die(mysql_error());

		}


	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>School Management</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap');
</style>
<body style="font-family: 'Poppins', sans-serif;">
		<section>
					<div class="container">
							<div class="mt-5 text-center">
									<h5>Add Student</h5>
							</div>
							<div class="mt-5">
									<form method="POST">
											<div class="row">
													<div class="col-md-4 mt-3 form-group">
															<label>First Name</label>
															<input type="text" class="form-control" name="first_name">
													</div>
													<div class="col-md-4 mt-3 form-group">
															<label>Last Name</label>
															<input type="text" class="form-control" name="last_name">
													</div>
													<div class="col-md-4 mt-3 form-group">
															<label>Email</label>
															<input type="text" class="form-control" name="email">
													</div>
													<div class="col-md-4 mt-3 form-group">
															<label>Mother's Name</label>
															<input type="text" class="form-control" name="mother_name">
													</div>
													<div class="col-md-4 mt-3 form-group">
															<label>Father's Name</label>
															<input type="text" class="form-control" name="father_name">
													</div>
													<div class="col-md-4 mt-3 form-group">
															<label>Class</label>
															<input type="text" class="form-control" name="class">
													</div>
											</div>
											<div class="row mt-5">
													<div class="col-md-12 text-center">
															<button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
													</div>
											</div>
									</form>
							</div>
					</div>			
		</section>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"/>
</body>
</html>