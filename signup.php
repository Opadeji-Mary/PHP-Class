<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div>
        <?php
        session_start();
        if(isset($_SESSION['msg'])){
            echo"<div>".$_SESSION['msg']."</div>";
            session_unset()};
        ))
        ?>
    </div>

<div>
        <div>
            <form action="login.php" method="post">
            <input class="form from-control"  type="text" name="first_name" placeholder="first name"> 
            <br> 
            <input class="form from-control"  type="text" name="last_name" placeholder="last name">
            <br> 
            <input class="form from-control"  type="text" name="age" placeholder="age">
            <br>
            <input class="form from-control"  type="text" name="email" placeholder="email">
            <br> 
            <input class="form from-control"  type="text" name="address" placeholder="address">
            <br> 
            <input class="form from-control"  type="text" name="phone no" placeholder="phone no">
            <br> 
            <input class="form from-control"  type="text" name="city" placeholder="city">
            <br>
            <input class="form from-control"  type="text" name="city" placeholder="city">
            <br>
            <button name="submit" type="submit" value="submit">Submit</button>
            </form>
        </div>
    </div>

</body>
</html>    