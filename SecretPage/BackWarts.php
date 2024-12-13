<?php
session_start();
if (!isset($_SESSION['user']) && $_SESSION['user'] !== 'HeIsBackWartsUser' ) {
    $_SESSION['error'] = 'You are not so smart :)'; 
    header("Location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backwards Club</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        a {
            color: rgb(92, 92, 243);
        }
    </style>
</head>
<body>
    <h1>Backwards Club!</h1>
    <p>You are part of a very exclusive club that loves reversing the ordinary! If you're here, it means you're ready to embrace the weird and wonderful. But before you dive deeper, make sure to check your membership status and stay on the right track!</p>
    
    <p>Remember, there's no going back once you join. Are you ready to challenge the norms?</p>

    <a href="destroy.php">Go back</a>
</body>
</html>
