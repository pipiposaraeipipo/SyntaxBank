<?php
        session_start();
		include_once "dbh.php";

        $val = $_POST['CustomerID'];
       
		if(!empty($val) )
		{
			//Fetch account data based on the specific CustomerID
			$query = "SELECT * 
			          FROM account
			          WHERE CustomerID = '$val' ";
			$result = $conn->query($query);


			//Generate HTML of account options list
			if($result->num_rows > 0)
			{
				echo '<option value="">Select AccountID</option>';
				while($row = $result->fetch_assoc() )
				{
					echo "<option value= '".$row['AccountID']."'> ".$row['AccountID']."</option>";
				}
			}
			else
			{
            		echo '<option value="">AccountID not available</option>';
			}
		}
?>