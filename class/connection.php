<?php

$servername = "localhost";
$username = "abid";
$password = "12345678";
$databasename = "books_details";


$another = new mysqli($servername, $username, $password, $databasename);

if ($another->connect_error) {
    echo "connection error";
} else {
    echo "connection established";
}


?>