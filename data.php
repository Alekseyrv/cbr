<?php 
$servername = "localhost";
$database = "cf75718_cbr";
$username = "cf75718_cbr";
$password = "KEK123kek!";
$conn = mysqli_connect($servername, $username, $password, $database);

$CharCode = 'CharCode';
$numCode = 'NumCode';
$name = 'Name';
$val = 'Value';
$date = 'Date';


$id = 0;
$sql = mysqli_query($conn, "DELETE FROM `currency`");
for ($i = 1; $i <= 30 ; $i++) { 
    $dateUrl = new DateTime('-'.$i.' days');
    $url = "http://www.cbr.ru/scripts/XML_daily.asp?date_req=".$dateUrl->format('d/m/Y');
    $xml = simplexml_load_file($url);
    $dateInput = new DateTime(); 
    foreach($xml as $key => $value) {
      $attributes = iterator_to_array($value->attributes());
      $tempVal = str_replace(',','.',($value->$val));
      $dateTime = $dateUrl->format('Y-m-d'); //дата iso8601
      $id = $id + 1 ;
      $sql = mysqli_query($conn, "INSERT INTO `currency` (`valuteID`,`numCode`,`сharCode`, `name`, `value`, `date`, `id`) VALUES ('{$attributes['ID']}', '{$value->$numCode}', '{$value->$CharCode}', '{$value->$name}', '{$tempVal}', '{$dateTime}', '{$id}' )");
    }
  }
mysqli_close($mysqli);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
</body>
</html>