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
							<div class="mt-5 mb-5 d-flex justify-content-between">
								<div>
									<h5>Student List</h5>
								</div>
								<div>
									<a href="add.php" class="btn btn-sm btn-primary">Add Student</a>
								</div>
							</div>
							<table class="table table-bordered">
								<thead>
										<tr>
												<th>Sn.</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Email</th>
												<th>Mother Name</th>
												<th>Father Name</th>
												<th>Class</th>
												<th>Edit</th>
												<th>Delete</th>
										</tr>
								</thead>
								<tbody>
										 <?php 
                        require_once "connection.php";
                        $sql_query = "SELECT * FROM `students`";
                        if ($result = $con->query($sql_query)) {
                            while ($row = $result->fetch_assoc()) { 
                                $id = $row['id'];
                                $first_name = $row['first_name'];
                                $last_name = $row['last_name'];
                                $email = $row['email'];
                                $mother_name = $row['mother_name'];
                                $father_name = $row['father_name'];
                                $class = $row['class'];
                    ?>
											<tr class="trow">
	                        <td><?php echo $id; ?></td>
	                        <td><?php echo $first_name; ?></td>
	                        <td><?php echo $last_name; ?></td>
	                        <td><?php echo $email; ?></td>
	                        <td><?php echo $mother_name; ?></td>
	                        <td><?php echo $father_name; ?></td>
	                        <td><?php echo $class; ?></td>
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
		</section>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"/>
</body>
</html>