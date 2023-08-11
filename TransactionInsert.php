<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<style>
		html {
        background-image: url("bg.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
	  h1 {
        text-align: center;
        color: #006600;
        font-size: xx-large;
        font-family: "Gill Sans", "Gill Sans MT", " Calibri", "Trebuchet MS",
          "sans-serif";
      }
	  div {
		width: 35%;
    position: absolute;
    background: aliceblue;
    border-radius: 10px;
    padding: 10px;
    top: 18%;
    right: 12%;
	  }
	  .button {
		position: absolute;
			background-color: #4CAF50;
			border: none;
			color: #fff;
			cursor: pointer;
			padding: 10px 15px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			border-radius: 3px;
		}
		.button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>

<body>
<a href="Customer.php" class="button">Home</a>
<h1>Habibi Bank Customer Details</h1>

	<div>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "bank");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$AccountNo = $_REQUEST['AccountNo'];
		$TransferToAccountNo = $_REQUEST['TransferToAccountNo'];
		$TransferAmmount = $_REQUEST['TransferAmmount'];
        $myDate = date("Y-m-d H:i:s");
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO transaction (FromAccountNo, ToAccountNo, amount, TransactionDate) VALUES ('$AccountNo',
			'$TransferToAccountNo','$TransferAmmount', '$myDate')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\nSender: $AccountNo\n Reciever: $TransferToAccountNo\n "
				. "Amount Transfer: $TransferAmmount");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

        $sqlupdate = "UPDATE customers SET Balance = Balance-$TransferAmmount WHERE AccountNo ='$AccountNo'";        
		if(mysqli_query($conn, $sqlupdate))
        {
            echo "<h3>Amount subtracted in the database successfully.";
        }
        else{
            echo "ERROR: Hush! Sorry $sqlupdate. "
				. mysqli_error($conn);
        }
        $sqlupdate2 = "UPDATE customers SET Balance=Balance+$TransferAmmount WHERE AccountNo='$TransferToAccountNo'";        
		if(mysqli_query($conn, $sqlupdate2))
        {
            echo "<h3>Amount added in the database successfully.";
        }
        else{
            echo "ERROR: Hush! Sorry $sqlupdate2. "
				. mysqli_error($conn);
        }
		// Close connection
		mysqli_close($conn);
		?>
	</div>
</body>

</html>
