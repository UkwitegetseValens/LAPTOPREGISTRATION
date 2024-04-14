<?php
include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software development</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="center" >
    <form action="register.php" method="POST"> 
    <h1>LAPTOPS STOCK MANAGEMENT</h1>
    <div class="form" >
        <input type="text" name="serial"  class="textfield" placeholder="enter serial number"> 
        <select class="textfield" name="type">
            <option value="Not selected">Select type of computer</option>
            <option value="LENOVO">LENOVO</option>
            <option value="DELL">DELLH</option>
            <option value="hp">HP ELITEBOOK</option>
            <option value="samsung">SAMSUNG</option>
            <option value="accer">ACCER</option>
            <option value="other">OTHER</option>
        </select>
        <input type="text" name="price" class="textfield" placeholder="enter price">
        <input type="text" name="source" class="textfield" placeholder="enter source">
        <input type="text" name="contact" class="textfield" placeholder="enter contact">
        <input type="text" name="sold" class="textfield" placeholder="in sold ?">
        <input type="text" name="active" class="textfield" placeholder="is active">
        <input type="submit" value="Save" name="register" class="btn" style="background-color: brown;width:200px" >
    </div>
    </form>
 </div>  
</body>
</html>
