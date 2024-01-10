<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "books_details";


$conne = new mysqli($servername, $username, $password, $databasename);

if ($conne->connect_error) {
    echo "connection error";
} else {
    echo "connection established";
}


?>