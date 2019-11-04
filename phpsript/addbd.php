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

$name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
$price = htmlentities(mysqli_real_escape_string($link, $_POST['price']));
$text = htmlentities(mysqli_real_escape_string($link, $_POST['text']));

$input ="INSERT INTO tovars VALUES(NULL, '$name','$price','$text')";

   $result = mysqli_query($link,$input) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    
    
    
    mysql_close($link);
    ?>
