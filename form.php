<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Registration</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Student Registration Form</h2>

<form id="studentForm">

<div class="input-box">
<label>First Name</label>
<input type="text" name="name" placeholder="Enter Name" required>
</div>

<div class="input-box">
<label>Contact</label>
<input type="tel" name="number" placeholder="Enter Contact Number" pattern="[0-9]{10}" required>
</div>

<div class="input-box">
<label>Email Address</label>
<input type="email" name="mail" placeholder="Enter Email" required>
</div>

<div class="input-box">
<label>Date of Registration</label>
<input type="date" name="DOJ" required>
</div>

<button type="submit">Register</button>

</form>

<div id="message"></div>

<hr>

<h2>Student Records</h2>

<div id="tableData"></div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="script.js"></script>

</body>
</html>