<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="teest.php" method="POST">
        <input type="text"  id="name" name="quan" required>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>

<?php

$item = "pizza";
$price = 10.99;

if (isset($_POST["submit"])) {
$quantity = $_POST['quan'];
$total= NULL;
$total = $price * $quantity;

echo "you have ordered {$quantity} {$item}";
echo "your order total is \${$total}";
}
?>