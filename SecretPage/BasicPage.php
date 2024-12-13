<?php
session_start();
if (!isset($_SESSION['user']) && $_SESSION['user'] !== 'HeIsBasicUser' ) {
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
    <title>Basic Mmeber</title>
</head>
<body>
    <h1>This is Basic Page</h1>
    <p>You have basic access, you are not high member</p>

    <a href="destroy.php">Go back</a>
</body>
</html>