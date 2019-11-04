<html>
<body>
<?
echo"blv";
$host = 'localhost';
  $user = 'misha';
  $pass = '1410261';
  $db_name = 'student';
  $link = mysqli_connect($host, $user, $pass, $db_name);
  $che=0;
  
  
  if (!$link) {
    echo 'code err: ' . mysqli_connect_errno() . ', err: ' . mysqli_connect_error();
    exit;
}
if($che==0){
//создание таблици
$query  ="CREATE Table tovars
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    price VARCHAR(200) NOT NULL,
    text VARCHAR(255) NOT NULL
)";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Создание таблицы прошло успешно";
}
    $che++;
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


$output ="SELECT * FROM tovars";

$result = mysqli_query($link, $output) or die(" ^  ^          " . mysqli_error($link));
//вывод
if($result)
{
    $rows = mysqli_num_rows($result);

    echo "<table><tr><th>Id</th><th> ^          ^ </th><th> ^  ^                ^      ^ </th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

}
mysql_close($db);


?>
