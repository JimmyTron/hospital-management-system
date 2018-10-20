<?php
  
  $username="";
  $email="";
  $errors= array();

  $db = mysqli_connect('localhost', 'root', '', 'hmsdb');

  if(isset($_POST['register'])){
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    

      if(empty($username)){
        array_push($errors,"Username is required");
      }
      if(empty($email)){
        array_push($errors,"Email is required");
      }
      if(empty($password)){
        array_push($errors,"Password is required");
      }


      if(count($errors)==0){
        
        $sql= "INSERT INTO patients (username, email, password)
                VALUES ('$username','$email','$password')";
        mysqli_query($db, $sql);

        $_SESSION['username']=$username;
        $_SESSION['success']="You are now logged in";
        header('location:appointment.php');// redirect to homepage.
      }
   }

//log user in form login page
   if(isset($_POST['login'])){
     $username= $_POST['username'];
     $password= $_POST['password'];

        //ensure that form fields are properly filled .
       if(empty($username)){
         array_push($errors,"Username is required");
       }
       if(empty($password)){
         array_push($errors,"Password is required");
       }
       if(count($errors)==0){
        
     $query= "SELECT * FROM patients WHERE username= '$username' and password= '$password' ";
     
      $result = mysqli_query($db, $query);
         if(mysqli_num_rows($result)==1){
           //log user in
           $_SESSION['username']=$username;
           $_SESSION['success']="You are now logged in";
           header('location:appointment.php');//redirect to homepage.
         }
         else{
           array_push($errors, "Wrong username/password combination");
         }
       }

   }
   //
   if(isset($_POST['loginsub'])){
     $username= $_POST['username'];
     $password= $_POST['password'];

        //ensure that form fields are properly filled .
       if(empty($username)){
         array_push($errors,"Username is required");
       }
       if(empty($password)){
         array_push($errors,"Password is required");
       }
       if(count($errors)==0){
        
     $query= "SELECT * FROM doctors WHERE username= '$username' and password= '$password' ";
     
      $result = mysqli_query($db, $query);
         if(mysqli_num_rows($result)==1){
           //log user in
           $_SESSION['username']=$username;
           $_SESSION['success']="You are now logged in";
           header('location:appointmenthistory.php');//redirect to homepage.
         }
         else{
           array_push($errors, "Wrong username/password combination");
         }
       }

   }

  // admin
     if(isset($_POST['login_submit'])){
     $username= $_POST['username'];
     $password= $_POST['password'];

        //ensure that form fields are properly filled .
       if(empty($username)){
         array_push($errors,"Username is required");
       }
       if(empty($password)){
         array_push($errors,"Password is required");
       }
       if(count($errors)==0){
        
     $query= "SELECT * FROM admin WHERE username= '$username' and password= '$password' ";
     
      $result = mysqli_query($db, $query);
         if(mysqli_num_rows($result)==1){
           //log user in
           $_SESSION['username']=$username;
           $_SESSION['success']="You are now logged in";
           header('location:adminpatlist.php');//redirect to homepage.
         }
         else{
           array_push($errors, "Wrong username/password combination");
         }
       }

   }
   
  ?>