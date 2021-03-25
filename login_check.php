<?php
session_start();
include_once "dbh.php";

$G_email = $_POST['email'];
$G_password = $_POST['password'];
$G_position = $_POST['pos'];

			$sql = "SELECT *
        			FROM staff";

			$res=$conn->query($sql);

			while($row = $res->fetch_array() )
			{

				$fin1 = $row['Email'];
				$fin2 = $row['Position'];
				$fin3 = $row['Password'];
                $fin4 = $row['fName'];
                $fin5 = $row['lName'];
                $fin6 = $row['StaffID'];
                $fin7 = $row['BranchID'];

                if($G_email == $fin1 && $G_position == $fin2 && $G_password == $fin3) 
                {
                	$checker = 1;
                    $_SESSION["Email"] = $fin1;
                    $_SESSION["Password"] = $fin3;
                    $_SESSION["Position"] = $fin2;
                    $_SESSION["fName"] = $fin4;
                    $_SESSION["lName"] = $fin5;
                    $_SESSION["StaffID"] = $fin6;
                    $_SESSION["BranchID"] = $fin7;
                	break;
                }
                else
                {
                	$checker = 0;
                }
			}

            //Fail to Log In
			if( $checker == 0 )
			{
				header("location:login.php");
			}


            // For Staff
			if( $checker == 1 && $_SESSION["Position"] == "Staff" )
	 		{
				header("location:staff_web.php");

			}
           
            // For Manager
            if( $checker == 1 && $_SESSION["Position"] == "Manager" )
            {
            	header("location:manager_web.php");
            }


?>