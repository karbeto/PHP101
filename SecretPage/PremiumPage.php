<?php
session_start();
if (!isset($_SESSION['user']) && $_SESSION['user'] !== 'HeIsPremiumUser' ) {
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
    <title>Premium Member</title>
</head>
<body>
    <h1>Welcome to the Premium Page!</h1>
    <p>Congratulations! You are now a premium member. We appreciate your support and commitment to being part of our exclusive community. As a premium member, you now have access to special content, features, and more!</p>
    
    <p>Enjoy your enhanced experience, and don't hesitate to explore all the new opportunities available to you. Your loyalty means the world to us!</p>

    <a href="destroy.php">Go back to login</a>
</body>
</html>
