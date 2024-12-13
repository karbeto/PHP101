<?php
function getBooks(){
    $books = file_get_contents('data/books.json');
    $books = json_decode($books, true);
    return $books;
}

function getUsers(){
    $users = file_get_contents('data/users.json');
    $users = json_decode($users, true);
    return $users;
}