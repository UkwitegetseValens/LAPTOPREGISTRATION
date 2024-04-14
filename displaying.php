<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laptop List</title>
<style>
    #addButton {
        float: right;
        width: 100px;
        height: 30px;
        margin-top: 10px;
        margin-right: 10px;
        padding: 5px 10px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    
    }
</style>
</head>
<body>

<button id="addButton" onclick="location.href='laptopregistration.php'">Add Laptop</button>

<?php
include("connection.php");

if(isset($_POST['delete'])){
    $id_to_delete = $_POST['id_to_delete'];
    $sql = "DELETE FROM laptop WHERE id = $id_to_delete";
    mysqli_query($conn, $sql);
}

$query="SELECT * FROM laptop";
$result=mysqli_query($conn,$query);

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' width='100%'>
            <tr style='color:red;'>
                <th style='background:orange;'>id</th>
                <th>Serial_Number</th>
                <th>Type_laptop</th>  
                <th>Price</th>  
                <th>Source</th>  
                <th>Contact</th>  
                <th>InSold</th>  
                <th>InActive</th>  
                <th>Action</th>
            </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["Serial_Number"] . "</td>
                <td>" . $row["Type_laptop"] . "</td>
                <td>" . $row["Price"] . "</td>
                <td>" . $row["Source"] . "</td>
                <td>" . $row["Contact"] . "</td>
                <td>" . $row["InSold"] . "</td>
                <td>" . $row["InActive"] . "</td>
                <td>
                    <form method='post' action=''>
                        <input type='hidden' name='id_to_delete' value='" . $row["id"] . "'>
                        <button type='submit' name='delete' style='color:blue; width: 80px;'>delete</button>
                    </form>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "ther is no laptop added yet";
}

if(isset($_POST['search'])){
    header("Location:laptopregistration.php");
}
?>

</body>
</html>
