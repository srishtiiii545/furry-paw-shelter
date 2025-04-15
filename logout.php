<?php
session_start();
session_unset();
session_destroy();
echo "<script>
    alert('You have been logged out');
    window.location='home page.php';

</script>";
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .popup {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 10px;
        }
        .btn.cancel {
            background-color: #dc3545;
        } */

.submit {
    background-color: #febd69;
    color: #111;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.submit:hover {
    background-color: #f7ca88;
}

    </style>
</head>
<body>

    <div class="popup">
        <h2>Are you sure you want to logout?</h2>
        <button class="btn" onclick="logout()">Yes</button>
        <button class="btn cancel" onclick="closePopup()">No</button>
    </div>

    <script>
        function logout() {
            // Add logout logic here
            alert("You have been logged out.");
            // Redirect to logout page or perform any other actions
        }

        function closePopup() {
            // Close the popup
            window.history.back();
        }
    </script>

</body>
</html> -->
