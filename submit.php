<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_project_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
    $email = $_POST['email'];

$sql = "INSERT INTO contacts (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you! Your contact details have been submitted.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
