<?php
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "integrative-users";

$conn = mysqli_connect($server_name, $username, $password, $db_name);

if(!$conn) {
    echo "Connection Failed";
    exit();
}

?>