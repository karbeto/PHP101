<?php
session_start();


#HAPPYTOKYOMISTYLIGHTPARTY

require_once('functions.php');


$secret = file_get_contents('secret.txt');
$secretRev = strrev($secret);


if (isPerfectSquare($_POST['text']) && checkPasswordInMatrix($_POST['text'], $secret)) {
    $_SESSION['user'] = 'HeIsProgrammerGuy'; 
    header("Location: ProgrammersClub.php");
    die();
}

if(strlen($_POST['text']) < 50){
    header("Location: " . $_SERVER['HTTP_REFERER']);
    $_SESSION['error'] = 'Your text is incorrect!'; 
    die();
}

if (checkLetterDistance($_POST['text'], $secret)) {
    $_SESSION['user'] = 'HeIsPremiumUser'; 
    header("Location: PremiumPage.php");
    die();
} else if (substr_count($_POST['text'], $secretRev)) {
    $_SESSION['user'] = 'HeIsBackWartsUser'; 
    header("Location: BackWarts.php");
    die();
} else if (substr_count($_POST['text'], $secret) >= 2) {
    $_SESSION['user'] = 'HeIsBasicUser'; 
    header("Location: BasicPage.php");
    die();
} else {
    $_SESSION['error'] = 'You are doing something wrong!'; 
    die();
}

