<?php
require 'connection.php';
if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM user WHERE email='$email'";
    $query=$dbconnection->query($query)
    // $emailverify=$dbconnection->query($query);
    // print_r($emailverify);
    if($query->num_rows>0){
        print_r($query);
        $user= $query->fetch_assoc();
        $hashedpassword=$user['password'];
        echo $hashedpassword,$userid;
        if( $passwordverify){
            $_SESSION['userid']=$userid;
            header('location:dashboard.php')
        }
        else{
            l
        }

    }else{
        echo"<div class='alert alert-danger text-center'>invalid email address</div>";
        // header('location.php')
    }
    else{
        echo"<div>"
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="shadow col-8 mx-auto">
            <h1>login page</h1> <br>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="email" placeholder="Email">
            <br> <br>
            <input type="text" name="password" placeholder="Password">
            <br> <br>
            <input type="submit" class="btn btn-success" name="submit" placeholder="submit">
             </form>

        </div>
    </div>
</body>
</html>