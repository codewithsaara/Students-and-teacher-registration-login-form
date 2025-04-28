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
        <h2> Teacher Register</h2>
        <form action="TeachTreg.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="password" required>
            <input type="password" name="confirm_password" placeholder="confirm Password" required>
            <button class="btn" type="submit">Register</button>
            <button class="btn" type="button" onclick="location.href='Tlogin.php'">Login</button>
        </form>
    </div>
</body>
 
</html>
