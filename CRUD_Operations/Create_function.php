<?php

include('dbConnect.php');

if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $conctact_number = $_POST['contact_number'];

    
    $insertNewUser = mysqli_query($con,"INSERT INTO users (id,name, age,address,contact_number) VALUES('$id','$name', '$age','$address','$conctact_number')");

    if($insertNewUser){
        echo "New record created successfully";
    } else {
        echo "Error: ". mysqli_error($con);
    }
}


?>