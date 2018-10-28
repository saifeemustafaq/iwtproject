<?php

	$conn3 = mysqli_connect("localhost", "mustafa","mustafa", "queryform");

	if(!$conn3)
    	echo"Error Connecting to Database!";
	else
    	echo"Connected to Database!";
?>

<?php
	$cname = $_POST['cname'];
	$cnum = $_POST['cnum'];
	$email = $_POST['email'];
	$pref = $_POST['pref'];
	$pname = $_POST['pname'];
	$pdetails = $_POST['pdetails'];

	$que = "INSERT INTO newquerysql VALUES ('$cname','$cnum','$email','$pref','$pname','$pdetails')";
	$data = mysqli_query($conn3,$que);
	if($data)
	{
		echo "Data Received";
	}
?>