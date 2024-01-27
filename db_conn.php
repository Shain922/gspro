<?php
$servername="localhost";
$username="root";
$passoword="";
$dbname="gspro";

$conn=mysqli_connect($servername,$username,$passoword,$dbname);
if(!$conn){
   die("connection faild".mysqli_connect_error());
}
 //echo"connect sucessfuly";
?>
