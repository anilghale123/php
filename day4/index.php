<?php
session_start();
if (!isset($_SESSION['target_number'])) {
  $_SESSION['target_number'] =  rand(1, 25);
}

$target_number =  $_SESSION['target_number'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $user_number = $_POST['number'];


  if ($user_number == $target_number) {
    echo "<h2>You are correct!</h2>";
    session_destroy();
  } else if ($user_number > $target_number) {
    echo "<h2>Too High!</h2>";
  } else {
    echo "<h2>Too Low!</h2>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guessing game</title>
</head>

<body>
  <h1>Guess the number i am thinking</h1>
  <form method="POST">
    <input autofocus type="number" name="number" id="">
    <button type="submit">Check</button>
  </form>
</body>

</html>