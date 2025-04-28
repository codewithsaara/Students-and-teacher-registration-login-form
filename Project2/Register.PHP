<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Registration</title>
    <style>
        body {
            background: #3399cc;
            font-family: Arial, sans-serif;
        }
        .register-box {
            background: white;
            width: 350px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background: #0073e6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background: #0059b3;
        }
    </style>
</head>
<body>
    <div class="register-box">
        <h2> Student Register</h2>
        <form action="Register.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="password" required>
            <input type="password" name="confirm_password" placeholder="confirm Password" required>
            <button class="btn" type="submit">Register</button>
            <button class="btn" type="button" onclick="location.href='index.php'">Login</button>
        </form>
    </div>
</body>
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
$stmt = $conn->prepare("INSERT INTO users(username, password) VALUES (?, ?)");
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
</html>
