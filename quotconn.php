<?php

	$conn2 = mysqli_connect("localhost", "mustafa","mustafa", "queryform");

	if(!$conn2)
    	echo"Error Connecting to Database!";
	else
    	echo"Connected to Database!";
?>


<?php
/*
	$cname = (isset($_POST['cname']));
	$cnum = (isset($_POST['cnum']));
	$email = (isset($_POST['email']));
	$pref = (isset($_POST['pref']));
	$pname = (isset($_POST['pname']));
	$delidate = (isset($_POST['delidate']));

	$que = "INSERT INTO quottab VALUES ('$cname','$cnum','$email','$pref','$pname','$delidate')";
	$data = mysqli_query($conn2,$que);
	if($data)
	{
		echo "Data Received";
	}
*/
?>

<?php
	$cname = $_POST['cname'];
	$cnum = $_POST['cnum'];
	$email = $_POST['email'];
	$pref = $_POST['pref'];
	$pname = $_POST['pname'];
	$delidate = $_POST['delidate'];

	$que = "INSERT INTO quottab VALUES ('$cname','$cnum','$email','$pref','$pname','$delidate')";
	$data = mysqli_query($conn2,$que);
	if($data)
	{
		echo "Data Received";
	}
?>