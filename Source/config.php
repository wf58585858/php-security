<?php
$host     = "127.0.0.1"; // Database Host
$user     = "root"; // Database Username
$password = "root"; // Database's user Password
$database = "project"; // Database Name
$prefix   = "security"; // Database Prefix for the script tables

$connect = new mysqli($host, $user, $password, $database);

// Checking Connection
if (mysqli_connect_errno()) {
    printf("Database connection failed: %s\n", mysqli_connect_error());
    exit();
}

mysqli_set_charset($connect, "utf8");

$client = "No";

$site_url             = "http://local17.com";
$projectsecurity_path = "http://local17.com/Source";
?>