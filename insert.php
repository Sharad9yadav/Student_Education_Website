<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve form data
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $Dept = $_POST['Dept'];
    $email = $_POST['email'];
    $state = $_POST['state']; 
    $phone = $_POST['Phone'];
    $token = password_hash($email, PASSWORD_DEFAULT);


    // SQL query to insert data into database
    $sql = "INSERT INTO student (Fname, Lname, Email, pnumber,Dept,state, gender,password,token)
            VALUES ('$name', '$lname', '$email', '$phone', '$Dept', '$state', '$gender', '$pass','$token')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1><center><div style='color: green;'>Your registration has been successfully !</div>
        <img src='https://static.vecteezy.com/system/resources/thumbnails/011/858/556/small/green-check-mark-icon-with-circle-tick-box-check-list-circle-frame-checkbox-symbol-sign-png.png'></img>
        
        </center></h1>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
