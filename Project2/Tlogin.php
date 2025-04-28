<?php
// Default values
$error = "";
$username = "";
$password = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // // Dummy credentials
    // $valid_username = "student";
    // $valid_password = "12345";

    if ($username == $valid_username && $password == $valid_password) {
        echo "<script>alert('Login Successful!');</script>";
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Teacher Login Form</title>
  <style>
    body {
      background-color: silver;
      font-family: Arial, sans-serif;
    }

    .login-box {
      background-color:rgb(86, 75, 129);
      width: 400px;
      margin: 100px auto;
      padding: 50px;
      border-radius: 30px;
      text-align: center;
    }

    .login-box h2 {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .login-box p {
      font-size: 12px;
      color: #2c3e50;
      margin-bottom: 20px;
    }

    .login-box input {
      display: block;
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 8px;
      background: #f8cfcf;
    }

    .footer {
      display: flex;
      justify-content: space-between;
      margin-top: 15px;
      background-color: #4b3621;
      padding: 10px;
      border-radius: 0 0 10px 10px;
    }

    .footer button, .footer a {
      padding: 10px 20px;
      text-decoration: none;
      color: white;
      background-color: #e74c3c;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .footer a {
      background: none;
      color: white;
      font-weight: bold;
    }

    .error {
      color: yellow;
      font-size: 14px;
      margin-top: 10px;
    }

  </style>
</head>
<body>

<div class="login-box">
  <h2>TEACHER LOGIN FORM</h2>
 
  <?php if ($error): ?>
    <div class="error"><?= $error ?></div>
  <?php endif; ?>
  <form method="post">
    <input type="text" name="username" placeholder="USERNAME" required>
    <input type="password" name="password" placeholder="" required>
    <div class="footer">
      <a href="Register.php">REGISTER</a>
      <button type="submit">Login</button>
      
    </div>
  </form>
</div>

</body>
</html>


