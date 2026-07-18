<?php

include 'db.php';

$name = $_POST['name'];
$number = $_POST['number'];
$mail = $_POST['mail'];
$DOJ = $_POST['DOJ'];

$sql = "INSERT INTO std_data (name, number, email, DOJ) 
values('$name', '$number', '$mail', '$DOJ')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>