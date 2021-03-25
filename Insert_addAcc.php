<?php
    session_start();
	include_once "dbh.php";

    $C_c = $_POST['CustomerID'];



	#Insert to Account Table
	$A_b1 = $_POST['BookNumber'];
    $A_s1 = $_POST['Status'];
    $A_s2 = $_POST['Balance'];
    $A_a = $_POST['AccountType'];
    $A_b2 = $_POST['BranchID'];

    #For Insert to DebitCard Table
    $D_c1 = $_POST['DebitCardID'];
    $D_c2 = $_POST['CVV'];
    $D_c3 = $_POST['CardStatus'];
    $D_e = $_POST['ExpiredDate'];


    $sql_3 = "INSERT INTO debitcard (DebitCardID,CVV,Status,ExpiredDate,CustomerID)
              VALUES ('$D_c1','$D_c2','$D_c3','$D_e','$C_c');";              

	mysqli_query($conn,$sql_3);

    $get_fName =  "SELECT fName 
                FROM customer
                WHERE CustomerID = '$C_c'";

    $get_lName =  "SELECT lName 
                FROM customer
                WHERE CustomerID = '$C_c'";

    $res1 = mysqli_query($conn,$get_fName);
    $row1 = mysqli_fetch_array($res1);
    $fin1 = $row1['fName'];



    $res2 = mysqli_query($conn,$get_lName);
    $row2 = mysqli_fetch_array($res2);
    $fin2 = $row2['lName'];


	$sql_2 = "INSERT INTO account (fName,lName,BookNumber,Balance,Status,AccountType,CustomerID,DebitCardID,BranchID)
		    VALUES ('$fin1','$fin2','$A_b1','$A_s2','$A_s1','$A_a','$C_c','$D_c1','$A_b2');";


	mysqli_query($conn,$sql_2);

	header("Location:staff_web.php");

?>