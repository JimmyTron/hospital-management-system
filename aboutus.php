<!DOCTYPE html>
<html>
<head>
  <title> About us</title>   
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body >
  <div class="wrap">
<div id="wrapper">
            <div class="navbar-wrapper">
        	<div class="container">
        <nav class="navbar navbar-default  navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Hospital Management System</a>
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
                     <li><a href="register.php"><i class="fa fa-user-md fa-fw"></i>patient </a>
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
                           </li>
                      </ul>
         </nav>
</div>
        </div>



<div class ="container">
	<p><?php include('slideshow.php');?></p>

<section id="aboutUs">
  <div class="container">
    <div class="heading text-center"> 
         <h2>About Us</h2>
      <p>Our Mission and Values </p>
    </div>
    <div class="row feature design">
      <div class="card">
      	<div class="card-body">
            <p>The HMS is a comprehensive, integrated information system designed to manage all the aspects of a hospital's operation, such as medical, administrative, financial, and legal issues and the corresponding processing of services. It integrates all the information regarding patients, doctors, staff, hospital administrative details etc. into one software. It has sections for various professionals that make up a hospital.</p>
      </div>
      <div class="area2 columns feature-media left"> <img src="images/feature-img-1.png" alt="" width="100%"> </div>
    </div>
  
    </div>
  </div>
</section>
</div>
</div>
</div>

  </div>

 <footer  class="footer">
  <div class="container">
  
     <p class="text-muted"> Copyright| All Rights Reserved.</p>
   </div>
 </footer>


 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>

</body>
</html>