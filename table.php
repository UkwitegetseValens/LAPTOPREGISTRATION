<?php
include("connection.php");
$query= "CREATE TABLE laptop(id integer(9) PRIMARY KEY not null,
Serial_Number VARCHAR(20),Type_laptop VARCHAR(9),
Price VARCHAR(20),
Source VARCHAR(20),
Contact VARCHAR(20),
InSold VARCHAR(20),
InActive VARCHAR(20))";
$result=mysqli_query($conn,$query);
if(!$query){
    die("could not create TABLE");
}
echo"creation succesfully";
?>