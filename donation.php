<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donor_name = $_POST["DONAR_NAME"];
    $donated_amount = $_POST["AMOUNT"];

    // Insert data into the database
    $sql = "INSERT INTO donationcollection (DONAR_NAME, AMOUNT) VALUES ('$donor_name', '$donated_amount')";

    if ($conn->query($sql) === TRUE) {
        echo "Donation recorded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
</head>
<body>
    <h2>Donation Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="DONAR_NAME">Donor Name:</label>
        <input type="text" name="DONAR_NAME" required><br>

        <label for="AMOUNT">Donated Amount:</label>
        <input type="number" step="0.01" name="AMOUNT" required><br>

        <input type="submit" value="Submit Donation">
    </form>
</body>
</html>
