<?php 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="project"; 
 
$conn = mysqli_connect($servername,$username,$password,$dbname); 
 
if(!$conn){ 
    die("connection field :" . mysqli_connect_error()); 
}  

else 
     echo "connection sucessfully";
?>