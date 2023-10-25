<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "project_team";

$conn = mysqli_connect($hostname, $username, $password, $dbname) ? "Connection Successfully" : die("Connection Failed");
