<?php

	$conn2 = mysqli_connect("localhost", "mustafa","mustafa", "quotform");

	if(!$conn2)
    	echo"Error Connecting to Database!";
	else
    	echo"Connected to Database!";
?>

<?php
	$cname = (isset($_POST['cname']));
	$cnum = (isset($_POST['cnum']));
	$email = (isset($_POST['email']));
	$pref = (isset($_POST['pref']));
	$pname = (isset($_POST['pname']));
	$delidate = (isset($_POST['delidate']));

	$que = "INSERT INTO querytab VALUES ('$cname','$cnum','$email','$pref','$pname','$delidate')";
	$data = mysqli_query($conn2,$que);
	if($data)
	{
		echo "Data Received";
	}
?>