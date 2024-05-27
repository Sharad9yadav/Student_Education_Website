<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Your database password
$dbname = "admin";

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
        if ($pass==$user["password"]) {
            // Display user data
            echo "<h2>Login Successful</h2>";
            echo "<p>Welcome back, " . $user["First_name"] . " " . $user["Last_name"] . "!</p>";
            echo "<table border='1'>";
            echo "<tr><th>id</th><th>First_name</th><th>Last_name</th><th>Email</th><th>phone_no</th><th>Password</th><th>Confirm_password</th></tr>";
            echo "<tr>";
            echo "<td>" . $user["id"] . "</td>";
            echo "<td>" . $user["First_name"] . "</td>";
            echo "<td>" . $user["Last_name"] . "</td>";
            echo "<td>" . $user["Email"] . "</td>";
            echo "<td>" . $user["phone_no"] . "</td>";
            echo "<td>" . $user["Password"] . "</td>";
            echo "<td>" . $user["Confirm_password"] . "</td>";
            echo "</tr>";
            echo "</table>";
        } else {
            // Incorrect password
            echo "<center><h2>Invalid email or password</h2></center>";
        }
    } else {
        // User not found
        echo "<h2>User not found</h2>";
    }
    
    // Close prepared statement
    $stmt->close();
} else {
    // Form data not submitted
    echo "<h2>Please provide both email and password</h2>";
}

// Close database connection
$conn->close();
?>
