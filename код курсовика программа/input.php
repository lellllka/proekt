
<html>
<head>
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
<link rel="stylesheet" href="style.css" type="text/css">
  <title>Торговый дом</title></head>
<body style="background-color:Turquoise ;">
<div class="two"><h1>Торговый дом</h1></div>
<?php
if(isset($_POST['parol'])&&($_POST['login']) )
{     $parol =htmlentities ($_POST['parol']);
    $login =htmlentities ($_POST['login']);
   if (($parol=="admin")&&($login=="admin"))
   { header( 'Location:main.php');}
   else   
{       echo ' <table >  <tbody>     <tr>
	      <td style="vertical-align: top;">
		<p> Неверный логин или пароль </p>	</br>
	<a href="index.php">Вернуться</a>	  </td>    </tr>  </tbody></table>';
}
}
else
{       echo "Проверьте заполнение данных";
}
?>
</body>
</html>
