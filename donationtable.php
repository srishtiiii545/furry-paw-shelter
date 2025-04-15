<?php
include 'connection.php';
// Process donation form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donor_name = $_POST["donor_name"];
    $donated_amount = $_POST["donated_amount"];

    // Insert data into the database
    $sql = "INSERT INTO donationcollection (DONOR_NAME,DONATED_AMOUNT) VALUES ('$donor_name', '$donated_amount')";

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

    <!-- Donation Form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="donor_name">Donor Name:</label>
        <input type="text" name="donor_name" required><br>

        <label for="donated_amount">Donated Amount:</label>
        <input type="number" step="0.01" name="donated_amount" required><br>

        <input type="submit" value="Submit Donation">
    </form>
</body>
</html>
