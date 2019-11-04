<html>
<body>
<?
echo"blv";


$host = 'localhost';
  $user = 'misha';
  $pass = '1410261';
  $db_name = 'student';
  $link = mysqli_connect($host, $user, $pass, $db_name);


  if (!$link) {
    echo 'code err: ' . mysqli_connect_errno() . ', err: ' . mysqli_connect_error();
    exit;
}
//создание таблици
$query  ="CREATE Table tovars
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    price VARCHAR(200) NOT NULL,
    text VARCHAR(255) NOT NULL
)";

mysql_close($link);

?>
