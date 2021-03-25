    <?php
    	session_start();
    ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Log In system</title>
</head>

<body>
<strong data_temp_dwid="0">Login Here</strong><strong data_temp_dwid="0">Login Here</strong><strong data_temp_dwid="0">Login Here</strong><strong data_temp_dwid="0">Login Here</strong>
</body>
</html>
<div class="bigwall"> <div class="wall"> &nbsp;</div> </div> 
<div class="midbox"><table border="0" cellpadding="0" style="overflow-p:auto;max-width:600px;position:relative;margin-right:auto;margin-left:auto;margin-top:20px;=-webkit-box-shadow: 2px 6px 5px 0px rgba(128,128,128,0.65);
-moz-box-shadow: 2px 6px 5px 0px rgba(128,128,128,0.65);
box-shadow: 2px 6px 5px 0px rgba(128,128,128,0.65);background: transparent!important;">

<TR>
<!-- Row 2 -->

<td style="padding:10px;"> 
<td style="padding:10px;width: 300px">
       <form action= "login_check.php" method="POST">
       	<div class="svg-wrapper">
  <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
    <rect class="shape" height="60" width="320" />
    <div class="text" style="text-align: center"><strong>Login Here</strong></div>
  </svg>
</div>

		<p>
		<label>Email:</label>
		<input type="text" name="email" required>
	    </p>

		<p>
		<label>Password:</label>
		<input type="text" name="password" required>
	    </p>

        <p> 
          		<table><tbody>
<tr> <td>Position:</td>
<td style="padding-left: 5px"><label class="container">Staff
 <input type="radio" name="pos" value="Staff" checked required>
  <span class="checkmark"></span>
</label></td>
<td style="padding-left: 5px"><label class="container">Manager
  <input type="radio" name="pos" value="Manager"checked required>
  <span class="checkmark"></span>
</label></td></tr>
</tbody></table>   
		   
        </p>

		   

		   
		   
		   
            <input type = "submit" id="submit">  <a href="indexhome.php" >Home</a>
        </form>
        
    </td>
	</TR>
</table>
</div>
    </body>
</html>







<style name="dec" type="text/css">
body { background-color:#f0f0f0;}
.bigwall{width:auto;height:auto;-webkit-transition: .18s ease-out;
  -moz-transition: .18s ease-out;
  -o-transition: .18s ease-out;
  transition: .18s ease-out;}
.bigwall:hover .wall{-webkit-filter: blur(0px);   -moz-filter: blur(0px); -o-filter: blur(0px); -ms-filter: blur(0px); filter: blur(0px);-webkit-transition: .18s ease-out;
  -moz-transition: .18s ease-out;
  -o-transition: .18s ease-out;
  transition: .18s ease-out;}
.wall{background:#fff url(https://i.imgur.com/B5JI5zA.jpg); background-repeat:no-repeat; background-position:50% 0%; background-size:100%;width:100%;height:100%;position:fixed;top:0px;left:0px; 
-webkit-filter: blur(5px); -moz-filter: blur(5px); -o-filter: blur(5px); -ms-filter: blur(5px); filter: blur(5px);-webkit-transition: .18s ease-out;
  -moz-transition: .18s ease-out;
  -o-transition: .18s ease-out;
  transition: .18s ease-out;} 
	
	.midbox {top:50%!important;margin-top:-104.4px!important;left:50%!important;margin-left:-167.5px!important;position:fixed!important;background-image: url(https://i.imgur.com/8qTnZS6.png);background-repeat: repeat;-webkit-box-shadow: 0px 2px 5px 2px rgba(255,255,255,0.39); 
box-shadow: 0px 2px 5px 2px rgba(255,255,255,0.39);}	
	
.midboxbar {background-color: #E6D680;height150px;width: 800px;}
.topbar{width: 100%;background: rgb(160,132,46);
background: linear-gradient(180deg, rgba(160,132,46,1) 0%, rgba(196,173,102,1) 43%, rgba(236,216,155,1) 100%);text-align: right;padding-right: 0px;padding-top: 30px; font-size: 72px;margin: auto;color:#F8F4DF;text-shadow: 1px 1px 2px rgba(73,73,73,0.61);-webkit-box-shadow: 1px 5px 5px -3px rgba(101,101,101,0.81); 
box-shadow: 1px 5px 5px -3px rgba(101,101,101,0.81);}
	h2{color:#8C7A17}
	table {color: #638c99;text-shadow: 0px 0px 4px #FFFFFF;}
input {
  background: transparent;
  color: #fff;
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
  color: #638c99;
  border: 1px solid #B8B6B6;
  box-shadow: inset 1px 2px 4px rgba(0, 0, 0, 0.01), 0px 0px 8px rgba(0, 0, 0, 0.2);
}
	
input#submit {background: #638c99;  border-radius: 5px;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
  color: #fff;	-webkit-transition: .18s ease-out;
  -moz-transition: .18s ease-out;
  -o-transition: .18s ease-out;
  transition: .18s ease-out;  padding: 0.4em 1em 0.2em 1em; font-size: 16px;text-align: center;margin-left: 100px; margin-right: 10px; 
	  box-shadow: 0px 1px 8px rgba(239,239,239,0.81);letter-spacing: 1px;
}
	
input#submit:hover {
  -webkit-box-shadow: 2px 1px 10px -1px #638C99; 
box-shadow: 2px 1px 10px -1px #638C99;-webkit-transition: .18s ease-out;
  -moz-transition: .18s ease-out;
  -o-transition: .18s ease-out;
  transition: .18s ease-out; }


#home:hover {
  -webkit-box-shadow: 2px 1px 10px -1px #638C99; 
box-shadow: 2px 1px 10px -1px #638C99;-webkit-transition: .18s ease-out;
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
  background-color: #638c99;
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
	
.svg-wrapper {
  position: relative;
  top: 50%;
height: 70px;
	  margin: 0 auto;
  width: 320px;  
}
.shape {
  stroke-dasharray: 140 540;
  stroke-dashoffset: -474;
  stroke-width: 8px;
  fill: transparent;
  stroke: #638c99;
  border-bottom: 5px solid black;
  transition: stroke-width 1s, stroke-dashoffset 1s, stroke-dasharray 1s;
}
.text {
  font-family: 'Roboto Condensed';
  font-size: 32px;
  line-height: 32px;
  letter-spacing: 8px;
  color: #fff;
  top: -48px;
  position: relative;
  text-shadow: 1px 1px 1px #505050;
}
.svg-wrapper:hover .shape {
  stroke-width: 2px;
  stroke-dashoffset: 0;
  stroke-dasharray: 760;
}	
	
</style>