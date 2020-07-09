
<?php
$nm=$_GET["nm"];
$array = explode(",,,,,",$array[0]);
$con=mysqli_connect("localhost","root","","ambulance");


query1 = " SELECT hospitalName, address, contactNumber, email, numberOfAmbulances FROM requestedhospitals WHERE hospitalName='$array[0]' ";
$result=mysqli_query($con,$query1);
while ($row=mysqli_fetch_array($result)){
	$hosn = $row['hospitalName'];
	$addr = $row['address'];
	$contact = $row['contactNumber'];
	$eml = $row['email'];
	$noam = $row['numberOfAmbulances'];
}

query2 = " DELETE FROM requestedhospitals WHERE hospitalName='$array[0]' ";
mysqli_query($con,$query2);
query3 = " INSERT INTO permanant(hospitalName, address, contactNumber, email, numberOfAmbulances) VALUES ('$hosn','$addr',$contact,'$eml',$noam)";
mysqli_query($con,$query3);

$query="INSERT INTO payments(hospitalname, depositamount, cashdepositdate,bank,branch) VALUES ('$array[0]', $array[1], '$array[2]', '$array[3]', '$array[4]')";

if ($conn->query($query) === TRUE) {
    echo " successfully recorded";
} else {
    echo "Error: " . $query . "<br>" . $con->error;
}

?>




