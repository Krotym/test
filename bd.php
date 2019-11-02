<?php


session_start();

$host = 'localhost'; // адрес сервера
$database = 'compstore'; // имя базы данных
$user = 'root'; // имя пользователя
$password = '1234567'; // пароль


$name=  $_POST['name'];
$price =$_POST['price'];
$text = $_POST['text'];




session_write_close();
