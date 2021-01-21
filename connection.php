<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conquer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(!$conn){
    die('Could not Connect My Sql:' .mysqli_error($conn));
}

?>