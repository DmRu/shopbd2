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



    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $query = "SELECT * FROM flowers WHERE id=" . $id;
        /* Выполнить запрос. Если произойдет ошибка - вывести ее. */
        $res = mysqli_query($connect, $query) or die(mysql_error());
        $flower = mysqli_fetch_assoc($res);

        //$name = mysql_result($res, 0);

        //$name = mysql_fetch_row($res);

    }
    else header( 'Refresh: 0; url=../pages/404.php' );

$name = $flower['name_title'];
$class = $flower['class'];
$price = $flower['price'];
$price_before_sale = round($flower['price'] * 1.15, -1);
$img_250x358_url = $flower['img_250x358_url'];
$img_490x490_url = $flower['img_490x490_url'];



//Получаем похожие буккеты лругого цвета
$query = "SELECT * FROM flowers WHERE amount=" . $flower['amount'];
$res = mysqli_query($connect ,$query) or die(mysql_error());


$i = 1;
while ($i <= mysqli_num_rows($res)){
    $common_amount[] = mysqli_fetch_assoc($res);
    $i++;
};

$common_amount1_img_250x358_url = $common_amount[0]['img_250x358_url'];
$common_amount2_img_250x358_url = $common_amount[1]['img_250x358_url'];
$common_amount1_img_50x72_url = $common_amount[0]['img_50x72_url'];
$common_amount2_img_50x72_url = $common_amount[1]['img_50x72_url'];
$common_amount1_img_490x490_url = $common_amount[0]['img_490x490_url'];
$common_amount2_img_490x490_url = $common_amount[1]['img_490x490_url'];

mysqli_close($connect);
?>