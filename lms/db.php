<?php
$server="localhost";
$user="root";
$password="";
$database="lms";
$con=mysqli_connect($server,$user,$password,$database);
if(!$con){
    die("error");
}
?>