<?php
include("connection.php");
if(isset($_POST['register'])){
    $serial = $_POST['serial'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $source = $_POST['source'];
    $contact = $_POST['contact'];
    $sold = $_POST['sold'];
    $active = $_POST['active'];
    if(empty($serial) || empty($type) || empty($contact) || empty($price) || empty($source) || empty($sold) || empty($active)){
        echo "Please fill out all information before submitting.";
    } else {
        $check= "SELECT * FROM laptop WHERE Serial_Number = '$serial' OR Contact = '$contact'";
        $response= mysqli_query($conn, $check);
        if(mysqli_num_rows($response) > 0) {
            echo "Serial number or contact already exists.";
        } else {
            $query = "INSERT INTO laptop(Serial_Number, Type_laptop, Price, Source, Contact, InSold, InActive) 
                      VALUES ('$serial', '$type', '$price', '$source', '$contact', '$sold', '$active')";
            $result = mysqli_query($conn, $query);
            if(!$result){
                die('Could not insert:'. mysqli_error($conn)); 
            }
            header("Location:displaying.php");
        }
    }
}
?>
