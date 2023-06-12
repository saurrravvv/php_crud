<?php 

$con = new mysqli('localhost','root','','school_management');

if($con){
	// echo "Database Connected Successfully";
}else{
	die(mysql_error());
}

?>