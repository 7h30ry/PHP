<?php

$serverName = "localhost";
$dBUsername = "phpmyadmin";
$dBPassword = "";
$dBName = "phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Connetion failed: " . mysqli_connect_error());
}
