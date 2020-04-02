<?php 
$servername = "localhost";
$database = "cf75718_cbr";
$username = "cf75718_cbr";
$password = "KEK123kek!";
$conn = mysqli_connect($servername, $username, $password, $database);


if(isset($_GET['valueID']))
{
	$ID = $_GET['valueID'];
	$getFrom = explode('.', $_GET['from']);
	$dateFrom = $getFrom[2].'-'.$getFrom[1].'-'.$getFrom[0];
	$getTo = explode('.', $_GET['to'] );
	$dateTo = $getTo[2].'-'.$getTo[1].'-'.$getTo[0];
	$result=mysqli_query($conn,"SELECT * FROM `currency`  WHERE `valuteID`= '$ID' AND (`date` BETWEEN '$dateFrom' AND '$dateTo ')");
?> 

<div class="mobileTable">
<table class="cwdtable" cellspacing="0" cellpadding="1" border="1">
<thead>
	<tr>
		<th>id</th>
		<th>цифровой код</th>
		<th>код</th>
		<th>название</th>
		<th>стоимость</th>
		<th>дата изменения</th>
	</tr>
</thead>
<tbody>

    <? while ($row = $result->fetch_row()) { 
    		$date = explode('-', $row[5] );
			$dateResult = $date[2].'-'.$date[1].'-'.$date[0]; ?>
    	<tr>
    		<td> <? echo($row[0]) ?></td>
			<td> <? echo($row[1]) ?></td>
			<td> <? echo($row[2]) ?></td>
			<td> <? echo($row[3]) ?></td>
			<td> <? echo($row[4]) ?></td>
			<td> <? echo($dateResult ) ?></td>
    	</tr>
  <?  } ?>
</tbody>
</table>
</div>
<?
} mysqli_close($mysqli); 
?>
