<html>
<body>
<?
echo "blu";
 $name = $_POST['name'];
 echo $_REQUEST['name'];
 echo  $name; 
 
 
$host = 'localhost';
  $user = 'misha';
  $pass = '1410261';
  $db_name = 'student';
  
  
  $link = mysqli_connect($host, $user, $pass, $db_name);
      if (!$link) {
    echo 'code err: ' . mysqli_connect_errno() . ', err: ' . mysqli_connect_error();
    exit;
}
  
//$name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
$price = htmlentities(mysqli_real_escape_string($link, $_POST['price']));
$text = htmlentities(mysqli_real_escape_string($link, $_POST['text']));

$input ="INSERT INTO tovars (name,price,text) VALUES('$name','$price','$text')";

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

    echo "<table><tr><th>Id</th><th> name </th><th> price </th><th> text </th></tr>";
  while($data = mysql_fetch_array($output)){ 
    echo '<tr>';
    echo '<td>' . $data['name'] . '</td>';
    echo '<td>' . $data['price'] . '</td>';
    echo '<td>' . $data['text'] . '</td>';
    echo '</tr>';
  }
    echo "</table>";

}
mysql_close($db);


?>
