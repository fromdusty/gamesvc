<?php 
$host = 'localhost';
$user = 'root';
$password = 'polewali';
$db = 'projectm';

$conn = mysqli_connect($host, $user, $password, $db);

if($conn){
}

mysqli_select_db($conn, $db)
?>