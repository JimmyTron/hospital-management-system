<!DOCTYPE html>
<html>
<head>
  <title>  Hospital management System</title>   
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">>
</head>
<body >

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
                   </li>
               
            </ul>
           
</nav>
</div>
        </div>



<div class ="container">
	<p><?php include('slideshow.php');?></p>

  <div class="container">
    <div class="row"> 
   <div class="col-md-3 text-center">
        <div class="b1"><img src="images/a1.jpg"></i>
        <h3>patient registration</h3>
        <p>This encompasses patient’s name, address and contact information,age and purpose of visiting the hospital.</p>
      </div></div>
    
      <div class="features-item col-md-3 text-center">
        <div class="b1"><img src="images/a2.jpg" alt="" /></i>
        <h3>Appointment </h3>
        <p> There is effective scheduling of appointments of patients for the doctors.</p>
      </div></div>
     <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="images/a3.jpg" alt="" /></i>
        <h3>lab management</h3>
        <p> records and disseminate the information regarding the tests performed</p>
      </div></div>
     
      <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="images/a4.jpg" alt="" /></i>
        <h3>pharmacy management</h3>
        <p>Receive prescriptions from consulting doctors; send dispensing unit down to a particular patient, without any need for manual intervention.</p>
      </div></div>
    
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