<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {    
    width: 30%;
    margin: 50px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container h2 {
    text-align: center;
}

.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    font-weight: bold;
}

.input-group input[type="text"],
.input-group input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.btn {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

.forgot-password {
    text-align: right;
    margin-bottom: 30px;
}

.forgot-password a {
    text-decoration: none;
    color: #007bff;
}

.register-link {
    text-align: center;
}

.register-link a {
    text-decoration: none;
    color: #007bff;
}
.btn {
    margin-left: 180px;
}
    </style>
</head>
<body>

    <div class="container">
        <form action="fetch.php" method="post">
            <h2>Admin Login</h2>
            <div class="input-group">
                <label for="email_phone">Email or Phone:</label>
                <input type="text" id="email_phone" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="pass" required>
            </div>
            <div class="input-group">
                <button type="submit" name="btn" class="btn">Login</button>
            </div>
            <div class="forgot-password">
                <a href="forget.php">Forgot Password?</a>
            </div>
        </form>
        <div class="register-link">
            <p>Don't have an account? <a href="admin reg.php">Click here to register</a></p>
        </div>
    </div>
</body>
</html>
