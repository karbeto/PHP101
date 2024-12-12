<?php
if(empty($_POST['gift'])){
    header("Location: participants.php");
    die();
}

$people = file_get_contents('people.json');
$participants = json_decode($people, true);

foreach($participants as $key => $participant)
{
    if($participant['id'] == $_POST['id'])
    {
        $participants[$key]['gift'] = $_POST['gift'];
    }
}

$updatedData = json_encode($participants, JSON_PRETTY_PRINT);
file_put_contents('people.json', $updatedData);

header("Location: enroll.html");
die();