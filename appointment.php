<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Appointment</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Patients Dashboard</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
               
                      
                        <li class="divider"></li>
                        <li><a href="Logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      
                        <li>
                            <a href="#.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user-md fa-fw"></i> appointments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="appointment.php">add an appointment</a>
                                </li>
                               
                            </ul>
                        </li>
                       
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
 <div>
   <p>  <h2>Welcome, Kindly Book an appointment!</h2> </p>
      <div class='alert alert-info'>
             
            <form action="func.php" method="POST">

            <div class="form-group" >
              <label for="usr">Full Name:</label>
              <input type="text" class="form-control" id="usr" name="fullname" required>
            </div>

            <div class="form-group">
              <label for="pwd">Age: (in years)</label>
              <input type="number" class="form-control" id="pwd" name="age" min="1" max="200" required>
            </div>
            <div class="form-group">
              <label for="pwd">Weight (in kgs):</label>
              <input type="tel" class="form-control" id="pwd" name="weight" min="1" max="300" required>
            </div>
            <div class="form-group">
              <label for="pwd">Phone No:</label>
              <input type="tel" class="form-control" id="pwd" name="phone" required>
            </div>
            <div class="form-group">
            <div class="form-group">
             <label for="pwd">Next on Kin:</label>
              <input type="text" class="form-control" id="pwd" name="nextofkin" required>
            </div>
              <label for="pwd">Address:</label>
              <textarea class="form-control" id="pwd" name="address" required></textarea>
            </div>

            <div class="form-group">
              <label for="pwd">Doctor Needed:</label>
              <select required value=1 name="Specialist">
                <option value="Audiologist" class="option">Audiologist - Ear Expert</option>
                <option value="Allergist" class="option">Allergist - Allergy Expert</option>
                <option value="Anesthesiologist" class="option">Anesthesiologist - Anesthetic Expert</option>
                <option value="Cardiologist" class="option">Cardiologist - Heart Expert</option>
                <option value="Dentist" class="option">Dentist - Oral Care Expert</option>
                <option value="Dermatologist" class="option">Dermatologist - Skin Expert</option>
                <option value="Endocrinologist" class="option">Endocrinologist - Endocrine Expert</option>
              </select>
            </div>

            <div class="form-group">
              <label for="pwd">Medical Condition / Purpose of visit:</label>
              <textarea class="form-control" id="pwd" name="medcondition" required></textarea>
            </div>

            <div class="form-group">
              <input type="submit"  name="submit" class="btn btn-primary" >
              <input type="reset" name="" class="btn btn-danger">
            </div>
          </form>
</div>
            </div>
           
        </div>
 
    </div>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>


</body>



