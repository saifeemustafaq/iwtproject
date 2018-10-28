<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="images/iwt.png">
	<link rel="stylesheet" type="text/css" href="CSS/quotstyle.css">
	<title>Quotation</title>
	<h1 align="center">Request Quotation</h1>
</head>
<body>
	<div>
		<form method="POST" action="quotconn.php">
			<table style="font-size: 30px">
				<tr>
					<td align="left">
					&emsp;&emsp;&emsp;&emsp;Customer Name
					</td>
					<td align="left",><br>&emsp;&emsp;&emsp;&emsp;<input type="text" name="cname" placeholder="eg. Mustafa Saifee" size="35"><br><br>
					</td>
				</tr>
				<tr>
					<td align="left">
						&emsp;&emsp;&emsp;&emsp;Customer Number
					</td>
					<td align="left"><br>&emsp;&emsp;&emsp;&emsp;<input type="text" name="cnum" placeholder="eg. 9876543210" size="35"><br><br>
					</td>
				</tr>
				<tr>
					<td align="left">
						&emsp;&emsp;&emsp;&emsp;Customer Email
					</td>
					<td align="left"><br>&emsp;&emsp;&emsp;&emsp;<input type="email" name="email" placeholder="eg. mustafa@gmail.com" size="35"><br><br>
					</td>
				</tr>
				<tr>
					<td align="left">
						&emsp;&emsp;&emsp;&emsp;Communication Preference<br>
					</td>
					<td align="left"><br>
							&emsp;&emsp;&emsp;&emsp;<input type="radio" name="pref" value="call" required>Call
							<input type="radio" name="pref" value="text" required >Text
							<input type="radio" name="pref" value="email" required ><EM></EM>ail<br><br>
					</td>
				</tr>
				<tr>
					<td align="left">
						&emsp;&emsp;&emsp;&emsp;Product name and quantity</td>
					<td align="left"><br>&emsp;&emsp;&emsp;&emsp;
						<textarea name="pname" rows="5" cols="24" style="font-size: 15px" placeholder="Ceiling Fan x 5		Table Fan x 5		LED Tubelight x 3"></textarea>
						<br><br>
					</td>
				</tr>
				<tr>
					<td align="left">
						&emsp;&emsp;&emsp;&emsp;Expected Delivery Date</td>
					<td align="left"><br>&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="date" name="delidate" size="35"><br><br>
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
