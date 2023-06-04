<?php

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create a connection to your database
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "contact_submissions"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to insert form data into a table
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo '<div style= "z-index: 1; background-color: #d4edda; padding: 20px 40px; border-radius: 5px; border-left: 8px solid #3ad66e;">
    <h3 style="color: #333;">Thank you for contacting us!</h3>
    <p style="color: #666;">We will get back to you soon.</p>
</div>';
    
} else {
    echo '<div style="z-index: 1; background: #f8d7da; font-size: 14px; padding: 20px 40px; width: 100%; border-left: 8px solid #dc3545; 
    border-radius: 4px; color: #721c24; margin-bottom: 20px;">Error: ' . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
