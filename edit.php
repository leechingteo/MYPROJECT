<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    include 'dbconnect.php';


    include 'function.php';

    require ('title_bar.php');
   ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE add_mercedes SET image_name='E CLASS' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record edited successfully";
    header("Location:view_mercedes.php");
} else {
    echo "Error editing record: " . $conn->error;
}

$conn->close();
?>