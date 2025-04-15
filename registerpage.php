<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petadoption";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

function insertuser($username, $password) {
global $conn;
$hashedpassword = password_hash($password, PASSWORD_DEFAULT); 

$sql = "INSERT INTO registerpage (username, password) VALUES ('$username', '$hashedpassword')";
    
if (mysqli_query($conn, $sql)) {
echo "User inserted successfully!";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

function authenticateUser($username, $password) {
global $conn;
$sql = "SELECT * FROM registerpage WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
if (password_verify($password, $row['password'])) {
echo "Login successful!";
} 
else {
echo "Invalid password!";
}
}
else {
echo "User not found!";
}
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup Form</title>
<style>
label {
display: block;
margin-bottom: 10px;
}
</style>
</head>
<body>
<form id="loginForm" action="dashboard.php" method="post" onsubmit="return validateForm()">
<label for="username">Username:</label>
<input type="text" id="username" name="username" required>

<label for="password">Password:</label>
<input type="password" id="password" name="password" required>
<span id="error-msg" class="error"></span>
<br>
<button type="submit">login</button>
</form>

<script>
function validateForm() {
var username = document.getElementById('username').value;
var password = document.getElementById('password').value;
var errorMsg = document.getElementById('error-msg');

if (username.trim() === '' || password.trim() === '') {
errorMsg.innerHTML = 'Please enter both username and password.';
return false;
}

errorMsg.innerHTML = '';

return true;
}
</script> 
</body>
</html>
