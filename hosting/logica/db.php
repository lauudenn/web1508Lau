<?php

$host = 'sql102.infinityfree.com';
$user = 'if0_40241629';
$pass = 'zG6NdmwEKSfM2qU';
$dbName = 'if0_40241629_crud_app';

$conn = new mysqli( $host,$user,$pass,$dbName);

if( $conn -> connect_error){
    die('Erro en la conexion de mi db :( : '.$conn->connect_error);
}else{
    echo "Conexion con exito :3";
}
    
?>