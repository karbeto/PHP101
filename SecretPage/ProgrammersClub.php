<?php
session_start();
if (!isset($_SESSION['user']) && $_SESSION['user'] !== 'HeIsProgrammerGuy' ) {
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
    <title>Programmers Club</title>
    <style>
        body {
            background-color: black;
            color: greenyellow;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        a {
            color: rgb(38, 229, 0);
        }
    </style>
</head>
<body>
<h1>Special Programmers Club!</h1>
<p>Welcome to the world of elite programmers, where the boundaries of code are pushed to their limits. Here, we reverse the ordinary and code the extraordinary. If you’re reading this, it means you're one step closer to unlocking the secrets of the digital universe.</p>

<p>But don’t get too excited – the journey ahead is not for the faint of heart. Only those who dare to challenge the norms, defy logic, and think outside the box will thrive here. Prepare to crack the code and navigate through the maze of encrypted knowledge.</p>

<p>Your membership status? Let’s just say it's classified. Only those who prove their skills are granted access. And once you're in, there’s no turning back.</p>

<p>Are you ready to go deeper? The challenge awaits.</p>

<a href="destroy.php">Go back</a>

</body>
</html>
