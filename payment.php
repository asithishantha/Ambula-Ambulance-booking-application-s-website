<?php

    include "dbcon.php";


	$name = $_POST['name'];
	$depositamount = $_POST['depositedamount'];
	$cashdepositdate = $_POST['deposit'];
	$bank = $_POST['bank'];
	$branch = $_POST['branch']; 
	
	
	$sql = "INSERT INTO payments(hospitalname, depositamount, cashdepositdate,bank,branch) VALUES ('$name', '$depositamount', '$cashdepositdate', '$bank', '$branch')";
	
	$result = mysqli_query($con, $sql);
	
?>
	