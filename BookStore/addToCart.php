<?php
require_once __DIR__ . "/functions.php";

onlyLoggedIn();

$books = getFileFromJSON('books');

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}
   
array_push($_SESSION['products'], $_GET['id']);


$_SESSION['message'] = "Book added to cart";
header("Location: index.php");
die();