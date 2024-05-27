<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> <marquee>Admin Registration..</marquee></title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 50%;
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
.input-group input[type="email"],
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

.success-msg {
    text-align: center;
    color: green;
}

.login-link {
    text-align: center;
    margin-top: 20px;
}

.login-link a {
    text-decoration: none;
    color: #007bff;
}

    </style>
</head>
<body>
    <div class="container">
        <form action="admin_insert.php" method="post">
            <h2>Admin Registration</h2>
            <div class="input-group">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" required>
            </div>
            <div class="input-group">
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Register Now</button>
            </div>
        </form>
        <p class="success-msg"><?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?></p>
        <div class="login-link">
            <a href="admin login.php">Already have an account? Login here</a>
        </div>
    </div>
</body>
</html>
