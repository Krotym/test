<?php


session_start();



if ($_POST["submit"]) {
$db=mysql_connect("localhost", "root" );
mysql_select_db("student",$db);
mysql_query("SET NAMES cp1251");
$a=$_POST['name'];
$b=$_POST['text'];
$c=$_POST['price'];

$sql="INSERT INTO employees (name,text,price) VALUES ('$a','$b','$c')";
$result=mysql_query($sql);
echo "Спасибо! Информация занесена!\n";
} else {echo "not conect!!";}




session_write_close();
