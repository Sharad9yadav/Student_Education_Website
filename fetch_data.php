<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Your database password
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data (email and password) is submitted
if(isset($_POST['btn'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // Prepare SQL statement to fetch user data based on email
    $stmt = $conn->prepare("SELECT * FROM student WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with the provided email exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify the password
        if ($password==$user["password"]) {
            // Login successful
            echo "<h2>Login Successful</h2>";
            // Redirect to home page or display home page content
            echo "<p>Welcome to our website! Here is the homepage content.</p>";
            header("Location: sample1.html");
        } else {
            // Incorrect password
            echo "<h2><center>Invalid email or password</center></h2>";
        }
    } else {
        // User not found
        echo "<h1><center>User does not found..</center> </h1>";
    }
    
    // Close prepared statement
    $stmt->close();
} else {
    // Form data not submitted
    echo "<h2><center>Please provide both email and password</center></h2>";
}

// Close database connection
$conn->close();
?>
