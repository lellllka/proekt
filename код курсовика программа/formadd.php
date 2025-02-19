
<html>
<head>
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
<link rel="stylesheet" href="style.css" type="text/css">
  <title>Торговый дом</title>
</head>
<body style="background-color:Turquoise ;">
<div class="two"><h1>Торговый дом</h1></div>
<?php
//выводим нужный для ввода данных код html
function tovar()
{ echo'                  <td>Наименование товара</td>
            <td ><input name="NAIMENOVANIE_TOVARA">
            </td></tr>
          <tr><td>Розничная цена</td>
            <td>              <input name="ROZNICHNAYA_CENA_TOVARA_RUB">
            </td>          </tr>          <tr>
            <td>Единица измерения</td>            <td>
              <input name="EDINITCA_IZMERENYA">
            </td>          </tr>          <tr>
            <td>Артикул товара</td>            <td>
              <input  name="ARTIKUL_TOVARA">
            </td>          </tr>
                    <tr>'   ;
}
function prodaji()
{ echo'
                  <td>Код продажи</td>
            <td ><input name="KOD_PRODAJI">
            </td></tr>
          <tr><td>Количество проданного товара</td>
            <td>              <input name="KOLICHESTVO_PRODANNOGO_TOVARA">
            </td>          </tr>          <tr>
            <td>Дата продажи</td>            <td>
              <input name="DATA_PRODAJI">            </td>';
}
function otdely()
{ echo' <td>Код отдела</td>
            <td ><input name="KOD_OTDELA">
            </td></tr>          <tr><td>Наименование отдела</td>
            <td>              <input name="NAIMENOVANIE_OTDELA">
            </td>          </tr>		  <tr>            <td>ФИО Заведующего отделом</td>
            <td><input  type="varchar" name="FIO_ZAVEDUYHEGO_OTDELOM"></td>          </tr>          <tr>
            <td>Телефон          <td>              <input name="TELEPHONE">
              <input  name="OBIOM_REALIZACII_V_DEN_(RUB)">            </td>          </tr>          <tr>
            <td>Объём реализации в день (руб.)</td>' ;
}
?>
		<form action="processadd.php" method="post"> 
     <br>  <table >        <tbody>          <tr>
<?php 
$PID = $_REQUEST['PID'];
//получаем идентификатор вызвавшей страницы
//вызываем соответствующую функцию 
switch ($PID)
{  case 'tovar':
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
 </tr>              <br>
 <?php 
 //идентификатор страницы передаем дальше - файлу обработки формы добавления processadd.php
 echo'<tr>
            <td><input type="hidden" name="PID" value="'.$PID.'"></td>';    ?>
      <td> <input value="Добавить" type="submit"> </td></tr>
    </tbody>      </table>	  </form>
</div>		</body>
</html>