<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #0d3048;
      
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f8fbfb;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      
    }

    .profile-image {
      position: relative;
      width: 150px;
      height: 150px;
      margin: 0 auto;
      margin-bottom: 20px;
      overflow: hidden;
      border-radius: 50%;
      border: 2px solid #ccc;
    }

    .profile-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .upload-icon {
      position: absolute;
      bottom: 0;
      right: 0;
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      font-size: 24px;
      padding: 5px;
      cursor: pointer;
      display: none;
    }

    .upload-icon:hover {
      background-color: rgba(0, 0, 0, 0.7);
    }

    .profile-image:hover .upload-icon {
      display: block;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .btn {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #45a049;
    }

    /* Hide file input */
    input[type="file"] {
      display: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Student Profile</h2>
    <div class="profile-image">
      <img id="profileImg" src="profile.jpeg" alt="Profile Image">
      <label for="fileInput" class="upload-icon">&#43;</label>
      <input type="file" id="fileInput" accept="image/*" onchange="previewImage(event)">
    </div>
    <form>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="department">Department:</label>
        <select id="department" name="department" required>
          <option value="">Select Department</option>
          <option value="CSE">Computer Science and Engineering</option>
          <option value="EEE">Electrical and Electronics Engineering</option>
          <option value="MECH">Mechanical Engineering</option>
          <option value="CIVIL">Civil Engineering</option>
        </select>
      </div>
      <div class="form-group">
        <label for="state">State:</label>
        <input type="text" id="state" name="state" required>
      </div>
      <button type="submit" class="btn">Update Profile</button>
      <button type="submit" class="btn">Submit</button>
    </form>
  </div>

  <script>
    function previewImage(event) {
      const imgElement = document.getElementById("profileImg");
      const file = event.target.files[0];
      const reader = new FileReader();
      
      reader.onload = function() {
        imgElement.src = reader.result;
      }
      
      if (file) {
        reader.readAsDataURL(file);
      }
    }
  </script>
</body>
<?php
include('fetch_data.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$email_id=$user_name;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
$result=$conn->query("select * from student where Email='$email_id'");  
if($result->num_rows > 0){
  $user= $result->fetch_assoc();
  $user_fullname=$user["Fname"].$user["Lname"];
  $phno=$user["pnumber"];
 echo $user_fullname;
}
}
?>
</html>
