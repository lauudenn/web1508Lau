<?php
/*
 //local
$host = 'localhost';
$user = 'root';  // 
$password = '';  //
$dbname = 'crud_app';
*/
 //hosting
$host = 'sql211.infinityfree.com';
$user = 'if0_40369559';  // 
$password = 'EVXfcJJmmhS';  //
$dbname = 'if0_40369559_crud_app_lau';



$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}
?>