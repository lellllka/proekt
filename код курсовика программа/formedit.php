
<html>
<head>
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
<link rel="stylesheet" href="style.css" type="text/css">
  <title>Торговый дом</title>
</head>
<body style="background-color: Turquoise;">
<div class="two"><h1>Торговый дом</h1></div>
<?php
//выводим нужный для ввода данных код html
function tovar()
{	$ARTIKUL_TOVARA = $_REQUEST['ARTIKUL_TOVARA'];
require 'torgovlya_connect.php';
echo '<input type="hidden" name="ARTIKUL_TOVARA" value="'.$ARTIKUL_TOVARA.'">';
$result = mysqli_query($con,"SELECT * FROM TOVARY WHERE ARTIKUL_TOVARA='$ARTIKUL_TOVARA'");
$row=mysqli_fetch_array($result);
	 echo'                  <td>Артикул товара</td>
            <td ><input name="ARTIKUL_TOVARA" value="'.htmlspecialchars($row['ARTIKUL_TOVARA']).'">
            </td></tr>          <tr><td>Розничная цена товара (руб.)</td>            <td>
              <input name="ROZNICHNAYA_CENA_TOVARA_(RUB)" value="'.htmlspecialchars($row['ROZNICHNAYA_CENA_TOVARA_(RUB)']).'">            </td>          </tr>          <tr>';
}
function otdely()
{ $ARTIKUL_TOVARA = $_REQUEST['ARTIKUL_TOVARA'];
require 'torgovlya_connect_connect.php';
echo '<input type="hidden" name="ARTIKUL_TOVARA" value="'.$NAIMENOVANIE_TOVARA.'">';
$result = mysqli_query($con,"SELECT * FROM prodaji WHERE ARTIKUL_TOVARA='$ARTIKUL_TOVARA'");
$row=mysqli_fetch_array($result);
 echo'
                  <td>Код отдела</td>
            <td ><input name="KOD_OTDELA" value="'.htmlspecialchars($row['KOD_OTDELA']).'">
            </td></tr>          <tr><td>Наименование отдела</td>            <td>
              <input name="NAIMENOVANIE_OTDELA" value="'.htmlspecialchars($row['NAIMENOVANIE_OTDELA']).'">            </td>          </tr>
          <tr>            <td>ФИО ЗАВЕДУЮЩЕГО ОТДЕЛОМ</td>            <td>
              <input name="FIO_ZAVEDUYHEGO_OTDELOM" value="'.htmlspecialchars($row['FIO_ZAVEDUYHEGO_OTDELOM']).'">            </td>          </tr>
          <tr>            <td>Телефон</td>            <td>
              <input  name="TELEPHONE" value="'.htmlspecialchars($row['TELEPHONE']).'">
            </td>          </tr>          <tr>            <td>Наименование</td>'  ;
}
function prodaji()
{	$ZAK_KOD = $_REQUEST['KOD_PRODAJI'];
require 'torgovlya_connect_connect.php';
echo '<input type="hidden" name="KOD_PRODAJI" value="'.$KOD_PRODAJI.'">';
$result = mysqli_query($con,"SELECT * FROM PRODAJI WHERE ARTIKUL_TOVARA='KOD_PRODAJI'");
$row=mysqli_fetch_array($result);
}
?>
	<form action="processedit.php" method="post"> 
     <br>  <table >        <tbody>          <tr>
<?php 
$PID = $_REQUEST['PID'];
//получаем идентификатор вызвавшей страницы
//вызываем соответствующую функцию 
switch ($PID)
{case 'tovar':
 tovar();
break;
case 'prodaji':
prodaji();
break;
case 'otdely':
 otdely();
break;
}
?>
 </tr>             <br>
 <?php 
 //идентификатор страницы передаем дальше - файлу обработки формы 
//добавления processadd.php
 echo'<tr>
            <td><input type="hidden" name="PID" value="'.$PID.'"></td>';    ?>
      <td> <input value="Изменить" type="submit"> </td></tr>
    </tbody>      </table>	  </form></div>
		</body>
</html>