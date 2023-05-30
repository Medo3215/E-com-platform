<?php
// Establish a connection to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "subscribers";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email from the form
    $email = $_POST["email"];

    // Validate the email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO subscribers (email, timestamp) VALUES (?, NOW())");
        $stmt->bind_param("s", $email);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Thank you for subscribing!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Invalid email address.";
    }
}

// Close the database connection
$conn->close();
?>
