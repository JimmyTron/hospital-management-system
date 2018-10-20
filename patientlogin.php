<?php
include"connect.php"; 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hospital management system</title>
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style >
		body{
			margin: 0;
            padding: 0;
            background: url('images/3.png');
            background-size: repeat;
            background-position: center; 
            font-family: sans-serif;
		       }
		.loginbox{
			width: 320px;
			height: 420px;
            background:#ccc;
            color:#000;
            top:60%;
            left:50%;
            position: absolute;
            transform:translate(-50%, -50%);
            box-sizing: border-box;
            padding:70px 30px;
		}
		.avatar{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}
		h1{
		margin: 0;
		padding: 0 0 20px;
		text-align: center;
		font-size: 22px;	
		}
		.loginbox p{
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		.loginbox input{
			width: 100%;
			margin-bottom: 20px;
		}
		.loginbox input[type="text"], input[type="password"]{
			border: none;
			border-bottom: 1px solid#fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: #000;
			font-size: 16px;
		}
		.loginbox input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: #8fb8e2;
			color: #000;
			font-size: 18px;
			border-radius: 20px;
		}
		.loginbox input[type="submit"]:hover{
			cursor: pointer;
			background: #ffc107;
			color: #000;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Hospital Management system</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
               
                      <li><a href="index.php">
                    <i class="fa fa-home fa-fw "></i>Home</a>
                </li>
                <li><a href="aboutus.php">
                    <i class="fa fa-info-circle fa-fw"></i><i class="fa fa-caret-down"></i>About us</a>
                </li> 
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                   <i class="fa fa-user-plus fa-fw"> </i><i class="fa fa-caret-down">
                   </i>Sign in</a>
                    <ul class="dropdown-menu dropdown-user">
                     <li><a href="register.php"><i class="fa fa-user-md fa-fw"></i>patient</a>
                  </li>
                     <li><a href="doctorlogin.php"><i class="fa fa-user-md fa-fw"></i>doctor</a>
                  </li>
                  <li><a href="adminlogin.php"><i class="fa fa-user-md fa-fw"></i>admin</a>
                  </li>
              </ul></li>
              <li><a href="contactus.php">
                    <i class="fa fa-phone fa-fw"></i><i class="fa fa-caret-down"></i>Contact Us</a>
                </li>
                
                    </ul>
                        </nav>

<div class="loginbox">
	<img src="images/user.png" class="avatar">
	<h1>login here</h1>
<form action="patientlogin.php" method = "post">

	<?php include"errors.php"; ?>
	<p><label>username :</label></p>
	<input type="text" name="username" placeholder="enter username">
	<p><label>password :</label></p>
	<input type="password" name="password" placeholder="enter password">
	<p><input type="submit" name="login" value="LOGIN">
		<p> Not yet a member? <a href="register.php"> sign in</a></p>
</form>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>


</body>
</html>