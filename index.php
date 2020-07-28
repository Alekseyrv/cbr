<?php $link = "http://$_SERVER[HTTP_HOST]";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
  <link rel="stylesheet" href="<?php echo $link?>/datepicker.css" type="text/css" media="all" />
  <link rel="stylesheet" href="<?php echo $link?>/css/styles.concated.css" type="text/css" media="all" />
</head>
<body>
<div class="form">
	<div class="form-inner">
		<div class="custom-select" id="cur_select"style="width:200px;">
  			<select>
			    <option value="R01010">Австралийский доллар</option>
			    <option value="R01020A">Азербайджанский манат</option>
			    <option value="R01035">Фунт Стрелингов</option>
			    <option value="R01060">Армянские драмы</option>
			    <option value="R01090B">Белорусский рубль</option>
			    <option value="R01100">Болгарский лев</option>
			    <option value="R01115">Бразильский реал</option>
			    <option value="R01135">Венгерские форинты</option>
			    <option value="R01200">Гонкогские доллары</option>
			    <option value="R01215">Датские кроны</option>
			    <option value="R01235">Доллар США</option>
			    <option value="R01239">Евро</option>
			    <option value="R01270">Индиские рупии</option>
			    <option value="R01335">Казахстанские тенге</option>
			    <option value="R01350">Канадский доллар</option>
			    <option value="R01370">Киргизские сомы</option>
			    <option value="R01375">Китайские юани</option>
			    <option value="R01500">Молдавские леевы</option>
			    <option value="R01535">Норвежские кроны</option>
			    <option value="R01565">Польский злотый</option>
			    <option value="R01585F">Румынский лей</option>
			    <option value="R01589">СДР</option>
			    <option value="R01625">Сингапурский доллар</option>
			    <option value="R01670">Таджикские сомонии</option>
			    <option value="R01700J">Турецкая лира</option>
			    <option value="R01710A">Новый туркменский манат</option>
			    <option value="R01717">Узбекские сумы</option>
			    <option value="R01720">Украинские гривны</option>
			    <option value="R01760">Чешские кроны</option>
			    <option value="R01770">Шведские кроны</option>			    
			    <option value="R01775">Швейцарский франк</option>
			    <option value="R01810">Южноафриканские рэнды</option>
			    <option value="R01815">Воны Республики корея</option>
				<option value="R01820">Японские иены</option>
  			</select>
	</div>
		<input class="inp" id="from" type="text" placeholder="select date range" data-multiple-dates-separator=" - "  autocomplete="off">
		
	</div>
	<div class="btn"><a href="javascript:void(0);">показать</a></div>
</div>
<?include_once 'api/GetCurr.php';?>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="<?php echo $link?>/datepicker.js"></script>
<script src="<?php echo $link?>/script.js"></script>
</body>
</html>

