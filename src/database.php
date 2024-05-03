<?php
$host = "localhost"; 
$username = "root"; 
$password = "";
$database = "contactapp"; 


$conn = new mysqli($host, $username, $password, $database);
// Check koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>
