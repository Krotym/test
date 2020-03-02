<?
  
 
$host = '3.93.9.198';
  $user = 'mis';
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

$input ="INSERT INTO tovars (name,price,text) VALUES('$name','$price','$text')";

   $result = mysqli_query($link,$input) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }


$output ="SELECT * FROM tovars";

$result = mysqli_query($link, $output) or die("err " . mysqli_error($link));
//вывод
if($result)
{
    $rows = mysqli_num_rows($result);

    echo "<table><tr><th>Id</th><th> name </th><th> price </th><th> text </th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

}
mysql_close($link);


?>
