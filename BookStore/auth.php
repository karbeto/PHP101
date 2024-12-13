<?php
session_start();
require_once __DIR__ . "/functions.php";
$users = getUsers();

if($_POST['action'] == "login")
{
    foreach ($users as $user) {
        if ($user['email'] == $_POST['email'] && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['role'] = $user['role'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['message'] = "Logged in!";
            header("Location: index.php");
            die();
        }
    }
}else if($_POST['action'] == "register"){
    array_push($users, ['email' => $_POST['email'], 'password' => password_hash($_POST['password'], PASSWORD_BCRYPT), "role" => "user"]);
    $users = json_encode($users);

    if (file_put_contents('data/users.json', $users)) {
        $_SESSION['message'] = "User created. You can login now.";
        header("Location: login.php");
        die();
    } else {
        $_SESSION['message'] = "An error occured";
        header("Location: register.php");
        die();
    }
}else{
    $_SESSION['message'] = "User not found";
    header("Location: login.php");
    die();
}