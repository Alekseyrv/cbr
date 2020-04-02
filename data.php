
<?php 

function console_log( $data , $key=false){
  $bt = debug_backtrace();
   $caller = array_shift($bt);
  echo '<script>';
  if (!$key) {
    echo 'console.log("Call at line: '.$caller['line']." in ".$caller['file'].'",'. json_encode( $data, JSON_PARTIAL_OUTPUT_ON_ERROR ) .')';
  }else{
    echo 'console.log("Call at line: '.$caller['line']." in ".$caller['file'].'",'. json_encode( $data, JSON_PARTIAL_OUTPUT_ON_ERROR ) .')';
  }
  echo '</script>';
}


$servername = "localhost";
$database = "cf75718_cbr";
$username = "cf75718_cbr";
$password = "KEK123kek!";
$conn = mysqli_connect($servername, $username, $password, $database);

// Create connection

 


$attrID = 'ID';
$CharCode = 'CharCode';
$numCode = 'NumCode';
$name = 'Name';
$val = 'Value';
$date = 'Date';
$valute = 'Valute';

$id = 0;




$sql = mysqli_query($conn, "DELETE FROM `currency`");
for ($i = 1; $i <= 30 ; $i++) { 
    $dateUrl = new DateTime('-'.$i.' days');
    $url = "http://www.cbr.ru/scripts/XML_daily.asp?date_req=".$dateUrl->format('d/m/Y');
  $xml = simplexml_load_file($url);
  $dateInput = new DateTime(); 
  //echo date_format(($xml[$date]), 'Y-m-d');

  foreach($xml as $key => $value) {

  $attributes = iterator_to_array($value->attributes());
      $tempVal = str_replace(',','.',($value->$val));

      $dateTime = $dateUrl->format('Y-m-d'); //дата iso8601
    //Вставляем данные, подставляя их в запрос
      $id = $id + 1 ;
      console_log($dateTime);
   $sql = mysqli_query($conn, "INSERT INTO `currency` (`valuteID`,`numCode`,`сharCode`, `name`, `value`, `date`, `id`) VALUES ('{$attributes['ID']}', '{$value->$numCode}', '{$value->$CharCode}', '{$value->$name}', '{$tempVal}', '{$dateTime}', '{$id}' )");
   //if ($sql) {
    //   echo '<p>Данные успешно добавлены в таблицу.</p>';
  //  } else {
    //      echo '<p>Произошла ошибка: ' . mysqli_error($conn) . '</p>';
  //   }

 

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