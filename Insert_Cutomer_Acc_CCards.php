<?php
    session_start();
    include_once 'dbh.php';

    #For Insert to Customer Table
    $C_n1 = $_POST['fName'];
    $C_n2 = $_POST['lName'];
    $C_a = $_POST['Address'];
    $C_z = $_POST['Zipcode'];
    $C_p1 = $_POST['PhoneNumber'];
    $C_g = $_POST['Gender'];
    $C_e = $_POST['Email'];
    $C_c = $_POST['CitizenID'];
    $C_b = $_POST['BirthDate'];
    $C_u = $_POST['Username'];
    $C_p2 = $_POST['Password'];
    $C_i = $_POST['Income'];
    $C_p3 = $_POST['PIN'];

    #For Insert to Account Table
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

	$sql_1 = "INSERT INTO customer (fName,lName,Address,Zipcode,PhoneNumber,Gender,Email,CitizenID,BirthDate,Username,Password,Income,PIN)
		    VALUES ('$C_n1','$C_n2','$C_a','$C_z','$C_p1','$C_g','$C_e','$C_c','$C_b','$C_u','$C_p2','$C_i','$C_p3');";


	mysqli_query($conn,$sql_1);


    $get_max =  "SELECT CustomerID 
                FROM customer
                ORDER BY CustomerID DESC
                LIMIT 1";

    $res = mysqli_query($conn,$get_max);
    $row = mysqli_fetch_array($res);
    $fin = $row['CustomerID'];


    $sql_3 = "INSERT INTO debitcard (DebitCardID,CVV,Status,ExpiredDate,CustomerID)
              VALUES ('$D_c1','$D_c2','$D_c3','$D_e','$fin');";

	mysqli_query($conn,$sql_3);


	$sql_2 = "INSERT INTO account (fName,lName,BookNumber,Balance,Status,AccountType,CustomerID,DebitCardID,BranchID)
		    VALUES ('$C_n1','$C_n2','$A_b1','$A_s2','$A_s1','$A_a','$fin','$D_c1','$A_b2');";


	mysqli_query($conn,$sql_2);


	header("Location:staff_web.php"); 	
?>