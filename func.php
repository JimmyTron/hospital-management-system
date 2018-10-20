<?php
// connect to the database
$con = mysqli_connect("localhost","root","","hmsdb") ;
// if the form is submitted the following will work
if (isset($_POST['login_submit'])) {
	// we have our variables
	$username=$_POST['username'];
	$password=$_POST['password'];
	   // the username and password  in the database should be equal to that which is used in login.
	$query="select * from logintb where username= '$username' and password= '$password' ";
	//the result
	$result=mysqli_query($con,$query);
	//
	if (mysqli_num_rows($result)==1) {
		header("location:dashboard.php");
	}
	else
		{
		header("location: index.html");
		}

}

// appointment
if (isset($_POST['submit'])) {
	
  $fullname=$_POST['fullname'];
  $age=$_POST['age'];
  $weight=$_POST['weight'];
  $phone=$_POST['phone'];
  $address =$_POST['address'];
  $specialist=$_POST['specialist'];
  $medcondition=$_POST['medcondition'];

  $query= "INSERT INTO appointment (fullname, age, weight, phone, address, specialist, medcondition)
    VALUES ('$fullname','$age','$weight', '$phone', '$address', 
    '$specialist', 'medcondition')";
  $result=mysqli_query($con,$query);
if ($result) {
	echo "<script> alert('appointment registered')</script>";
	header("location:appointment.php");
}
        
}
// doctors app
// appointment
if (isset($_POST['submit1'])) {
  
  $fullname=$_POST['fullname'];
  $age=$_POST['age'];
  $weight=$_POST['weight'];
  $phone=$_POST['phone'];
  $address =$_POST['address'];
  $specialist=$_POST['specialist'];
  $medcondition=$_POST['medcondition'];

  $query= "INSERT INTO appointment (fullname, age, weight, phone, address, specialist, medcondition)
    VALUES ('$fullname','$age','$weight', '$phone', '$address', 
    '$specialist', 'medcondition')";
  $result=mysqli_query($con,$query);
if ($result) {
  echo "<script> alert('appointment registered')</script>";
  header("location:appointmenthistory.php");
}
        
}

//admin

if (isset($_POST['submit2'])) {
  
  $fullname=$_POST['fullname'];
  $age=$_POST['age'];
  $weight=$_POST['weight'];
  $phone=$_POST['phone'];
  $address =$_POST['address'];
  $specialist=$_POST['specialist'];
  $medcondition=$_POST['medcondition'];

  $query= "INSERT INTO appointment (fullname, age, weight, phone, address, specialist, medcondition)
    VALUES ('$fullname','$age','$weight', '$phone', '$address', 
    '$specialist', 'medcondition')";
  $result=mysqli_query($con,$query);
if ($result) {
  echo "<script> alert('appointment registered')</script>";
  header("location:adminappointmentlist.php");
}
        
}

function get_patient_details(){
	global $con;
	$query= "select * from appointment";
	$result =mysqli_query($con, $query);
	while ($row=mysqli_fetch_array($result)) {
 $fullname=$row['fullname'];
  $age=$row['age'];
  $weight=$row['weight'];
  $phone=$row['phone'];
  $address =$row['address'];
  $specialist=$row['specialist'];
  $medcondition=$row['medcondition'];
  echo"
   <tr>
       
        <td>$fullname</td>
        <td>$age</td>
        <td>$weight</td>
        <td>$phone</td>
        <td>$address</td>
        <td>$specialist</td>
        <td>$medcondition</td>
      </tr>
  ";
	}
}
// patients list
function get_patientlogin_details(){
  global $con;
  $query= "select * from patients";
  $result =mysqli_query($con, $query);
  while ($row=mysqli_fetch_array($result)) {
  $username=$row['username'];
  $email=$row['email'];
  $password=$row['password'];
  echo"
   <tr>
       
        <td>$username</td>
        <td>$email</td>
        <td>$password</td>
        
      </tr>
  ";

  }
}
   //
if(isset($_POST['submit-add'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $addresst=$_POST['address'];
  $age=$_POST['age'];
  $phone =$_POST['phone'];
  $specialization=$_POST['specialization'];
  $password=$_POST['password'];;

 $query= "INSERT INTO doctors (username, email, address, age, phone, specialization, password)
                VALUES ('$username','$email', '$address',  '$age', '$phone',  '$specialization', '$password')";
 $result=mysqli_query($con,$query);
if ($result) {
  echo "<script> alert('docto added')</script>";
  header("location:doctorlist.php");
}
}
//
function get_patients_details(){
  global $con;
  $query= "select * from doctors";
  $result =mysqli_query($con, $query);
  while ($row=mysqli_fetch_array($result)) {
 $username=$row['username'];
  $email=$row['email'];
  $address =$row['address'];
  $age=$row['age'];
  $phone=$row['phone'];
  $specialization=$row['specialization'];
  $password=$row['password'];
  echo"
   <tr>
       
        <td>$username</td>
         <td>$email</td>
        <td>$address</td>
        <td>$age</td>
       <td>$phone</td>
       <td>$specialization</td>
        <td>$password</td>
      </tr>
  ";
  }
}


 ?>