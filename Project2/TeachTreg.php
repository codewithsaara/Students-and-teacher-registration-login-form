<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$user = $_POST['username'];
$pass = $_POST['password'];
$confirm = $_POST['confirm_password'];

// Check password match
if ($pass != $confirm) {
    die("Passwords do not match!");
}

// Insert into database
$stmt = $conn->prepare("INSERT INTO tusers(username, password) VALUES (?, ?)");
$stmt->bind_param("ss",$user, $pass);

if($stmt->execute() ) {
    echo "<script>alert('Registred Sucessfully')</script>";
    // Redirect to login page if needed
    // header("Location: teacher_login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 }
?>








?>