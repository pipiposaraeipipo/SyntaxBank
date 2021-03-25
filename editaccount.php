<?php
 session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit Account</title>


    <meta charset="utf-8">
    <meta name="viewport" content="widhth=device-width,
    initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

  
        .btn {
            position: absolute;
            top: 15px;
            left: 45px;
            height: 45px;
            width: 45px;
            text-align: center;
            background: #c3af6f;
            border-radius: 3px;
            cursor: pointer;
            transition: left 0.4s ease;
        }

        .btn.click {
            left: 260px;
        }

        .btn span {
            color: white;
            font-size: 28px;
            line-height: 45px;
        }

        .btn.click span:before {
            content: '\f00d';
        }

        .sidebar {
            position: fixed;
            width: 250px;
            height: 100%;
            left: -250px;
            background: #1b1b1b;
            transition: left 0.4s ease;
   top:0px;
        }

        .sidebar.show {
            left: 0px;
   top:0px;
        }

        .sidebar .text {
            color: #c3af6f;
            font-size: 25px;
            font-weight: 600;
            line-height: 50px;
            text-align: center;
            background: white;
            letter-spacing: 1px;
        }

        nav ul {
            background: #c3af6f;
            height: 100%;
            width: 100%;
            list-style: none;
   margin: 0px;
           padding: 0px;
        }

        nav ul li {
            line-height: 60px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);   margin: 0px;
           padding: 0px;
        }

        nav ul li:last-child {
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        nav ul li a {
            position: relative;
            color: white;
            text-decoration: none;
            font-size: 22px;
            text-align: center;
            font-weight: 500;
            display: block;
            width: 100%;
            border-left: 3px solid transparent;text-shadow: 1px 1px 1px #A7A7A7;
       margin: 0px;
    padding: 0px;
        }

        nav ul li.active a {
            color: white;
            background: #c3af6f;text-shadow: 1px 1px 1px #A7A7A7;    margin: 0px;
    padding: 0px;
        }

        /* เวลาเอาเม้าท์ไปชี้ */
        nav ul li a:hover {
            background: #988856;-webkit-box-shadow: 0px 1px 5px 1px rgba(195,173,110,0.81); 
box-shadow: 0px 1px 5px 1px rgba(195,173,110,0.81);    margin: 0px;
    padding: 0px;
        }

        nav ul ul {
            position: static;
            display: none;
        }

        nav ul .acc-show.show {
            display: block;
        }

        nav ul .dep-show.show1 {
            display: block;
        }

        nav ul .pay-show.show2 {
            display: block;
        }

        nav ul .cheque-show.show3 {
            display: block;
        }

        nav ul ul li {
            line-height: 42px;
            border-top: none;
        }

        nav ul ul li a {
            font-size: 17px;
            color: #e6e6e6;
            padding-left: 20px;
        }

        nav ul li.active ul li a {
            color: #c3af6f;
            background: white;
            border-left-color: transparent;
        }

        nav ul ul li a:hover {
            color: white !important;
            background: #d1c8a7 !important;
        }

        nav ul li a span {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            font-size: 22px;
            transition: transform 0.4s;
        }

        nav ul li a span.rotate {
            transform: translateY(-50%) rotate(-180deg);
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #202020;
            z-index: -1;
            text-align: center;
        }

        .content .header {
            font-size: 45px;
            font-weight: 600;
        }

        .content p {
            font-size: 30px;
            font-weight: 500;
        }
    </style>

<!-- JQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>

			$(document).ready(function()
			{
    			$('#customer').on('change', function()
    			{
        			var Customer_ID = $(this).val();
       			    if(Customer_ID)
       			    {
            			$.ajax(
            			{
                			type:'POST',
                			url:'get_accountID.php',
                			data:'CustomerID='+Customer_ID,
                			success:function(html)
                			{
                   				 $('#account').html(html);
                			 }
            		    }); 
        			}
        			else
        			{
            			$('#account').html('<option value="">Select CustomerID First</option>');
        			}
    			});
    		});	

        </script>

        <script>
    	function show(x)
    	{
    		if(x==0)
    		{
    			document.getElementById('book').style.display='block';

    		}
    		if(x==1)
    		{
    			document.getElementById('book').style.display='none';       			
    		}
    		if(x==2)
    		{
    			document.getElementById('acc').style.display='block';       			
    		}
     		if(x==3)
    		{
    			document.getElementById('acc').style.display='none';       			
    		}   		  		
    	}
    	</script></head>
	<body>

    <div class="btn">
        <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="text">
            <?php 
                  echo $_SESSION["fName"]; echo "\t";
                  echo $_SESSION["lName"]; 
                  echo nl2br("\nStaffID:"); echo $_SESSION["StaffID"];
                  echo nl2br("\nBranchID:"); echo $_SESSION["BranchID"];
            ?>
            </div>
        <ul>
            <li>
                <a href="#" class="acc-btn">Account
                    <span class="fas fa-caret-down first"></span>
                </a>
                <ul class="acc-show">
                    <li><a href="Create_New_User.php">Create account for new user</a></li>
                    <li><a href="add_account.php">Add account</a></li>
                    <li><a href="editaccount.php">Edit account</a></li>
                    <li><a href="add_creditcard.php">Add creditcard</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dep-btn">Deposit/Withdraw
                    <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="dep-show">
                    <li><a href="DepositWithdraw.php">New deposit/withdraw</a></li>
                </ul>
            </li>
            <li><a href="#" class="pay-btn">Payment
                    <span class="fas fa-caret-down third"></span>
                </a>
                <ul class="pay-show">
                    <li><a href="TransferPayment.php">Transfer/Payment</a></li>
                </ul>
            </li>
            <li><a href="#" class="cheque-btn">Cheque
                    <span class="fas fa-caret-down fourth"></span>
                </a>
                <ul class="cheque-show">
                    <li><a href="Cheque.php">Cash a cheque</a></li>
                </ul>
            </li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </nav>
    <script>
        $('.btn').click(function () {
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
        });
        $('.acc-btn').click(function () {
            $('nav ul .acc-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        });
        $('.dep-btn').click(function () {
            $('nav ul .dep-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });
        $('.pay-btn').click(function () {
            $('nav ul .pay-show').toggleClass("show2")
            $('nav ul .third').toggleClass("rotate");
        });
        $('.cheque-btn').click(function () {
            $('nav ul .cheque-show').toggleClass("show3")
            $('nav ul .fourth').toggleClass("rotate");
        });
        $('nav ul li').click(function () {
            $(this).addClass("active").siblings().removeClass("active");
            $('#dropdown').hide();
        });
    </script>

<div class="topbar">Syntax Bank.&nbsp; &nbsp; </div>
<table border="0" cellpadding="0" style="overflow-p:auto;max-width:600px;position:relative;margin-right:auto;margin-left:auto;margin-top:20px;background-color:#fff;-webkit-box-shadow: 2px 6px 5px 0px rgba(128,128,128,0.65);
-moz-box-shadow: 2px 6px 5px 0px rgba(128,128,128,0.65);
box-shadow: 2px 6px 5px 0px rgba(128,128,128,0.65);">

<TR>
<!-- Row 1 -->
<TD align=left colspan=4 style="background: #c4af6b;height: 30px;padding-left:10px"> <span style="font-size:22px;color: #fff;text-shadow: 1px 1px 2px rgba(73,73,73,0.61);"><strong>  Edit Account</strong></span></TD>
</TR>
<TR>
<!-- Row 2 -->

<td style="padding-top: 20px; padding-left:20px;padding-right: 20px; width:310px;">
     <form action="Insert_editaccount.php" method="POST">

		<h2>Edit Account :</h2>

        <?php
			include_once 'dbh.php';

			$query = "SELECT * FROM customer";
			$result = $conn->query($query);
        ?>

        <P>
        CustomerID:
		<select id="customer">
			<option value="">Select CustomerID</option>

			<?php

            	if($result->num_rows > 0)
            	{
            		while($row_1 = $result->fetch_assoc() )
            		{
            			echo "<option value= '".$row_1['CustomerID']."'> ".$row_1['CustomerID']." ".'-'." ".$row_1['fName']." ".$row_1['lName']." </option>";
            		}
            	} 
            	else
            	{
            		echo '<option value="">CustomerID not available</option>';
            	}

			?>
		</select>
	    </p>

        AccountID:
		<select id="account" name="accountZa">
			<option value="">Select CustomerID First</option>
		</select>

		<P>
        Do you want edit BookNumber?<br>	
 		 <table style="margin-top: 5px;"><tbody>
<tr>
<td style="padding-left: 5px"><label class="container">Yes
 <input type="radio" name="yesno" value="0" onclick="show(0)" checked>
  <span class="checkmark"></span>
</label></td>
<td style="padding-left: 5px"><label class="container">No
   <input type="radio" name="yesno" value="1" onclick="show(1)">
  <span class="checkmark"></span>
</label></td>		
		</tr>
</tbody></table>
		</P>
       
		
		 
		 
        <div><label>BookNumber:</label>
        	<input type="text" name="BookNumber" id="book" pattern=[0-9]{8} placeholder="8 digits number">
        </div>

		<P>
        Do you want edit AccountType?<br>	
 			<table style="margin-top: 5px;"><tbody>
<tr><td style="padding-left: 5px"><label class="container">Yes
 <input type="radio" name="yesno_1" value="2" onclick="show(2)" checked>
  <span class="checkmark"></span>
</label></td>
<td style="padding-left: 5px"><label class="container">No
   <input type="radio" name="yesno_1" value="3" onclick="show(3)">
  <span class="checkmark"></span>
</label></td>		
		</tr>
</tbody></table>	 
		</P>
		 

		 
		 

        <div><label>AccountType:</label>
        	<input type="text" name="AccountType" id="acc" >
        </div>

            <input type="submit" id="submit">

      </form>
        
    </td>
	</TR>
</table>

    </body>
</html>

<style name="dec" type="text/css">
body { background-color:#f0f0f0;}
.midboxbar {background-color: #E6D680;height150px;width: 800px;}
.topbar{width: 100%;background: rgb(160,132,46);
background: linear-gradient(180deg, rgba(160,132,46,1) 0%, rgba(196,173,102,1) 43%, rgba(236,216,155,1) 100%);text-align: right;padding-right: 0px;padding-top: 30px; font-size: 72px;margin: auto;color:#F8F4DF;text-shadow: 1px 1px 2px rgba(73,73,73,0.61);-webkit-box-shadow: 1px 5px 5px -3px rgba(101,101,101,0.81); 
box-shadow: 1px 5px 5px -3px rgba(101,101,101,0.81);}
	h2{color:#8C7A17}
	table {color: #BEA937}
input {
  background: #fff;
  color: #9A9A9A;
  border-radius: 2px;
  border: 1px solid #d1d1d1;
  box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.2);
  outline: none;
	padding-left: 3px; letter-spacing: 1px;

}

	
input:hover {
  box-shadow: inset 1px 2px 8px rgba(0, 0, 0, 0.02);  -webkit-transition: .18s ease-out;
  -moz-transition: .18s ease-out;
  -o-transition: .18s ease-out;
  transition: .18s ease-out;
}

input:focus {
  color: #c3af6f;
  border: 1px solid #B8B6B6;
  box-shadow: inset 1px 2px 4px rgba(0, 0, 0, 0.01), 0px 0px 8px rgba(0, 0, 0, 0.2);
}
	
input#submit {background: #c3ad6e;  border-radius: 5px;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
  color: #fff;	-webkit-transition: .18s ease-out;
  -moz-transition: .18s ease-out;
  -o-transition: .18s ease-out;
  transition: .18s ease-out;  padding: 0.4em 1em 0.2em 1em; font-size: 16px;float: right;margin-right: 10px; margin-bottom: 10px;
	  box-shadow: 0px 1px 8px rgba(239,239,239,0.81);letter-spacing: 1px;
}
	
input#submit:hover {
  -webkit-box-shadow: 0px 1px 5px 1px rgba(195,173,110,0.81); 
	box-shadow: 0px 1px 5px 1px rgba(195,173,110,0.81);-webkit-transition: .18s ease-out;
  -moz-transition: .18s ease-out;
  -o-transition: .18s ease-out;
  transition: .18s ease-out; }
	
	
	
.container {
  display: block;
  position: relative;
  cursor: pointer;
  padding-left:18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}	
	.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;}
		
		.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 15px;
  width: 15px;
  background-color: #eee;
  border-radius: 50%;		
}
	

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #c3af6f;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 5px;
	left: 5px;
	width: 5px;
	height: 5px;
	border-radius: 50%;
	background: white;
}	
	
*::selection{
background:#c3af6f ;
color: #fff ;
}
*::-moz-selection{
background: #c3af6f ;
color: #fff ;
}
*::-webkit-selection{
background: #c3af6f ;
color: #fff ;
}

input#amount 
	{width: 100px;}
fieldset {
    border: 0px;
}
</style>


