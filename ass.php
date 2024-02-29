<?php
require 'connection.php';

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];   
    $age = $_POST['age'];
    $city = $_POST['city'];
    $password = $_POST['password']

    // $query="SELECT * FROM users WHERE email='$email'"
    // hashed password
    $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
    echo $hashedpassword;

    $stmt = $your_database_connection->prepare("INSERT INTO `assignment`(first_name, last_name, email, phone_no, address, age, city, password) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss", $first_name, $last_name, $email, $phone_no, $address, $age, $city, $password);

    if($stmt->execute()){
        echo "Data insert successfully.";
    } else{
        echo "Error: ". $stmt->error;
    }
    $stmt->close();
    $your_database_connection->close();
    } else {
        header('location: Assignment.php');
    }
?>