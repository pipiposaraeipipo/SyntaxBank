<?php
    session_start();
	include_once "dbh.php";

	$C_custo = $_POST['CustomerID'];	
    $C_cardID = $_POST['CreditCardID'];
    $C_cvv = $_POST['CVV'];
    $C_status = $_POST['Status'];
    $C_expireddate = $_POST['ExpiredDate'];

    $sql = "INSERT INTO creditcard (CreditCardID,CVV,Status,ExpiredDate,CustomerID)
              VALUES ('$C_cardID','$C_cvv','$C_status','$C_expireddate','$C_custo');";              

	mysqli_query($conn,$sql);    

header("Location:staff_web.php");
?>