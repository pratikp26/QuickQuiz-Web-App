<?php
   require("db.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password'];
      $hashpass = md5($password); 
      
      $query = "SELECT username FROM users WHERE username = '$username' and password = '$hashpass'";
      $result = $conn->query($query);
      $row = $result->fetch_assoc();
      
      $count = count($row);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $username;
         setcookie("currentuser", $username);
         
         header("location: index.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html>
<head>
    <link href = "app.css" rel = "stylesheet">
</head>
  <body>
    <div class="container">
      <div style="color: royalblue; font-weight: bold; font-size: 30px;"> 
      Login
      <br>
      <br>

    	<form action = "login.php" method= "POST">
          <input type= "text" placeholder= "Username" name="username"><br>
          <input type= "password" placeholder= "Password" name="password"><br><br>
          <input type= "submit" class= "btn" value= "Login"><br><br>
      </form>
      <div style="color: black; font-weight: bold; font-size: 16px;">Or<a href="signup.php" style="font-weight: bold; font-size: 16px;"> Sign Up here </a></div>
      </div>
    </div>
  </body>
</html>