
<?php include("func.php");
?>
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
                <a class="navbar-brand" href="index.html">Doctor Dashboard</a>
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
                            <a href="appointmenthistory.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user-md fa-fw"></i> appointments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="doctorsappointment.php">add an appointment</a>
                                </li>
                                <li>
                                    <a href="appointmenthistory.php">appointment history</a>
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

                  </div>

               <div class="card-body" style="background-color:#3498DB; color:#ffffff;">
               	<h3>Appointment History</h3>
               </div>
 <div class="table-responsive">          
  <table class="table table-striped">
    <thead>
      <tr>
   
        <th>Fullname</th>
        <th>Age</th>
        <th>Weight</th>
        <th>phone</th>
        <th>address</th>
        <th>specialist</th>
        <th>medcondition</th>
      </tr>
    </thead>
    <tbody>
     <?php get_patient_details();?>
    </tbody>
  </table>
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



