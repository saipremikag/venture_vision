<?php
$server="localhost";
$username="root";
$password="";
$database="project";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
 //   echo "success";
//}
//else{
    die("Error".mysqli_error());
}
?>