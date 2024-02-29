<?php
require 'connection.php'
session_start();
if(isset($_SESSION['userid'])){
    $id = $_SESSION['userid'];
    echo $id;
    $query= "SELECT * FROM user WHERE user_id=$id";
    $querycon=$dbconnection->query($query);
    print_r($querycon);
     $user= $querycon->fetch_assoc();
     print_r($user);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Hello

    </div>
</body>
</html>