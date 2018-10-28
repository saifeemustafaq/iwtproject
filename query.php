<?php
//
//$conn = mysqli_connect("localhost", "mustafa","mustafa", "queryform");
//
//if(!$conn)
//	echo"Error Connecting to Database!";
//else
//	echo"Connected to Database!";
?>


<html>
<head>
	<link rel="icon" 
  type="image/png" 
  href="iwt.png">
	<link rel="stylesheet" type="text/css" href="CSS/querystyle.css">
	<title>Query</title>

	<h1 align="center" style="border-style: double">Submit your query</h1>
	
</head>
<body>
	<div>
		<form method="POST" action="queryconn.php">
			
			<table style="font-size: 30px">
				<tr>
					<td align="left">
					&emsp;&emsp;&emsp;&emsp;Customer Name</td>
					<td align="left",><br>&emsp;&emsp;&emsp;&emsp;<input type="text" name="cname" size="35"><br><br>
					</td>
				</tr>
				<tr>
					<td align="left">
						&emsp;&emsp;&emsp;&emsp;Customer Number
					</td>
					<td align="left"><br>&emsp;&emsp;&emsp;&emsp;<input type="text" name="cnum" size="35"><br><br>
					</td>
				</tr>
				<tr>
					<td align="left">
						&emsp;&emsp;&emsp;&emsp;Customer Email
					</td>
					<td align="left"><br>&emsp;&emsp;&emsp;&emsp;<input type="email" name="email" size="35"><br><br>
					</td>
				</tr>
				<tr>
					<td align="left">
						&emsp;&emsp;&emsp;&emsp;Communication Preference<br></td>
						<td align="left"><br>
							&emsp;&emsp;&emsp;&emsp;<input type="radio" name="pref" value="call">Call
							<input type="radio" name="pref" value="text">Text
							<input type="radio" name="pref" value="email">Email<br><br>
						</td>
					</tr>
					<tr>
						<td align="left">
						&emsp;&emsp;&emsp;&emsp;Product Name</td>
						<td align="left"><br>&emsp;&emsp;&emsp;&emsp;<input type="text" name="pname" size="35"><br><br>
						</td>
					</tr>
					<tr>
						<td align="left">
						&emsp;&emsp;&emsp;&emsp;Product Details</td>
						<td align="left"><br>&emsp;&emsp;&emsp;&emsp;<input type="text" name="pdetails" size="35"><br><br>
						</td>
					</tr>
					<tr>
						<td></td>
						<td align="center">
							&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type="submit" name="submit" value="S U B M I T" style="font-size: 30px">
						</td>
					</tr>
				</table>

			</form>
		</div>

	</body>
	</html>