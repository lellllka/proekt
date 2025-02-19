
<html>
<head>
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
<link rel="stylesheet" href="style.css" type="text/css">
  <title>Торговый дом</title>
</head>
<<body style="background-color: Turquoise;">
<div class="two"><h1>Торговый дом</h1></div>
<?php 
//получаем идентификатор вызвавшей страницы
$PID = $_REQUEST['PID'];
require 'db_connect.php';
//в зависимости от идентификатора организуем удаление данных из соответствующей таблицы -
//получим значение первичного ключа, подключимся к базе с запросом на удаление
switch ($PID)
{
case 'tovar':
$nomer = $_REQUEST['ARTIKUL_TOVARA'];
 $result = mysqli_query ($con,"DELETE FROM tovar WHERE ARTIKUL_TOVARA = '$nomer'");
break;
case 'prodaji':
$KodN = $_REQUEST['KOD_PRODAJI'];
 $result = mysqli_query ($con,"DELETE FROM prodaji WHERE KOD_PRODAJI = '$KodN'");
break;
case 'otdely':
$KodN = $_REQUEST['KOD_OTDELA '];
 $result = mysqli_query ($con,"DELETE FROM otdely KOD_OTDELA  = '$KodN'");
break;
 }
if ($result) echo "<div >Данные удалены</div>";
if (!$result) echo "<div> Ошибка удаления данных</div>";
?>
</body>
</html>