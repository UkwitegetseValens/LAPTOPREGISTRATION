<?php
$localhost="localhost";
$user="root";
$password="";
$db="project";
$conn=mysqli_connect($localhost,$user,$password,$db);
if(!$conn){
    die("could not connect");
}
 //echo"connection done";
?>