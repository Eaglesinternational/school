<?php

$host="localhost";
$user = "root";
$password = "";
$db = "test2";

$data = mysqli_connect($host, $user, $password, $db);

if($data === false){
    die("Connection Error");
}





?>