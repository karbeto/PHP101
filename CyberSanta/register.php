<?php
$people = file_get_contents('people.json');
$participants = json_decode($people, true);

$newParticipant = [
    'id' => uniqid(), 
    'picture' => $_POST['picture'],  
    'name' => $_POST['name'],  
    'email' => $_POST['email'],  
    'wish' => $_POST['wish'],  
];

$participants[] = $newParticipant; 

$updatedData = json_encode($participants, JSON_PRETTY_PRINT);

file_put_contents('people.json', $updatedData);

header("Location: thankyou.html");
die();