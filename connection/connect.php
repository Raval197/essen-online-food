<?php

//main connection file for both admin & front end
$servername = "b1najb3wnu0acotynxfu-mysql.services.clever-cloud.com"; //server
$username = "ucfmtshsbemmz1z1"; //username
$password = "hmeCl85GqDfxF1yyyXoE"; //password
$dbname = "b1najb3wnu0acotynxfu";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>