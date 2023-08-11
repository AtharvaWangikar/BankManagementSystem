<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
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
		display: flex;
    justify-content: flex-end;
    margin-right: 11%;
	  }
	  #transaction {
		background: aliceblue;		
		border-radius: 10px;
    	padding: 10px;
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
<a href="Customer.php" class="button">Go Back</a>
<h1>Habibi Bank Customer Details</h1>
        <?php
            $AccountNo= $_REQUEST['AccountNo'];
            $mysqli = new mysqli("localhost", "root", "", "bank");
            // if($conn === false){
            //     die("ERROR: Could not connect. "
            //         . mysqli_connect_error());
            // }
            $sql = " SELECT * FROM customers WHERE AccountNo='$AccountNo' ";
            $result = $mysqli->query($sql);
            if (mysqli_num_rows($result) > 0) {
                $rows=$result->fetch_assoc();
                $FirstName=$rows["FirstName"];
                $LastName=$rows["LastName"];
                $EMail=$rows["EMail"];
                $Balance=$rows["Balance"];
                $City=$rows["City"];

            } else {
                echo "0 results";
            }
              
         ?>
		<div>

			<form action="TransactionInsert.php" method="post" id="transaction">
				<h1>Storing Form data in Database</h1>
				
	<p>
				<label for="AccountNo">Account No:</label>
				<input type="text" name="AccountNo" id="AccountNo" value="<?php echo $AccountNo;?>">
				</p>
	
				
	<p>
				<label for="FirstName">First Name:</label>
				<input type="text" name="FirstName" id="FirstName" value="<?php echo $FirstName;?>">
				</p>
	
				
	<p>
				<label for="LastName"> Last Name</label>
				<input type="text" name="LastName" id="LastName" value="<?php echo $LastName;?>">
				</p>
	
				
	<p>
				<label for="EMail">Email Address:</label>
				<input type="text" name="EMail" id="EMail" value="<?php echo $EMail;?>">
				</p>
	
				
	<p>
				<label for="Balance">Balance:</label>
				<input type="text" name="Balance" id="Balance" value="<?php echo $Balance;?>">
				</p>
	
	<p>
				<label for="City">City:</label>
				<input type="text" name="City" id="City" value="<?php echo $City;?>">
				</p>  
	
	<p>
				<label for="TransferToAccountNo">Transfer To AccountNo:</label>
				<input type="text" name="TransferToAccountNo" id="TransferToAccountNo" required>
				</p>  
	
	<p>
				<label for="TransferAmmount">Transfer Ammount:</label>
				<input type="text" name="TransferAmmount" id="TransferAmmount" required>
				</p>  
	
	
				<input type="submit" value="Submit">
			</form>
		</div>
</body>
</html>
