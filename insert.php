<?php

include 'db.php';

$name = $_POST['name'];
$number = $_POST['number'];
$mail = $_POST['mail'];
$DOJ = $_POST['DOJ'];

$sql = "INSERT INTO std_data (name, number, email, DOJ)
VALUES ('$name', '$number', '$mail', '$DOJ')";

if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo mysqli_error($conn);
}

?>