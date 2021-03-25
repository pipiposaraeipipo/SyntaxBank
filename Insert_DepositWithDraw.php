<?php
    session_start();
	include_once "dbh.php";

	#Insert to DepositWithDraw Table
    $D_Date = $_POST['Date'];
    $D_Type = $_POST['Type'];
    $D_Amount = $_POST['Amount'];
    $D_Fee = $_POST['Fee'];
    $D_StaffID = $_POST['StaffID'];
    $D_AccountID = $_POST['accountZa'];

    $sql = "INSERT INTO depositwithdraw (Date,Type,Amount,Fee,AccountID,StaffID,MachineID)
              	VALUES ('$D_Date','$D_Type','$D_Amount','$D_Fee','$D_AccountID','$D_StaffID',NULL);";
    mysqli_query($conn,$sql); 
       
    //If Withdraw
    if( $D_Type == "Withdraw")
    {
    	$sql_1 = "SELECT Balance
    	          FROM account
   	              WHERE AccountID = '$D_AccountID' ";
    	$res = mysqli_query($conn,$sql_1);
        $row = mysqli_fetch_array($res);
        $fin = $row['Balance'];      
          
         //if we have enough money in balance we can cash withdraw
    	if( $fin > $D_Amount )
    	{
    		$new_balance = $fin - $D_Amount - $D_Fee;

    		$new_update = "UPDATE account
    		               SET Balance = $new_balance
    		               WHERE accountID = '$D_AccountID' ";
    		mysqli_query($conn,$new_update);
    	}
    }    

         //If Deposit
    if( $D_Type == "Deposit")
    {
         $sql_2 = "SELECT Balance
                    FROM account
                    WHERE AccountID = '$D_AccountID' ";
        $res_1 = mysqli_query($conn,$sql_2);
        $row_1 = mysqli_fetch_array($res_1);
        $fin_1 = $row_1['Balance'];  
            
        $new_balance1 = $fin_1 + $D_Amount - $D_Fee;

    	$new_update1 = "UPDATE account
    		            SET Balance = $new_balance1
    		            WHERE accountID = '$D_AccountID' ";
    	mysqli_query($conn,$new_update1);
    } 

header("Location:staff_web.php");    
?>
