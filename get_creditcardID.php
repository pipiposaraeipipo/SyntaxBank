<?php
        session_start();
		include_once "dbh.php";

        $val = $_POST['CustomerID'];
       
		if(!empty($val) )
		{
			//Fetch account data based on the specific CustomerID
			$query = "SELECT * 
			          FROM creditcard
			          WHERE CustomerID = '$val' ";
			$result = $conn->query($query);


			//Generate HTML of account options list
			if($result->num_rows > 0)
			{
				echo '<option value="">Select CreditCardID</option>';
				while($row = $result->fetch_assoc() )
				{
					echo "<option value= '".$row['CreditCardID']."'> ".$row['CreditCardID']."</option>";
				}
			}
			else
			{
            		echo '<option value="">CreditCardID not available</option>';
			}
		}
?>