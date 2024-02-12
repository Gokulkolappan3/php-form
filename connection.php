<?php
$servername="localhost";
$username="root";
$password="";
$dbname="demo";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (".$conn->connect_errno.")".$conn->connect_error;
     }
?>