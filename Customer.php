<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'bank';

// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM customers ORDER BY AccountNo ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		html{
			background-image: url('bg.jpg');
			background-repeat: no-repeat;
  			background-attachment: fixed;
  			background-size: 100% 100%;
		}
		table {
			background-color: "white";
			margin: 0 auto;
			margin-right: 0;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>HaBB Bank Customer Details</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Account No</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
                <th>Balance</th>
                <th>City</th>
                <th>Action</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['AccountNo'];?></td>
				<td><?php echo $rows['FirstName'];?></td>
				<td><?php echo $rows['LastName'];?></td>
				<td><?php echo $rows['EMail'];?></td>
                <td><?php echo $rows['Balance'];?></td>
                <td><?php echo $rows['City'];?></td>
                <td><input type="button" value="Do Transaction" id="btnHome" onClick="document.location.href='Transaction.php?AccountNo=<?php echo $rows['AccountNo'];?>'" /></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
