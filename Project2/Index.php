
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
     
     $email = $_POST['username'];
     $pass = $_POST['password'];

     // Prepare and bind
     $stmt = $conn->prepare("Select * from users where username = ? and password = ?");
     $stmt->bind_param("ss", $email, $pass);
     $stmt->execute();
     $rs = $stmt->get_result();
     // Execute the statement
     if ($rs->num_rows>0) {
         echo "<script>alert('Login Sucessfull')</script>";
     } else {
         echo "<script>alert('Wrong username or Password')</script>";
     }

     // Close the connection
     $stmt->close();
     $conn->close();
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Login Form</title>
  <style>
    body {
      background-color: silver;
      font-family: Arial, sans-serif;
    }

    .login-box {
      background-color:rgb(94, 60, 231);
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
  <h2>STUDENT LOGIN FORM</h2>
 
  <form action="Index.php" method="post">
    <input type="text" name="username" placeholder="USERNAME" value="" required>
    <input type="password" name="password" placeholder="PASSWORD" required>
    <div class="footer">
    

       <button type="submit">Login</button>
       <button ><a href="Register.php">Student register</a></button>
       <button ><a href="TRegister.php">Teacher register</a></button>
       <button ><a href="TLogin.php">Teacher Login</a></button>
    
    


    </div>
  </form>
</div>

</body>
</html>


