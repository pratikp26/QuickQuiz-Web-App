<?php

require 'db.php';
$score = $_COOKIE["score"];

$query = "UPDATE users SET score = '$score' WHERE username = '".$_COOKIE['currentuser']."' ";
$result = $conn->query($query);

//echo $score;
//echo $_COOKIE['currentuser'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Congrats!</title>
    <link rel="stylesheet" href="app.css" />
  </head>
  <body>
    <div class="container">
      <div id="end" class="flex-center flex-column">
        <h1 id="finalScore"></h1>
        <!--<button class="btn" id="saveScoreBtn" onclick="passScore()">Save</button>-->
        <a class="btn" href="logout.php">Logout</a>
      </div>
    </div>
    <script src="end.js"></script>
  </body>
</html>
