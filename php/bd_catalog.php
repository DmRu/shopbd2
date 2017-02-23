<?php
/**
 * Created by PhpStorm.
 * User: DReaM_One
 * Date: 06.02.2017
 * Time: 16:44
 */


/**
ПЕРЕМЕННЫЕ OUTPUT
 * $name
 * $class
 * $price
 * $price_before_sale
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "shopbd";

$connect = mysqli_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");
mysqli_select_db($connect, $dbName) or die(mysql_error());



//Получаем всех букетов из БД
$query = "SELECT * FROM flowers ORDER BY RAND()";
$res = mysqli_query($connect ,$query) or die(mysqli_error());

$flower[] = mysqli_num_rows($res);

$i = 1;
while ($i <= mysqli_num_rows($res)){
    $flower[] = mysqli_fetch_assoc($res);
    $i++;
};

mysqli_close($connect);

echo json_encode($flower);


?>