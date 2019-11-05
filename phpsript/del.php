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

  
  $id = mysqli_real_escape_string($link, $_POST['id']);
     
    $query ="DELETE FROM tovars WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)

    {

        echo "<span style='color:blue;'>Данные удалены</span>";

    }
  
  
  
  
  
  
  
$output ="SELECT * FROM tovars";
$result = mysqli_query($link, $output) or die("err " . mysqli_error($link));
//вывод
if($result)
{    $rows = mysqli_num_rows($result);
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
