<?php
    session_start();
    include_once "dbh.php";
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="widhth=device-width,
    initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            user-select: none;
            box-sizing: border-box;
            font-family: Cambria, "Hoefler Text", "Liberation Serif", 'Times New Roman', Times, serif;
        }

        /* topbar syntax */
        .topbar {
            width: 100%;
            line-height: 90px;
            background: rgb(160, 132, 46);
            background: linear-gradient(180deg, rgba(160, 132, 46, 1) 0%, rgba(196, 173, 102, 1) 43%, rgba(236, 216, 155, 1) 100%);
            text-align: right;
            padding-right: 0px;
            padding-top: 30px;
            font-size: 72px;
            margin: auto;
            color: #F8F4DF;
            text-shadow: 1px 1px 2px rgba(73, 73, 73, 0.61);
            -webkit-box-shadow: 1px 5px 5px -3px rgba(101, 101, 101, 0.81);
            box-shadow: 1px 5px 5px -3px rgba(101, 101, 101, 0.81);
        }

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

        /* Side bar */
        .sidebar {
            position: fixed;
            width: 250px;
            height: 100%;
            left: -250px;
            transition: left 0.4s ease;
            z-index: 1;
        }

        .sidebar.show {
            left: 0px;
            top: 0;
            z-index: 1;
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
            z-index: 1;
        }

        nav ul li {
            line-height: 60px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
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
            border-left: 3px solid transparent;
            text-shadow: 1px 1px 1px #A7A7A7;
        }

        nav ul li.active a {
            color: white;
            background: #c3af6f;
            text-shadow: 1px 1px 1px #A7A7A7;
        }

        nav ul li a:hover {
            background: #988856;
            -webkit-box-shadow: 0px 1px 5px 1px rgba(195, 173, 110, 0.81);
            box-shadow: 0px 1px 5px 1px rgba(195, 173, 110, 0.81);
        }

        nav ul ul {
            position: static;
            display: none;
        }

        nav ul .review-show.show2 {
            display: block;
        }
        nav ul .analysis-show.show3 {
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

        /* Hero Section */
        #hero {
            width: 100%;
            height: 100vh;
            background: url("manager.jpg") top center;
            background-size: cover;
            position: relative;
        }

        #hero:before {
            content: "";
            background: rgba(0, 0, 0, 0.65);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }

        #hero .hero-container {
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 0 15px;
        }

        #hero h1 {
            margin: 0 0 10px 0;
            font-size: 64px;
            font-family: "Satisfy", serif;
            color: #fff;
            letter-spacing: 7px;
        }

        #hero h2 {
            color: #eee;
            margin-bottom: 50px;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            letter-spacing: 5px;
        }

        @media (min-width: 1024px) {
            #hero {
                background-attachment: fixed;
            }
        }

        @media (max-width: 575px) {
            #hero h1 {
                font-size: 40px;
            }

            #hero h2 {
                text-align: center;
                margin-bottom: 30px;
            }
        }

        @-webkit-keyframes up-down {
            0% {
                transform: translateY(5px);
            }

            100% {
                transform: translateY(-5px);
            }
        }

        @keyframes up-down {
            0% {
                transform: translateY(5px);
            }

            100% {
                transform: translateY(-5px);
            }
        }
    </style>    
    
    <title>Number of staff in each branch</title>

    <style>
        .border {
            display: inline-block;
            width: 700px;
            height: 450px;
            margin: 5px;
        }

        div.b {
            line-height: 1.6;
        }

    </style>

    
           <title> Number of staff in each branch </title>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <style type="text/css">
            table {
                counter-reset: tableCount;
                border-collapse: collapse;
                width: 100%;
                color: #c3af6f;
                font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
                font-size: 16px;
                text-align: left;
            }
            .counterCell:before{
                content: counter(tableCount);
                counter-increment: tableCount;
				padding-left:20px;
            }
            th{
                background-color: #c3af6f;
                color: white;
				padding-left: 20px;
            }
            tr:nth-child(even) {background-color: #f2f2f2}
        </style>
   
</head>



<body>

    <!-- Nav bar -->
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
            ?></div>
        <ul>
            <li><a href="#" class="review-btn">Review
                    <span class="fas fa-caret-down third"></span>
                </a>
                <ul class="review-show">
                    <li><a href="Review.php">Adding Review</a></li>
                    <li><a href="ViewReview.php">All Review</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="analysis-btn">Analysis
                   <span class="fas fa-caret-down fourth"></span>
                </a>
                <ul class="analysis-show">
                    <li><a href="Analysis1.php">Number of staff in each branch</a></li>
                    <li><a href="Analysis2.php"> Overview rate of staff in each branch</a></li>
                    <li><a href="Analysis3.php">The number of new account in each branch</a></li>
                    <li><a href="Analysis4.php">Total amount of deposit in each branch</a></li>
                    <li><a href="Analysis5.php">Total amount of withdraw in each branch</a></li>           
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
        $('.review-btn').click(function () {
            $('nav ul .review-show').toggleClass("show2")
            $('nav ul .third').toggleClass("rotate");
        });
        $('.analysis-btn').click(function () {
            $('nav ul .analysis-show').toggleClass("show3");
            $('nav ul .fourth').toggleClass("rotate");
        });

        $('nav ul li').click(function () {
            $(this).addClass("active").siblings().removeClass("active");
            $('#dropdown').hide();
        });
    </script>

<div class="topbar">Syntax Bank.&nbsp; &nbsp; </div>
<table border="0" cellpadding="0" style="overflow-p:auto;max-width:700px;position:relative;margin-right:auto;margin-left:auto;margin-top:20px;background-color:#fff!important;-webkit-box-shadow: 2px 6px 5px 0px rgba(128,128,128,0.65);
-moz-box-shadow: 2px 6px 5px 0px rgba(128,128,128,0.65);
box-shadow: 2px 6px 5px 0px rgba(128,128,128,0.65);">

<TR>
<!-- Row 1 -->
<TD align=left colspan=4 style="background: #c4af6b;height: 30px;padding-left:10px"> <span style="font-size:22px;color: #fff;text-shadow: 1px 1px 2px rgba(73,73,73,0.61);"><strong>  Number of staff in each branch</strong></span></TD>
</TR>
<tr>
<td style="background: #fff;padding: 20px;">
	
	<?php
 $sql = "SELECT b.BranchID, b.Name, COUNT(s.StaffID) AS StaffNumber
                        FROM staff s, branch b
                        WHERE s.BranchID = b.BranchID
                        GROUP BY b.BranchID
                        ORDER BY StaffNumber DESC;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        $chart_data ='';
            while($row = mysqli_fetch_assoc($result)){
                $chart_data .="{ Name:'".$row["Name"]."', StaffNumber:".$row["StaffNumber"]."}, ";
            }
            $chart_data = substr ($chart_data,0,-2);
        ?>
	
	<h3>Graph shows number of staff in each branch</h3>
        <div id="chart" style="height: 250px; width: 350px;margin: auto;" data-colors= "#c3af6f"></div>

	
</td>
</tr>
	
	
	
	
	
	
<TR>
<!-- Row 2 -->
<td style="background: #fff;padding: 0px 20px 20px 20px;">
 <center style="color:#fff"><div css="pet" style="letter-spacing: 0.4px; width:680px; height: 200px; overflow: auto; border: 1px solid;">
	 
	 <table>
            <tr> 
                <th>Rank</th>
                <th>BranchID</th>
                <th>BranchName</th>
                <th>Amount of staff</th>
            </tr>
 <?php
               
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $field1name = $row["BranchID"];
                        $field2name = $row["Name"];
                        $field3name = $row["StaffNumber"];
 
                    echo '<tr>
                        <td class="counterCell"></td>
                        <td>'.$field1name.'</td> 
                        <td>'.$field2name.'</td> 
                        <td>'.$field3name.'</td> 
                        </tr>';
                    }
                    echo "</table>";
                }
                else {
                    echo "0 result";
                }
            ?>        
        </table>

	 </center>
	</td>
	</tr>
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
	
/* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  background: transparent;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #c3af6f;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #c3af6f;
	
	  -webkit-box-shadow: 0px 1px 5px 1px rgba(195,173,110,0.81); 
	box-shadow: 0px 1px 5px 1px rgba(195,173,110,0.81);-webkit-transition: .18s ease-out;
  -moz-transition: .18s ease-out;
  -o-transition: .18s ease-out;
  transition: .18s ease-out; 
}	
	
	
	
	
</style>
<script>
var labelColor = jQuery('#chart').css('color');
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'Name',
 ykeys:['StaffNumber'],
 labels:['StaffNumber'],
 hideHover:'auto',
 stacked:true,
 gridTextColor: labelColor,
 barColors: jQuery('#chart').data('colors').split(',')
});
</script>

