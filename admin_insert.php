<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    

    // SQL query to insert data into database
    $sql = "INSERT INTO student (First_name, Last_name, phone_no, Email, Password, Confirm_password)
            VALUES ('$fname', '$lname', '$phone', '$email', '$password', '$confirm_password')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1><center><div style='color: green;'>Your registration has been successful!</div>
        <img src='https://static.vecteezy.com/system/resources/thumbnails/011/858/556/small/green-check-mark-icon-with-circle-tick-box-check-list-circle-frame-checkbox-symbol-sign-png.png'></img>
        </center></h1>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
