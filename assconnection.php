<?php
$localhost='localhost';
// $username='root';
// $password='';
// $database='levelfour';
$dbconnection = new mysqli ($localhost,$database);
   if ($dbconnection->connect_error){
    echo 'Not connected'.$dbconnection->connect_error;
   }else{
    echo 'connected';
    }
?>