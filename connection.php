<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Mysql123@";
$dbname = "employee_management";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Database connection failed");
}
?>