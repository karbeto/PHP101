<?php
function getFileFromJSON($filename){
    $file = file_get_contents('data/' . $filename . '.json');
    $file = json_decode($file, true);
    return $file;
}

function onlyLoggedIn(){
    if (!isset($_SESSION['loggedIn'])) {
        
        $_SESSION['message'] = "You must be logged in!";
        header("Location: index.php");
        die();
    }
}
