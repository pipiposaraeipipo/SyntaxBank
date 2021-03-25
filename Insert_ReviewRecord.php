<?php
    session_start();
    include_once 'dbh.php';
$CustomerID = $_POST['CustomerID'];
$BranchID = $_POST['BranchID'];
$RateOverview = $_POST['RateOverview'];
$RateService = $_POST['RateService'];
$RateDuration = $_POST['RateDuration'];
$RateAtmosphere = $_POST['RateAtmosphere'];
$RateTools = $_POST['RateTools'];
$Comment = $_POST['Comment'];

    $sql = "INSERT INTO review (CustomerID,BranchID,RateOverview,RateService,RateDuration,RateAtmosphere,RateTools,Comment) 
            VALUES ('$CustomerID','$BranchID','$RateOverview','$RateService','$RateDuration','$RateAtmosphere','$RateTools','$Comment');";
    mysqli_query($conn,$sql);

    header("Location:manager_web.php");
?>