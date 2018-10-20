<!DOCTYPE html>
<html>
<head>
  <title> Cure Hospital management System</title>   
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                     <li><a href="doctorlogin.php"><i class="fa fa-user-md fa-fw"></i>Doctor</a>
                  </li>
                  <li><a href="adminlogin.php"><i class="fa fa-user-md fa-fw"></i>Admin</a>
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

  <section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading -->
          <h2>Contact Us</h2>
          <h3> Contact us</h3>
        </div>
      </div>
      <div class="row ">
        <form method="post" action="" id="contactfrm" role="form">
          <div class="col-sm-9">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
            </div>
            <div class="form-group">
              <label for="comments">Comments</label>
              <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
              <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
            </div>
            <div class="result"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>




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