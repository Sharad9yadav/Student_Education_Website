<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn){
    if(isset($_POST['resetbutton'])){
        $pass = $_POST['pass'];
        $chkpass  = $_POST['chkpass'];
        $div = $_POST['tok'];

        $stmt = $conn->prepare("SELECT token FROM student WHERE token = '$div' ");
        $stmt->execute();
        $result = $stmt->get_result();
        $tokenData = $result->fetch_assoc();
        $token = $tokenData['token'];

        if ($result->num_rows > 0) {
            // echo "<script>alert('Email Exists')</script>";
         //     echo "<script>alert('Can send opt because email is registered !!')</script>";
                if($pass!=$chkpass){
                    echo "<script>alert('Password didnt match !!')</script> ";
                }else{
                    if($div==$token){
                      $stmt = $conn->prepare("UPDATE student
                                              SET password = '$pass'
                                              WHERE token = '$div'");
                      $stmt->execute();
                      echo "<script>alert('Password Changed Successfully !!')</script> ";
                    }else{
                        echo "<script>alert('Wrong token!!')</script>";
                    }
                }
             $bool=true;
         } else {
             echo "<script>alert('Token is incorrect for this user!!')</script>";
         }
        
        $stmt->close();
    }
       
}
else   echo "script>alert('CONNECTION PROBLEMS !!')</script> ";

?>

