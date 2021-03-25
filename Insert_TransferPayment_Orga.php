<?php
    session_start();
include_once "dbh.php";

//Insert to Payment Table
$P_r2 = $_POST['Ref2'];
$P_r1 = $_POST['Ref1'];
$P_TransPType = $_POST['TransPType'];
$P_Fee = $_POST['Fee'];
$P_Amount = $_POST['Amount'];
$P_Timestamp = $_POST['Timestamp'];
$P_yesno = $_POST['yesno'];
$P_CreditCardID = $_POST['cardZa'];
$P_StaffID = $_POST['StaffID'];

$C_accountID = $_POST['accountZa'];

//Insert to Organization Table
$O_orgaName = $_POST['orgaName'];
$O_type = $_POST['type'];
$O_accNo = $_POST['accNo'];
$O_swCode = $_POST['swCode'];



     $sql = "SELECT Balance
	         FROM account
	         WHERE AccountID = '$C_accountID' ";

	$res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res);
    $fin = $row['Balance']; 

    $new_balance = $fin - $P_Amount -$P_Fee;

    $new_update = "UPDATE account
		           SET Balance = $new_balance
		           WHERE accountID = '$C_accountID' ";

//using creditcard
if( $P_yesno == 0 )
{
     //if we have enough money in balance we can do transaction
	if( $fin > $P_Amount )
	{
		 mysqli_query($conn,$new_update);

         //Inserting to organization Table
		 $insert_1 = "INSERT INTO organization (AccountID,Name,Type,SwiftCode,AccountNo)
              	      VALUES ('$C_accountID','$O_orgaName','$O_type','$O_swCode','$O_accNo');";
         mysqli_query($conn,$insert_1); 

        //trying to get OrganizationID
         $get_OrganizationID =  "SELECT OrganizationID
                 		   	 FROM organization
                	         ORDER BY OrganizationID DESC
             		         LIMIT 1";

    	$res1 = mysqli_query($conn,$get_OrganizationID);
    	$row1 = mysqli_fetch_array($res1);
   	    $fin1 = $row1['OrganizationID']; 

        //Inserting to payment table
   	    $insert_2 = "INSERT INTO payment (Date,Type,Amount,Fee,StaffID,AccountID,MachineID,Ref1,Ref2,CreditCardID,OrganizationID)
              	  VALUES ('$P_Timestamp','$P_TransPType','$P_Amount','$P_Fee','$P_StaffID','$C_accountID',NULL,'$P_r1','$P_r2','$P_CreditCardID','$fin1');";
        mysqli_query($conn,$insert_2); 

	}    
}
else
{
	//if we have enough money in balance we can do transaction
	if( $fin > $P_Amount )
	{
		 mysqli_query($conn,$new_update);

         //Inserting to organization Table
		 $insert_2 = "INSERT INTO organization (AccountID,Name,Type,SwiftCode,AccountNo)
              	      VALUES ('$C_accountID','$O_orgaName','$O_type','$O_swCode','$O_accNo');";
         mysqli_query($conn,$insert_2); 

        //trying to get OrganizationID
         $get_OrganizationID_2 =  "SELECT OrganizationID
                 		   	 FROM organization
                	         ORDER BY OrganizationID DESC
             		         LIMIT 1";

    	$res2 = mysqli_query($conn,$get_OrganizationID_2);
    	$row2 = mysqli_fetch_array($res2);
   	    $fin2 = $row2['OrganizationID']; 

        //Inserting to payment table
   	    $insert_3 = "INSERT INTO payment (Date,Type,Amount,Fee,StaffID,AccountID,MachineID,Ref1,Ref2,CreditCardID,OrganizationID)
              	  VALUES ('$P_Timestamp','$P_TransPType','$P_Amount','$P_Fee','$P_StaffID','$C_accountID',NULL,'$P_r1','$P_r2',NULL,'$fin2');";
        mysqli_query($conn,$insert_3); 

	} 
}


header("Location:staff_web.php");
?>