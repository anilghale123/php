<?php
session_start();

if (!isset($_SESSION['target_number'])) {
    $_SESSION['target_number'] = rand(1, 100);
}

$target_number = $_SESSION['target_number'];
$user_number = null; // Initialize $user_number

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_number = isset($_POST['number']) ? $_POST['number'] : null;
}

if ($user_number !== null) { // Check if $user_number is set before proceeding
    if ($target_number == $user_number) {
        echo "Correct Guess";
        session_destroy();
    } elseif ($user_number > $target_number) {
        echo "Too High";
    } elseif ($user_number < $target_number) {
        echo "Too low";
    } else {
        echo "invalid";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Guessing Game</h1>
    <form method="POST">
        <input autofocus type="number" name="number">
        <button type="submit">Check</button>
    </form>
</body>
</html>
