<?
header('content-type: text/html; charset= utf-8'); // назначаем кодировку

$host='127.0.0.1'; 		// localhost
$bdlogin='gusev'; 		// Логин к базе данеых
$bdpass='1';			// Пароль к базе данных
$bdname='knizhdesig';	// Имя базы данных
$log='admin';			// логин к админке
$pass='admin';			// пароль к админке

mysql_connect($host,$bdlogin,$bdpass) or die(); // подключаемся к базе данных
mysql_select_db($bdname) or die(); // выбираем базу данных
?>