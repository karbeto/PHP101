<?php
session_start();
require_once __DIR__ . "/functions.php";
$users = getFileFromJSON('users');

if (!isset($_POST['action'])) {
    $_SESSION['message'] = "Invalid action.";
    header("Location: login.php");
    die();
}

if ($_POST['action'] === "login") {

    if (empty($_POST['email']) || empty($_POST['password'])) {
        $_SESSION['message'] = "Email and password are required.";
        header("Location: login.php");
        die();
    }

    foreach ($users as $user) {
        if ($user['email'] === $_POST['email'] && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['role'] = $user['role'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['message'] = "Logged in successfully!";
            header("Location: index.php");
            die();
        }
    }

    $_SESSION['message'] = "Invalid email or password.";
    header("Location: login.php");
    die();
}

if ($_POST['action'] === "register") {

    if (empty($_POST['email']) || empty($_POST['password'])) {
        $_SESSION['message'] = "Email and password are required.";
        header("Location: register.php");
        die();
    }


    foreach ($users as $user) {
        if ($user['email'] === $_POST['email']) {
            $_SESSION['message'] = "Email is already registered.";
            header("Location: register.php");
            die();
        }
    }

    $newUser = [
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
        'role' => 'user'
    ];
    $users[] = $newUser;

    if (file_put_contents('data/users.json', json_encode($users))) {
        $_SESSION['message'] = "Registration successful! You can now log in.";
        header("Location: login.php");
        die();
    } else {
        $_SESSION['message'] = "An error occurred during registration.";
        header("Location: register.php");
        die();
    }
}

$_SESSION['message'] = "Invalid action.";
header("Location: login.php");
die();

