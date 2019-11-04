<?php
require ('db.php');
if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
  $referer = $_SERVER['HTTP_REFERER'];
}

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
  $pass = $_POST['password'];
  $hashpass = md5($pass);
  $username = $_POST['username'];
  $email = $_POST['email'];
  if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $query = "INSERT INTO users (username, email, password, score) VALUES ('$username', '$email', '$hashpass', '0')";
    $result = $conn->query($query);

    if ($result){
      echo "<h4> Successfully created new account. <br>Please Login now.</h4>";
    } else {
      echo "<h4> Account not created. </h4>";
    }
  } else {
    echo "<h4> All fields are required <h4>";
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
      Sign Up
      <br>
      <br>

    	<form action = "signup.php" method= "POST">
          <input type= "text" placeholder= "Username" name="username" required><br>
          <input type= "email" placeholder= "Email" name="email" required><br>
          <input type= "password" placeholder= "Password" name="password" required><br><br>
          <input type= "submit" class= "btn" value= "Sign Up"><br><br>
      </form>
      <div style="color: black; font-weight: bold; font-size: 16px;">Or<a href="login.php" style="font-weight: bold; font-size: 16px;"> Login here </a></div>
      </div>
    </div>
  </body>
</html>