<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// database
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

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


$bool=false;
if($conn){
    if(isset($_POST['send'])){
    
    //Server settings
                
    $email =htmlentities($_POST["email"]);
    $time = time();
    

    $stmt = $conn->prepare("SELECT * FROM student WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt = $stmt = $conn->prepare("SELECT token FROM student WHERE email = '$email'");
            $stmt->execute();   
            $token = $stmt->get_result();
            $tokenData = $token->fetch_assoc();
            $token = $tokenData['token'];


            if ($result->num_rows > 0) {
                // echo "<script>alert('Email Exists')</script>";
             //     echo "<script>alert('Can send opt because email is registered !!')</script>";
                 $bool=true;
             } else {
                 echo "<script>alert('Email is not registered !!')</script>";
             }
             $stmt->close();
            }
            if($bool){
                try{
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'raaznavnit123@gmail.com';                     //SMTP username
            $mail->Password   = 'uqwl yjxg zlks lfir';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465; 


    //Recipients
    $mail->setFrom('raaznavnit123@gmail.com', 'contact form');
    $mail->addAddress("$email", 'hamari website');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test contact form';
    $mail->Body= "reset link <b>http://localhost/php_program/reset.php?token=".$token."&time=".$time."</b>";

    $mail->send();
    echo '<h2><center>Message has been send successfully your register mail id..</center></h2>';
        

            }
            catch (Exception $e) {

                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
            else{
                echo "<script>alert('bool is false')</script>";
            }
            $conn->close(); 
    }
    else{
        echo "script>alert('CONNECTION PROBLEMS !!')</script> ";
    }
?>
