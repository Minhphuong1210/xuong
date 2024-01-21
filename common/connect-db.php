<?php

$host = 'localhost';
$port = '3306';
$dbname= 'xuong';
$username= 'root';
$password= '';

try {
    $conn= new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

    // Đặt chế độ lỗi PDO thành thành ngoại lệ 

    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

}
catch(PDOException $PDOException){
    echo "Kết nối thất bại : ".$PDOException -> getMessage();
    die;

}