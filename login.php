<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        * {
    margin: 0;
    padding: 0;

    font-family: "poppins", sans-serif;
}

body{
    background-color: #000;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #e6e2e2;
    background-position: center;
    background-size: cover;
    width: 100%;
    
}

body {
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
}
body:before {
	content: '';
	position: fixed;
	width: 100vw;
	height: 100vh;
	background-image: url(https://i.postimg.cc/8cf6v1rk/1.jpg);
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	-webkit-background-size: cover;
	background-size: cover;
	-webkit-filter: blur(10px);
	-moz-filter: blur(10px);
	filter: blur(10px);
}

          .box{
            width: 400px;
            height: 450px;
            border: 2px solid  #625d5d;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            backdrop-filter: blur(15px);
            background: transparent;
          }
          h2{
            font-size: 2em;
            color: #000;
            text-align: center;
          }

      .inputbox{
        position: relative;
        margin: 30px 0;
        width: 300px;
        border-bottom: 2px solid#fff;
       color: #000;
      }
      .inputbox label{
        position: absolute ;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        color: #000;
        font-size: 1em ;
        pointer-events: none;
        transition: 0.5s;
      } 

input:focus ~ label{
    top: -5px;
}

input:focus ~ label{
    top: -5px;
}

      .inputbox input{
        width: 100%;
        height: 50px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 1em;
        padding: 0 35px 0 5px;
        color: #000;
      }
      .inputbox ion-icon{
        position: absolute;
        right: 8px;
        color: #000;
        font-size: 1.2em;
        top: 20px;
      }


button{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background-color: #40E0D0;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1.3em;
    font-weight: 700;
    
}

button:hover {
   background-color:green;
}

.forget{
    display: flex;
    justify-content: space-between; 
    margin: 10px 0 15px; 
    font-size: 0.9em;
    color: #000;
}

.forget label:nth-child(2){
    order: 1;
}

.forget label{
    display: flex;
    align-items: center;
}

.forget label input[ type="checkbox"]{
    margin-right: 6px
}

.forget label a {
    color: #000;
    text-decoration: none;
}

.forget label a:hover{
    text-decoration: underline;
}

.register {
    font-size: 0.9em;
    color: #000;
    text-align: center;
    margin: 20px 0 15px;
}

.register p a{
    text-decoration: none;
    color: #000;
    font-weight: 800;
}

.register p a:hover{
    text-decoration: underline;
}


/* -- YouTube Link Styles -- */

#source-link {
  top: 60px;
}

#source-link > i {
  color: rgb(94, 106, 210);
}

#yt-link {  
  top: 10px;
}

#yt-link > i {
  color: rgb(219, 31, 106); 

}

.meta-link {
  align-items: center;
  backdrop-filter: blur(3px);
  background-color: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 6px;
  box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
  cursor: pointer;  
  display: inline-flex;
  gap: 5px;
  left: 10px;
  padding: 10px 20px;
  position: fixed;
  text-decoration: none;
  transition: background-color 600ms, border-color 600ms;
  z-index: 10000;
}

.meta-link:hover {
  background-color: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.meta-link > i, .meta-link > span {
  height: 20px;
  line-height: 20px;
}

.meta-link > span {
  color: white;
  font-family: "Rubik", sans-serif;
  transition: color 600ms;
}

    </style>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>

</head>
<body>

    <div class="box">

        <form action="fetch_data.php" method="post">

            <h2 href="#services">Login Here</h2>

            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="email" id="" required>
                <label for="">Email:</label>
            </div>

            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="pass" id="" required>
                <label for="">Password:</label>
            </div>

            <div class="forget">
                <label for="">
                    <input type="checkbox">Remember me
                </label>
                <label for="">
                  <a href="http://localhost/php_program/forget.php">Forget Password?</a>
                </label>
            </div>
            <button name="btn" > Log In</button>
            

            <div class="register">
                <p>Don't have an account ? <a href="http://localhost/php_program/registration.php">register</a></p>
            </div>
        </form>
    </div>



    


    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>

</body>
</html>