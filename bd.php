<?php


session_start();

$host = 'localhost'; // адрес сервера
$database = 'site'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ; // пароль


$name=  $_POST['name'];
$price =$_POST['price'];
$text = $_POST['text'];




session_write_close();
