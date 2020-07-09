<?php
    
    $con = mysqli_connect("localhost", "root", "", "ambulanceservice");
	
	if(mysqli_connect_errno())
	{
		echo mysqli_connect_error();
	}
	else {
		echo "connected";
	}
	
    
?>