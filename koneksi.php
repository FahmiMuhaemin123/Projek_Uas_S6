<?php
$servername = "localhost";
$database ="mimifarm";
$username = "root";
$password = "";

    $base_url = "http://localhost/mimifarm/";

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>