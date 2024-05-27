<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            width: 100%;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 150px; /* Adjust the width as needed */
            height: 150px; /* Adjust the height as needed */
            border-radius: 50%; /* Makes the image circular */
            border: 3px solid #007bff; /* Optional: adds a border */
            object-fit: cover; /* Prevents distortion of the image */
        }
    </style>
</head>
<body onload="extract()">

    
    <div class="container">
        <div class="logo">
            <img src="profile.jpeg" alt="Website Logo">
        </div>
        <form action="reset_password.php" method="post">
            <h2>Password Reset</h2>
            <p>Enter your email and we'll send you instructions to reset your password.</p>
            <div>
                <label for="new_password">Enter new password:</label>
                <input type="password" id="new_password" name="pass" required>
            </div>
            <div>
                <label for="confirm_password">Confirm password again:</label>
                <input type="password" id="confirm_password" name="chkpass" required>
            </div>
            <div>
            <button type="submit" name="resetbutton">Submit</button>
            <input type="hidden" name="tok" id="tok" value="demo "></div>
            </div>
        </form>
    </div>
</body>
<script>
          function extract(){
            const urlParams = new URLSearchParams(window.location.search);
            var t = urlParams.get('token');
            document.getElementById("tok").value=t;
            var url_time = urlParams.get('time');
             var curr_time = "<?php echo time();?>";
            if((curr_time - url_time) <= 60 ){
                document.getElementById('form-hidden').style.display = "block";
            }else{
                alert("URL EXPIRED");
            }
          }
    </script>
</html>
