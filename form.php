
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h3>Student Registration Form</h3>
    <form  method="POST" action="insert.php">
        <label for="name">First Name</label>
        <input type="text" placeholder="Enter your Name" id="name" name="name" required>
<br><br><br>
        <label for="number">Contact</label>
         <input type="tel" id="number" placeholder="Enter your Number" pattern="[0-9]{10}"  name="number" maxlength="10" required>
<br><br><br>

        <label for="mail">Email Address</label>
        <input type="email" placeholder="Enter your Email" id="mail" name="mail" required>
<br><br><br>
        <label for="DOJ">Date of Registration</label>
        <input type="date" id="DOJ" name="DOJ" required>
<br><br><br>

        <button name="submit" type="submit">
            Submit
        </button>
    </form>
</body>
</html>