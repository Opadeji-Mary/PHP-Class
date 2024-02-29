<?php
  // echo 'submitted';
  // print_r($_POST);
  require 'connection.php';
  session_start()
  if(isset($_POST['submit'])){
    print_r($_POST);
    
    // storing input value inside variable
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $Age = $_POST['Age'];
    $email = $_POST['email'];
    $address = $_POST['Address'];
    $phoneno = $_POST['phone no'];
    $city = $_POST['city']

    // verify email
    $query="SELECT * FROM users WHERE email='$email'";
    $con=$dbconnevtion->query($query);
    if($con->num_rows)
    print_r($emailverify);

    if($emailverify->num_rows>0){
      $_SESSION['msg']="Email already existed";
      header('location:signup.php')
    }else{
      $hash = password_hash($password,PASSWORD_DEFAULT);
      $dbquery= "INSERT INTO `user`(`first_name`, `last_name`, `age`, `email`, `address`, `phone no`, `city`) VALUES
       ('$first_name','$last_name','$Age',' $email','$address','$phoneNo','$phoneNo'";

       if($con->query($sql)=== TRUE){
        header('location:login.php');
       }else{
        $_SESSION['msg']="Unsucessful Registration";
        header('location:')
       }
    }


    // $hashedpassword= password_hash($password,PASSWORD_DEFAULT);
    // echo $hashedpassword;
  // }else{
  //   header('location.signup.php');
  }
?>