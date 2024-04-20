<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamesnexus2";
$userformTable = "user_form";
$conn = new mysqli($servername, $username, $password);

$checkDatabase = mysqli_query($conn, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'");

if (mysqli_num_rows($checkDatabase) == 0) {
  $sql = "CREATE DATABASE gamesnexus2";
  mysqli_query($conn, $sql);
}

$conn = mysqli_connect($servername, $username, $password, $dbname);

$checkTable = mysqli_query($conn, "SHOW TABLES LIKE '$userformTable'");

if (mysqli_num_rows($checkTable) == 0) {
  $createTable = mysqli_query($conn, "CREATE TABLE `user_form` (
    `id` int(100) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `image` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
  )");
}
mysqli_close($conn);
