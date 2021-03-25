<?php
    session_start();
include_once "dbh.php";

$e_book = $_POST['yesno'];
$e_acctype = $_POST['yesno_1'];

$e_booknumber = $_POST['BookNumber'];
$e_accounttype = $_POST['AccountType'];

$e_accounID = $_POST['accountZa'];

//If booknum=Yes and accountType=Yes
if($e_book == 0 && $e_acctype == 2)
{
	$sql="UPDATE account 
	      SET BookNumber = '$e_booknumber', AccountType = '$e_accounttype' 
	      WHERE AccountID = '$e_accounID' ";
	      mysqli_query($conn,$sql);
}

//If booknum=Yes and accountType=No
if($e_book == 0 && $e_acctype == 3)
{
	$sql1="UPDATE account 
	      SET BookNumber = '$e_booknumber' 
	      WHERE AccountID = '$e_accounID' ";
	      mysqli_query($conn,$sql1);	
}

//If booknum=No and accountType=Yes
if($e_book == 1 && $e_acctype == 2)
{
	$sql2="UPDATE account 
	      SET AccountType = '$e_accounttype'
	      WHERE AccountID = '$e_accounID' ";
	      mysqli_query($conn,$sql2);	
}

header("Location:staff_web.php");
?>