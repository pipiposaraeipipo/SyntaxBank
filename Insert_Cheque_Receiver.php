<?php
    session_start();
	include_once "dbh.php";

	#Insert to Cheque Table
    $C_chequeID = $_POST['ChequeID'];
    $C_status = $_POST['Status'];
    $C_amount = $_POST['Amount'];
    $C_writtendate = $_POST['WrittenDate'];
    $C_chequedate = $_POST['ChequeDate'];

    $C_satffID = $_POST['StaffID'];
    $C_accountID = $_POST['accountZa'];

	#Insert to Receiver Table
    $R_fName = $_POST['fName'];
    $R_lName = $_POST['lName'];
    $R_citizenID = $_POST['CitizenID'];
    $R_phone = $_POST['PhoneNumber'];
    $R_address = $_POST['Address'];
    $R_zipcode = $_POST['Zipcode'];

    $sql = "INSERT INTO receiver (fName,lName,CitizenID,PhoneNumber,Address,Zipcode)
              VALUES ('$R_fName','$R_lName','$R_citizenID','$R_phone','$R_address','$R_zipcode');"; 

    mysqli_query($conn,$sql);

   $get_receiverID =  "SELECT ReceiverID 
                 		FROM receiver
                	    ORDER BY ReceiverID DESC
             		    LIMIT 1";

    $res = mysqli_query($conn,$get_receiverID);
    $row = mysqli_fetch_array($res);
    $fin = $row['ReceiverID'];   


    $sql_1 = "INSERT INTO cheque (ChequeID,Status,Amount,ReceiverID,AccountID,StaffID,WrittenDate,ChequeDate)
              	VALUES ('$C_chequeID','$C_status','$C_amount','$fin','$C_accountID','$C_satffID','$C_writtendate','$C_chequedate');";
    mysqli_query($conn,$sql_1); 


    //If we accept cheque
    if( $C_status == 1 )
    {
    	$sql_2 = "SELECT Balance
    	                FROM account
   	                WHERE AccountID = '$C_accountID' ";

    	$res2 = mysqli_query($conn,$sql_2);
        $row_1 = mysqli_fetch_array($res2);
        $fin_1 = $row_1['Balance'];      
          

         //if we have enough money in balance we can cash cheque
    	if( $fin_1 > $C_amount )
    	{
    		$new_balance = $fin_1 - $C_amount;

    		$new_update = "UPDATE account
    		               SET Balance = $new_balance
    		               WHERE accountID = '$C_accountID' ";

    		 mysqli_query($conn,$new_update);
    	}
    }

header("Location:staff_web.php");                	
?>
