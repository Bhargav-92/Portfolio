<?php
$server_name = 'localhost';
$user_name = 'root';
$user_pass = '';
$database_name = 'portfolio';

$con = mysqli_connect($server_name , $user_name , $user_pass , $database_name);

if(!$con){
    die("Connection failed ".mysqli_error());
}
else{
    // echo('<Script>alert("Database Connected sucessfully");</Script>');
}
?>

