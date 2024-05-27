<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve form data
    $name = $_POST['name'];
    $Email = $_POST['email'];
    $message = $_POST['message'];


    // SQL query to insert data into database
    $sql = "INSERT INTO feedback (Name, Email,Message) VALUES ('$name', '$Email', '$message')";
    

    if ($conn->query($sql) === TRUE) {
        echo "<h1><center><div style='color: green;'>Thanks for feedback..</div>
         </center></h1>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
