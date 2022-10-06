<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBname = "phpproject1";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBname);

if (!conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
