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
<body style="font-family: 'Poppins', sans-serif;">
	<div>
		<div class="container">
			<div class="mt-5 mb-5 d-flex justify-content-between">
				<div>
					<h5>Car List</h5>
				</div>
				<div>
					<a href="cars.php" class="btn btn-sm btn-primary">Add Car</a>
				</div>
			</div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Sn.</th>
						<th>Car Name</th>
						<th>Car Model</th>
						<th>Car Company</th>
						<th>Owner Name</th>
						<th>Contact No.</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require_once 'new_connection.php';
						$query = "SELECT * FROM `cars`";
							if ($result = $con->query($query)) {
							while($data = $result->fetch_assoc()){
								$id = $data['id'];
								$car_name = $data['car_name'];
								$car_model = $data['car_model'];
								$car_company = $data['car_company'];
								$owner_name = $data['owner_name'];
								$contact_no = $data['contact_no'];
								$email = $data['email'];
					?>
					<tr class="trow">
                        <td><?php echo $id; ?></td>
                        <td><?php echo $car_name; ?></td>
                        <td><?php echo $car_model; ?></td>
                        <td><?php echo $car_company; ?></td>
                        <td><?php echo $owner_name; ?></td>
                        <td><?php echo $contact_no; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><a href="updatedata.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href​="deletedata.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php 
                    	}
                    }
                    ?>
				</tbody>
			</table>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"/>
</body>
</html>