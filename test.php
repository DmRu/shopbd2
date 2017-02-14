<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "shopbd";

//Подключаемся к БД
mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");
mysql_select_db($dbName) or die(mysql_error());

//Формируем и выполняем запрос к БД
$query = "SELECT * FROM flowers";
$res = mysql_query($query) or die(mysql_error());

//Переводим результатв Массив
$jsonData = array();
while ($array = mysql_fetch_row($res)) {
    $jsonData[] = $array;
}

//Переводим Массив в json
echo json_encode($jsonData);


?>